<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

// use Intervention\Image\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class Merge
{
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
    }

    /**
     * Unisce più immagini orizzontalmente in un'unica immagine.
     *
     * @param array<int, string> $filenames Array di percorsi file delle immagini da unire
     * @param string $filenameOut Percorso del file di output
     */
    public function execute(array $filenames, string $filenameOut): void
    {
        Assert::notEmpty($filenames, 'L\'array dei nomi dei file non può essere vuoto');

        $manager = app(ImageManager::class);
        Assert::notNull($manager, 'ImageManager non può essere null');

        $width = 0;
        $height = 0;

        // Prima passata per calcolare le dimensioni totali
        foreach ($filenames as $filename) {
            Assert::string($filename, 'Il nome del file deve essere una stringa');
            $path = public_path($filename);
            Assert::fileExists($path, "Il file {$filename} non esiste");

            $img = $manager->read($path);
            Assert::isInstanceOf($img, Image::class, 'L\'oggetto restituito da manager->read() non è un\'istanza di Image');

            $width += $img->width();
            $height = max($height, $img->height());
        }

        // Crea un'immagine vuota con le dimensioni calcolate
        $img_canvas = $manager->create($width, $height);
        Assert::isInstanceOf($img_canvas, Image::class, 'L\'oggetto restituito da manager->create() non è un\'istanza di Image');

        // Seconda passata per inserire le immagini
        $delta = 0;
        foreach ($filenames as $filename) {
            $path = public_path($filename);
            $img = $manager->read($path);
            Assert::isInstanceOf($img, Image::class, 'L\'oggetto restituito da manager->read() non è un\'istanza di Image');

            $img_canvas->place($img, 'top-left', $delta, 0);
            $delta += $img->width();
        }

        $output_path = public_path().'/'.$filenameOut;
        Assert::notEmpty($output_path, 'Il percorso di output non può essere vuoto');

        $img_canvas->save($output_path, 100);
    }
}
