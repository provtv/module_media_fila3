<?php

<<<<<<< HEAD
=======
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

>>>>>>> b94526c9b (.)
declare(strict_types=1);

namespace Modules\Media\Actions\Image;

<<<<<<< HEAD
use Intervention\Image\ImageManager as InterventionImageManager;

class Merge
{
    /**
     * Unisce due immagini in una sola.
     *
     * @param string $path1 Percorso della prima immagine
     * @param string $path2 Percorso della seconda immagine
     * @param string $outputPath Percorso di salvataggio
     * @return bool
     */
    public function handle(string $path1, string $path2, string $outputPath): bool
    {
        // Compatibile con Intervention Image v2 (Laravel 10):
        $manager = new InterventionImageManager(['driver' => 'gd']);

        // Carica le immagini
        $image1 = $manager->make($path1);
        $image2 = $manager->make($path2);

        // Inserisce image2 sopra image1 (centrato)
        $image1->insert($image2, 'center');

        // Salva il risultato
        $image1->save($outputPath);

        return true;
=======
// use Intervention\Image\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Spatie\QueueableAction\QueueableAction;

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

    public function execute(array $filenames, string $filenameOut): void
    {
        $manager = app(ImageManager::class);

        $width = 0;
        $height = 0;

        // Prima passata per calcolare le dimensioni totali
        foreach ($filenames as $filename) {
            $img = $manager->read(public_path($filename));
            $width += $img->width();
            $height = max($height, $img->height());
        }

        // Crea un'immagine vuota con le dimensioni calcolate
        $img_canvas = $manager->create($width, $height);

        // Seconda passata per inserire le immagini
        $delta = 0;
        foreach ($filenames as $filename) {
            $img = $manager->read(public_path($filename));
            $img_canvas->place($img, 'top-left', $delta, 0);
            $delta += $img->width();
        }

        $img_canvas->save(public_path().'/'.$filenameOut, 100);
>>>>>>> b94526c9b (.)
    }
}
