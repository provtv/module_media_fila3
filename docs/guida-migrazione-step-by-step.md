# Media Module - Guida Step-by-Step Migrazione Filament 4

## 🎯 Panoramica della Migrazione

Il modulo Media gestisce upload, processing e conversione file. Filament 4 introduce **image editor integrato** e **standalone components** che rivoluzionano l'esperienza file management.

---

## 📋 Pre-Migrazione Steps

```bash
# 1. Backup files e database  
cp -r Modules/Media/ backup_media_module/
mysqldump -u username -p database_name media > backup_media_data.sql

# 2. Storage backup (CRITICO)
cp -r storage/app/media/ backup_storage_media/
cp -r public/media/ backup_public_media/

# 3. Verificare spazio disco (processing richiede più storage)
df -h
```

---

## 🏗️ STEP 1: Enhanced Media Resource

### 1.1 - MediaResource with Image Editor

**File:** `Modules/Media/app/Filament/Resources/MediaResource.php`

```php
<?php

namespace Modules\Media\Filament\Resources;

use Modules\Xot\Filament\Resources\XotBaseResource;
use Filament\Schema\Components\TextInput;
use Filament\Schema\Components\FileUpload;
use Filament\Schema\Components\Select;
use Filament\Schema\Components\Toggle;
use Filament\Schema\Components\Textarea;
use Filament\Schema\Components\ViewField;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Modules\Media\Models\Media;

class MediaResource extends XotBaseResource
{
    protected static ?string $model = Media::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Content';

    /**
     * STEP 1: Advanced file upload schema
     */
    public static function getMainSchema(): array
    {
        return [
            FileUpload::make('file')
                ->required()
                ->maxSize(100000) // 100MB
                ->acceptedFileTypes(['image/*', 'video/*', 'application/pdf', 'application/msword'])
                ->image()
                ->imageEditor() // NUOVO: Editor integrato
                ->imageResizeMode('contain')
                ->imageCropAspectRatio('16:9')
                ->imageResizeTargetWidth('1920')
                ->imageResizeTargetHeight('1080')
                ->uploadingMessage('Uploading and processing...')
                ->directory('media/uploads')
                ->visibility('public')
                ->live()
                ->afterStateUpdated(function ($state, callable $set) {
                    if ($state) {
                        $set('processing_status', 'processing');
                        // Auto-extract metadata
                        $set('original_name', $state->getClientOriginalName());
                        $set('file_size', $state->getSize());
                        $set('mime_type', $state->getMimeType());
                    }
                })
                ->columnSpanFull()
                ->hiddenOn('edit'),
                
            TextInput::make('title')
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(function ($state, callable $set, $get) {
                    if (!$get('alt_text') && $state) {
                        $set('alt_text', $state);
                    }
                }),
                
            TextInput::make('alt_text')
                ->maxLength(255)
                ->helperText('Important for accessibility and SEO'),
                
            Select::make('media_type')
                ->options([
                    'image' => '🖼️ Image',
                    'video' => '🎥 Video',
                    'document' => '📄 Document',
                    'audio' => '🎵 Audio',
                    'archive' => '📦 Archive',
                ])
                ->required()
                ->live()
                ->afterStateUpdated(function ($state, callable $set) {
                    // Auto-set processing options based on type
                    match($state) {
                        'image' => $set('auto_optimize', true),
                        'video' => $set('auto_thumbnail', true),
                        'document' => $set('auto_preview', true),
                        default => null,
                    };
                }),
                
            Select::make('visibility')
                ->options([
                    'public' => '🌐 Public',
                    'private' => '🔒 Private',
                    'internal' => '🏢 Internal Only',
                ])
                ->default('public'),
                
            Textarea::make('description')
                ->maxLength(1000)
                ->rows(3)
                ->columnSpanFull(),
        ];
    }

    /**
     * STEP 2: Enhanced table with previews
     */
    public static function getTableColumns(): array
    {
        return [
            ImageColumn::make('thumbnail_url')
                ->label('Preview')
                ->circular()
                ->size(80)
                ->defaultImageUrl('/images/file-placeholder.png')
                ->tooltip('Click to view full size'),
                
            TextColumn::make('title')
                ->searchable()
                ->sortable()
                ->weight('semibold')
                ->limit(40)
                ->placeholder(fn($record) => $record->original_name)
                ->tooltip(fn($record) => $record->title ?: $record->original_name),
                
            BadgeColumn::make('media_type')
                ->colors([
                    'success' => 'image',
                    'info' => 'video', 
                    'warning' => 'document',
                    'purple' => 'audio',
                    'gray' => 'archive',
                ])
                ->icons([
                    'heroicon-o-photo' => 'image',
                    'heroicon-o-video-camera' => 'video',
                    'heroicon-o-document-text' => 'document',
                    'heroicon-o-musical-note' => 'audio',
                    'heroicon-o-archive-box' => 'archive',
                ]),
                
            TextColumn::make('file_size')
                ->formatStateUsing(fn($state) => $this->formatBytes($state))
                ->sortable()
                ->color('gray'),
                
            BadgeColumn::make('processing_status')
                ->colors([
                    'success' => 'completed',
                    'warning' => 'processing',
                    'danger' => 'failed',
                    'gray' => 'pending',
                ])
                ->icons([
                    'heroicon-o-check-circle' => 'completed',
                    'heroicon-o-clock' => 'processing',
                    'heroicon-o-x-circle' => 'failed',
                    'heroicon-o-pause-circle' => 'pending',
                ]),
                
            BadgeColumn::make('visibility'),
            
            TextColumn::make('downloads')
                ->numeric()
                ->sortable()
                ->default(0),
        ];
    }

    /**
     * STEP 3: Advanced media actions
     */
    public static function getTableActions(): array
    {
        return array_merge(parent::getTableActions(), [
            Action::make('download')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('success')
                ->url(fn($record) => route('media.download', $record))
                ->openUrlInNewTab(),
                
            Action::make('regenerate_thumbnails')
                ->icon('heroicon-o-photo')
                ->color('warning')
                ->visible(fn($record) => $record->media_type === 'image')
                ->action(function($record) {
                    // Dispatch thumbnail generation job
                    \Modules\Media\Jobs\GenerateThumbnailsJob::dispatch($record);
                    
                    Notification::make()
                        ->title('Thumbnail regeneration queued')
                        ->body('New thumbnails will be generated shortly')
                        ->success()
                        ->send();
                }),
                
            Action::make('convert_format')
                ->icon('heroicon-o-arrow-path')
                ->color('info')
                ->visible(fn($record) => $record->media_type === 'image')
                ->form([
                    Select::make('target_format')
                        ->options([
                            'webp' => 'WebP (Modern, smaller)',
                            'avif' => 'AVIF (Best compression)',
                            'jpg' => 'JPEG (Universal)',
                            'png' => 'PNG (Lossless)',
                        ])
                        ->required()
                        ->helperText('Choose the output format'),
                        
                    Select::make('quality')
                        ->options([
                            '95' => 'Highest (95%)',
                            '85' => 'High (85%)',
                            '75' => 'Medium (75%)',
                            '60' => 'Low (60%)',
                        ])
                        ->default('85'),
                ])
                ->action(function($data, $record) {
                    \Modules\Media\Jobs\ConvertMediaJob::dispatch(
                        $record, 
                        $data['target_format'],
                        (int) $data['quality']
                    );
                    
                    Notification::make()
                        ->title('Format conversion queued')
                        ->success()
                        ->send();
                }),
                
            Action::make('optimize')
                ->icon('heroicon-o-sparkles')
                ->color('purple')
                ->action(function($record) {
                    \Modules\Media\Jobs\OptimizeMediaJob::dispatch($record);
                    
                    Notification::make()
                        ->title('Optimization queued')
                        ->success()
                        ->send();
                }),
        ]);
    }

    /**
     * STEP 4: Bulk operations for media management
     */
    public static function getBulkActions(): array
    {
        return array_merge(parent::getBulkActions(), [
            \Filament\Tables\Actions\BulkAction::make('bulk_optimize')
                ->icon('heroicon-o-sparkles')
                ->color('success')
                ->action(function($records) {
                    foreach($records as $record) {
                        \Modules\Media\Jobs\OptimizeMediaJob::dispatch($record);
                    }
                    
                    Notification::make()
                        ->title('Bulk optimization queued')
                        ->body(count($records) . ' files queued for optimization')
                        ->success()
                        ->send();
                }),
                
            \Filament\Tables\Actions\BulkAction::make('bulk_download')
                ->icon('heroicon-o-archive-box')
                ->color('info')
                ->action(fn($records) => $this->downloadAsZip($records)),
                
            \Filament\Tables\Actions\BulkAction::make('change_visibility')
                ->icon('heroicon-o-eye')
                ->form([
                    Select::make('visibility')
                        ->options([
                            'public' => 'Public',
                            'private' => 'Private',
                            'internal' => 'Internal Only',
                        ])
                        ->required(),
                ])
                ->action(function($data, $records) {
                    foreach($records as $record) {
                        $record->update(['visibility' => $data['visibility']]);
                    }
                }),
        ]);
    }

    /**
     * STEP 5: Advanced filtering
     */
    public static function getTableFilters(): array
    {
        return array_merge(parent::getTableFilters(), [
            \Filament\Tables\Filters\SelectFilter::make('media_type'),
            \Filament\Tables\Filters\SelectFilter::make('visibility'),
            \Filament\Tables\Filters\SelectFilter::make('processing_status'),
            
            \Filament\Tables\Filters\Filter::make('large_files')
                ->query(fn($query) => $query->where('file_size', '>', 10 * 1024 * 1024))
                ->label('Large Files (>10MB)'),
                
            \Filament\Tables\Filters\Filter::make('unoptimized')
                ->query(fn($query) => $query->where('is_optimized', false))
                ->label('Unoptimized'),
                
            \Filament\Tables\Filters\Filter::make('recent')
                ->query(fn($query) => $query->where('created_at', '>', now()->subWeek()))
                ->label('Recent (7 days)'),
        ]);
    }

    // Utility methods
    private function formatBytes(int $size): string
    {
        $units = ['B', 'KB', 'MB', 'GB'];
        for ($i = 0; $size > 1024; $i++) {
            $size /= 1024;
        }
        return round($size, 2) . ' ' . $units[$i];
    }
}
```

---

## 🏗️ STEP 2: Processing Jobs & Queue System

### 2.1 - Image Processing Job

**File:** `Modules/Media/app/Jobs/ProcessMediaJob.php`

```php
<?php

namespace Modules\Media\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Media\Models\Media;
use Intervention\Image\ImageManager;

class ProcessMediaJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        private Media $media,
        private array $options = []
    ) {}

    public function handle(): void
    {
        try {
            $this->media->update(['processing_status' => 'processing']);
            
            match($this->media->media_type) {
                'image' => $this->processImage(),
                'video' => $this->processVideo(),
                'document' => $this->processDocument(),
                default => $this->processGeneric(),
            };
            
            $this->media->update([
                'processing_status' => 'completed',
                'processed_at' => now(),
            ]);
            
        } catch (\Exception $e) {
            $this->media->update([
                'processing_status' => 'failed',
                'processing_error' => $e->getMessage(),
            ]);
            
            throw $e;
        }
    }

    private function processImage(): void
    {
        $manager = new ImageManager(['driver' => 'gd']);
        $image = $manager->make($this->media->getPath());
        
        // Generate thumbnails
        $sizes = [150, 300, 600, 1200];
        foreach ($sizes as $size) {
            $thumbnail = $image->resize($size, null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            
            $thumbnailPath = $this->media->getThumbnailPath($size);
            $thumbnail->save($thumbnailPath);
        }
        
        // Optimize original if requested
        if ($this->options['optimize'] ?? true) {
            $image->save($this->media->getPath(), 85);
        }
        
        // Extract metadata
        $this->media->update([
            'metadata' => [
                'width' => $image->width(),
                'height' => $image->height(),
                'thumbnails' => $sizes,
            ],
            'is_optimized' => true,
        ]);
    }

    private function processVideo(): void
    {
        // Generate video thumbnail
        // Extract first frame as thumbnail
        // This would use FFMpeg in real implementation
        $this->media->update([
            'metadata' => [
                'duration' => 0, // Would be extracted from video
                'thumbnail_generated' => true,
            ],
        ]);
    }

    private function processDocument(): void
    {
        // Generate document preview/thumbnail
        // Extract text content for search
        $this->media->update([
            'metadata' => [
                'pages' => 1, // Would be extracted
                'preview_generated' => true,
            ],
        ]);
    }

    private function processGeneric(): void
    {
        // Basic file processing
        $this->media->update([
            'metadata' => [
                'processed' => true,
            ],
        ]);
    }
}
```

---

## 🏗️ STEP 3: Standalone Components

### 3.1 - Media Gallery Component

**File:** `Modules/Media/app/Filament/Components/MediaGallery.php`

```php
<?php

namespace Modules\Media\Filament\Components;

use Filament\Forms\Components\Component;
use Modules\Media\Models\Media;

class MediaGallery extends Component
{
    protected string $view = 'media::components.gallery';

    public static function make(string $name = 'media_gallery'): static
    {
        return parent::make($name);
    }

    public function maxFiles(int $max): static
    {
        $this->maxFiles = $max;
        return $this;
    }

    public function acceptedTypes(array $types): static
    {
        $this->acceptedTypes = $types;
        return $this;
    }

    public function showMetadata(bool $show = true): static
    {
        $this->showMetadata = $show;
        return $this;
    }

    public function allowDownload(bool $allow = true): static
    {
        $this->allowDownload = $allow;
        return $this;
    }

    protected function setUp(): void
    {
        parent::setUp();
        
        $this->afterStateUpdated(function ($state) {
            if ($state && is_array($state)) {
                foreach ($state as $mediaId) {
                    $media = Media::find($mediaId);
                    if ($media && $media->processing_status === 'pending') {
                        ProcessMediaJob::dispatch($media);
                    }
                }
            }
        });
    }

    public function getViewData(): array
    {
        return array_merge(parent::getViewData(), [
            'maxFiles' => $this->maxFiles ?? 10,
            'acceptedTypes' => $this->acceptedTypes ?? ['image/*'],
            'showMetadata' => $this->showMetadata ?? false,
            'allowDownload' => $this->allowDownload ?? false,
        ]);
    }
}
```

**File:** `Modules/Media/resources/views/components/gallery.blade.php`

```blade
<div x-data="mediaGallery(@js($getState()))" class="space-y-4">
    <!-- Upload Area -->
    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-gray-400 transition-colors">
        <input type="file" 
               multiple 
               accept="{{ implode(',', $acceptedTypes) }}"
               x-ref="fileInput"
               @change="handleFiles($event)"
               class="hidden">
               
        <button type="button" 
                @click="$refs.fileInput.click()"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Upload Files
        </button>
        
        <p class="mt-2 text-sm text-gray-500">
            Maximum {{ $maxFiles }} files. Accepted: {{ implode(', ', $acceptedTypes) }}
        </p>
    </div>
    
    <!-- Media Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
        <template x-for="media in mediaItems" :key="media.id">
            <div class="relative group bg-white rounded-lg shadow overflow-hidden">
                <!-- Preview -->
                <div class="aspect-square bg-gray-100">
                    <img :src="media.thumbnail_url" 
                         :alt="media.title"
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Metadata (if enabled) -->
                <div x-show="{{ $showMetadata ? 'true' : 'false' }}" 
                     class="p-2 text-xs text-gray-600">
                     
                    <p x-text="media.title" class="font-medium truncate"></p>
                    <p x-text="formatFileSize(media.file_size)" class="text-gray-500"></p>
                </div>
                
                <!-- Actions -->
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <div class="flex space-x-2">
                        <button @click="viewMedia(media)" 
                                class="p-2 bg-white text-gray-800 rounded-full hover:bg-gray-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                        
                        <button x-show="{{ $allowDownload ? 'true' : 'false' }}"
                                @click="downloadMedia(media)" 
                                class="p-2 bg-white text-gray-800 rounded-full hover:bg-gray-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </button>
                        
                        <button @click="removeMedia(media)" 
                                class="p-2 bg-red-600 text-white rounded-full hover:bg-red-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>

<script>
function mediaGallery(initialMedia = []) {
    return {
        mediaItems: initialMedia,
        
        handleFiles(event) {
            const files = Array.from(event.target.files);
            // Handle file uploads
            this.uploadFiles(files);
        },
        
        async uploadFiles(files) {
            for (const file of files) {
                // Upload logic would go here
                console.log('Uploading:', file.name);
            }
        },
        
        viewMedia(media) {
            // Open media viewer modal
            window.open(media.url, '_blank');
        },
        
        downloadMedia(media) {
            // Trigger download
            window.location.href = media.download_url;
        },
        
        removeMedia(media) {
            this.mediaItems = this.mediaItems.filter(item => item.id !== media.id);
        },
        
        formatFileSize(bytes) {
            const units = ['B', 'KB', 'MB', 'GB'];
            let size = bytes;
            let unitIndex = 0;
            
            while (size >= 1024 && unitIndex < units.length - 1) {
                size /= 1024;
                unitIndex++;
            }
            
            return `${Math.round(size * 10) / 10} ${units[unitIndex]}`;
        }
    }
}
</script>
```

---

## 🏗️ STEP 4: Deployment & Testing

### 4.1 - Storage Configuration

```bash
# STEP 1: Configure storage
php artisan storage:link

# STEP 2: Setup media directories
mkdir -p storage/app/media/uploads
mkdir -p storage/app/media/thumbnails  
mkdir -p public/media

# STEP 3: Set permissions
chmod -R 755 storage/app/media/
chmod -R 755 public/media/

# STEP 4: Configure queues for processing
php artisan queue:table
php artisan migrate
```

### 4.2 - Queue Workers

```bash
# STEP 1: Start queue workers for media processing
php artisan queue:work --queue=media-processing,default

# STEP 2: Monitor processing
php artisan queue:monitor media-processing
```

---

## ✅ Success Indicators

✅ **Image editor integrato** funzionante in upload  
✅ **Thumbnail generation** automatica  
✅ **Format conversion** (WebP, AVIF) operativa  
✅ **Bulk operations** efficient  
✅ **Standalone components** utilizzabili nel frontend  
✅ **Real-time processing** status updates  

## 🎯 Business Value

1. **Enhanced UX** con image editor integrato
2. **Performance improvements** con modern formats (WebP, AVIF)
3. **Storage optimization** con automatic compression
4. **Frontend integration** con standalone components  
5. **Bulk processing** capabilities per efficiency
6. **Real-time monitoring** del processing status

La migrazione Media module abilita **modern file management** con capabilities enterprise-level per handling, processing, e delivery di media assets.