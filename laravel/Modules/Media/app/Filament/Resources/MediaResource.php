<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Models\Media;
use Modules\Xot\Filament\Resources\XotBaseResource;

class MediaResource extends XotBaseResource
{
    protected static ?string $model = Media::class;

    protected static ?string $navigationIcon = 'fas-photo-film';

    public static function getFormSchema(): array
    {
        return [
            FileUpload::make('file')
                ->hint(static::trans('fields.file_hint'))
                ->storeFileNamesIn('original_file_name')
                ->visibility('private')
                ->required()
                ->columnSpanFull(),
            Radio::make('attachment_type'),
            TextInput::make('name')
                ->translateLabel()
                ->hint(static::trans('fields.name.hint'))
                ->autocomplete(false)
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }
}
