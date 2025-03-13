<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Resources\TicketResource\Pages;

use Modules\Fixcity\Filament\Resources\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicket extends EditRecord
{
    protected static string $resource = TicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
