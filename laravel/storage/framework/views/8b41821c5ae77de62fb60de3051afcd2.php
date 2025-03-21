<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/filament/forms/resources/views/components/group.blade.php ENDPATH**/ ?>