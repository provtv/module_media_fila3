<?php $__env->startSection('content'); ?>
	
	<div class="progress" id="map_progress" style="height: 50px;">
  		<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
  			<span id="current-progress"></span>
  		</div>
	</div>

    <div id="map" class="sidebar-map"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('geo::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/home/index.blade.php ENDPATH**/ ?>