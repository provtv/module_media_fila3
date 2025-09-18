<?php

declare(strict_types=1);

<<<<<<< HEAD
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;

uses(Tests\TestCase::class);

test('get form schema returns expected components', function (): void {
    $schema = MediaConvertResource::getFormSchema();
    
    expect($schema)->toBeArray();
    expect($schema)->not->toBeEmpty();
    
    $componentClasses = array_map(fn ($c) => get_class($c), $schema);
    
    expect($componentClasses)->toContain(Radio::class);
    expect($componentClasses)->toContain(TextInput::class);
});
=======
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
>>>>>>> b94526c9b (.)
