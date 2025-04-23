<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando il modello MediaConvert.
 * Azione per convertire un video utilizzando il modello MediaConvert.
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * Azione per convertire un video utilizzando il modello MediaConvert.
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
use Modules\Media\Models\MediaConvert;
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
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
<<<<<<< HEAD
 *
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
=======
<<<<<<< HEAD
=======
>>>>>>> 2a62ef4 (.)
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> origin/dev
>>>>>>> 06dadfb (.)
=======
>>>>>>> 2a62ef4 (.)
 */
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
 *
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
 */
use Spatie\QueueableAction\QueueableAction;

class ConvertVideoByMediaConvertAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
     * Esegue la conversione del video.
     *
     * @param ConvertData $data I dati di configurazione per la conversione
     * @param MediaConvert $record Il record MediaConvert che tiene traccia della conversione
     *
     * @throws \Exception Se il file non esiste o se mancano parametri essenziali
     *
     * @return string|null L'URL del file convertito o null in caso di errore
<<<<<<< HEAD
     */
    public function execute(ConvertData $data, MediaConvert $record): ?string
    {
        $starting_time = microtime(true);

=======
     * Execute the action.
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
     */
    public function execute(ConvertData $data, MediaConvert $record): string
    public function execute(ConvertData $data, MediaConvert $record): ?string
    {
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
        $starting_time = microtime(true);

>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
        if (!$data->exists()) {
            throw new \Exception('Il file non esiste');
        }

        $format = $data->getFFMpegFormat();
        $file_new = $record->converted_file;

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

=======
=======
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
=======
>>>>>>> 2f7c4db (.)
<<<<<<< HEAD
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
=======
=======
>>>>>>> 2a62ef4 (.)
        Notification::make()
            ->title('Avvio conversione video')
            ->success()
            ->send();

<<<<<<< HEAD
>>>>>>> fa4eb21 (.)
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

        // @phpstan-ignore-next-line
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
            ->onProgress(function (float $percentage, float $remaining, float $rate) use ($record): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $msg = "{$percentage}% convertito. ";
                $msg .= "{$remaining} secondi rimanenti (rate: {$rate})";

=======
>>>>>>> 06dadfb (.)
=======
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
=======
=======
>>>>>>> 2a62ef4 (.)
    public function execute(MediaConvert $record): ?string
    {
        $data = ConvertData::from($record);
        $starting_time = microtime(true);
        if (! $data->exists()) {
            return '';
        }
        $format = $data->getFFMpegFormat();
        // $file_new = $data->getConvertedFilename();
        $file_new = $record->converted_file;

        Notification::make()
            ->title('Start')
            ->success()
            ->send();

        /*
         * -preset ultrafast.
         */
        // @phpstan-ignore method.notFound
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            // ->addFilter(function (VideoFilters $filters) {
            //    $filters->resize(new \FFMpeg\Coordinate\Dimension(640, 480));
            // })
            // ->resize(640, 480)
            ->onProgress(function (float $percentage, float $remaining, float $rate) use ($record): void {
                $msg = "{$percentage}% transcoded";
                $msg .= "{$remaining} seconds left at rate: {$rate}";

<<<<<<< HEAD
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
<<<<<<< HEAD
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
=======
                $msg = "{$percentage}% convertito. ";
                $msg .= "{$remaining} secondi rimanenti (rate: {$rate})";

>>>>>>> fa4eb21 (.)
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
                $msg = "{$percentage}% convertito. ";
                $msg .= "{$remaining} secondi rimanenti (rate: {$rate})";

>>>>>>> 2a62ef4 (.)
                $record->update([
                    'percentage' => $percentage,
                    'remaining' => $remaining,
                    'rate' => $rate,
                ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
            ->inFormat($format)
            ->save($file_new);
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);

        $record->update([
            'status' => 'completed',
        ]);

>>>>>>> 06dadfb (.)
        return $file_new;

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

        return Storage::disk($data->disk)->url((string) $file_new);
        // Restituiamo il percorso del file
        return $file_new;
    }
}
