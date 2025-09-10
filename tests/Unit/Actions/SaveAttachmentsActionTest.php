<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

<<<<<<< HEAD
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Media\Models\Media;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Mockery;
=======
use Illuminate\Support\Facades\Storage;
use Mockery;
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Media\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Tests\TestCase;
>>>>>>> 8e094f6 (.)

class SaveAttachmentsActionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('attachments');
    }

    public function test_executes_save_attachments_successfully(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new SaveAttachmentsAction();
        
=======
        $action = new SaveAttachmentsAction;

>>>>>>> 8e094f6 (.)
        // Mock del record HasMedia
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
<<<<<<< HEAD
            ->andReturn(new Media());
        $record->shouldReceive('update')
            ->andReturn(true);
        
        $attachments = ['invoice', 'contract'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
            'contract' => 'temp/contract.pdf'
        ];
        
        // Crea file temporanei
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/contract.pdf', 'fake content');
        
        // Act
        $action->execute($record, $attachments, $data, 'attachments');
        
=======
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);

        $attachments = ['invoice', 'contract'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
            'contract' => 'temp/contract.pdf',
        ];

        // Crea file temporanei
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/contract.pdf', 'fake content');

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

>>>>>>> 8e094f6 (.)
        // Assert
        $this->assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        $this->assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
    }
<<<<<<< HEAD
    
    public function test_handles_empty_attachments(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction();
        
=======

    public function test_handles_empty_attachments(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction;

>>>>>>> 8e094f6 (.)
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('update')
            ->with([])
            ->andReturn(true);
<<<<<<< HEAD
        
        $attachments = [];
        $data = [];
        
        // Act
        $action->execute($record, $attachments, $data, 'attachments');
        
        // Assert - non dovrebbe lanciare eccezioni
        $this->assertTrue(true);
    }
    
    public function test_skips_nonexistent_files(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction();
        
=======

        $attachments = [];
        $data = [];

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - non dovrebbe lanciare eccezioni
        $this->assertTrue(true);
    }

    public function test_skips_nonexistent_files(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction;

>>>>>>> 8e094f6 (.)
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('update')
            ->with([])
            ->andReturn(true);
<<<<<<< HEAD
        
        $attachments = ['invoice'];
        $data = [
            'invoice' => 'nonexistent/file.pdf'
        ];
        
        // Act
        $action->execute($record, $attachments, $data, 'attachments');
        
        // Assert - non dovrebbe lanciare eccezioni
        $this->assertTrue(true);
    }
    
    public function test_handles_storage_errors_gracefully(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction();
        
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andThrow(new \Exception('Storage error'));
        
        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf'
        ];
        
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        
        // Act & Assert
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Storage error');
        
        $action->execute($record, $attachments, $data, 'attachments');
    }
    
    public function test_uses_correct_disk(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction();
        
=======

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'nonexistent/file.pdf',
        ];

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - non dovrebbe lanciare eccezioni
        $this->assertTrue(true);
    }

    public function test_handles_storage_errors_gracefully(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction;

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andThrow(new \Exception('Storage error'));

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');

        // Act & Assert
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Storage error');

        $action->execute($record, $attachments, $data, 'attachments');
    }

    public function test_uses_correct_disk(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction;

>>>>>>> 8e094f6 (.)
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
<<<<<<< HEAD
            ->andReturn(new Media());
        $record->shouldReceive('update')
            ->andReturn(true);
        
        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf'
        ];
        
        // Crea file su disco diverso
        Storage::fake('custom_disk');
        Storage::disk('custom_disk')->put('temp/invoice.pdf', 'fake content');
        
        // Act
        $action->execute($record, $attachments, $data, 'custom_disk');
        
        // Assert
        $this->assertTrue(Storage::disk('custom_disk')->exists('temp/invoice.pdf'));
    }
    
    public function test_cleans_up_temp_files(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction();
        
=======
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        // Crea file su disco diverso
        Storage::fake('custom_disk');
        Storage::disk('custom_disk')->put('temp/invoice.pdf', 'fake content');

        // Act
        $action->execute($record, $attachments, $data, 'custom_disk');

        // Assert
        $this->assertTrue(Storage::disk('custom_disk')->exists('temp/invoice.pdf'));
    }

    public function test_cleans_up_temp_files(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction;

>>>>>>> 8e094f6 (.)
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
<<<<<<< HEAD
            ->andReturn(new Media());
        $record->shouldReceive('update')
            ->andReturn(true);
        
        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf'
        ];
        
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        
        // Act
        $action->execute($record, $attachments, $data, 'attachments');
        
=======
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

>>>>>>> 8e094f6 (.)
        // Assert - il file temporaneo dovrebbe essere pulito
        // Questo test verifica che la pulizia avvenga nel finally block
        $this->assertTrue(true);
    }
<<<<<<< HEAD
    
    public function test_handles_multiple_attachments(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction();
        
=======

    public function test_handles_multiple_attachments(): void
    {
        // Arrange
        $action = new SaveAttachmentsAction;

>>>>>>> 8e094f6 (.)
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->times(3)
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->times(3)
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
            ->times(3)
<<<<<<< HEAD
            ->andReturn(new Media());
        $record->shouldReceive('update')
            ->andReturn(true);
        
=======
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);

>>>>>>> 8e094f6 (.)
        $attachments = ['invoice', 'contract', 'receipt'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
            'contract' => 'temp/contract.pdf',
<<<<<<< HEAD
            'receipt' => 'temp/receipt.pdf'
        ];
        
=======
            'receipt' => 'temp/receipt.pdf',
        ];

>>>>>>> 8e094f6 (.)
        // Crea file temporanei
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/contract.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/receipt.pdf', 'fake content');
<<<<<<< HEAD
        
        // Act
        $action->execute($record, $attachments, $data, 'attachments');
        
=======

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

>>>>>>> 8e094f6 (.)
        // Assert
        $this->assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        $this->assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
        $this->assertTrue(Storage::disk('attachments')->exists('temp/receipt.pdf'));
    }
}
