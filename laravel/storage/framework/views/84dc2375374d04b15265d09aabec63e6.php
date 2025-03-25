<div <?php echo e($attributes->merge($getExtraAttributes())->class([
    'filament-google-maps-column',
    'px-4 py-3' => ! $isInline(),
])); ?>>
    <?php
        $height = $getHeight();
        $width = $getWidth();
    ?>

    <div
        style="
            <?php echo $height !== null ? "height: {$height}px;" : null; ?>

            <?php echo $width !== null ? "width: {$width}px;" : null; ?>

        "
    >
        <?php if($path = $getImagePath()): ?>
            <img
                src="<?php echo e($path); ?>"
                style="
                    <?php echo $height !== null ? "height: {$height}px;" : null; ?>

                    <?php echo $width !== null ? "width: {$width}px;" : null; ?>

                "
                <?php echo e($getExtraImgAttributeBag()); ?>

            >
       <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/cheesegrits/filament-google-maps/resources/views/columns/filament-google-maps-column.blade.php ENDPATH**/ ?>