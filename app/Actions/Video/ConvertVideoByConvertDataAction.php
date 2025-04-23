<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando ConvertData.
 * Azione per convertire un video utilizzando ConvertData.
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * Azione per convertire un video utilizzando ConvertData.
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
=======
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
<<<<<<< HEAD
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
=======
>>>>>>> fa4eb21 (.)
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
=======
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
>>>>>>> 2a62ef4 (.)
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;

/**
 * Classe per convertire video utilizzando i dati di conversione specificati.
<<<<<<< HEAD
 *
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando i dati di conversione specificati.
=======
<<<<<<< HEAD
=======
>>>>>>> 2a62ef4 (.)
 * Classe per convertire video utilizzando i dati di conversione specificati.
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> origin/dev
>>>>>>> 06dadfb (.)
=======
>>>>>>> 2a62ef4 (.)
 */
 * Classe per convertire video utilizzando i dati di conversione specificati.
 *
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
 */
use Spatie\QueueableAction\QueueableAction;

class ConvertVideoByConvertDataAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
     * Esegue la conversione del video utilizzando i dati forniti.
     *
     * @param ConvertData $data I dati di configurazione per la conversione
     *
     * @throws \Exception Se il file non esiste o se mancano parametri essenziali
     *
     * @return string|null Il percorso del file convertito o null in caso di errore
<<<<<<< HEAD
     */
    public function execute(ConvertData $data): ?string
    {
        if (!$data->exists()) {
            return null;
=======
     * Execute the action.
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
     */
    public function execute(ConvertData $data): string
    public function execute(ConvertData $data): ?string
    {
        if (!$data->exists()) {
<<<<<<< HEAD
            throw new \Exception('Il file non esiste');
>>>>>>> 06dadfb (.)
=======
            return null;
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
        }

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        if (!$file_new) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> 2f7c4db (.)
=======
>>>>>>> 2a62ef4 (.)
        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

        // @phpstan-ignore-next-line
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
=======
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
<<<<<<< HEAD
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

        // Restituisci il percorso del file
=======
                // Gestione del progresso
                $msg = "{$percentage}% transcoded";
                $msg .= "{$remaining} seconds left at rate: {$rate}";
                // Log o notifica del progresso
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
            ->inFormat($format)
            ->save($file_new);

        // Restituisci il percorso del file senza usare il metodo url()
>>>>>>> 06dadfb (.)
        return $file_new;
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);

        // Restituisci il percorso del file senza usare il metodo url()
        return $file_new;
    public function execute(ConvertData $data): ?string
    {
        if (! $data->exists()) {
            return '';
        }
        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();
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

        return Storage::disk($data->disk)->url($file_new);
        // Restituisci il percorso del file
        return $file_new;
    }
}
