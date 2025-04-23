<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

// use Intervention\Image\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Intervention\Image\ImageManager;
use Spatie\QueueableAction\QueueableAction;

=======
>>>>>>> aurmich/dev

use Intervention\Image\ImageManager;
use Spatie\QueueableAction\QueueableAction;


<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function execute(array $filenames, string $filenameOut): void
    {
        $manager = app(ImageManager::class);
=======
>>>>>>> aurmich/dev

    public function execute(array $filenames, string $filenameOut): void
    {
        $manager = app(ImageManager::class);

<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
        $width = 0;
        $height = 0;

        // Prima passata per calcolare le dimensioni totali
        foreach ($filenames as $filename) {
<<<<<<< HEAD

            $img = $manager->read(public_path($filename));

=======
<<<<<<< HEAD
            $img = $manager->read(public_path($filename));
=======

            $img = $manager->read(public_path($filename));

>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
            $width += $img->width();
            $height = max($height, $img->height());
        }

        // Crea un'immagine vuota con le dimensioni calcolate
        $img_canvas = $manager->create($width, $height);

<<<<<<< HEAD
=======
<<<<<<< HEAD
        // Seconda passata per inserire le immagini
        $delta = 0;
        foreach ($filenames as $filename) {
            $img = $manager->read(public_path($filename));
=======
>>>>>>> aurmich/dev


        // Seconda passata per inserire le immagini
        $delta = 0;
        foreach ($filenames as $filename) {

            $img = $manager->read(public_path($filename));

<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
            $img_canvas->place($img, 'top-left', $delta, 0);
            $delta += $img->width();
        }

<<<<<<< HEAD

        $img_canvas->save(public_path().'/'.$filenameOut, 100);

=======
<<<<<<< HEAD
        $img_canvas->save(public_path().'/'.$filenameOut, 100);
=======

        $img_canvas->save(public_path().'/'.$filenameOut, 100);

>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
    }
}
