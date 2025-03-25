
<script>
    var base_url='<?php echo e(asset('/')); ?>';
    var lang='<?php echo e(app()->getLocale()); ?>';
    var base_url_lang='<?php echo e(asset(app()->getLocale())); ?>';
    
<?php if(\Request::has('address')): ?>
    var address ="<?php echo e(\Request::input('address')); ?>";
<?php endif; ?>
<?php if(\Request::has('lat') && \Request::has('lng')): ?>
    var lat ="<?php echo e(\Request::input('lat')); ?>";
    var lng ="<?php echo e(\Request::input('lng')); ?>";
<?php endif; ?>
</script>
<?php
    if(0){
        Theme::add('geo::js/jquery-3.3.1.js');
        Theme::add('geo::js/leaflet.js');
        Theme::add('geo::js/leaflet.permalink.min.js');
        Theme::add('geo::js/leaflet.extra-markers.min.js');
        Theme::add('geo::js/leaflet.markercluster.js');
        Theme::add('geo::js/leaflet-sidebar.js');
        Theme::add('geo::js/L.Control.Locate.min.js');
        Theme::add('geo::js/opening_hours+deps.min.js');
        Theme::add('geo::js/popupcontent.js');
        Theme::add('geo::js/direktvermarkter.js');
    }else{
        Theme::add('geo::js/geo.js');
    }
    Theme::add('geo::js/popupcontent.js'); //Uncaught ReferenceError: popupcontent is not defined
?>
<?php echo Theme::showScripts(false); ?>

<?php echo $__env->yieldPushContent('scripts'); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/layouts/partials/scripts.blade.php ENDPATH**/ ?>