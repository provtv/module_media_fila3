<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('notify::emails.templates.minty.contentStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <tr>
        <td class="paragraph">
            <?php echo $html; ?>

        </td>
    </tr>



    
    <?php echo $__env->make('notify::emails.templates.minty.contentEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('notify::emails.templates.minty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/emails/templates/minty/mail.blade.php ENDPATH**/ ?>