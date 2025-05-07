<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando il modello MediaConvert.
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
use Modules\Media\Datas\ConvertData;
use Modules\Media\Models\MediaConvert;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;

/**
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
 * 
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
 */
class ConvertVideoByMediaConvertAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * Esegue la conversione del video e aggiorna il record MediaConvert.
     *
     * @throws \Exception Se il file non esiste o il nome del file convertito non è valido
     */
    public function execute(ConvertData $data, MediaConvert $record): string
    {
        $this->validateInput($data, $record);

        $format = $data->getFFMpegFormat();
        $file_new = $record->converted_file;

        // Instanziamo il formato prima di usarlo
        /** @var DefaultVideo $formatInstance */
        $formatInstance = new $format();

        // Configuriamo FFMpeg per la conversione
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate) use ($record): void {
                $this->handleProgress($percentage, $remaining, $rate, $record);
            })
            ->addFilter('-preset', 'ultrafast')
            ->save($file_new, $formatInstance);

        $record->update(['status' => 'completed']);

        return $file_new;
    }

    /**
     * Valida i dati di input.
     *
     * @throws \Exception Se i dati non sono validi
     */
    private function validateInput(ConvertData $data, MediaConvert $record): void
    {
=======
>>>>>>> 83f472a (.)
     * Execute the action.
     */
    public function execute(ConvertData $data, MediaConvert $record): string
    {
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
        if (!$data->exists()) {
            throw new \Exception('Il file non esiste');
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (!$record->converted_file) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }
    }

    /**
     * Gestisce il progresso della conversione e aggiorna il record.
     */
    private function handleProgress(float $percentage, float $remaining, float $rate, MediaConvert $record): void
    {
        $message = sprintf(
            '%s%% transcoded, %s seconds left at rate: %s',
            number_format($percentage, 2),
            number_format($remaining, 2),
            number_format($rate, 2)
        );

        Log::info('Video conversion progress: ' . $message);

        $record->update([
            'percentage' => $percentage,
            'remaining' => $remaining,
            'rate' => $rate,
        ]);
        
        if (class_exists(Notification::class)) {
            Notification::make()
                ->title('Conversione Video')
                ->body($message)
                ->send();
        }
=======
>>>>>>> 83f472a (.)
        $format = $data->getFFMpegFormat();
        $file_new = $record->converted_file;

        if (!$file_new) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }

        // Instanziamo il formato prima di usarlo
        $formatInstance = new $format();

        // @phpstan-ignore-next-line
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate) use ($record): void {
                $record->update([
                    'percentage' => $percentage,
                    'remaining' => $remaining,
                    'rate' => $rate,
                ]);
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);

        $record->update([
            'status' => 'completed',
        ]);

        return $file_new;
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
    }
}
