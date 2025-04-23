<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando ConvertData.
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
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;

/**
 * Classe per convertire video utilizzando i dati di conversione specificati.
 * Classe per convertire video utilizzando i dati di conversione specificati.
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
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
     * Esegue la conversione del video utilizzando i dati forniti.
     *
     * @param ConvertData $data I dati di configurazione per la conversione
     *
     * @throws \Exception Se il file non esiste o se mancano parametri essenziali
     *
     * @return string|null Il percorso del file convertito o null in caso di errore
     */
    public function execute(ConvertData $data): string
    public function execute(ConvertData $data): ?string
    {
        if (!$data->exists()) {
            return null;
        }

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        if (!$file_new) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }

        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

        // @phpstan-ignore-next-line
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
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
            ->inFormat($format)
            ->save($file_new);

        // Restituisci il percorso del file senza usare il metodo url()
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
