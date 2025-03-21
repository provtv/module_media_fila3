<div>
    <?php if($fav): ?>
        <a class="btn btn-sm btn-soft-primary text-grape rounded-pill mb-3" wire:click="update()"><i
                class="uil uil-star"></i>&nbsp; Rimuovi dai preferiti
        </a>
    <?php else: ?>
        <a class="btn btn-sm btn-primary text-white rounded-pill mb-3" wire:click="update()"><i
                class="uil uil-star"></i>&nbsp; Aggiungi ai preferiti
        </a>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Rating/resources/views/livewire/favorite/sandbox.blade.php ENDPATH**/ ?>