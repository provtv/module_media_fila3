<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getEntryWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['entry' => $entry]); ?>
    <?php
        $statePath = $getStatePath();
    ?>

    <div
        x-ignore
        ax-load
        ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-google-maps-entry', 'cheesegrits/filament-google-maps')); ?>"
        x-data="filamentGoogleMapsField({
                    state: <?php echo \Illuminate\Support\Js::from($getState())->toHtml() ?>,
                    defaultLocation: <?php echo \Illuminate\Support\Js::from($getDefaultLocation())->toHtml() ?>,
                    controls: <?php echo \Illuminate\Support\Js::from($getMapControls(false))->toHtml() ?>,
                    layers: <?php echo \Illuminate\Support\Js::from($getLayers())->toHtml() ?>,
                    defaultZoom: <?php echo \Illuminate\Support\Js::from($getDefaultZoom())->toHtml() ?>,
                    drawingField: <?php echo \Illuminate\Support\Js::from($getDrawingField())->toHtml() ?>,
                    geoJson: <?php echo \Illuminate\Support\Js::from($getGeoJsonFile())->toHtml() ?>,
                    geoJsonVisible: <?php echo \Illuminate\Support\Js::from($getGeoJsonVisible())->toHtml() ?>,
                    gmaps: <?php echo \Illuminate\Support\Js::from($getMapsUrl())->toHtml() ?>,
                    mapEl: $refs.map,
                })"
        id="<?php echo e($getId() . '-alpine'); ?>"
        wire:ignore
    >
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
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/cheesegrits/filament-google-maps/resources/views/infolists/filament-google-maps-entry.blade.php ENDPATH**/ ?>