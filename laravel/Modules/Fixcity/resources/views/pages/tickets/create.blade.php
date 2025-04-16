<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;

name('ticket.create');
middleware(['auth']);

// new class extends Component
// {
// };
?>

<x-layouts.marketing>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .fi-input-wrp {
            ring: none !important;
            box-shadow: none !important;
            border-bottom: solid 1px !important;
            box-shadow: none !important;
            border-radius: 0 !important;
            font-family: 'Titillium Web', sans-serif !important;
            font-weight: 400 !important;
            color: '#5d7083';
        }

        .title {
            font-family: 'Titillium Web', sans-serif !important;
            font-weight: 800 !important;
        }

        .fi-fo-rich-editor {
            border: none !important;
            box-shadow: none !important;
            --tw-ring-shadow: none !important;
            --tw-ring-color: transparent !important;
            background: transparent !important;
            padding: 0 !important;
            color: black !important;
            font-weight: 400 !important;
        }

        .fi-fo-rich-editor.fi-disabled {
            background: transparent !important;
            --tw-ring-shadow: none !important;
            --tw-ring-color: transparent !important;
            color: black !important;
            font-weight: 400 !important;
        }

        .dark .fi-fo-rich-editor.fi-disabled {
            color: white !important;
        }

        /* New styles for the form */
        .fi-fo-wizard {
            box-shadow: none !important;
            border: none !important;
            background: transparent !important;
        }

        .fi-fo-section {
            box-shadow: none !important;
            border: none !important;
            background: transparent !important;
        }

        .fi-fo-textarea {
            border-radius: 0 !important;
            box-shadow: none !important;
            border-bottom: solid 1px !important;
        }

        .fi-fo-select {
            border-radius: 0 !important;
            box-shadow: none !important;
            border-bottom: solid 1px !important;
        }

        .dark .fi-input-wrp input,
        .dark .fi-fo-textarea textarea,
        .dark .fi-fo-select select {
            color: black !important;
            /* Ensure text inside select remains black */
            background-color: white !important;
            /* Optional, ensures background is white */
        }

        /* Handle the focus state of the select input */
        .dark .fi-fo-select select {
            color: black !important;
            /* Ensure the selected text stays black */
            background-color: transparent !important;
            /* Make background transparent for better contrast */
        }

        /* Dark mode - Ensure the dropdown options (when opened) text stays black */
        .dark .fi-fo-select select option {
            color: black !important;
            /* Ensure text inside options stays black */
            background-color: transparent !important;
            /* Transparent background for options */
        }

        /* Dark mode - Style the selected option (the one displayed when dropdown is closed) */
        .dark .fi-fo-select select option:checked {
            color: black !important;
            /* Ensure selected option is black */
            background-color: transparent !important;
            /* Make background transparent for selected option */
        }

        /* Optional: Style the background of the selected option */
        .dark .fi-fo-select select option:checked:focus {
            background-color: transparent !important;
            /* Optional: Make it transparent */
        }

        /* Optional: Style the option text when hovered */
        .dark .fi-fo-select select option:hover {
            background-color: #e5e7eb !important;
            /* Optional hover background color */
            color: black !important;
            /* Keep text black */
        }
        /* Dark Mode - Style when the item is selected */
        .dark .choices__item--selectable[aria-selected="true"] {
            color: black !important;
            /* White text for selected item */
        }
    </style>
    <div class="container mx-auto px-4 max-w-5xl">
        <x-ui.marketing.breadcrumbs :crumbs="[['text' => 'Tickets'],['text' => 'Create']]" />
        <div class="w-full">
            <h1 class="text-5xl mt-5 mb-2 title dark:text-white">Segnalazione disservizio</h1>
            <br />
            @livewire(\Modules\Fixcity\Filament\Widgets\CreateTicketWidget::class)
        </div>
    </div>
</x-layouts.marketing>