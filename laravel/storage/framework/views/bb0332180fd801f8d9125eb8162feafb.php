<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['blocks']));

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

foreach (array_filter((['blocks']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginala6c1b1a081f0762ef328d5eec4e717ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala6c1b1a081f0762ef328d5eec4e717ce = $attributes; } ?>
<?php $component = Modules\UI\View\Components\Render\Block::resolve(['block' => $block,'model' => $model] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('render.block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\UI\View\Components\Render\Block::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala6c1b1a081f0762ef328d5eec4e717ce)): ?>
<?php $attributes = $__attributesOriginala6c1b1a081f0762ef328d5eec4e717ce; ?>
<?php unset($__attributesOriginala6c1b1a081f0762ef328d5eec4e717ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6c1b1a081f0762ef328d5eec4e717ce)): ?>
<?php $component = $__componentOriginala6c1b1a081f0762ef328d5eec4e717ce; ?>
<?php unset($__componentOriginala6c1b1a081f0762ef328d5eec4e717ce); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/render/blocks/v1.blade.php ENDPATH**/ ?>