<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
<<<<<<< HEAD
 * Azione per convertire un video utilizzando il modello MediaConvert.
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * Azione per convertire un video utilizzando il modello MediaConvert.
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use Modules\Media\Models\MediaConvert;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
<<<<<<< HEAD
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
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
=======
<<<<<<< HEAD
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
=======
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> origin/dev
>>>>>>> origin/dev
 */
=======
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
 * 
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
 */
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
class ConvertVideoByMediaConvertAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
    public function execute(ConvertData $data, MediaConvert $record): string
    {
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
            ->onProgress(function (float $percentage, float $remaining, float $rate) use ($record): void {
<<<<<<< HEAD
=======
=======
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

>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
                $record->update([
                    'percentage' => $percentage,
                    'remaining' => $remaining,
                    'rate' => $rate,
                ]);
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);
>>>>>>> 2f7c4db (.)

        $record->update([
            'status' => 'completed',
        ]);

        return $file_new;
<<<<<<< HEAD
=======
=======

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

        $finished_time = microtime(true);

        $record->update([
            'execution_time' => $finished_time - $starting_time,
        ]);

        return Storage::disk($data->disk)->url((string) $file_new);
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
    }
}
