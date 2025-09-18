<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
=======

class Dashboard extends Page
>>>>>>> b94526c9b (.)
=======

class Dashboard extends Page
>>>>>>> d9766aa8a (.)
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'media::filament.pages.dashboard';
}
