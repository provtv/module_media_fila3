<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('notify::emails.templates.ark.heading', [
		'heading' => 'Hello World!',
		'level' => 'h1'
	], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('notify::emails.templates.ark.contentStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <h4 class="secondary"><strong>Hello World</strong></h4>
        <p>This is a test</p>

    <?php echo $__env->make('notify::emails.templates.ark.contentEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('notify::emails.templates.ark.heading', [
		'heading' => 'Another headline',
		'level' => 'h2'
	], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('notify::emails.templates.ark.contentStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <h4 class="secondary"><strong>Hello World again</strong></h4>
        <p>This is another test</p>

    <?php echo $__env->make('notify::emails.templates.ark.contentEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('notify::emails.templates.ark', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/emails/samples/ark.blade.php ENDPATH**/ ?>