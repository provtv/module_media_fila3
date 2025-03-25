<?php if($alignmentClass = $getAlignmentClass()): ?>
    <div class="<?php echo e($alignmentClass); ?>">
<?php endif; ?>

    <?php if($isButton()): ?>
        <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'secondary','tag' => 'a','href' => '#','wire:click.prevent' => ''.e($getPreviewAction()).'','attributes' => $attributes->merge($getExtraAttributes())]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'secondary','tag' => 'a','href' => '#','wire:click.prevent' => ''.e($getPreviewAction()).'','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge($getExtraAttributes()))]); ?>
            <?php echo e($getLabel()); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
    <?php else: ?>
        <a
            href="#"
            wire:click.prevent="<?php echo e($getPreviewAction()); ?>"
            <?php echo e($attributes->class(['text-primary-600', 'dark:text-primary-500', $getUnderlineClass()])
                          ->merge($getExtraAttributes())); ?>

        >
            <?php echo e($getLabel()); ?>

        </a>
    <?php endif; ?>

<?php if($getAlignmentClass()): ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/pboivin/filament-peek/resources/views/components/preview-link.blade.php ENDPATH**/ ?>