<div>
    <svg class="icon icon-primary" wire:click="update()">
        <?php if($fav): ?>
            <use xlink:href="<?php echo e(Theme::asset('pub_theme::dist/svg/sprite.svg')); ?>#it-star-full">
            <?php else: ?>
                <use xlink:href="<?php echo e(Theme::asset('pub_theme::dist/svg/sprite.svg')); ?>#it-star-outline">
        <?php endif; ?>
    </svg>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Rating/resources/views/livewire/favorite/bs_italia.blade.php ENDPATH**/ ?>