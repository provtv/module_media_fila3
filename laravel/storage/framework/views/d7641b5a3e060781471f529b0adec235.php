

<?php $__env->startSection('body'); ?>
    <div class="bg-neutral-1">
        <?php echo $__env->yieldContent('content'); ?>

        <?php if(isset($slot)): ?>
            <?php echo e($slot); ?>

        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pub_theme::layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Themes/TwentyOne/resources/views/layouts/auth.blade.php ENDPATH**/ ?>