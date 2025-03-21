<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('notify::emails.templates.widgets.articleStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<h4 class="secondary"><strong>Hello World</strong></h4>
		<p>This is a test</p>

	<?php echo $__env->make('notify::emails.templates.widgets.articleEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<?php echo $__env->make('notify::emails.templates.widgets.newfeatureStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<h4 class="secondary"><strong>Hello World again</strong></h4>
		<p>This is another test</p>

	<?php echo $__env->make('notify::emails.templates.widgets.newfeatureEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('notify::emails.templates.widgets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/emails/samples/widgets.blade.php ENDPATH**/ ?>