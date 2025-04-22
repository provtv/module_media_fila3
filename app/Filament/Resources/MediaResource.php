<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\PageRegistration;
use Modules\Media\Filament\Resources\MediaResource\Pages;
use Modules\Media\Models\Media;
use Modules\Xot\Filament\Resources\XotBaseResource;

class MediaResource extends XotBaseResource
{
    protected static ?string $model = Media::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'file' => FileUpload::make('file')
<<<<<<< HEAD
=======
=======
    protected static ?string $navigationIcon = 'fas-photo-film';

    public static function getFormSchema(): array
    {
        return [
            FileUpload::make('file')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
                ->hint(static::trans('fields.file_hint'))
                ->storeFileNamesIn('original_file_name')
                ->visibility('private')
                ->required()
                ->columnSpanFull(),
<<<<<<< HEAD
            'attachment_type' => Radio::make('attachment_type'),
            'name' => TextInput::make('name')
=======
<<<<<<< HEAD
            'attachment_type' => Radio::make('attachment_type'),
            'name' => TextInput::make('name')
=======
            Radio::make('attachment_type'),
            TextInput::make('name')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
                ->translateLabel()
                ->hint(static::trans('fields.name.hint'))
                ->autocomplete(false)
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }

    /**
     * @psalm-return array<never, never>
     */
    public static function getRelations(): array
    {
        return [
        ];
    }

    /**
     * @return PageRegistration[]
     *
     * @psalm-return array{index: PageRegistration, create: PageRegistration, edit: PageRegistration}
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
            'view' => Pages\ViewMedia::route('/{record}'),
            'convert' => Pages\ConvertMedia::route('/{record}/convert'),
        ];
    }
}
