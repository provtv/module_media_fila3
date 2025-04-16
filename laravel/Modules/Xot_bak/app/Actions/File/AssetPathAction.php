<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;

class AssetPathAction
{
    use QueueableAction;

    public function execute(string $asset): string
    {
        [$ns,$file] = explode('::', $asset);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        $module_path = Module::getModulePath($ns).'Resources';
=======
<<<<<<< HEAD
        $module_path = Module::getModulePath($ns).'resources';
=======
        $module_path = Module::getModulePath($ns).'Resources';
>>>>>>> origin/dev
>>>>>>> origin/dev
<<<<<<< HEAD
=======
        $module_path = Module::getModulePath($ns).'Resources';
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf

        return $module_path.'/'.$file;
    }
}
