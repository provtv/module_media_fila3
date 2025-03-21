<div>
<?php echo e(Theme::add('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js')); ?>

    <?php echo e(__FILE__); ?><?php echo e(__LINE__); ?>

    <form wire:submit.prevent="createAddress">
    <div class="form-group" >
        <?php if (isset($component)) { $__componentOriginal37cff65805cf9aa6f1d7344f949972c8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37cff65805cf9aa6f1d7344f949972c8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'geo::components.google-address-lookup','data' => ['wire:model.lazy' => 'lookup']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('geo::google-address-lookup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.lazy' => 'lookup']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37cff65805cf9aa6f1d7344f949972c8)): ?>
<?php $attributes = $__attributesOriginal37cff65805cf9aa6f1d7344f949972c8; ?>
<?php unset($__attributesOriginal37cff65805cf9aa6f1d7344f949972c8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37cff65805cf9aa6f1d7344f949972c8)): ?>
<?php $component = $__componentOriginal37cff65805cf9aa6f1d7344f949972c8; ?>
<?php unset($__componentOriginal37cff65805cf9aa6f1d7344f949972c8); ?>
<?php endif; ?>
    </div>
    <div class="form-group">
        <button
            type="submit"
            class="btn btn-outline-secondary"
            wire:submit.prevent="createAddress"><?php echo e(__('Add Address')); ?></button>
    </div>
    </form>
</div><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/livewire/test.blade.php ENDPATH**/ ?>