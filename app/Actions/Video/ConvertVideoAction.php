<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

<<<<<<< HEAD
=======
use FFMpeg\Format\Video\X264;
>>>>>>> aurmich/dev
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> aurmich/dev
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use FFMpeg\Format\Video\X264;
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> aurmich/dev

class ConvertVideoAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
=======
>>>>>>> aurmich/dev
     * Execute the action.
     */
    public function execute(string $disk_mp4, string $file_mp4, string $file_new): string
    {
        $media = FFMpeg::fromDisk($disk_mp4);

        $openedMedia = $media->open($file_mp4);
<<<<<<< HEAD
        
=======

>>>>>>> aurmich/dev
        $exportedMedia = $openedMedia->export();

        $format = new X264();
        $format->setKiloBitrate(1000);

        $toDiskMedia = $exportedMedia->toDisk($disk_mp4);
<<<<<<< HEAD
        
        $formattedMedia = $toDiskMedia->inFormat($format);
        
        $formattedMedia->save($file_new);

        return Storage::disk($disk_mp4)->url($file_new);
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
=======

        $formattedMedia = $toDiskMedia->inFormat($format);

        $formattedMedia->save($file_new);

        return Storage::disk($disk_mp4)->path($file_new);
>>>>>>> aurmich/dev
    }
}
