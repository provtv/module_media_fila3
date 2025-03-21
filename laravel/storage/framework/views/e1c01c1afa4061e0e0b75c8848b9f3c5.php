<?php echo $__env->make('notify::emails.templates.'.$theme.'.contentStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $html; ?>

<?php echo $__env->make('notify::emails.templates.'.$theme.'.contentEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/emails/templates/item.blade.php ENDPATH**/ ?>