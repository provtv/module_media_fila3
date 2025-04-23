<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource\Pages;
use Modules\Media\Models\MediaConvert;
use Modules\Xot\Filament\Resources\XotBaseResource;

class MediaConvertResource extends XotBaseResource
{
    protected static ?string $model = MediaConvert::class;

    /**
<<<<<<< HEAD
     * Restituisce lo schema del form per la risorsa MediaConvert.
     * Restituisce un array di componenti Filament.
     * @return array<int, \Filament\Forms\Components\Component>
     */
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            Radio::make('format')
=======
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'format' => Radio::make('format')
>>>>>>> 06dadfb (.)
                ->options([
                    'webm' => 'webm',
                    // 'webm02' => 'webm02',
                ])
                ->inline()
                ->inlineLabel(false),
            // -----------------------------------
<<<<<<< HEAD
            Radio::make('codec_video')
=======
            'codec_video' => Radio::make('codec_video')
>>>>>>> 06dadfb (.)
                ->options([
                    'libvpx-vp9' => 'libvpx-vp9',
                    'libvpx-vp8' => 'libvpx-vp8',
                ])
                ->inline()
                ->inlineLabel(false),
<<<<<<< HEAD
            Radio::make('codec_audio')
=======
            'codec_audio' => Radio::make('codec_audio')
>>>>>>> 06dadfb (.)
                ->options([
                    'copy' => 'copy',
                    'libvorbis' => 'libvorbis',
                ])
                ->inline()
                ->inlineLabel(false),
<<<<<<< HEAD
            Radio::make('preset')
=======
            'preset' => Radio::make('preset')
>>>>>>> 06dadfb (.)
                ->options([
                    'fast' => 'fast',
                    'ultrafast' => 'ultrafast',
                ])
                ->inline()
                ->inlineLabel(false),
<<<<<<< HEAD
            TextInput::make('bitrate'),
            TextInput::make('width')->numeric(),
            TextInput::make('height')->numeric(),
            TextInput::make('threads'),
            TextInput::make('speed'),
=======
            'bitrate' => TextInput::make('bitrate'),
            'width' => TextInput::make('width')->numeric(),
            'height' => TextInput::make('height')->numeric(),
            'threads' => TextInput::make('threads'),
            'speed' => TextInput::make('speed'),
>>>>>>> 06dadfb (.)
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMediaConverts::route('/'),
            'create' => Pages\CreateMediaConvert::route('/create'),
            'edit' => Pages\EditMediaConvert::route('/{record}/edit'),
        ];
    }
}
