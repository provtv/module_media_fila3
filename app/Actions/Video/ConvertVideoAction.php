<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
<<<<<<< HEAD
=======
use ProtoneMedia\LaravelFFMpeg\Exporters\MediaExporter;
use ProtoneMedia\LaravelFFMpeg\Exporters\EncodingException;
>>>>>>> aurmich/dev
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use FFMpeg\Format\Video\X264;

class ConvertVideoAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Execute the action.
     */
    public function execute(string $disk_mp4, string $file_mp4, string $file_new): string
    {
        $media = FFMpeg::fromDisk($disk_mp4);

        $openedMedia = $media->open($file_mp4);
        
        $exportedMedia = $openedMedia->export();

        $format = new X264();
        $format->setKiloBitrate(1000);

        $toDiskMedia = $exportedMedia->toDisk($disk_mp4);
        
        $formattedMedia = $toDiskMedia->inFormat($format);
        
        $formattedMedia->save($file_new);

        return Storage::disk($disk_mp4)->url($file_new);
=======
     * Converte un video da un formato all'altro utilizzando FFmpeg.
     *
     * @param string $disk_mp4 Nome del disco di storage
     * @param string $file_mp4 Percorso del file video di input
     * @param string $file_new Percorso del file video di output
     *
     * @throws EncodingException Se il processo di conversione fallisce
     * @throws \InvalidArgumentException Se i parametri non sono validi
     *
     * @return string URL del file video convertito
     */
    public function execute(string $disk_mp4, string $file_mp4, string $file_new): string
    {
        Assert::notEmpty($disk_mp4, 'Il nome del disco non può essere vuoto');
        Assert::notEmpty($file_mp4, 'Il percorso del file di input non può essere vuoto');
        Assert::notEmpty($file_new, 'Il percorso del file di output non può essere vuoto');

        try {
            // Inizializzazione dell'oggetto MediaOpener
            $media = FFMpeg::fromDisk($disk_mp4);
            Assert::isInstanceOf($media, MediaOpener::class, 'FFMpeg::fromDisk deve restituire un\'istanza di MediaOpener');

            // Apertura del file
            $openedMedia = $media->open($file_mp4);
            Assert::notNull($openedMedia, 'Impossibile aprire il file video');

            // Preparazione per l'esportazione
            $exportedMedia = $openedMedia->export();
            Assert::isInstanceOf($exportedMedia, MediaExporter::class, 'openedMedia->export deve restituire un\'istanza di MediaExporter');

            // Configurazione del formato di output
            $format = new X264();
            $format->setKiloBitrate(1000);

            // Impostazione del disco di output
            $toDiskMedia = $exportedMedia->toDisk($disk_mp4);
            Assert::notNull($toDiskMedia, 'Impossibile impostare il disco di output');

            // Impostazione del formato di output
            $formattedMedia = $toDiskMedia->inFormat($format);
            Assert::notNull($formattedMedia, 'Impossibile impostare il formato di output');

            // Salvataggio del file convertito
            $formattedMedia->save($file_new);

            // Restituzione dell'URL del file convertito
            return Storage::disk($disk_mp4)->url($file_new);
        } catch (EncodingException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new \InvalidArgumentException('Errore durante la conversione del video: ' . $e->getMessage(), 0, $e);
        }
>>>>>>> aurmich/dev
    }
}
