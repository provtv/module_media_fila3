<div>
    <!-- Interested button -->
    <input type="checkbox" class="btn-check d-block" id="Interested<?php echo e($post_id); ?>"
        <?php if($fav): ?> checked <?php endif; ?> wire:click="update()">
    <?php if (isset($component)) { $__componentOriginalce0c3abfe32d61e042620ba43c1aa075 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce0c3abfe32d61e042620ba43c1aa075 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.label','data' => ['class' => 'btn btn-sm btn-outline-success d-block','for' => 'Interested'.e($post_id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-sm btn-outline-success d-block','for' => 'Interested'.e($post_id).'']); ?>
        <i class="fa-solid fa-thumbs-up me-1"></i>
        Interested
    </label>

    
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Rating/resources/views/livewire/favorite/social.blade.php ENDPATH**/ ?>