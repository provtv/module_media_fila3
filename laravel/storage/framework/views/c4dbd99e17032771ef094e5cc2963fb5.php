<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'tileLayerUrl' => 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    'tileLayerOptions' => [
        'maxZoom' => 19,
        'attribution' => '© OpenStreetMap',
    ],
    'height' => '400px',
    'options' => [],
    'actions' => [],
    'extraAttributeBag' => '',
    'extraAlpineAttributeBag' => '',
    'modals' => null,
    'rounded' => true,
    'fullpage' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'tileLayerUrl' => 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    'tileLayerOptions' => [
        'maxZoom' => 19,
        'attribution' => '© OpenStreetMap',
    ],
    'height' => '400px',
    'options' => [],
    'actions' => [],
    'extraAttributeBag' => '',
    'extraAlpineAttributeBag' => '',
    'modals' => null,
    'rounded' => true,
    'fullpage' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $actions = array_filter(
        $actions,
        fn (\Webbingbrasil\FilamentMaps\Actions\Action $action ): bool => ! $action->isHidden(),
    );
?>
<div class="filament-map">
    <div
        <?php echo e($attributes->class([
            'h-full w-full overflow-hidden',
            'rounded-xl' => $rounded
        ])); ?>

        <?php echo e($extraAttributeBag); ?>>
        <div
            wire:ignore
            x-data="{
                mode: null,

                map: null,

                fullpage: false,

                isFullscreen: false,

                mapDefaultHeight: '<?php echo e($height); ?>',

                mapFullpageHeight: 0,

                markers: [],

                markerClusters: [],

                polylines: [],

                polygones: [],

                rectangles: [],

                circles: [],

                tileLayers: {},

                fitBounds: <?php if ((object) ('fitBounds') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('fitBounds'->value()); ?>')<?php echo e('fitBounds'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('fitBounds'); ?>')<?php endif; ?>,

                centerTo: <?php if ((object) ('centerTo') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('centerTo'->value()); ?>')<?php echo e('centerTo'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('centerTo'); ?>')<?php endif; ?>,

                markersData: <?php if ((object) ('markers') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('markers'->value()); ?>')<?php echo e('markers'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('markers'); ?>')<?php endif; ?>,

                polylinesData: <?php if ((object) ('polylines') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('polylines'->value()); ?>')<?php echo e('polylines'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('polylines'); ?>')<?php endif; ?>,

                polygonesData: <?php if ((object) ('polygones') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('polygones'->value()); ?>')<?php echo e('polygones'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('polygones'); ?>')<?php endif; ?>,

                rectanglesData: <?php if ((object) ('rectangles') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('rectangles'->value()); ?>')<?php echo e('rectangles'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('rectangles'); ?>')<?php endif; ?>,

                circlesData: <?php if ((object) ('circles') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('circles'->value()); ?>')<?php echo e('circles'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('circles'); ?>')<?php endif; ?>,

                init: function () {
                    if (window.filamentMaps['<?php echo e($this->getName()); ?>']) {
                        window.filamentMaps['<?php echo e($this->getName()); ?>'].off();
                        window.filamentMaps['<?php echo e($this->getName()); ?>'].remove();
                    }
                    window.filamentMaps['<?php echo e($this->getName()); ?>'] = leaflet.map(this.$refs.map, <?php echo e(json_encode(array_merge($options, ['zoomControl' => false]))); ?>);
                    this.map = window.filamentMaps['<?php echo e($this->getName()); ?>'];

                    if (this.fitBounds) {
                        this.map.fitBounds(this.fitBounds);
                    }

                    <?php $__currentLoopData = (array) $tileLayerUrl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mode => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    this.tileLayers['<?php echo e($mode); ?>'] = leaflet.tileLayer('<?php echo e($url); ?>', <?php echo e(json_encode($tileLayerOptions[$mode] ?? $tileLayerOptions)); ?>);
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    let initialMode = '<?php echo e($this->getTileLayerMode()); ?>';
                    if (
                        document.documentElement.classList.contains('dark') &&
                        this.tileLayers['dark']
                    ) {
                        initialMode = 'dark';
                    }

                    this.setTileLayer(initialMode);

                    this.updateMarkers(this.markersData);

                    this.updatePolylines(this.polylinesData);

                    this.updatePolygones(this.polygonesData);

                    this.updateRectangles(this.rectanglesData);

                    this.updateCircles(this.circlesData);

                    $watch('fitBounds', (bounds) => {
                        if (bounds) {
                            this.map.fitBounds(bounds);
                        }
                    });

                    $watch('centerTo', (center) => {
                        this.map.setView(center.location, center.zoom);
                    });

                    const resizeObserver = new ResizeObserver(() => {
                      this.map.invalidateSize();
                    });

                    resizeObserver.observe(this.map._container);

                    $watch('markersData', (markers) => {
                        this.updateMarkers(markers);
                    });

                    $watch('polylinesData', (polylines) => {
                        this.updatePolylines(polylines);
                    });

                    $watch('polygonesData', (polygones) => {
                        this.updatePolygones(polygones);
                    });

                    $watch('rectanglesData', (rectangles) => {
                        this.updateRectangles(rectangles);
                    });

                    $watch('circlesData', (circles) => {
                        this.updateCircles(circles);
                    });

                    const topbarHeight = document.querySelector('.fi-topbar').offsetHeight;
                    this.mapFullpageHeight = (window.innerHeight - topbarHeight) + 'px';

                    var fullscreenchange;

                    if ('onfullscreenchange' in document) {
                        fullscreenchange = 'fullscreenchange';
                    } else if ('onmozfullscreenchange' in document) {
                        fullscreenchange = 'mozfullscreenchange';
                    } else if ('onwebkitfullscreenchange' in document) {
                        fullscreenchange = 'webkitfullscreenchange';
                    } else if ('onmsfullscreenchange' in document) {
                        fullscreenchange = 'MSFullscreenChange';
                    }
                    if (fullscreenchange) {
                        document.addEventListener(fullscreenchange, function () {
                            var fullscreenElement =
                                document.fullscreenElement ||
                                document.mozFullScreenElement ||
                                document.webkitFullscreenElement ||
                                document.msFullscreenElement;

                            if (typeof fullscreenElement === 'undefined' && this.isFullscreen) {
                                this.isFullscreen = false;
                                this.$refs.map.style.height = this.fullpage ? this.mapFullpageHeight : this.mapDefaultHeight;
                            }
                        }.bind(this));
                    }

                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        this.addAction('<?php echo e($action->getMapActionId()); ?>', '<?php echo e($action->getPosition()); ?>');
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($fullpage): ?>
                        this.toggleFullpage();
                    <?php endif; ?>
                },
                toggleFullscreen: function () {
                    var container = this.$refs.map.parentElement;
                    while (container) {
                        if (container.classList.contains('filament-map')) {
                            break;
                        }
                        container = container.parentElement;
                    }

                    if (this.isFullscreen) {
                        if (document.exitFullscreen) {
                            document.exitFullscreen();
                        } else if (document.mozCancelFullScreen) {
                            document.mozCancelFullScreen();
                        } else if (document.webkitCancelFullScreen) {
                            document.webkitCancelFullScreen();
                        } else if (document.msExitFullscreen) {
                            document.msExitFullscreen();
                        }
                        this.isFullscreen = false;
                        this.$refs.map.style.height = this.fullpage ? this.mapFullpageHeight : this.mapDefaultHeight;
                        return;
                    }

                    if (container.requestFullscreen) {
                        container.requestFullscreen();
                    } else if (container.mozRequestFullScreen) {
                        container.mozRequestFullScreen();
                    } else if (container.webkitRequestFullscreen) {
                        container.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    } else if (container.msRequestFullscreen) {
                        container.msRequestFullscreen();
                    }
                    this.$refs.map.style.height = '100vh';
                    this.isFullscreen = true;
                },
                toggleFullpage: function () {
                    if (this.fullpage == false) {
                        document.querySelector('.fi-main-ctn').style.position = 'relative';
                        document.querySelector('.fi-main-ctn').style.maxHeight = '100vh';
                        document.querySelector('.fi-main-ctn').style.overflow = 'hidden';
                        this.$refs.map.style.height = this.mapFullpageHeight;
                        this.$refs.map.style.minHeight = this.mapFullpageHeight;
                        this.$refs.map.style.position = 'absolute';
                        this.$refs.map.style.top = document.querySelector('.fi-topbar').offsetHeight + 'px';
                        this.$refs.map.style.left = '0';
                        this.$refs.map.style.zIndex = '5';
                        this.fullpage = true;
                        return;
                    }

                    document.querySelector('.fi-main-ctn').style.position = '';
                    this.$refs.map.style.height = this.mapDefaultHeight;
                    this.$refs.map.style.minHeight = '100%';
                    this.$refs.map.style.position = '';
                    this.$refs.map.style.top = 'inherit';
                    document.querySelector('.fi-main-ctn').style.maxHeight = null;
                    document.querySelector('.fi-main-ctn').style.overflow = null;
                    this.fullpage = false;
                },
                setTileLayer: function (mode) {
                    if (this.tileLayers[mode]) {
                        if (this.mode && this.mode != mode && this.map.hasLayer(this.tileLayers[this.mode])) {
                            this.map.removeLayer(this.tileLayers[this.mode]);
                        }

                        this.mode = mode;
                        this.tileLayers[mode].addTo(this.map);

                        return;
                    }
                },
                updateMarkers: function (markers) {
                    if (this.map) {
                        this.markerClusters.forEach((cluster) => {
                            this.map.removeLayer(cluster);
                        });
                        this.markers.forEach((marker) => {
                            if (! markers.find((m) => m.id == marker.id)) {
                                this.removeMarker(marker.id);
                            }
                        });

                        markers.forEach(function (marker) {
                            if (marker.type === 'marker') {
                                this.addMarker(marker.id, marker.lat, marker.lng, marker.popup, marker.tooltip, marker.icon, marker.callback);
                            }
                            if (marker.type === 'cluster') {
                                this.addMarkerCluster(marker.markers);
                            }
                        }.bind(this));
                    }
                },
                updatePolylines: function (polyline) {
                    if (this.map) {
                        polyline.forEach(function (polyline) {
                            this.addPolyline(polyline.id, polyline.latlngs, polyline.popup, polyline.tooltip, polyline.options);
                        }.bind(this));
                    }
                },
                updatePolygones: function (polygone) {
                    if (this.map) {
                        polygone.forEach(function (polygone) {
                            this.addPolygone(polygone.id, polygone.latlngs, polygone.popup, polygone.tooltip, polygone.options);
                        }.bind(this));
                    }
                },
                updateRectangles: function (rectangle) {
                    if (this.map) {
                        rectangle.forEach(function (rectangle) {
                            this.addRectangle(rectangle.id, rectangle.bounds, rectangle.popup, rectangle.tooltip, rectangle.options);
                        }.bind(this));
                    }
                },
                updateCircles: function (circle) {
                    if (this.map) {
                        circle.forEach(function (circle) {
                            this.addCircle(circle.id, circle.lat, circle.lng, circle.popup, circle.tooltip, circle.options);
                        }.bind(this));
                    }
                },
                addAction: function (id, position) {
                    var button = new L.Control.Button(leaflet.DomUtil.get(id), { position });
                    button.addTo(this.map);
                },
                prepareMarker: function (id, lat, lng, popup, tooltip, icon, callback) {
                    this.removeMarker(id);
                    var options = {};
                    if (icon) {
                        options.icon = leaflet.icon(icon);
                    }
                    const mMarker = leaflet.marker([lat, lng], options);
                    if (popup) {
                        mMarker.bindPopup(popup);
                    }
                    if (tooltip) {
                        mMarker.bindTooltip(tooltip);
                    }
                    if (callback) {
                        mMarker.on('click', new Function('var map = this.map; ' + callback).bind(this));
                    }
                    this.markers.push({id, marker: mMarker});
                    return mMarker;
                },
                addMarker: function (id, lat, lng, popup, tooltip, icon, callback) {
                    this.prepareMarker(id, lat, lng, popup, tooltip, icon, callback).addTo(this.map);
                },
                addMarkerCluster: function (markers) {
                    const mMarkers = [];
                    const mMarkerCluster = leaflet.markerClusterGroup().addTo(this.map);
                    markers.forEach(function ({id, lat, lng, popup, tooltip, icon, callback}) {
                        const mMarker = this.prepareMarker(id, lat, lng, popup, tooltip, icon, callback);
                        mMarkers.push(mMarker);
                    }.bind(this));
                    mMarkerCluster.addLayers(mMarkers);
                    this.markerClusters.push(mMarkerCluster);
                },
                addPolyline: function (id, latlngs, popup, tooltip, options) {
                    this.removePolyline(id);
                    const pPolyline = leaflet.polyline(latlngs, options).addTo(this.map);
                    if (popup) {
                        pPolyline.bindPopup(popup);
                    }
                    if (tooltip) {
                        pPolyline.bindTooltip(tooltip);
                    }
                    this.polylines.push({id, polyline: pPolyline});
                },
                addPolygone: function (id, latlngs, popup, tooltip, options) {
                    this.removePolygone(id);
                    const pPolygon = leaflet.polygon(latlngs, options).addTo(this.map);
                    if (popup) {
                        pPolygon.bindPopup(popup);
                    }
                    if (tooltip) {
                        pPolygon.bindTooltip(tooltip);
                    }
                    this.polygones.push({id, polygon: pPolygon});
                },
                addRectangle: function (id, bounds, popup, tooltip, options) {
                    this.removeRectangle(id);
                    const rRectangle = leaflet.rectangle(bounds, options).addTo(this.map);
                    if (popup) {
                        rRectangle.bindPopup(popup);
                    }
                    if (tooltip) {
                        rRectangle.bindTooltip(tooltip);
                    }
                    this.rectangles.push({id, rectangle: rRectangle});
                },
                addCircle: function (id, lat, lng, popup, tooltip, options) {
                    this.removeCircle(id);
                    const cCircle = leaflet.circle([lat, lng], options).addTo(this.map);
                    if (popup) {
                        cCircle.bindPopup(popup);
                    }
                    if (tooltip) {
                        cCircle.bindTooltip(tooltip);
                    }
                    this.circles.push({id, circle: cCircle});
                },
                removeMarker: function (id) {
                    const m = this.markers.find(m => m.id === id);
                    if (m) {
                        m.marker.remove();
                        this.markers = this.markers.filter(m => m.id !== id);
                    }
                },
                removePolyline: function (id) {
                    const p = this.polylines.find(p => p.id === id);
                    if (p) {
                        p.polyline.remove();
                        this.polylines = this.polylines.filter(p => p.id !== id);
                    }
                },
                removePolygone: function (id) {
                    const p = this.polygones.find(p => p.id === id);
                    if (p) {
                        p.polygon.remove();
                        this.polygones = this.polygones.filter(p => p.id !== id);
                    }
                },
                removeRectangle: function (id) {
                    const r = this.rectangles.find(r => r.id === id);
                    if (r) {
                        r.rectangle.remove();
                        this.rectangles = this.rectangles.filter(r => r.id !== id);
                    }
                },
                removeCircle: function (id) {
                    const c = this.circles.find(c => c.id === id);
                    if (c) {
                        c.circle.remove();
                        this.circles = this.circles.filter(c => c.id !== id);
                    }
                },
                removeAllMarkers: function () {
                    this.markers.forEach(({marker}) => marker.remove());
                    this.markers = [];
                },
                removeAllPolylines: function () {
                    this.polylines.forEach(({polyline}) => polyline.remove());
                    this.polylines = [];
                },
                removeAllPolygones: function () {
                    this.polygones.forEach(({polygone}) => polygone.remove());
                    this.polygones = [];
                },
                removeAllRectangles: function () {
                    this.rectangles.forEach(({rectangle}) => rectangle.remove());
                    this.rectangles = [];
                },
                removeAllCircles: function () {
                    this.circles.forEach(({circle}) => circle.remove());
                    this.circles = [];
                },
            }"
            <?php echo e($extraAlpineAttributeBag); ?>

        >
            <?php if(count($actions)): ?>
                <div
                    <?php echo e($attributes->class([
                        'filament-map-actions',
                    ])); ?>

                >
                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="filament-map-button justify-center content-center" id="<?php echo e($action->getMapActionId()); ?>">
                            <?php echo e($action); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <div x-ref="map" class="filament-map-container flex-1 relative" style="width: 100%; height: <?php echo e($height); ?>; min-height: 100%; z-index: 0"></div>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.modals','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-actions::modals'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $attributes = $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $component = $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/webbingbrasil/filament-maps/resources/views/components/map.blade.php ENDPATH**/ ?>