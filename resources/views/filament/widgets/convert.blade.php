<<<<<<< HEAD
<<<<<<< HEAD
lament-widgets::widget>
=======
<x-filament-widgets::widget>
>>>>>>> b94526c9b (.)
=======
<x-filament-widgets::widget>
>>>>>>> d9766aa8a (.)
    <x-filament::section>
        {{-- Widget content --}}

        <x-filament::button wire:click="begin">Start/Stop</x-filament::button>

        <h1>Time: <span wire:stream="count">{{ $time }}</span></h1>
        percentage {{ $percentage }}

    </x-filament::section>
</x-filament-widgets::widget>
