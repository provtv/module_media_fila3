<?php $__env->startSection('content'); ?>

    

    <?php echo $__env->make('notify::emails.templates.ark.contentStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $html; ?>

    <?php echo $__env->make('notify::emails.templates.ark.contentEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('notify::emails.templates.ark', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/emails/templates/ark/mail.blade.php ENDPATH**/ ?>