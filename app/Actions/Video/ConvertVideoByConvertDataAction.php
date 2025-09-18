<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando ConvertData.
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;

/**
 * Classe per convertire video utilizzando i dati di conversione specificati.
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * 
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> b94526c9b (.)
=======
 * 
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> d9766aa8a (.)
 */
class ConvertVideoByConvertDataAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(ConvertData $data): string
    {
        if (!$data->exists()) {
            throw new \Exception('Il file non esiste');
        }

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        if (!$file_new) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }

        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

<<<<<<< HEAD
<<<<<<< HEAD
        // @phpstan-ignore method.notFound
=======
        // @phpstan-ignore-next-line
>>>>>>> b94526c9b (.)
=======
        // @phpstan-ignore-next-line
>>>>>>> d9766aa8a (.)
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
                // Gestione del progresso
                $msg = "{$percentage}% transcoded";
                $msg .= "{$remaining} seconds left at rate: {$rate}";
                // Log o notifica del progresso
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);

        // Restituisci il percorso del file senza usare il metodo url()
        return $file_new;
    }
}
