<?php

use function Laravel\Folio\name;
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

?>


                <form wire:submit="confirm" class="space-y-6">
                    <x-ui.input label="Password" type="password" id="password" name="password" wire:model="password" />
                    <div class="flex items-center justify-end text-sm">
                        <x-ui.text-link href="{{ route('password.request') }}">Forgot your password?</x-ui.text-link>
                    </div>
                    <x-ui.button type="primary" rounded="md" submit="true">Confirm password</x-ui.button>
                </form>
                