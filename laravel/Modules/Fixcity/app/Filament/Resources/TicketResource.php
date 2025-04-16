<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Resources;

use Dotswan\MapPicker\Fields\Map;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Illuminate\Support\Str;
use Modules\Fixcity\Enums\TicketPriorityEnum;
use Modules\Fixcity\Enums\TicketTypeEnum;
use Modules\Fixcity\Filament\Resources\TicketResource\Pages;
use Modules\Fixcity\Models\Ticket;
use Modules\Fixcity\Rules\FilterCoordinatesInRadius;
use Webmozart\Assert\Assert;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\Section::make()
                ->schema([
                    // Ticket Name
                    Forms\Components\TextInput::make('name')
                        ->hiddenLabel()
                        ->placeholder(__('fixcity::fixcity.ticket.title.placeholder').'*')
                        ->columnSpanFull() // Occupa tutta la larghezza disponibile
                        ->required()
                        ->maxLength(255)
                        ->afterStateUpdated(function (Set $set, Get $get, string $state) {
                            if ($get('slug')) {
                                return;
                            }
                            $set('slug', Str::slug($state));
                        })
                        ->extraAttributes([
                            'style' => '',
                        ]),

                    // Slug
                    Forms\Components\TextInput::make('slug')
                        ->columnSpanFull() // Anche lo slug occupa tutta la larghezza disponibile
                        ->required()
                        ->hidden()
                        ->extraAttributes(['class' => 'max-w-full', 'style' => 'padding: 0; margin: 0;']), // Rimozione del padding e margini

                    // Ticket Type
                    Forms\Components\Select::make('type')
                        ->hiddenLabel()
                        ->placeholder(__('fixcity::fixcity.ticket.type.placeholder').'*')
                        ->searchable()
                        ->options(TicketTypeEnum::class)
                        ->columnSpanFull(),

                    // Ticket Priority
                    Forms\Components\Select::make('priority')
                        ->hiddenLabel()
                        ->placeholder(__('fixcity::fixcity.ticket.priorities.label'))
                        ->searchable()
                        ->options(TicketPriorityEnum::class)
                        ->default(TicketPriorityEnum::default())
                        ->columnSpanFull(),

                    // Ticket Content (RichEditor)
                    // Forms\Components\RichEditor::make('content')
                    //     ->label(__('ticket::ticket.content.label'))
                    //     ->required()
                    //     ->columnSpanFull()
                    //     ->extraAttributes(['class' => 'max-w-full', 'style' => 'padding: 0; margin: 0;']), // Rimozione del padding e margini

                    Forms\Components\Textarea::make('content')
                        ->hiddenLabel()
                        ->placeholder(__('fixcity::fixcity.ticket.content.placeholder').'**')
                        ->rows(2)
                        ->cols(10)
                        ->helperText(__('fixcity::fixcity.ticket.content.helper_text')),

                    // Hidden Latitude and Longitude
                    Forms\Components\TextInput::make('latitude')
                        ->hidden(
                            function () {
                                Assert::notNull(Filament::auth()->user());
                                Assert::notNull(Filament::auth()->user()->profile);

                                return Filament::auth()->user()->profile->isSuperAdmin() ? false : true;
                            }
                        )
                        ->readOnly(),
                    Forms\Components\TextInput::make('longitude')
                        ->hidden(
                            function () {
                                Assert::notNull(Filament::auth()->user());
                                Assert::notNull(Filament::auth()->user()->profile);

                                return Filament::auth()->user()->profile->isSuperAdmin() ? false : true;
                            }
                        )
                        ->readOnly(),

                    // Map Section
                    // NOTA BENE, ASSICURATI DI ABILITARE LA LOCALIZZAZIONE NEL BROWSER
                    Map::make('location')
                        ->label(__('fixcity::fixcity.ticket.your-location'))
                        ->columnSpanFull() // Occupare l'intera larghezza disponibile
                        ->default([
                            'lat' => 40.4168,
                            'lng' => -3.7038,
                        ])
                        ->afterStateUpdated(function (Set $set, ?array $state): void {
                            if (is_array($state)) {
                                $set('latitude', $state['lat']);
                                $set('longitude', $state['lng']);
                            }
                        })
                        ->afterStateHydrated(function ($state, $record, Set $set): void {
                            $set('location', ['lat' => $record?->latitude, 'lng' => $record?->longitude]);
                        })
                        ->rules([new FilterCoordinatesInRadius])
                        ->liveLocation()
                        ->showMarker(true) // https://github.com/dotswan/filament-map-picker/pull/51
                        ->markerColor('#22c55eff')
                        ->showFullscreenControl()
                        ->showZoomControl()
                        ->draggable()
                        ->clickable(true)
                        ->tilesUrl('https://tile.openstreetmap.de/{z}/{x}/{y}.png')
                        ->zoom(15)
                        ->detectRetina()
                        ->showMyLocationButton()
                    // ->extraAttributes(['class' => 'max-w-full', 'style' => 'min-height: 300px; padding: 0; margin: 0;'])
                    ,

                    // Image Upload
                    // SpatieMediaLibraryFileUpload::make('images')
                    //     ->label(__('ticket::ticket.insert-images'))
                    //     ->collection('ticket')
                    //     ->directory('ticket')
                    //     ->disk('uploads')
                    //     ->responsiveImages()
                    //     ->multiple()
                    //     ->required()
                    //     ->columnSpanFull()
                    //     // ->extraAttributes(['class' => 'max-w-full', 'style' => 'padding: 0; margin: 0;'])
                    //     ,

                    SpatieMediaLibraryFileUpload::make('images')
                        ->label(__('fixcity::fixcity.ticket.insert-images'))
                        ->collection('ticket')
                        ->directory('ticket')
                        ->disk('uploads')
                        ->responsiveImages()
                        ->multiple()
                        ->required()
                        ->maxFiles(5) // Limita il numero di file caricabili
                        ->maxSize(10240) // Imposta un limite massimo di 10MB per file
                        // ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg']) // Accetta solo immagini
                        ->columnSpanFull(),

                ])
                ->columns(1) // Imposta il layout su una colonna
                ->extraAttributes(['class' => 'w-full max-w-full mx-auto', 'style' => 'padding: 0; margin: 0; !important;']), // Rimozione padding e margine
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
            'view' => Pages\ViewTicket::route('/{record}'),
        ];
    }
}
