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
            'format' => Radio::make('format')
<<<<<<< HEAD
=======
=======
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            Radio::make('format')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
                ->options([
                    'webm' => 'webm',
                    // 'webm02' => 'webm02',
                ])
                ->inline()
                ->inlineLabel(false),
            // -----------------------------------
<<<<<<< HEAD
            'codec_video' => Radio::make('codec_video')
=======
<<<<<<< HEAD
            'codec_video' => Radio::make('codec_video')
=======
            Radio::make('codec_video')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
                ->options([
                    'libvpx-vp9' => 'libvpx-vp9',
                    'libvpx-vp8' => 'libvpx-vp8',
                ])
                ->inline()
                ->inlineLabel(false),
<<<<<<< HEAD
            'codec_audio' => Radio::make('codec_audio')
=======
<<<<<<< HEAD
            'codec_audio' => Radio::make('codec_audio')
=======
            Radio::make('codec_audio')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
                ->options([
                    'copy' => 'copy',
                    'libvorbis' => 'libvorbis',
                ])
                ->inline()
                ->inlineLabel(false),
<<<<<<< HEAD
            'preset' => Radio::make('preset')
=======
<<<<<<< HEAD
            'preset' => Radio::make('preset')
=======
            Radio::make('preset')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
                ->options([
                    'fast' => 'fast',
                    'ultrafast' => 'ultrafast',
                ])
                ->inline()
                ->inlineLabel(false),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
            'bitrate' => TextInput::make('bitrate'),
            'width' => TextInput::make('width')->numeric(),
            'height' => TextInput::make('height')->numeric(),
            'threads' => TextInput::make('threads'),
            'speed' => TextInput::make('speed'),
<<<<<<< HEAD
=======
=======
            TextInput::make('bitrate'),
            TextInput::make('width')->numeric(),
            TextInput::make('height')->numeric(),
            TextInput::make('threads'),
            TextInput::make('speed'),
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
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
