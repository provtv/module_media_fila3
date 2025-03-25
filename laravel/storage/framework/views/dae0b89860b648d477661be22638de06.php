<?php $__currentLoopData = $getState(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
        <?php echo e($variable); ?>=<?php echo e($value); ?>

        <?php if(!$loop->last): ?>,
        <?php endif; ?>
    </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Activity/resources/views/filament/tables/columns/event-properties.blade.php ENDPATH**/ ?>