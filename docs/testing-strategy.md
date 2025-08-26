# Strategia Testing - Modulo Media

## Panoramica

Il modulo Media gestisce la gestione completa dei file multimediali, inclusi upload, conversione, storage e distribuzione. Questa documentazione definisce la strategia di testing focalizzata sulla business logic.

## Business Logic Core

### 1. Gestione File e Upload
- **Validazione file**: Tipo, dimensione, formato
- **Processamento upload**: Chunking, progress tracking
- **Storage**: Locale, S3, CloudFront
- **Sicurezza**: Sanitizzazione nomi, controllo accessi

### 2. Conversione Media
- **Immagini**: Resize, compressione, formati
- **Video**: Transcoding, compressione, streaming
- **Audio**: Conversione formati, normalizzazione
- **Documenti**: Conversione PDF, preview

### 3. Gestione Allegati
- **Associazione**: Collegamento a modelli
- **Versioning**: Gestione versioni file
- **Cleanup**: Rimozione file orfani
- **Metadati**: Estrazione e gestione

## Test Mancanti Identificati

### Priorità ALTA - Business Logic Core

#### 1. Actions
- `SaveAttachmentsAction` - Salvataggio allegati
- `GetAttachmentsSchemaAction` - Schema allegati
- `AttachMediaAction` - Collegamento media

#### 2. Services
- `MediaConversionService` - Conversione file
- `StorageService` - Gestione storage
- `CleanupService` - Pulizia file orfani

#### 3. Models
- `Media` - Test relazioni e metodi
- `MediaConvert` - Test conversione
- `TemporaryUpload` - Test upload temporanei

### Priorità MEDIA - Integrazione

#### 1. Policies
- `MediaPolicy` - Autorizzazioni accesso
- `MediaConvertPolicy` - Autorizzazioni conversione

#### 2. Integrazione S3
- Upload diretto S3
- Gestione bucket
- CDN CloudFront

#### 3. Eventi e Notifiche
- Eventi di upload completato
- Notifiche di errore conversione

## Pattern di Test Implementati

### 1. Test Actions

```php
<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Media\Datas\AttachmentData;
use Tests\TestCase;

class SaveAttachmentsActionTest extends TestCase
{
    public function test_saves_attachments_successfully(): void
    {
        // Arrange
        $attachmentData = new AttachmentData(
            filename: 'test.pdf',
            mime_type: 'application/pdf',
            size: 1024,
            path: '/tmp/test.pdf'
        );
        
        // Act
        $action = new SaveAttachmentsAction();
        $result = $action->execute($attachmentData);
        
        // Assert
        $this->assertNotNull($result);
        $this->assertEquals('test.pdf', $result->filename);
        $this->assertEquals('application/pdf', $result->mime_type);
    }
    
    public function test_handles_invalid_file_type(): void
    {
        // Arrange
        $attachmentData = new AttachmentData(
            filename: 'test.exe',
            mime_type: 'application/x-executable',
            size: 1024,
            path: '/tmp/test.exe'
        );
        
        // Act & Assert
        $this->expectException(\InvalidArgumentException::class);
        
        $action = new SaveAttachmentsAction();
        $action->execute($attachmentData);
    }
}
```

### 2. Test Services

```php
<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Services;

use Modules\Media\Services\MediaConversionService;
use Tests\TestCase;

class MediaConversionServiceTest extends TestCase
{
    public function test_converts_image_to_webp(): void
    {
        // Arrange
        $service = new MediaConversionService();
        $inputPath = '/tmp/test.jpg';
        $outputPath = '/tmp/test.webp';
        
        // Mock file system
        Storage::fake('local');
        Storage::disk('local')->put('test.jpg', 'fake image content');
        
        // Act
        $result = $service->convertImage($inputPath, $outputPath, 'webp');
        
        // Assert
        $this->assertTrue($result);
        $this->assertTrue(Storage::disk('local')->exists('test.webp'));
    }
    
    public function test_handles_conversion_errors(): void
    {
        // Arrange
        $service = new MediaConversionService();
        $inputPath = '/tmp/nonexistent.jpg';
        $outputPath = '/tmp/test.webp';
        
        // Act & Assert
        $this->expectException(\RuntimeException::class);
        $service->convertImage($inputPath, $outputPath, 'webp');
    }
}
```

### 3. Test Models

```php
<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Models;

use Modules\Media\Models\Media;
use Tests\TestCase;

class MediaTest extends TestCase
{
    public function test_media_has_correct_relationships(): void
    {
        // Arrange
        $media = Media::factory()->create();
        
        // Act & Assert
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $media->conversions);
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $media->attachments);
    }
    
    public function test_media_can_generate_thumbnail(): void
    {
        // Arrange
        $media = Media::factory()->create([
            'mime_type' => 'image/jpeg',
            'path' => '/tmp/test.jpg'
        ]);
        
        // Mock thumbnail generation
        $this->mock(ThumbnailService::class, function ($mock) {
            $mock->shouldReceive('generate')->once()->andReturn('/tmp/thumb.jpg');
        });
        
        // Act
        $thumbnail = $media->generateThumbnail();
        
        // Assert
        $this->assertEquals('/tmp/thumb.jpg', $thumbnail);
    }
}
```

## Test di Integrazione

### 1. Test Upload Completo

```php
<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Feature;

use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Media\Models\Media;
use Tests\TestCase;

class MediaUploadIntegrationTest extends TestCase
{
    public function test_complete_upload_workflow(): void
    {
        // Arrange
        $file = UploadedFile::fake()->image('test.jpg', 100, 100);
        $user = User::factory()->create();
        
        // Act
        $this->actingAs($user)
            ->post('/api/media/upload', [
                'file' => $file,
                'type' => 'profile_picture'
            ]);
        
        // Assert
        $this->assertDatabaseHas('media', [
            'filename' => 'test.jpg',
            'mime_type' => 'image/jpeg',
            'user_id' => $user->id
        ]);
        
        // Verifica conversione automatica
        $media = Media::where('filename', 'test.jpg')->first();
        $this->assertTrue($media->conversions->isNotEmpty());
    }
}
```

## Mock e Stub

### 1. Mock Storage Service

```php
private function mockStorageService(): void
{
    $mockStorage = Mockery::mock(StorageService::class);
    $mockStorage->shouldReceive('store')
        ->andReturn('/storage/media/test.jpg');
    $mockStorage->shouldReceive('delete')
        ->andReturn(true);
    
    app()->instance(StorageService::class, $mockStorage);
}
```

### 2. Mock Conversion Service

```php
private function mockConversionService(): void
{
    $mockConversion = Mockery::mock(MediaConversionService::class);
    $mockConversion->shouldReceive('convert')
        ->andReturn(true);
    $mockConversion->shouldReceive('getConversions')
        ->andReturn(['thumb' => '/tmp/thumb.jpg']);
    
    app()->instance(MediaConversionService::class, $mockConversion);
}
```

## Metriche di Successo

- **Copertura Test**: 85%+ per business logic
- **Test Passati**: 98%+ success rate
- **Performance**: Test completano in <20 secondi
- **Edge Cases**: Copertura 90%+ scenari limite

## Roadmap Implementazione

### Settimana 1: Test Core
- [ ] SaveAttachmentsAction
- [ ] GetAttachmentsSchemaAction
- [ ] MediaConversionService

### Settimana 2: Test Integrazione
- [ ] Upload workflow completo
- [ ] Conversione automatica
- [ ] Gestione errori

### Settimana 3: Test Avanzati
- [ ] Performance e stress
- [ ] Sicurezza e autorizzazioni
- [ ] Edge cases e errori

## Collegamenti

- [Testing Best Practices](../../Xot/docs/testing-best-practices.md)
- [Media Module README](./README.md)
- [PHPStan Implementation Guide](../../Xot/docs/phpstan-implementation-guide.md)
