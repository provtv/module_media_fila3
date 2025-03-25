<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" lang="<?php echo e($lang); ?>">
<?php $__env->startSection('htmlheader'); ?>
	<?php echo $__env->make('geo::layouts.partials.htmlheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<body>
<?php echo $__env->yieldContent('body'); ?>
<?php $__env->startSection('scripts'); ?>
	<?php echo $__env->make('geo::layouts.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldSection(); ?>
</body>
</html><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/layouts/plane.blade.php ENDPATH**/ ?>