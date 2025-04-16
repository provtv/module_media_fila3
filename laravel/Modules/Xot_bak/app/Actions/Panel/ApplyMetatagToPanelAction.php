<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Panel;

use Filament\Panel;
use Modules\Xot\Datas\MetatagData;
use Spatie\QueueableAction\QueueableAction;

class ApplyMetatagToPanelAction
{
    use QueueableAction;

    public function execute(Panel &$panel): Panel
    {
        try {
            $metatag = MetatagData::make();

            return $panel
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
                // @phpstan-ignore argument.type
                ->colors($metatag->getColors())
=======
<<<<<<< HEAD
                // @phpstan-ignore argument.type
                ->colors($metatag->getColors())
=======
                //->colors($metatag->getColors())
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
                //->colors($metatag->getColors())
=======
                // @phpstan-ignore argument.type
                ->colors($metatag->getColors())
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
                ->brandLogo($metatag->getLogoHeader())
                ->brandName($metatag->title)
                ->darkModeBrandLogo($metatag->getLogoHeaderDark())
                ->brandLogoHeight($metatag->getLogoHeight())
                ->favicon($metatag->getFavicon());
        } catch (\Exception $e) {
            // Log l'errore ma non bloccare l'applicazione
            \Illuminate\Support\Facades\Log::error('Error applying metatag to panel: ' . $e->getMessage());
            return $panel;
        }
    }
}
