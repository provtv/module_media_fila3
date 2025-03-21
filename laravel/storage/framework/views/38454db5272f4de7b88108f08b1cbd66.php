<?php
 $zoomIn = $action;
 $zoomOut = (clone $action)->icon('heroicon-o-minus');
?>

<?php if (isset($component)) { $__componentOriginal0e770b38841d3edcb2a636886f4c404b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e770b38841d3edcb2a636886f4c404b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-maps::components.actions.action','data' => ['action' => $zoomIn->increment(),'label' => 'Zoom in','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action','style' => 'border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-maps::actions.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($zoomIn->increment()),'label' => 'Zoom in','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action','style' => 'border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;']); ?>
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
<?php if (isset($component)) { $__componentOriginal0e770b38841d3edcb2a636886f4c404b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e770b38841d3edcb2a636886f4c404b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-maps::components.actions.action','data' => ['action' => $zoomOut->decrement(),'label' => 'Zoom out','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action','style' => 'border-top-right-radius: 0px;border-top-left-radius: 0px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-maps::actions.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($zoomOut->decrement()),'label' => 'Zoom out','component' => 'filament-maps::icon-button','class' => 'filament-page-icon-button-action','style' => 'border-top-right-radius: 0px;border-top-left-radius: 0px;']); ?>
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
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/webbingbrasil/filament-maps/resources/views/zoom-action.blade.php ENDPATH**/ ?>