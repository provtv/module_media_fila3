<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Exception;
use Filament\Actions\CreateAction;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Media\Filament\Actions\Table\ConvertAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Models\Media;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;

class ListMedia extends XotBaseListRecords
{
    protected static string $resource = MediaResource::class;

    public function getGridTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'));

        return [
            Stack::make([
                TextColumn::make('collection_name'),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('mime_type')
                    ->sortable(),

                ImageColumn::make('preview')
                    ->size(60)
                    ->defaultImageUrl(fn ($record) => $record->getUrlConv('thumb')),

                TextColumn::make('human_readable_size'),

                TextColumn::make('creator.name')
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->dateTime($date_format)
                    ->toggleable(),
            ]),
        ];
    }

    public function getListTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'));

        return [
            TextColumn::make('collection_name'),

            TextColumn::make('name')
                ->searchable()
                ->sortable(),

            TextColumn::make('mime_type')
                ->sortable(),

            ImageColumn::make('preview')
                ->size(60)
                ->defaultImageUrl(fn ($record) => $record->getUrlConv('thumb')),

            TextColumn::make('human_readable_size'),

            TextColumn::make('creator.name')
                ->toggleable(),

            TextColumn::make('created_at')
                ->dateTime($date_format)
                ->toggleable(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            'type' => SelectFilter::make('mime_type')
                ->options([
                    'image/jpeg' => 'JPEG',
                    'image/png' => 'PNG',
                    'application/pdf' => 'PDF',
                ]),
        ];
    }

    public function getTableActions(): array
    {
        return [
            ViewAction::make()
                ->label(''),
            Action::make('view_attachment')
                ->label('')
                ->icon('heroicon-s-eye')
                ->color('gray')
                ->url(
                    static fn (Media $record): string => $record->getUrl()
                )->openUrlInNewTab(true),
            DeleteAction::make()
                ->label('')
                ->requiresConfirmation(),
            Action::make('download_attachment')
                ->label('')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(
                    static fn ($record) => response()->download($record->getPath(), $record->file_name)
                ),
            Action::make('convert')
                ->label('')
                ->icon('convert01')
                ->color('gray')
                ->url(
                    function ($record): string {
                        Assert::string($res = static::$resource::getUrl('convert', ['record' => $record]));

                        return $res;
                    }
                )->openUrlInNewTab(true),
            Action::make('preview')
                ->label('')
                ->icon('heroicon-o-eye')
                ->url(fn ($record) => route('media.preview', $record))
                ->openUrlInNewTab(),
            Action::make('stream')
                ->label('')
                ->icon('heroicon-o-play')
                ->url(fn ($record) => route('media.stream', $record))
                ->openUrlInNewTab(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

    /**
     * @return CreateAction[]
     *
     * @psalm-return list{CreateAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
