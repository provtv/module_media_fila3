<?php
    $heading = $this->getHeading();
    $footer = $this->getFooter();
    $hasBorder = $this->getHasBorder();
    $rounded = $this->getRounded();
?>
<?php if (isset($component)) { $__componentOriginalb525200bfa976483b4eaa0b7685c6e24 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb525200bfa976483b4eaa0b7685c6e24 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-widgets::components.widget','data' => ['class' => 'filament-maps-widget']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-widgets::widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'filament-maps-widget']); ?>
    <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => ['class' => 'filament-maps-card']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'filament-maps-card']); ?>
        <?php if($heading): ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'px-4 py-2' => $hasBorder,
                'px-6 py-4' => !$hasBorder,
            ]); ?>">
                <div class="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
                    <?php echo e($heading); ?>

                </div>
            </div>
        <?php endif; ?>

        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['px-4 py-2' => $hasBorder]); ?>">
            <?php if (isset($component)) { $__componentOriginald5ce808bc2a64f33b356aa21f030cee6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5ce808bc2a64f33b356aa21f030cee6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-maps::components.map','data' => ['rounded' => $rounded && $hasBorder,'tileLayerUrl' => $this->getTileLayerUrl(),'tileLayerOptions' => $this->getTileLayerOptions(),'height' => $this->getHeight(),'options' => $this->getMapOptions(),'actions' => $this->getCachedMapActions(),'extraAttributeBag' => $this->getExtraAttributeBag(),'extraAlpineAttributeBag' => $this->getExtraAlpineAttributeBag(),'fullpage' => $this->isFullPage()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-maps::map'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rounded' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rounded && $hasBorder),'tile-layer-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getTileLayerUrl()),'tile-layer-options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getTileLayerOptions()),'height' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getHeight()),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getMapOptions()),'actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getCachedMapActions()),'extra-attribute-bag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getExtraAttributeBag()),'extra-alpine-attribute-bag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getExtraAlpineAttributeBag()),'fullpage' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->isFullPage())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5ce808bc2a64f33b356aa21f030cee6)): ?>
<?php $attributes = $__attributesOriginald5ce808bc2a64f33b356aa21f030cee6; ?>
<?php unset($__attributesOriginald5ce808bc2a64f33b356aa21f030cee6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5ce808bc2a64f33b356aa21f030cee6)): ?>
<?php $component = $__componentOriginald5ce808bc2a64f33b356aa21f030cee6; ?>
<?php unset($__componentOriginald5ce808bc2a64f33b356aa21f030cee6); ?>
<?php endif; ?>
        </div>

        <?php if($footer): ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'px-4 py-2' => $hasBorder,
                'px-6 py-4' => !$hasBorder,
            ]); ?>">
                <?php echo e($footer); ?>

            </div>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b945b32438afb742355861768089b04)): ?>
<?php $attributes = $__attributesOriginal9b945b32438afb742355861768089b04; ?>
<?php unset($__attributesOriginal9b945b32438afb742355861768089b04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b945b32438afb742355861768089b04)): ?>
<?php $component = $__componentOriginal9b945b32438afb742355861768089b04; ?>
<?php unset($__componentOriginal9b945b32438afb742355861768089b04); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb525200bfa976483b4eaa0b7685c6e24)): ?>
<?php $attributes = $__attributesOriginalb525200bfa976483b4eaa0b7685c6e24; ?>
<?php unset($__attributesOriginalb525200bfa976483b4eaa0b7685c6e24); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb525200bfa976483b4eaa0b7685c6e24)): ?>
<?php $component = $__componentOriginalb525200bfa976483b4eaa0b7685c6e24; ?>
<?php unset($__componentOriginalb525200bfa976483b4eaa0b7685c6e24); ?>
<?php endif; ?>

<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/webbingbrasil/filament-maps/resources/views/widgets/map.blade.php ENDPATH**/ ?>