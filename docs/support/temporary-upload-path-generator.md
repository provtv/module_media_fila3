<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# TemporaryUploadPathGenerator

## Descrizione
Questa classe gestisce la generazione dei percorsi per i file temporanei caricati nel sistema media, seguendo le best practices di Laraxot.

## Funzionalità
- Generazione percorsi per file originali
- Generazione percorsi per conversioni
- Generazione percorsi per immagini responsive
- Generazione percorsi base univoci

## Struttura
- Namespace: `Modules\Media\Support`
- Dipendenze:
  - `Modules\Media\Models\Media`
  - `Webmozart\Assert\Assert`

## Metodi Principali
1. `getPath(Media $media): string`
   - Genera il percorso per il file originale
   - Utilizza MD5 per garantire unicità

2. `getPathForConversions(Media $media): string`
   - Genera il percorso per le conversioni
   - Utilizza MD5 per garantire unicità

3. `getPathForResponsiveImages(Media $media): string`
   - Genera il percorso per le immagini responsive
   - Utilizza MD5 per garantire unicità

4. `getBasePath(Media $media): string`
   - Metodo protetto per generare il percorso base
   - Utilizza UUID e ID per garantire unicità

## Best Practices
- Utilizzo di tipizzazione stretta
- Validazione degli input con Assert
- Generazione di percorsi univoci e sicuri
- Documentazione PHPDoc completa

## Note di Sicurezza
- I percorsi generati sono univoci per ogni media
- Utilizzo di hash MD5 per prevenire collisioni
- Validazione degli input per prevenire injection

## Collegamenti
- [Documentazione Media Module](../module_media.md)
- [Gestione File Temporanei](../file_management.md)

## Note di Manutenzione
- Mantenere la documentazione PHPDoc aggiornata
- Verificare la compatibilità con le nuove versioni di Laravel
- Testare la generazione di percorsi univoci 
=======
=======
>>>>>>> fa3ca25 (.)
=======
>>>>>>> 7895f70 (.)
# TemporaryUploadPathGenerator Documentation
=======
# Temporary Upload Path Generator
>>>>>>> 9e78f88 (.)

## Overview

This document describes the temporary upload path generator functionality in the Media module. This feature provides secure, temporary file paths for file uploads that are automatically cleaned up after a specified period.

## Purpose

The temporary upload path generator serves several important functions:

1. **Security**: Prevents unauthorized access to uploaded files
2. **Organization**: Maintains clean file system structure
3. **Cleanup**: Automatically removes temporary files
4. **Performance**: Optimizes file handling and storage

## Implementation

### 1. **Path Generation Logic**
```php
<?php

declare(strict_types=1);

namespace Modules\Media\Services;

use Illuminate\Support\Str;
use Carbon\Carbon;

class TemporaryUploadPathGenerator
{
    /**
     * Generate a temporary upload path.
     *
     * @param string $originalName
     * @param string $extension
     * @return string
     */
    public function generatePath(string $originalName, string $extension): string
    {
        $timestamp = Carbon::now()->timestamp;
        $randomString = Str::random(16);
        $sanitizedName = $this->sanitizeFileName($originalName);
        
        return sprintf(
            'temp/%s/%s_%s.%s',
            $timestamp,
            $sanitizedName,
            $randomString,
            $extension
        );
    }

    /**
     * Sanitize the original filename.
     *
     * @param string $filename
     * @return string
     */
    private function sanitizeFileName(string $filename): string
    {
        // Remove special characters and spaces
        $sanitized = preg_replace('/[^a-zA-Z0-9_-]/', '_', $filename);
        
        // Limit length
        return substr($sanitized, 0, 50);
    }
}
```

### 2. **Path Structure**
Generated paths follow this structure:
```
temp/
├── 1640995200/           # Timestamp directory
│   ├── document_abc123.pdf
│   ├── image_def456.jpg
│   └── video_ghi789.mp4
├── 1640995260/           # Another timestamp directory
│   └── file_jkl012.docx
```

### 3. **File Naming Convention**
- **Format**: `{sanitized_name}_{random_string}.{extension}`
- **Random String**: 16 characters for uniqueness
- **Timestamp**: Unix timestamp for organization
- **Sanitization**: Removes special characters

## Configuration

### 1. **Environment Variables**
```env
# Temporary upload settings
MEDIA_TEMP_UPLOAD_PATH=temp
MEDIA_TEMP_UPLOAD_LIFETIME=3600
MEDIA_TEMP_UPLOAD_MAX_SIZE=10485760
```

### 2. **Configuration File**
```php
// config/media.php
return [
    'temp_upload' => [
        'path' => env('MEDIA_TEMP_UPLOAD_PATH', 'temp'),
        'lifetime' => env('MEDIA_TEMP_UPLOAD_LIFETIME', 3600), // 1 hour
        'max_size' => env('MEDIA_TEMP_UPLOAD_MAX_SIZE', 10485760), // 10MB
        'cleanup_interval' => 300, // 5 minutes
    ],
];
```

## Usage Examples

### 1. **Basic File Upload**
```php
use Modules\Media\Services\TemporaryUploadPathGenerator;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('document');
        $generator = new TemporaryUploadPathGenerator();
        
        $tempPath = $generator->generatePath(
            $file->getClientOriginalName(),
            $file->getClientOriginalExtension()
        );
        
        // Store file in temporary location
        $file->storeAs($tempPath, '', 'local');
        
        return response()->json([
            'temp_path' => $tempPath,
            'expires_at' => now()->addSeconds(config('media.temp_upload.lifetime'))
        ]);
    }
}
```

### 2. **Multiple File Upload**
```php
public function storeMultiple(Request $request)
{
    $files = $request->file('documents');
    $generator = new TemporaryUploadPathGenerator();
    $uploadedFiles = [];
    
    foreach ($files as $file) {
        $tempPath = $generator->generatePath(
            $file->getClientOriginalName(),
            $file->getClientOriginalExtension()
        );
        
        $file->storeAs($tempPath, '', 'local');
        
        $uploadedFiles[] = [
            'original_name' => $file->getClientOriginalName(),
            'temp_path' => $tempPath,
            'size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
        ];
    }
    
    return response()->json(['files' => $uploadedFiles]);
}
```

## Cleanup Process

<<<<<<< HEAD
$originalPath = $generator->getPath($media);
$conversionPath = $generator->getPathForConversions($media);
$responsivePath = $generator->getPathForResponsiveImages($media);
<<<<<<< HEAD
<<<<<<< HEAD
``` 
>>>>>>> 92c69f6 (.)
<<<<<<< HEAD
=======
``` 
>>>>>>> fa3ca25 (.)
=======
>>>>>>> 66de764 (.)
=======
``` 
>>>>>>> 7895f70 (.)
=======
### 1. **Automatic Cleanup**
```php
<?php

declare(strict_types=1);

namespace Modules\Media\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class CleanupTemporaryUploads extends Command
{
    protected $signature = 'media:cleanup-temp';
    protected $description = 'Clean up expired temporary uploads';

    public function handle(): int
    {
        $tempPath = config('media.temp_upload.path');
        $lifetime = config('media.temp_upload.lifetime');
        $cutoffTime = Carbon::now()->subSeconds($lifetime);
        
        $directories = Storage::directories($tempPath);
        $cleanedCount = 0;
        
        foreach ($directories as $directory) {
            $timestamp = $this->extractTimestamp($directory);
            
            if ($timestamp && $timestamp < $cutoffTime->timestamp) {
                Storage::deleteDirectory($directory);
                $cleanedCount++;
            }
        }
        
        $this->info("Cleaned up {$cleanedCount} expired temporary upload directories.");
        
        return Command::SUCCESS;
    }

    private function extractTimestamp(string $directory): ?int
    {
        $parts = explode('/', $directory);
        $timestamp = end($parts);
        
        return is_numeric($timestamp) ? (int) $timestamp : null;
    }
}
```

### 2. **Scheduled Cleanup**
```php
// app/Console/Kernel.php
protected function schedule(Schedule $schedule): void
{
    // Clean up temporary uploads every 5 minutes
    $schedule->command('media:cleanup-temp')
        ->everyFiveMinutes()
        ->withoutOverlapping();
}
```

## Security Considerations

### 1. **Path Validation**
```php
/**
 * Validate the generated path.
 *
 * @param string $path
 * @return bool
 */
public function validatePath(string $path): bool
{
    // Ensure path is within temp directory
    if (!str_starts_with($path, 'temp/')) {
        return false;
    }
    
    // Validate timestamp format
    $parts = explode('/', $path);
    if (count($parts) < 3) {
        return false;
    }
    
    $timestamp = $parts[1];
    if (!is_numeric($timestamp) || strlen($timestamp) !== 10) {
        return false;
    }
    
    return true;
}
```

### 2. **Access Control**
```php
/**
 * Check if user can access temporary file.
 *
 * @param string $path
 * @param User $user
 * @return bool
 */
public function canAccess(string $path, User $user): bool
{
    // Check if file exists
    if (!Storage::exists($path)) {
        return false;
    }
    
    // Check if file is expired
    $timestamp = $this->extractTimestamp($path);
    if ($timestamp && $timestamp < Carbon::now()->subSeconds(config('media.temp_upload.lifetime'))->timestamp) {
        return false;
    }
    
    // Add additional access control logic here
    return true;
}
```

## Error Handling

### 1. **Path Generation Errors**
```php
try {
    $tempPath = $generator->generatePath($filename, $extension);
} catch (InvalidArgumentException $e) {
    Log::error('Failed to generate temporary upload path', [
        'filename' => $filename,
        'extension' => $extension,
        'error' => $e->getMessage()
    ]);
    
    return response()->json(['error' => 'Failed to generate upload path'], 500);
}
```

### 2. **Storage Errors**
```php
try {
    $file->storeAs($tempPath, '', 'local');
} catch (Exception $e) {
    Log::error('Failed to store temporary file', [
        'temp_path' => $tempPath,
        'error' => $e->getMessage()
    ]);
    
    return response()->json(['error' => 'Failed to upload file'], 500);
}
```

## Testing

### 1. **Unit Tests**
```php
<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Media;

use Tests\TestCase;
use Modules\Media\Services\TemporaryUploadPathGenerator;

class TemporaryUploadPathGeneratorTest extends TestCase
{
    private TemporaryUploadPathGenerator $generator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->generator = new TemporaryUploadPathGenerator();
    }

    public function test_generates_valid_path(): void
    {
        $path = $this->generator->generatePath('test document.pdf', 'pdf');
        
        $this->assertStringStartsWith('temp/', $path);
        $this->assertStringEndsWith('.pdf', $path);
        $this->assertMatchesRegularExpression('/temp\/\d{10}\/test_document_[a-zA-Z0-9]{16}\.pdf/', $path);
    }

    public function test_sanitizes_filename(): void
    {
        $path = $this->generator->generatePath('test@#$%^&*()document.pdf', 'pdf');
        
        $this->assertStringContains('test_____document', $path);
    }
}
```

### 2. **Integration Tests**
```php
public function test_file_upload_with_temp_path(): void
{
    $file = UploadedFile::fake()->create('test.pdf', 100);
    
    $response = $this->postJson('/api/upload', [
        'document' => $file
    ]);
    
    $response->assertSuccessful()
        ->assertJsonStructure([
            'temp_path',
            'expires_at'
        ]);
    
    // Verify file exists
    $tempPath = $response->json('temp_path');
    $this->assertTrue(Storage::exists($tempPath));
}
```

## Performance Optimization

### 1. **Directory Structure**
- Use timestamp-based directories for efficient cleanup
- Limit files per directory to prevent performance issues
- Implement directory rotation for large-scale usage

### 2. **Storage Optimization**
- Use appropriate storage disk (local, S3, etc.)
- Implement file compression for large files
- Consider using temporary storage for very large files

### 3. **Cleanup Optimization**
- Batch cleanup operations
- Use background jobs for cleanup
- Implement cleanup scheduling based on usage patterns

## Monitoring and Logging

### 1. **Upload Metrics**
```php
// Log upload statistics
Log::info('Temporary file uploaded', [
    'temp_path' => $tempPath,
    'original_name' => $originalName,
    'size' => $fileSize,
    'user_id' => auth()->id(),
    'ip_address' => request()->ip(),
]);
```

### 2. **Cleanup Metrics**
```php
// Log cleanup statistics
Log::info('Temporary uploads cleaned up', [
    'directories_removed' => $cleanedCount,
    'total_size_freed' => $freedSize,
    'execution_time' => $executionTime,
]);
```

## Future Enhancements

### 1. **Cloud Storage Integration**
- Support for S3, Google Cloud Storage
- Automatic file migration
- Cross-region replication

### 2. **Advanced Cleanup**
- File size-based cleanup policies
- User-based retention policies
- Automatic file compression

### 3. **Security Enhancements**
- File encryption at rest
- Signed URLs for temporary access
- Virus scanning integration

## Links to Related Documentation

- [Media Module Overview](../README.md)
- [File Upload Guidelines](../file-upload-guidelines.md)
- [Security Best Practices](../security-best-practices.md)
- [Performance Optimization](../performance-optimization.md)

---

*Temporary Upload Path Generator - Secure and Efficient File Upload Management*
>>>>>>> 9e78f88 (.)
