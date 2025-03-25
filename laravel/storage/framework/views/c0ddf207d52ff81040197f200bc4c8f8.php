<?php $__env->startSection('content'); ?>
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: <?php echo config('ai.name'); ?>

    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ai::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/AI/resources/views/index.blade.php ENDPATH**/ ?>