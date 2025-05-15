<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Media\Tests\Filament\Resources;

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Tests\TestCase;

class MediaConvertResourceTest extends TestCase
{
    public function testGetFormSchemaReturnsExpectedComponents(): void
=======
use Modules\Media\Filament\Resources\MediaConvertResource;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use PHPUnit\Framework\TestCase;

class MediaConvertResourceTest extends TestCase
{
    public function test_get_form_schema_returns_expected_components(): void
>>>>>>> e876fa3 (.)
    {
        $schema = MediaConvertResource::getFormSchema();
        $this->assertIsArray($schema);
        $this->assertNotEmpty($schema);
<<<<<<< HEAD
        $componentClasses = array_map(fn ($c) => get_class($c), $schema);
=======
        $componentClasses = array_map(fn($c) => get_class($c), $schema);
>>>>>>> e876fa3 (.)
        $this->assertContains(Radio::class, $componentClasses);
        $this->assertContains(TextInput::class, $componentClasses);
    }
}
