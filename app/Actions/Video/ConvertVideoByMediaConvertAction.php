<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
<<<<<<< HEAD
 * Azione per convertire un video utilizzando il modello MediaConvert.
=======
<<<<<<< HEAD
 * Azione per convertire un video utilizzando il modello MediaConvert.
=======
<<<<<<< HEAD
 * Azione per convertire un video utilizzando il modello MediaConvert.
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
>>>>>>> 06dadfb (.)
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use Modules\Media\Models\MediaConvert;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
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
>>>>>>> 06dadfb (.)
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
 *
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
=======
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> origin/dev
>>>>>>> origin/dev
>>>>>>> 06dadfb (.)
 */
class ConvertVideoByMediaConvertAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Esegue la conversione del video.
     *
     * @param ConvertData $data I dati di configurazione per la conversione
     * @param MediaConvert $record Il record MediaConvert che tiene traccia della conversione
     *
     * @throws \Exception Se il file non esiste o se mancano parametri essenziali
     *
     * @return string|null L'URL del file convertito o null in caso di errore
     */
    public function execute(ConvertData $data, MediaConvert $record): ?string
    {
        $starting_time = microtime(true);

=======
     * Execute the action.
     */
    public function execute(ConvertData $data, MediaConvert $record): string
    {
>>>>>>> 06dadfb (.)
        if (!$data->exists()) {
            throw new \Exception('Il file non esiste');
        }

        $format = $data->getFFMpegFormat();
        $file_new = $record->converted_file;

        if (!$file_new) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }

<<<<<<< HEAD
        Notification::make()
            ->title('Avvio conversione video')
            ->success()
            ->send();

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> 06dadfb (.)
        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

        // @phpstan-ignore-next-line
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
>>>>>>> 06dadfb (.)
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate) use ($record): void {
<<<<<<< HEAD
                $msg = "{$percentage}% convertito. ";
                $msg .= "{$remaining} secondi rimanenti (rate: {$rate})";

=======
>>>>>>> 06dadfb (.)
                $record->update([
                    'percentage' => $percentage,
                    'remaining' => $remaining,
                    'rate' => $rate,
                ]);
<<<<<<< HEAD

                Notification::make()
                    ->title($msg)
                    ->success()
                    ->send();
            })
            ->addFilter('-preset', 'ultrafast')
            ->toDisk($data->disk)
            ->inFormat($formatInstance)
            ->save($file_new);

        $finished_time = microtime(true);

        $record->update([
            'status' => 'completed',
            'execution_time' => $finished_time - $starting_time,
        ]);

        // Restituiamo il percorso del file
=======
            })
            ->addFilter('-preset', 'ultrafast')
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

        $record->update([
            'status' => 'completed',
        ]);

>>>>>>> 06dadfb (.)
        return $file_new;
    }
}
