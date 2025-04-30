<?php

declare(strict_types=1);

use Modules\Media\Filament\Resources\MediaConvertResource;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use PHPUnit\Framework\TestCase;

class MediaConvertResourceTest extends TestCase
{
    public function test_get_form_schema_returns_expected_components(): void
    {
        $schema = MediaConvertResource::getFormSchema();
        $this->assertIsArray($schema);
        $this->assertNotEmpty($schema);
        $componentClasses = array_map(fn($c) => get_class($c), $schema);
        $this->assertContains(Radio::class, $componentClasses);
        $this->assertContains(TextInput::class, $componentClasses);
    }
}
