<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

use Filament\Resources\Pages\PageRegistration;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\CreateTemporaryUpload;
// use Modules\Media\Filament\Resources\TemporaryUploadResource\RelationManagers;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\EditTemporaryUpload;
// use Filament\Forms;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\ListTemporaryUploads;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\XotBaseResource;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

class TemporaryUploadResource extends XotBaseResource
{
    protected static ?string $model = TemporaryUpload::class;

<<<<<<< HEAD
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
            'file' => \Filament\Forms\Components\FileUpload::make('file')
<<<<<<< HEAD
=======
=======
=======
>>>>>>> fa4eb21 (.)
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\FileUpload::make('file')
<<<<<<< HEAD
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
=======
>>>>>>> fa4eb21 (.)
                ->required()
                ->preserveFilenames()
                ->acceptedFileTypes(['image/*', 'application/pdf', 'application/msword'])
                ->maxSize(10240),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
            'folder' => \Filament\Forms\Components\TextInput::make('folder')
                ->required()
                ->maxLength(255),
            'expires_at' => \Filament\Forms\Components\DateTimePicker::make('expires_at')
<<<<<<< HEAD
=======
=======
=======
>>>>>>> fa4eb21 (.)
            \Filament\Forms\Components\TextInput::make('folder')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\DateTimePicker::make('expires_at')
<<<<<<< HEAD
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
=======
>>>>>>> fa4eb21 (.)
                ->required(),
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
            'index' => ListTemporaryUploads::route('/'),
            'create' => CreateTemporaryUpload::route('/create'),
            'edit' => EditTemporaryUpload::route('/{record}/edit'),
        ];
    }
}
