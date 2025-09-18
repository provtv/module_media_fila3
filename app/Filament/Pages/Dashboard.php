<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
=======

class Dashboard extends Page
>>>>>>> b94526c9b (.)
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'media::filament.pages.dashboard';
}
