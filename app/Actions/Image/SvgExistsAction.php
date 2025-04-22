<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

use Illuminate\Support\Arr;
use Modules\UI\Actions\Icon\GetAllIconsAction;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)

/**
 * Verifica l'esistenza di un SVG registrato utilizzando BladeUI Icons.
 *
 * @method bool execute(string $svgName)
 */
class SvgExistsAction
{
    /**
     * Verifica se l'SVG esiste nei set di icone registrati.
     *
<<<<<<< HEAD
     * @param  string $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
=======
<<<<<<< HEAD
     * @param  string $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
=======
     * @param  string  $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
     * @return bool True se l'SVG esiste, false altrimenti
     */
    public function execute(string $svgName): bool
    {
        if (empty($svgName)) {
            return false;
        }

        $packs = app(GetAllIconsAction::class)->execute();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
        Assert::isArray($packs, 'Il risultato di GetAllIconsAction deve essere un array');
        
        foreach ($packs as $pack) {
            Assert::isArray($pack, 'Ogni pacchetto deve essere un array');
            Assert::keyExists($pack, 'icons', 'Il pacchetto deve contenere la chiave icons');
            
            $icons = $pack['icons'];
            Assert::isIterable($icons, 'icons deve essere un array o un oggetto iterabile');
            
            foreach ($icons as $icon) {
                if ($svgName === $icon) {
                    return true;
                }
<<<<<<< HEAD
=======
=======
        foreach ($packs as $pack) {
            $icons = $pack['icons'];
            $first = Arr::first($icons, function (string $value, int $key) use ($svgName) {
                return $svgName == $value;
            });
            if ($first != null) {
                return true;
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
            }
        }

        return false;
    }
}
