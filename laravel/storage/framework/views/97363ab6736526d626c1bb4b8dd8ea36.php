<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/filament/infolists/resources/views/components/grid.blade.php ENDPATH**/ ?>