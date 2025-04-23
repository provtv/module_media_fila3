<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
<<<<<<< HEAD
 * Azione per convertire un video utilizzando ConvertData.
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * Azione per convertire un video utilizzando ConvertData.
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
>>>>>>> 59bb70f (fix: auto resolve conflict)
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
=======
<<<<<<< HEAD
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
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
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * Classe per convertire video utilizzando i dati di conversione specificati.
 *
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando i dati di conversione specificati.
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando i dati di conversione specificati.
=======
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> origin/dev
>>>>>>> origin/dev
>>>>>>> 06dadfb (.)
 */
=======
 * Classe per convertire video utilizzando i dati di conversione specificati.
 * 
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
 */
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
class ConvertVideoByConvertDataAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Esegue la conversione del video utilizzando i dati forniti.
     *
     * @param ConvertData $data I dati di configurazione per la conversione
     *
     * @throws \Exception Se il file non esiste o se mancano parametri essenziali
     *
     * @return string|null Il percorso del file convertito o null in caso di errore
     */
    public function execute(ConvertData $data): ?string
    {
        if (!$data->exists()) {
            return null;
=======
     * Execute the action.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
    public function execute(ConvertData $data): string
    {
        if (!$data->exists()) {
            throw new \Exception('Il file non esiste');
>>>>>>> 06dadfb (.)
        }

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        if (!$file_new) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }

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
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
=======
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
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
>>>>>>> 06dadfb (.)
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
        Notification::make()
            ->title('Start')
            ->success()
            ->send();

        /*
         * -preset ultrafast.
         */
        // Call to an undefined method ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg::toDisk().
        // @phpstan-ignore method.notFound
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            // ->addFilter(function (VideoFilters $filters) {
            //    $filters->resize(new \FFMpeg\Coordinate\Dimension(640, 480));
            // })
            // ->resize(640, 480)
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
                $msg = "{$percentage}% transcoded";
                $msg .= "{$remaining} seconds left at rate: {$rate}";
                Notification::make()
                    ->title($msg)
                    ->success()
                    ->send();
            })
            ->addFilter('-preset', 'ultrafast')
            // ->addFilter('-crf', 22)
            ->toDisk($data->disk)
            ->inFormat($format)
            ->save($file_new);

        return Storage::disk($data->disk)->url($file_new);
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
    }
}
