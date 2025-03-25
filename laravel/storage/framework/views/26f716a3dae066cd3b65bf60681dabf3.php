<?php $__env->startComponent('mail::message'); ?>
# Laravel Health

<?php echo e(__('health::notifications.check_failed_mail_body')); ?>


<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
- <?php echo e($result->check->getLabel()); ?>: <?php echo e($result->getNotificationMessage()); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/spatie/laravel-health/resources/views/mail/checkFailedNotification.blade.php ENDPATH**/ ?>