<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando ConvertData.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * Azione per convertire un video utilizzando ConvertData.
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
=======
>>>>>>> fa4eb21 (.)
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
=======
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
>>>>>>> 2f7c4db (.)
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * Classe per convertire video utilizzando i dati di conversione specificati.
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando i dati di conversione specificati.
=======
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> origin/dev
>>>>>>> origin/dev
 */
=======
 * Classe per convertire video utilizzando i dati di conversione specificati.
 *
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
 */
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
=======
>>>>>>> fa4eb21 (.)
class ConvertVideoByConvertDataAction
{
    use QueueableAction;

    /**
     * Esegue la conversione del video utilizzando i dati forniti.
     *
     * @param ConvertData $data I dati di configurazione per la conversione
     *
     * @throws \Exception Se il file non esiste o se mancano parametri essenziali
     *
     * @return string|null Il percorso del file convertito o null in caso di errore
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
    public function execute(ConvertData $data): string
=======
    public function execute(ConvertData $data): ?string
>>>>>>> fa4eb21 (.)
    {
        if (!$data->exists()) {
            return null;
        }

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        if (!$file_new) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> 2f7c4db (.)
        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

        // @phpstan-ignore-next-line
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 2f7c4db (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
=======
<<<<<<< HEAD
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
=======
            ->inFormat($format)
            ->save($file_new);
>>>>>>> origin/dev
>>>>>>> origin/dev

        // Restituisci il percorso del file senza usare il metodo url()
        return $file_new;
=======
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);

        // Restituisci il percorso del file senza usare il metodo url()
        return $file_new;
=======
    public function execute(ConvertData $data): ?string
    {
        if (! $data->exists()) {
            return '';
        }
        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();
=======
>>>>>>> fa4eb21 (.)
        Notification::make()
            ->title('Avvio conversione video')
            ->success()
            ->send();

        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

        /*
         * -preset ultrafast per una conversione più veloce.
         */
        // @phpstan-ignore method.notFound
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
                $msg = "{$percentage}% convertito. ";
                $msg .= "{$remaining} secondi rimanenti (rate: {$rate})";

                Notification::make()
                    ->title($msg)
                    ->success()
                    ->send();
            })
            ->addFilter('-preset', 'ultrafast')
            ->toDisk($data->disk)
            ->inFormat($formatInstance)
            ->save($file_new);

<<<<<<< HEAD
        return Storage::disk($data->disk)->url($file_new);
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
=======
        // Restituisci il percorso del file
        return $file_new;
>>>>>>> fa4eb21 (.)
    }
}
