<?php

namespace Modules\Fixcity\Filament\Widgets;

use Cheesegrits\FilamentGoogleMaps\Widgets\MapWidget;
use Filament\Actions\Action;
use Filament\Infolists\Components\Card;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Livewire\Attributes\Reactive;
use Modules\Fixcity\Enums\TicketStatusEnum;
use Modules\Fixcity\Models\Ticket;

class TicketsMapWidget extends MapWidget
{
    public $userLatitude;

    public $userLongitude;

    protected static ?string $markerAction = 'markerAction';

    public function markerAction(): Action
    {
        return Action::make('markerAction')
            ->label('Details')
            ->infolist([
                Card::make([
                    TextEntry::make('name')
                        ->label('Titolo')
                        ->url(fn($record) => route('ticket.view', ['slug' => $record->slug]))
                        ->extraAttributes(['text-blue-600', 'hover:underline'])
                        ->openUrlInNewTab(),
                    TextEntry::make('type')->label('Tipologia di segnalazione'),
                    TextEntry::make('content')->label('Dettaglio'),
                    ImageEntry::make('media_urls')
                        ->label('Immagini')
                        ->extraAttributes(['class' => 'flex flex-wrap gap-2 justify-start w-full'])
                        ->disk('uploads'),
                ]),
            ])
            ->record(function (array $arguments) {
                // Retrieve the Ticket model instance
                $ticket = array_key_exists('model_id', $arguments) ? Ticket::find($arguments['model_id']) : null;

                // Calculate the address if the ticket exists
                if ($ticket) {
                    $ticket->media_urls = $ticket->media->isNotEmpty()
                        ? $ticket->media->map(fn($media) => $media->getFullUrl())->toArray()
                        : [asset('images/placeholder.jpg')];

                    return $ticket;
                }

                // Return null if the ticket is not found
            })
            ->modalSubmitAction(false);
    }

    protected function getZoom(): int
    {
        return 15;
    }

    #[Reactive]
    public array $categoryFilter = [];

    protected static ?string $heading = '';

    protected static ?int $sort = 1;

    protected static ?bool $clustering = true;

    protected static ?bool $fitToBounds = false;

    protected static ?string $mapId = 'incidents';

    protected static ?string $pollingInterval = null; // Disable polling

    public function getMapConfig(): string
    {
        $config = json_decode(parent::getMapConfig(), true);

        if ($this->userLatitude && $this->userLongitude) {
            $config['center'] = [
                'lat' => $this->userLatitude,
                'lng' => $this->userLongitude,
            ];
        }

        return json_encode($config);
    }

    public function rerender()
    {
        $this->dispatch('rerender-map');
    }

    protected function getData(): array
    {
        $query = Ticket::query();

        // Apply category filter if any categories are selected
        if (! empty($this->categoryFilter)) {
            $query->whereIn('type', $this->categoryFilter);
        }

        // Then apply the status and user conditions
        $query->where(function ($q) {
            $q->whereIn('status', TicketStatusEnum::canViewByAll())
                ->orWhere('created_by', authId())
                ->orWhere('updated_by', authId());
        });

        $locations = $query->latest()->get()->toArray();

        $data = [];

        if ($this->userLatitude && $this->userLongitude) {
            $data[] = [
                'location' => [
                    'lat' => $this->userLatitude,
                    'lng' => $this->userLongitude,
                ],
                'label' => '',
                'id' => '',
                'icon' => [
                    'url' => url('images/user-location.svg'),
                    'type' => 'svg',
                    'scale' => [0, 0],
                ],
            ];
        } else {
            $data[] = [
                'location' => [
                    'lat' => 41.125278,
                    'lng' => 16.866667,
                ],
                'label' => '',
                'id' => '',
                'icon' => [
                    'url' => url('images/dealership.svg'),
                    'type' => 'svg',
                    'scale' => [0, 0],
                ],
            ];
        }


        foreach ($locations as $location) {
            if ($location->latitude && $location->longitude) {
                $data[] = [
                    'location' => [
                        'lat' => floatval($location->latitude),
                        'lng' => floatval($location->longitude),
                    ],
                    'label' => $location->name,
                    'id' => $location->id,
                    'icon' => $location->getIconData(),
                ];
            }
        }
dd($data);
        return $data;
    }

    public function openTicketModal($ticketId)
    {
        $this->dispatchBrowserEvent('open-ticket-modal', ['ticketId' => $ticketId]); // Dispatch the event to open the modal
    }

    protected function getMapOptions(): array
    {
        return [
            ...parent::getMapOptions(),
            'zoom' => 12,
            'zoomControl' => true,
            'mapTypeControl' => true,
            'scaleControl' => true,
            'streetViewControl' => true,
            'rotateControl' => true,
            'fullscreenControl' => true,
            'gestureHandling' => 'greedy',
        ];
    }

    public function getListeners()
    {
        return array_merge(parent::getListeners(), [
            'categoryFilterUpdated' => 'rerender',
            'updateMapCenter' => 'updateMapCenter',
        ]);
    }

    public function updateMapCenter($latitude, $longitude)
    {
        $this->userLatitude = $latitude;
        $this->userLongitude = $longitude;
        $this->rerender();
    }

    public function mount($latitude = null, $longitude = null)
{
    parent::mount();

    // Assign the passed latitude and longitude to the reactive properties
    if ($latitude !== null) {
        $this->userLatitude = $latitude;
    }
    
    if ($longitude !== null) {
        $this->userLongitude = $longitude;
    }
}
}
