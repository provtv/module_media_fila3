<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field]); ?>
    <?php
        $statePath = $getStatePath();
    ?>

    <div
        x-ignore
        ax-load
        ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-google-maps-field', 'cheesegrits/filament-google-maps')); ?>"
        x-data="filamentGoogleMapsField({
                    state: $wire.entangle('<?php echo e($getStatePath()); ?>'),
                    setStateUsing: (path, state) => {
                        return $wire.set(path, state)
                    },
                    getStateUsing: (path) => {
                        return $wire.get(path)
                    },
                    reverseGeocodeUsing: (results) => {
                        $wire.reverseGeocodeUsing(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>, results)
                    },
                    placeUpdatedUsing: (results) => {
                        $wire.placeUpdatedUsing(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>, results)
                    },
                    autocomplete: <?php echo \Illuminate\Support\Js::from($getAutocompleteId())->toHtml() ?>,
                    autocompleteReverse: <?php echo \Illuminate\Support\Js::from($getAutocompleteReverse())->toHtml() ?>,
                    geolocate: <?php echo \Illuminate\Support\Js::from($getGeolocate())->toHtml() ?>,
                    geolocateOnLoad: <?php echo \Illuminate\Support\Js::from($getGeolocateOnLoad())->toHtml() ?>,
                    geolocateLabel: <?php echo \Illuminate\Support\Js::from($getGeolocateLabel())->toHtml() ?>,
                    draggable: <?php echo \Illuminate\Support\Js::from($getDraggable())->toHtml() ?>,
                    clickable: <?php echo \Illuminate\Support\Js::from($getClickable())->toHtml() ?>,
                    defaultLocation: <?php echo \Illuminate\Support\Js::from($getDefaultLocation())->toHtml() ?>,
                    statePath: <?php echo \Illuminate\Support\Js::from($getStatePath())->toHtml() ?>,
                    controls: <?php echo \Illuminate\Support\Js::from($getMapControls(false))->toHtml() ?>,
                    layers: <?php echo \Illuminate\Support\Js::from($getLayers())->toHtml() ?>,
                    reverseGeocodeFields: <?php echo \Illuminate\Support\Js::from($getReverseGeocode())->toHtml() ?>,
                    hasReverseGeocodeUsing: <?php echo \Illuminate\Support\Js::from($getReverseGeocodeUsing())->toHtml() ?>,
                    hasPlaceUpdatedUsing: <?php echo \Illuminate\Support\Js::from($getPlaceUpdatedUsing())->toHtml() ?>,
                    defaultZoom: <?php echo \Illuminate\Support\Js::from($getDefaultZoom())->toHtml() ?>,
                    types: <?php echo \Illuminate\Support\Js::from($getTypes())->toHtml() ?>,
                    countries: <?php echo \Illuminate\Support\Js::from($getCountries())->toHtml() ?>,
                    placeField: <?php echo \Illuminate\Support\Js::from($getPlaceField())->toHtml() ?>,
                    drawingControl: <?php echo \Illuminate\Support\Js::from($getDrawingControl())->toHtml() ?>,
                    drawingControlPosition: <?php echo \Illuminate\Support\Js::from($getDrawingControlPosition())->toHtml() ?>,
                    drawingModes: <?php echo \Illuminate\Support\Js::from($getDrawingModes())->toHtml() ?>,
                    drawingField: <?php echo \Illuminate\Support\Js::from($getDrawingField())->toHtml() ?>,
                    geoJson: <?php echo \Illuminate\Support\Js::from($getGeoJsonFile())->toHtml() ?>,
                    geoJsonField: <?php echo \Illuminate\Support\Js::from($getGeoJsonField())->toHtml() ?>,
                    geoJsonProperty: <?php echo \Illuminate\Support\Js::from($getGeoJsonProperty())->toHtml() ?>,
                    geoJsonVisible: <?php echo \Illuminate\Support\Js::from($getGeoJsonVisible())->toHtml() ?>,
                    debug: <?php echo \Illuminate\Support\Js::from($getDebug())->toHtml() ?>,
                    gmaps: <?php echo \Illuminate\Support\Js::from($getMapsUrl())->toHtml() ?>,
                    mapEl: $refs.map,
                    pacEl: $refs.pacinput,
                    polyOptions: <?php echo \Illuminate\Support\Js::from($getPolyOptions())->toHtml() ?>,
                    circleOptions: <?php echo \Illuminate\Support\Js::from($getCircleOptions())->toHtml() ?>,
                    rectangleOptions: <?php echo \Illuminate\Support\Js::from($getRectangleOptions())->toHtml() ?>,
                    mapType: <?php echo \Illuminate\Support\Js::from($getType())->toHtml() ?>,
                })"
        id="<?php echo e($getId() . '-alpine'); ?>"
        wire:ignore
    >
        <?php if($isSearchBoxControlEnabled()): ?>
            <input x-ref="pacinput" type="text" placeholder="Search Box" />
        <?php endif; ?>

        <div
            x-ref="map"
            class="w-full"
            style="
                height: <?php echo e($getHeight()); ?>;
                min-height: 30vh;
                z-index: 1 !important;
            "
        ></div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/cheesegrits/filament-google-maps/resources/views/fields/filament-google-maps.blade.php ENDPATH**/ ?>