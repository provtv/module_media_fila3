<head>
    <?php echo Theme::metatags(); ?>

    
    
    <?php
        if(0){
            Theme::add('theme/pub/css/leaflet.css');
            Theme::add('theme/pub/css/leaflet-sidebar.css');
            Theme::add('theme/pub/css/leaflet.extra-markers.min.css');
            Theme::add('theme/pub/css/MarkerCluster.css');
            Theme::add('theme/pub/css/fontawesome-all.min.css');
            Theme::add('theme/pub/css/L.Control.Locate.min.css');
            Theme::add('theme/pub/css/style.css');
        }else{
            Theme::add('geo::css/geo.css');
        }
    ?>
    <?php echo Theme::showStyles(false); ?>

    
</head><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/layouts/partials/htmlheader.blade.php ENDPATH**/ ?>