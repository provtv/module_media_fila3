# Media Module - Ottimizzazioni e Correzioni

## Panoramica
Il modulo Media gestisce upload, processing e conversione di file multimediali. Analisi basata su pattern comuni dei moduli esistenti.

## 🔧 Ottimizzazioni Tecniche

### 1. File Upload Security
**Implementare validazione robusta:**
```php
// MediaUploadRequest
class MediaUploadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'file' => [
                'required',
                'file',
                'max:50000', // 50MB
                'mimes:jpeg,png,gif,mp4,avi,pdf,doc,docx',
            ],
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
        ];
    }
    
    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            $file = $this->file('file');
            
            // Check file signature
            if ($file && !$this->isValidFileType($file)) {
                $validator->errors()->add('file', 'Invalid file type detected');
            }
            
            // Check for malicious content
            if ($file && $this->containsMaliciousContent($file)) {
                $validator->errors()->add('file', 'File contains potentially malicious content');
            }
        });
    }
    
    private function isValidFileType($file): bool
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $file->getPathname());
        finfo_close($finfo);
        
        $allowedMimes = [
            'image/jpeg', 'image/png', 'image/gif',
            'video/mp4', 'video/avi',
            'application/pdf',
            'application/msword',
        ];
        
        return in_array($mimeType, $allowedMimes);
    }
}
```

### 2. Media Processing Service
```php
class MediaProcessingService
{
    public function processUpload(UploadedFile $file, array $options = []): Media
    {
        // Validate file
        $this->validateFile($file);
        
        // Generate secure filename
        $filename = $this->generateSecureFilename($file);
        
        // Store file
        $path = $file->storeAs('media', $filename, 'secure');
        
        // Create media record
        $media = Media::create([
            'filename' => $filename,
            'original_name' => $file->getClientOriginalName(),
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'metadata' => $this->extractMetadata($file),
        ]);
        
        // Queue processing jobs
        $this->queueProcessingJobs($media, $options);
        
        return $media;
    }
    
    private function generateSecureFilename(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $hash = hash('sha256', uniqid() . $file->getClientOriginalName());
        
        return substr($hash, 0, 32) . '.' . $extension;
    }
    
    private function extractMetadata(UploadedFile $file): array
    {
        $metadata = ['uploaded_at' => now()];
        
        if (str_starts_with($file->getMimeType(), 'image/')) {
            $imageInfo = getimagesize($file->getPathname());
            $metadata['dimensions'] = [
                'width' => $imageInfo[0] ?? null,
                'height' => $imageInfo[1] ?? null,
            ];
        }
        
        return $metadata;
    }
    
    private function queueProcessingJobs(Media $media, array $options): void
    {
        // Generate thumbnails
        if ($media->isImage()) {
            GenerateThumbnailsJob::dispatch($media);
        }
        
        // Video processing
        if ($media->isVideo()) {
            ProcessVideoJob::dispatch($media, $options);
        }
        
        // Virus scan
        if (config('media.virus_scan_enabled')) {
            VirusScanJob::dispatch($media);
        }
    }
}
```

### 3. Enhanced Media Model
```php
class Media extends BaseModel
{
    protected $fillable = [
        'filename',
        'original_name',
        'path',
        'mime_type',
        'size',
        'metadata',
        'status',
        'processed_at',
    ];
    
    protected function casts(): array
    {
        return [
            'metadata' => 'array',
            'size' => 'integer',
            'processed_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
    
    // Attributes
    public function getUrlAttribute(): string
    {
        return Storage::disk('secure')->url($this->path);
    }
    
    public function getThumbnailUrlAttribute(): ?string
    {
        if (!$this->isImage()) {
            return null;
        }
        
        $thumbnailPath = str_replace('.', '_thumb.', $this->path);
        
        return Storage::disk('secure')->exists($thumbnailPath)
            ? Storage::disk('secure')->url($thumbnailPath)
            : null;
    }
    
    public function getHumanSizeAttribute(): string
    {
        $units = ['B', 'KB', 'MB', 'GB'];
        $bytes = $this->size;
        
        for ($i = 0; $bytes >= 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }
    
    // Methods
    public function isImage(): bool
    {
        return str_starts_with($this->mime_type, 'image/');
    }
    
    public function isVideo(): bool
    {
        return str_starts_with($this->mime_type, 'video/');
    }
    
    public function isPdf(): bool
    {
        return $this->mime_type === 'application/pdf';
    }
    
    public function isProcessed(): bool
    {
        return $this->status === 'processed';
    }
    
    // Scopes
    public function scopeImages($query)
    {
        return $query->where('mime_type', 'like', 'image/%');
    }
    
    public function scopeVideos($query)
    {
        return $query->where('mime_type', 'like', 'video/%');
    }
    
    public function scopeProcessed($query)
    {
        return $query->where('status', 'processed');
    }
}
```

### 4. Filament MediaResource
```php
class MediaResource extends XotBaseResource
{
    protected static ?string $model = Media::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Content';
    
    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Upload')->schema([
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->maxSize(50000)
                    ->acceptedFileTypes(['image/*', 'video/*', 'application/pdf'])
                    ->imageResizeMode('contain')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1920')
                    ->imageResizeTargetHeight('1080'),
            ])->hiddenOn('edit'),
            
            Section::make('Details')->schema([
                Forms\Components\TextInput::make('original_name')
                    ->disabled()
                    ->label('Original Filename'),
                    
                Forms\Components\TextInput::make('filename')
                    ->disabled()
                    ->label('Stored Filename'),
                    
                Forms\Components\TextInput::make('mime_type')
                    ->disabled()
                    ->label('MIME Type'),
                    
                Forms\Components\TextInput::make('human_size')
                    ->disabled()
                    ->label('File Size'),
                    
                Forms\Components\KeyValue::make('metadata')
                    ->disabled()
                    ->columnSpanFull(),
            ])->hiddenOn('create'),
        ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_url')
                    ->label('Preview')
                    ->circular()
                    ->defaultImageUrl('/images/file-placeholder.png'),
                    
                Tables\Columns\TextColumn::make('original_name')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                    
                Tables\Columns\BadgeColumn::make('mime_type')
                    ->colors([
                        'success' => fn ($state) => str_starts_with($state, 'image/'),
                        'info' => fn ($state) => str_starts_with($state, 'video/'),
                        'warning' => fn ($state) => $state === 'application/pdf',
                    ]),
                    
                Tables\Columns\TextColumn::make('human_size')
                    ->label('Size')
                    ->sortable('size'),
                    
                Tables\Columns\IconColumn::make('status')
                    ->icons([
                        'heroicon-o-clock' => 'processing',
                        'heroicon-o-check-circle' => 'processed',
                        'heroicon-o-x-circle' => 'failed',
                    ])
                    ->colors([
                        'warning' => 'processing',
                        'success' => 'processed', 
                        'danger' => 'failed',
                    ]),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('mime_type')
                    ->options([
                        'image/' => 'Images',
                        'video/' => 'Videos',
                        'application/pdf' => 'PDFs',
                    ])
                    ->query(function ($query, $data) {
                        if ($data['value']) {
                            return $query->where('mime_type', 'like', $data['value'] . '%');
                        }
                    }),
                    
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'processing' => 'Processing',
                        'processed' => 'Processed',
                        'failed' => 'Failed',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('download')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(fn ($record) => route('media.download', $record))
                    ->openUrlInNewTab(),
                    
                Tables\Actions\Action::make('reprocess')
                    ->icon('heroicon-o-arrow-path')
                    ->color('warning')
                    ->visible(fn ($record) => $record->status === 'failed')
                    ->action(function ($record) {
                        $record->update(['status' => 'processing']);
                        ProcessMediaJob::dispatch($record);
                    }),
                    
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                
                Tables\Actions\BulkAction::make('download_zip')
                    ->icon('heroicon-o-archive-box')
                    ->action(function ($records) {
                        return $this->downloadAsZip($records);
                    }),
            ]);
    }
}
```

## 🚀 Performance Optimizations

### 1. CDN Integration
```php
// MediaCdnService
class MediaCdnService
{
    public function uploadToCdn(Media $media): bool
    {
        $cdnPath = "media/{$media->filename}";
        
        $success = Storage::disk('cdn')->put(
            $cdnPath,
            Storage::disk('local')->get($media->path)
        );
        
        if ($success) {
            $media->update(['cdn_path' => $cdnPath]);
        }
        
        return $success;
    }
    
    public function getCdnUrl(Media $media): string
    {
        if ($media->cdn_path) {
            return Storage::disk('cdn')->url($media->cdn_path);
        }
        
        return $media->url;
    }
}
```

### 2. Image Optimization
```php
// ImageOptimizationService
class ImageOptimizationService
{
    public function optimize(Media $media): void
    {
        if (!$media->isImage()) {
            return;
        }
        
        $image = Image::make(Storage::path($media->path));
        
        // Resize if too large
        if ($image->width() > 2048 || $image->height() > 2048) {
            $image->resize(2048, 2048, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        
        // Compress
        $image->encode(null, 85);
        
        // Save optimized version
        $image->save();
        
        // Generate thumbnails
        $this->generateThumbnails($image, $media);
    }
    
    private function generateThumbnails($image, Media $media): void
    {
        $sizes = [
            'thumb' => [150, 150],
            'small' => [300, 300],
            'medium' => [600, 600],
        ];
        
        foreach ($sizes as $size => $dimensions) {
            $thumbnail = clone $image;
            $thumbnail->resize($dimensions[0], $dimensions[1], function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            
            $thumbnailPath = str_replace('.', "_{$size}.", $media->path);
            $thumbnail->save(Storage::path($thumbnailPath));
        }
    }
}
```

## 🔐 Security Features

### 1. Virus Scanning
```php
// VirusScanService
class VirusScanService
{
    public function scan(Media $media): array
    {
        $filePath = Storage::path($media->path);
        
        // Using ClamAV or similar
        $output = [];
        $returnVar = 0;
        
        exec("clamscan {$filePath}", $output, $returnVar);
        
        $isClean = $returnVar === 0;
        
        if (!$isClean) {
            $media->update(['status' => 'quarantined']);
            Log::warning('Virus detected in file', ['media_id' => $media->id]);
        }
        
        return [
            'clean' => $isClean,
            'output' => implode('\n', $output),
        ];
    }
}
```

### 2. Access Control
```php
// MediaPolicy
class MediaPolicy
{
    public function view(User $user, Media $media): bool
    {
        // Public media
        if ($media->is_public) {
            return true;
        }
        
        // Owner access
        if ($media->user_id === $user->id) {
            return true;
        }
        
        // Admin access
        return $user->hasRole('admin');
    }
    
    public function download(User $user, Media $media): bool
    {
        return $this->view($user, $media) && $media->isProcessed();
    }
}
```

## 🧪 Testing

### 1. Media Upload Tests
```php
class MediaUploadTest extends TestCase
{
    test('can upload valid image')
    {
        $file = UploadedFile::fake()->image('test.jpg', 800, 600);
        
        $response = $this->post('/api/media', [
            'file' => $file,
            'title' => 'Test Image',
        ]);
        
        $response->assertSuccessful();
        
        $this->assertDatabaseHas('media', [
            'original_name' => 'test.jpg',
            'mime_type' => 'image/jpeg',
        ]);
    }
    
    test('rejects malicious files')
    {
        $file = UploadedFile::fake()->create('malicious.php', 1000);
        
        $response = $this->post('/api/media', ['file' => $file]);
        
        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['file']);
    }
    
    test('generates thumbnails for images')
    {
        $media = Media::factory()->image()->create();
        
        GenerateThumbnailsJob::dispatch($media);
        
        $this->assertTrue(Storage::exists(str_replace('.', '_thumb.', $media->path)));
    }
}
```

## 🎯 Priorità

### 🔴 Critica
1. ✅ File upload security validation
2. ✅ Virus scanning integration
3. ✅ Access control policies

### 🟡 Alta  
1. Image optimization pipeline
2. CDN integration
3. Thumbnail generation
4. Media conversion jobs

### 🟢 Media
1. Advanced metadata extraction
2. Bulk operations
3. Storage analytics
4. Automated cleanup

## 💡 Conclusioni

Il modulo Media richiede particolare attenzione alla sicurezza data la natura dei file upload. Implementare robust validation, virus scanning e access control è fondamentale prima del deployment in produzione.