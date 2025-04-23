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
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\FileUpload::make('file')
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'file' => \Filament\Forms\Components\FileUpload::make('file')
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
<<<<<<< HEAD
=======
=======
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\FileUpload::make('file')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
                ->required()
                ->preserveFilenames()
                ->acceptedFileTypes(['image/*', 'application/pdf', 'application/msword'])
                ->maxSize(10240),
<<<<<<< HEAD
<<<<<<< HEAD
            \Filament\Forms\Components\TextInput::make('folder')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\DateTimePicker::make('expires_at')
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
            'folder' => \Filament\Forms\Components\TextInput::make('folder')
                ->required()
                ->maxLength(255),
            'expires_at' => \Filament\Forms\Components\DateTimePicker::make('expires_at')
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
<<<<<<< HEAD
=======
=======
            \Filament\Forms\Components\TextInput::make('folder')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\DateTimePicker::make('expires_at')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
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
