<?php
    $label = $getLabel();
    $enterFullscreen = $action;
    $exitFullscreen = (clone $action)->icon('filamentmapsicon-fullscreen-exit');
?>
<template x-if="!isFullscreen">
<?php if (isset($component)) { $__componentOriginal0e770b38841d3edcb2a636886f4c404b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e770b38841d3edcb2a636886f4c404b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-maps::components.actions.action','data' => ['action' => $enterFullscreen,'label' => 'Enter '.e($label).'','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-maps::actions.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($enterFullscreen),'label' => 'Enter '.e($label).'','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e770b38841d3edcb2a636886f4c404b)): ?>
<?php $attributes = $__attributesOriginal0e770b38841d3edcb2a636886f4c404b; ?>
<?php unset($__attributesOriginal0e770b38841d3edcb2a636886f4c404b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e770b38841d3edcb2a636886f4c404b)): ?>
<?php $component = $__componentOriginal0e770b38841d3edcb2a636886f4c404b; ?>
<?php unset($__componentOriginal0e770b38841d3edcb2a636886f4c404b); ?>
<?php endif; ?>
</template>
<template x-if="isFullscreen">
<?php if (isset($component)) { $__componentOriginal0e770b38841d3edcb2a636886f4c404b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e770b38841d3edcb2a636886f4c404b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-maps::components.actions.action','data' => ['action' => $exitFullscreen,'label' => 'Exit '.e($label).'','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-maps::actions.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exitFullscreen),'label' => 'Exit '.e($label).'','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e770b38841d3edcb2a636886f4c404b)): ?>
<?php $attributes = $__attributesOriginal0e770b38841d3edcb2a636886f4c404b; ?>
<?php unset($__attributesOriginal0e770b38841d3edcb2a636886f4c404b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e770b38841d3edcb2a636886f4c404b)): ?>
<?php $component = $__componentOriginal0e770b38841d3edcb2a636886f4c404b; ?>
<?php unset($__componentOriginal0e770b38841d3edcb2a636886f4c404b); ?>
<?php endif; ?>
</template>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/webbingbrasil/filament-maps/resources/views/fullscreen-action.blade.php ENDPATH**/ ?>