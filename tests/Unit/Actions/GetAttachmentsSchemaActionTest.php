<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

<<<<<<< HEAD
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Tests\TestCase;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
=======
use Filament\Forms\Components\FileUpload;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Tests\TestCase;
>>>>>>> 8e094f6 (.)

class GetAttachmentsSchemaActionTest extends TestCase
{
    public function test_returns_attachment_schema(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice', 'contract', 'receipt'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $this->assertIsArray($schema);
        $this->assertCount(3, $schema);
        
=======
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice', 'contract', 'receipt'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $this->assertIsArray($schema);
        $this->assertCount(3, $schema);

>>>>>>> 8e094f6 (.)
        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($schema as $component) {
            $this->assertInstanceOf(FileUpload::class, $component);
        }
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_names(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice', 'contract'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_names(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice', 'contract'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $this->assertEquals('invoice', $schema[0]->getName());
        $this->assertEquals('contract', $schema[1]->getName());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_labels(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $this->assertEquals('Invoice', $schema[0]->getLabel());
    }
    
    public function test_schema_has_correct_validation(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_labels(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $this->assertEquals('Invoice', $schema[0]->getLabel());
    }

    public function test_schema_has_correct_validation(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertTrue($component->isRequired());
        $this->assertContains('pdf', $component->getAcceptedFileTypes());
        $this->assertContains('doc', $component->getAcceptedFileTypes());
        $this->assertContains('docx', $component->getAcceptedFileTypes());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_storage(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_storage(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertEquals('attachments', $component->getDiskName());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_directory(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_directory(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertEquals('temp', $component->getDirectory());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_visibility(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_visibility(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertEquals('public', $component->getVisibility());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_max_size(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_max_size(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertEquals(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_multiple(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_multiple(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertFalse($component->isMultiple());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_preview(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_preview(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertTrue($component->isPreviewable());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_download(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_download(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertTrue($component->isDownloadable());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_remove(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_remove(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertTrue($component->isRemovable());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_reorder(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_reorder(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertFalse($component->isReorderable());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_append(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_append(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertFalse($component->isAppendable());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_panel(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_panel(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertEquals('Attachments', $component->getPanel());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_help_text(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_help_text(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertStringContainsString('Upload invoice file', $component->getHelperText());
    }
<<<<<<< HEAD
    
    public function test_schema_has_correct_placeholder(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
=======

    public function test_schema_has_correct_placeholder(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction;
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

>>>>>>> 8e094f6 (.)
        // Assert
        $component = $schema[0];
        $this->assertStringContainsString('Select invoice file', $component->getPlaceholder());
    }
}
