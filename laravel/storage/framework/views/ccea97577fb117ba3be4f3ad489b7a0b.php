<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use Modules\Ticket\Models\Ticket;
use Modules\Ticket\Enums\TicketTypeEnum;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

new class extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategories = [];
    public $selectedStatus = '';
    public $resolvedTicketsCount;
    public $perPage = 3;
    public $expandedTickets = [];
    public $filteredCount = 0;

    public function toggleTicket($ticketId)
    {
        if (in_array($ticketId, $this->expandedTickets)) {
            $this->expandedTickets = array_diff($this->expandedTickets, [$ticketId]);
        } else {
            $this->expandedTickets[] = $ticketId;
        }
    }

    public function mount()
    {
        $this->resolvedTicketsCount = Ticket::query()
            ->where('created_at', '>=', Carbon::now()->subMonths(12))
            ->count();
    }

    public function loadMore()
    {
        $this->perPage += 3;
    }

    public function updatedSelectedCategories($value)
    {
        Log::error('Categories updated', ['value' => $this->selectedCategories]);
        $this->dispatch('categoryFilterUpdated')
            ->to(\Modules\Ticket\Filament\Widgets\TicketsMapWidget::class);
    }

    public function clearCategories()
    {
        $this->selectedCategories = [];
        $this->dispatch('categoryFilterUpdated')
            ->to(\Modules\Ticket\Filament\Widgets\TicketsMapWidget::class);
    }

    private function getAddress($lat, $lon): string
    {
        Log::error('Getting address for coordinates', ['lat' => $lat, 'lon' => $lon]);

        try {
            $response = Http::withHeaders([
                'User-Agent' => 'FixCity/1.0 (your@email.com)', // Replace with your actual app name and contact email
                'Accept-Language' => 'it' // For Italian results
            ])->get('https://nominatim.openstreetmap.org/reverse', [
                'format' => 'json',
                'lat' => $lat,
                'lon' => $lon,
                'zoom' => 18,
                'addressdetails' => 1,
            ]);

            Log::error('API Response', ['response' => $response->json()]);

            if ($response->successful()) {
                $data = $response->json();
                $address = $data['display_name'] ?? 'Indirizzo non trovato';
                Log::error('Address found', ['address' => $address]);
                return $address;
            }
        } catch (\Exception $e) {
            Log::error('Error getting address', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'lat' => $lat,
                'lon' => $lon
            ]);
        }

        Log::error('Returning default address');
        return 'Indirizzo non trovato';
    }

    public function with(): array
    {
        $categories = collect(TicketTypeEnum::cases())->map(function ($type) {
            $count = Ticket::where('type', $type->value)
                ->where('created_at', '>=', Carbon::now()->subMonths(12))
                ->count();

            return [
                'label' => $type->getLabel(),
                'value' => $type->value,
                'count' => $count
            ];
        });

        $query = Ticket::query()
            ->select('id', 'name', 'type', 'content', 'created_at', 'latitude', 'longitude')
            ->with('media')
            ->latest();

        if (count($this->selectedCategories) > 0) {
            $query->whereIn('type', $this->selectedCategories);
        }

        $this->filteredCount = $query->count();

        $tickets = $query->take($this->perPage)->get();

        $hasMorePages = Ticket::count() > $this->perPage;

        return [
            'categories' => $categories,
            'tickets' => $tickets,
            'hasMorePages' => $hasMorePages,
            'filteredCount' => $this->filteredCount
        ];
    }
}
?>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoidGlja2V0X2xpc3QiLCJwYXRoIjoiTW9kdWxlc1wvVGlja2V0XC9yZXNvdXJjZXNcL3ZpZXdzXC9jb21wb25lbnRzXC9ibG9ja3NcL3RpY2tldF9saXN0XC9hZ2lkLmJsYWRlLnBocCJ9", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-457196615-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/components/blocks/ticket_list/agid.blade.php ENDPATH**/ ?>