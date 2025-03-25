<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Pages;

// use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'fixcity::filament.pages.dashboard';
}
