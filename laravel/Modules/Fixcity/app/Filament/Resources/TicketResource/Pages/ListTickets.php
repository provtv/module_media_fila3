<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Resources\TicketResource\Pages;

use Modules\Fixcity\Filament\Resources\TicketResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
use Filament\Tables;

class ListTickets extends ListRecords
{
    protected static string $resource = TicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->sortable(),
            Tables\Columns\TextColumn::make('title')
                ->searchable(),
            Tables\Columns\TextColumn::make('status')
                ->badge()
                ->colors([
                    'danger' => 'open',
                    'warning' => 'in_progress',
                    'success' => 'resolved',
                    'secondary' => 'closed',
                ]),
            Tables\Columns\TextColumn::make('priority')
                ->badge()
                ->colors([
                    'secondary' => 'low',
                    'primary' => 'medium',
                    'warning' => 'high',
                    'danger' => 'critical',
                ]),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}
