<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('notify::emails.templates.widgets.articleStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $html; ?>


    <?php echo $__env->make('notify::emails.templates.widgets.articleEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('notify::emails.templates.widgets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/emails/templates/widgets/mail.blade.php ENDPATH**/ ?>