<?php $__env->startSection('content'); ?>
    <?php echo $body_html; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('notify::layouts.' . $theme ?? 'app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/email.blade.php ENDPATH**/ ?>