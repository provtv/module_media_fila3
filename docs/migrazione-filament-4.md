# Media Module - Migrazione a Filament 4

## Panoramica Media Module
Il modulo Media gestisce upload, processing e conversione file multimediali. È un **candidato eccellente** per Filament 4 grazie ai miglioramenti in file upload e component standalone.

## 🔄 Modifiche Richieste per la Migrazione

### 1. MediaResource - Enhanced File Management
**Filament 4 - Advanced Media Management:**

```php
<?php

namespace Modules\Media\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Schema\Schema;
use Filament\Schema\Components\FileUpload;
use Filament\Schema\Components\TextInput;
use Filament\Schema\Components\Select;
use Filament\Schema\Components\Section;
use Filament\Schema\Components\Toggle;
use Filament\Schema\Components\ViewField;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Content';

    public static function schema(): Schema
    {
        return Schema::make([
            Section::make('File Upload')->schema([
                FileUpload::make('file')
                    ->required()
                    ->maxSize(100000) // 100MB
                    ->acceptedFileTypes(['image/*', 'video/*', 'application/pdf', 'application/msword'])
                    ->image()
                    ->imageEditor()
                    ->imageResizeMode('contain')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1920')
                    ->imageResizeTargetHeight('1080')
                    ->uploadingMessage('Uploading and processing...')
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Auto-extract metadata during upload
                        if ($state) {
                            $set('processing_status', 'processing');
                        }
                    })
                    ->columnSpanFull(),
            ])->hiddenOn('edit'),
            
            Section::make('Media Information')->schema([
                TextInput::make('title')
                    ->maxLength(255)
                    ->live(onBlur: true),
                    
                TextInput::make('alt_text')
                    ->maxLength(255)
                    ->helperText('Important for accessibility'),
                    
                Select::make('media_type')
                    ->options([
                        'image' => 'Image',
                        'video' => 'Video',
                        'document' => 'Document',
                        'audio' => 'Audio',
                    ])
                    ->required(),
                    
                Select::make('visibility')
                    ->options([
                        'public' => 'Public',
                        'private' => 'Private', 
                        'internal' => 'Internal Only',
                    ])
                    ->default('public'),
            ]),
            
            Section::make('File Details')->schema([
                TextInput::make('original_name')
                    ->disabled()
                    ->dehydrated(false),
                    
                TextInput::make('file_size')
                    ->disabled()
                    ->formatStateUsing(fn($state) => number_format($state / 1024 / 1024, 2) . ' MB')
                    ->dehydrated(false),
                    
                TextInput::make('mime_type')
                    ->disabled()
                    ->dehydrated(false),
                    
                Toggle::make('is_optimized')
                    ->disabled()
                    ->dehydrated(false),
            ])->visibleOn(['view', 'edit']),
            
            Section::make('Processing Status')->schema([
                ViewField::make('processing_info')
                    ->view('media::processing-status')
                    ->viewData(fn($record) => [
                        'status' => $record->processing_status,
                        'thumbnails' => $record->thumbnails,
                        'conversions' => $record->conversions,
                    ])
                    ->columnSpanFull(),
            ])->visibleOn(['view', 'edit']),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail_url')
                    ->label('Preview')
                    ->circular()
                    ->size(60)
                    ->defaultImageUrl('/images/file-placeholder.png'),
                    
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->placeholder(fn($record) => $record->original_name),
                    
                BadgeColumn::make('media_type')
                    ->colors([
                        'success' => 'image',
                        'info' => 'video',
                        'warning' => 'document',
                        'purple' => 'audio',
                    ]),
                    
                TextColumn::make('file_size')
                    ->formatStateUsing(fn($state) => number_format($state / 1024 / 1024, 2) . ' MB')
                    ->sortable(),
                    
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
                    ]),
                    
                BadgeColumn::make('visibility'),
                
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Action::make('download')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(fn($record) => route('media.download', $record))
                    ->openUrlInNewTab(),
                    
                Action::make('regenerate_thumbnails')
                    ->icon('heroicon-o-photo')
                    ->color('warning')
                    ->visible(fn($record) => $record->isImage())
                    ->action(function($record) {
                        GenerateThumbnailsJob::dispatch($record);
                        
                        Notification::make()
                            ->title('Thumbnail regeneration queued')
                            ->success()
                            ->send();
                    }),
                    
                Action::make('convert_format')
                    ->icon('heroicon-o-arrow-path')
                    ->form([
                        Select::make('target_format')
                            ->options([
                                'webp' => 'WebP',
                                'avif' => 'AVIF', 
                                'jpg' => 'JPEG',
                                'png' => 'PNG',
                            ])
                            ->required(),
                    ])
                    ->action(function($data, $record) {
                        ConvertMediaJob::dispatch($record, $data['target_format']);
                        
                        Notification::make()
                            ->title('Format conversion queued')
                            ->success()
                            ->send();
                    }),
            ])
            ->bulkActions([
                BulkAction::make('bulk_optimize')
                    ->icon('heroicon-o-sparkles')
                    ->action(function($records) {
                        foreach($records as $record) {
                            OptimizeMediaJob::dispatch($record);
                        }
                        
                        Notification::make()
                            ->title('Bulk optimization queued')
                            ->success()
                            ->send();
                    }),
                    
                BulkAction::make('bulk_download')
                    ->icon('heroicon-o-archive-box')
                    ->action(fn($records) => $this->downloadAsZip($records)),
            ])
            ->filters([
                SelectFilter::make('media_type'),
                SelectFilter::make('visibility'),
                SelectFilter::make('processing_status'),
                
                Filter::make('large_files')
                    ->query(fn($query) => $query->where('file_size', '>', 10 * 1024 * 1024)),
            ]);
    }
}
```

### 2. Real-time Processing Status Widget
```php
class MediaProcessingWidget extends Widget
{
    public function table(Table $table): Table
    {
        return $table
            ->records([
                [
                    'queue' => 'media-processing',
                    'pending' => Queue::size('media-processing'),
                    'processing' => ProcessingJob::running()->count(),
                    'failed' => ProcessingJob::failed()->today()->count(),
                ],
                [
                    'queue' => 'thumbnails',
                    'pending' => Queue::size('thumbnails'),
                    'processing' => ThumbnailJob::running()->count(), 
                    'failed' => ThumbnailJob::failed()->today()->count(),
                ],
            ])
            ->columns([
                TextColumn::make('queue'),
                TextColumn::make('pending')->color('warning'),
                TextColumn::make('processing')->color('info'),
                TextColumn::make('failed')->color('danger'),
            ])
            ->poll('5s');
    }
}
```

### 3. Standalone Components per Frontend
**Filament 4 feature - Componenti usabili ovunque:**
```blade
{{-- In any Blade template --}}
<x-filament::media.uploader 
    wire:model="media_files"
    :max-files="5"
    :accepted-types="['image/*']"
    :image-editor="true"
/>

<x-filament::media.gallery
    :media="$mediaCollection" 
    :show-metadata="true"
    :allow-download="true"
/>
```

### 4. Advanced Media Analytics
```php
class MediaAnalyticsWidget extends Widget  
{
    public function getAnalyticsData(): array
    {
        return [
            [
                'metric' => 'Total Storage Used',
                'value' => $this->formatBytes(Media::sum('file_size')),
                'trend' => '+12% this month',
            ],
            [
                'metric' => 'Images Optimized',
                'value' => Media::where('is_optimized', true)->count(),
                'percentage' => Media::where('is_optimized', true)->count() / Media::count() * 100,
            ],
            [
                'metric' => 'CDN Delivery',
                'value' => CdnDelivery::today()->sum('bytes_delivered'),
                'cost_saved' => '$' . number_format($this->calculateCostSaved(), 2),
            ],
        ];
    }
}
```

## 🚀 Vantaggi della Migrazione Media Module

### 1. Enhanced File Upload Experience
- **Image editor integrato** nel upload
- **Real-time upload progress** con preview
- **Automatic metadata extraction**
- **Client-side image optimization**

### 2. Advanced Processing Pipeline  
```php
// Real-time processing status updates
$processing = [
    'upload' => 'completed',
    'virus_scan' => 'in_progress', 
    'thumbnail_generation' => 'queued',
    'optimization' => 'queued',
    'cdn_upload' => 'queued',
];
```

### 3. Standalone Components Integration
**Game changer per frontend integration:**
```php
// Use Filament components in regular views
public function render()
{
    return view('frontend.media-upload', [
        'uploader' => FilamentComponents::make('media.uploader')
            ->maxFiles(10)
            ->acceptedTypes(['image/*', 'video/*'])
            ->toHtml()
    ]);
}
```

### 4. Performance Optimizations
- **Lazy loading** per media galleries
- **Progressive image loading**
- **Thumbnail caching** ottimizzato
- **CDN integration** seamless

## ⚠️ Svantaggi e Considerazioni

### 1. Storage Requirements Increase
```bash
# Filament 4 features richiedono più storage:
⚠️  Multiple thumbnail sizes
⚠️  Original + optimized versions
⚠️  Processing temp files
⚠️  CDN sync overhead
```

### 2. Processing Queue Complexity
```php
// Multiple job queues needed:
- media-upload (high priority)
- thumbnail-generation (medium)  
- optimization (low priority)
- cdn-sync (background)
- cleanup (maintenance)
```

### 3. Security Considerations Enhanced
```php
// Enhanced security needed per upload:
- File type validation (mime + extension)
- Virus scanning integration
- Content analysis (AI-based)
- Watermark application
- Access control per file
```

## 🎯 Piano di Migrazione Media Module

### Fase 1: Infrastructure Enhancement (2-3 giorni)
1. 🔧 Setup storage backends (local, S3, CDN)
2. 🔧 Configure processing queues
3. 🔧 Security scanning setup
4. 🔧 Backup e disaster recovery

### Fase 2: Core Migration (4-5 giorni)
1. 🔄 Convert MediaResource a Schema unificato
2. 🔄 Enhanced FileUpload components
3. 🔄 Processing status tracking
4. 🔄 Real-time updates implementation

### Fase 3: Advanced Features (3-4 giorni)
1. 🆕 Standalone components setup
2. 🆕 Analytics dashboard
3. 🆕 Bulk operations interface
4. 🆕 Frontend integration examples

## 💡 Raccomandazioni Media Module

### ✅ MIGRAZIONE RACCOMANDATA perché:

1. **Significantly better UX** - Image editor, real-time updates
2. **Standalone components** - Huge value per frontend integration  
3. **Performance improvements** - Critical per media-heavy apps
4. **Security enhancements** - Important per file uploads
5. **Analytics capabilities** - Valuable insights su storage usage

### 🚀 Unique Opportunities:

1. **Frontend component reuse** across application
2. **Advanced media processing** pipeline
3. **Real-time upload experience**
4. **Comprehensive analytics** dashboard

## 🕐 Timeline Stimato Media Module

- **Infrastructure setup**: 3-4 giorni DevOps
- **Core migration**: 5-6 giorni sviluppatore
- **Advanced features**: 4-5 giorni sviluppatore
- **Frontend integration**: 2-3 giorni frontend dev
- **Testing e optimization**: 2-3 giorni QA

**TOTALE: 16-21 giorni lavorativi**

## 🔮 Conclusioni Media Module

**MIGRAZIONE RACCOMANDATA** - Il Media module trarrà **benefici significativi** da Filament 4, specialmente per:

✅ **User experience** drasticamente migliorata
✅ **Frontend integration** capabilities 
✅ **Performance** per media processing
✅ **Security** enhancements critiche
✅ **Analytics** per storage optimization

**Timing**: Questo modulo può essere migrato **nella seconda wave**, dopo aver stabilizzato moduli più semplici.

**ROI**: **Alto** grazie a standalone components e UX improvements che impattano tutto il sistema.