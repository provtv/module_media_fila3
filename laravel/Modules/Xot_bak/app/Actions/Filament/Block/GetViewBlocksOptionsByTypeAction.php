<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Block;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\FixPathAction;
use Spatie\QueueableAction\QueueableAction;

class GetViewBlocksOptionsByTypeAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     *
     * @return array<array<string>|string>
     */
    public function execute(string $type, bool $img = false): array
    {
<<<<<<< HEAD
        $files = File::glob(base_path('Modules').'/*/resources/views/components/blocks/'.$type.'/*.blade.php');
=======
        Assert::stringNotEmpty($type, 'Il tipo di blocco non può essere vuoto');
        
        $basePath = base_path('Modules');
        Assert::directory($basePath, 'Il percorso base dei moduli non esiste');
        
        $globPattern = $basePath.'/*/resources/views/components/blocks/'.$type.'/*.blade.php';
        $files = File::glob($globPattern);
        
        if ($files === false) {
            return []; // Ritorna un array vuoto se non ci sono file
        }
        
        Assert::isArray($files, 'Il risultato di File::glob() deve essere un array');
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2

        $opts = Arr::mapWithKeys(
            $files,
<<<<<<< HEAD
            function ($path) use ($img, $type) {
                $path = app(FixPathAction::class)->execute($path);
                $module_low = Str::of($path)
                    ->between(DIRECTORY_SEPARATOR.'Modules'.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR)
                    ->lower()
                    ->toString();
                $info = pathinfo($path);
=======
            function ($path) use ($img, $type, $fixPathAction): array {
                // Verifichiamo che il percorso sia una stringa
                Assert::string($path, 'Il percorso del file deve essere una stringa');
                
                // Normalizziamo il percorso
                $pathStr = $fixPathAction->execute($path);
                Assert::stringNotEmpty($pathStr, 'Il percorso normalizzato non può essere vuoto');
                
                // Estraiamo il nome del modulo dal percorso
                $modulePath = Str::of($pathStr)
                    ->between(DIRECTORY_SEPARATOR.'Modules'.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR);
                    
                Assert::notEmpty($modulePath, 'Impossibile estrarre il nome del modulo dal percorso');
                
                $module_low = is_string($modulePath) ? $modulePath : (string) $modulePath->lower();
                Assert::stringNotEmpty($module_low, 'Il nome del modulo in minuscolo non può essere vuoto');
                
                // Estraiamo il nome del file
                $info = pathinfo($pathStr);
                Assert::isArray($info, 'Il risultato di pathinfo() deve essere un array');
                Assert::keyExists($info, 'basename', 'L\'array info deve contenere la chiave basename');
                
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2
                $name = Str::of($info['basename'])->before('.blade.php')->toString();
                $view = $module_low.'::components.blocks.'.$type.'.'.$name;
                if ($img) {
                    $img_path = app(\Modules\Xot\Actions\File\AssetAction::class)
                        ->execute($module_low.'::img/screenshots/'.$name.'.png');

                    return [$view => $img_path];
                }

                return [$view => $name];
            }
        );

        return $opts;
    }
}
