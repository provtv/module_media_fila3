<div class="input-group"
    wire:ignore
    x-data={lookup:{}}
    x-init="() => {
        new AddressAutocomplete('.google-address-lookup', (result, raw) => {
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('lookup', result)
        });
    }"
    <?php echo e($attributes); ?>

    >
    <input
        x-data
        x-on:address:list:refresh.window="$('.google-address-lookup').val('')"
        x-on:keydown.enter.prevent
        wire:ignore.self
        wire:loading.attr="readonly"
        autocomplete="google-lookup"
        class="form-control google-address-lookup"
        required
        type="search"
    >
</div><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/components/google-address-lookup.blade.php ENDPATH**/ ?>