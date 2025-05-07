<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando ConvertData.
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

/**
 * Classe per convertire video utilizzando i dati di conversione specificati.
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;

/**
 * Classe per convertire video utilizzando i dati di conversione specificati.
=======

/**
 * Classe per convertire video utilizzando i dati di conversione specificati.
 * 
 * @method \ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg inFormat(DefaultVideo $format)
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
 */
class ConvertVideoByConvertDataAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * Esegue la conversione del video.
     *
     * @throws \Exception Se il file non esiste o il nome del file convertito non è valido
     */
    public function execute(ConvertData $data): string
    {
        $this->validateInput($data);

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        // Instanziamo il formato prima di usarlo
        /** @var DefaultVideo $formatInstance */
        $formatInstance = new $format();

        // Configuriamo FFMpeg per la conversione
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
                $this->handleProgress($percentage, $remaining, $rate);
            })
            ->addFilter('-preset', 'ultrafast')
            ->save($file_new, $formatInstance);

        return $file_new;
    }

    /**
     * Valida i dati di input.
     *
     * @throws \Exception Se i dati non sono validi
     */
    private function validateInput(ConvertData $data): void
    {
=======
>>>>>>> 83f472a (.)
     * Execute the action.
     */
    public function execute(ConvertData $data): string
    {
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
=======
     * Esegue la conversione del video.
     *
     * @throws \Exception Se il file non esiste o il nome del file convertito non è valido
     */
    public function execute(ConvertData $data): string
    {
        $this->validateInput($data);

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        // Instanziamo il formato prima di usarlo
        /** @var DefaultVideo $formatInstance */
        $formatInstance = new $format();

        // Configuriamo FFMpeg per la conversione
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
                $this->handleProgress($percentage, $remaining, $rate);
            })
            ->addFilter('-preset', 'ultrafast')
            ->save($file_new, $formatInstance);

        return $file_new;
    }

    /**
     * Valida i dati di input.
     *
     * @throws \Exception Se i dati non sono validi
     */
    private function validateInput(ConvertData $data): void
    {
>>>>>>> e94deb4 (.)
        if (!$data->exists()) {
            throw new \Exception('Il file non esiste');
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (!$data->getConvertedFilename()) {
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }
    }

    /**
     * Gestisce il progresso della conversione.
     */
    private function handleProgress(float $percentage, float $remaining, float $rate): void
    {
        $message = sprintf(
            '%s%% transcoded, %s seconds left at rate: %s',
            number_format($percentage, 2),
            number_format($remaining, 2),
            number_format($rate, 2)
        );

        Log::info('Video conversion progress: ' . $message);
        
        if (class_exists(Notification::class)) {
            Notification::make()
                ->title('Conversione Video')
                ->body($message)
                ->send();
        }
=======
>>>>>>> 83f472a (.)
        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

        if (!$file_new) {
=======
        if (!$data->getConvertedFilename()) {
>>>>>>> e94deb4 (.)
            throw new \Exception('Il nome del file convertito non è stato specificato');
        }
    }

    /**
     * Gestisce il progresso della conversione.
     */
    private function handleProgress(float $percentage, float $remaining, float $rate): void
    {
        $message = sprintf(
            '%s%% transcoded, %s seconds left at rate: %s',
            number_format($percentage, 2),
            number_format($remaining, 2),
            number_format($rate, 2)
        );

<<<<<<< HEAD
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

        // Restituisci il percorso del file senza usare il metodo url()
        return $file_new;
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
=======
        Log::info('Video conversion progress: ' . $message);
        
        if (class_exists(Notification::class)) {
            Notification::make()
                ->title('Conversione Video')
                ->body($message)
                ->send();
        }
>>>>>>> e94deb4 (.)
    }
}
