<?php
    $disableNewRecordCreation = $disableNewRecordCreation ?? false;
    $disableNewChildRecordCreation = $disableNewChildRecordCreation ?? false;
    $disableRecordDeletion = $disableRecordDeletion ?? false;
    $disableRecordEdit = $disableRecordEdit ?? false;
    $disableRecordsSorting = $disableRecordsSorting ?? false;
?>

<?php if (isset($component)) { $__componentOriginala86dcd7e3fb4428c61bb5e13aa161d28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala86dcd7e3fb4428c61bb5e13aa161d28 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.index','data' => ['id' => $getId(),'label' => $getLabel(),'labelSrOnly' => $isLabelHidden(),'helperText' => $getHelperText(),'hint' => $getHint(),'hintIcon' => $getHintIcon(),'required' => $isRequired(),'statePath' => $getStatePath(),'class' => 'filament-navigation']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getId()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getLabel()),'label-sr-only' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isLabelHidden()),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHelperText()),'hint' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHint()),'hint-icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHintIcon()),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRequired()),'state-path' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getStatePath()),'class' => 'filament-navigation']); ?>
    <div wire:key="navigation-items-wrapper">
        <div
            class="space-y-2"
            x-data="navigationSortableContainer({
                statePath: <?php echo \Illuminate\Support\Js::from($getStatePath())->toHtml() ?>
            })"
            data-sortable-container
        >

            <?php $__empty_1 = true; $__currentLoopData = $getState(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uuid => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if (isset($component)) { $__componentOriginal970822b23c4ee404d72ede98c696a493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal970822b23c4ee404d72ede98c696a493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'ui::components.nav-item','data' => ['statePath' => $getStatePath() . '.' . $uuid,'item' => $item,'disableNewChildRecordCreation' => $disableNewChildRecordCreation,'disableRecordEdit' => $disableRecordEdit,'disableRecordDeletion' => $disableRecordDeletion,'disableRecordsSorting' => $disableRecordsSorting]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui::nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['statePath' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getStatePath() . '.' . $uuid),'item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'disableNewChildRecordCreation' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableNewChildRecordCreation),'disableRecordEdit' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableRecordEdit),'disableRecordDeletion' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableRecordDeletion),'disableRecordsSorting' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableRecordsSorting)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal970822b23c4ee404d72ede98c696a493)): ?>
<?php $attributes = $__attributesOriginal970822b23c4ee404d72ede98c696a493; ?>
<?php unset($__attributesOriginal970822b23c4ee404d72ede98c696a493); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal970822b23c4ee404d72ede98c696a493)): ?>
<?php $component = $__componentOriginal970822b23c4ee404d72ede98c696a493; ?>
<?php unset($__componentOriginal970822b23c4ee404d72ede98c696a493); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'w-full bg-white rounded-lg border border-gray-300 px-3 py-2 text-left',
                    'dark:bg-gray-700 dark:border-gray-600',
                ]); ?>">
                    <?php echo e(__('ui::filament-navigation.items.empty')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if(!$disableNewRecordCreation): ?>
    <div class="flex justify-end">
        <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['wire:click' => 'createItem','type' => 'button','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'createItem','type' => 'button','size' => 'sm']); ?>
            <?php echo e(__('ui::filament-navigation.items.add-item')); ?>

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
    </div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala86dcd7e3fb4428c61bb5e13aa161d28)): ?>
<?php $attributes = $__attributesOriginala86dcd7e3fb4428c61bb5e13aa161d28; ?>
<?php unset($__attributesOriginala86dcd7e3fb4428c61bb5e13aa161d28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala86dcd7e3fb4428c61bb5e13aa161d28)): ?>
<?php $component = $__componentOriginala86dcd7e3fb4428c61bb5e13aa161d28; ?>
<?php unset($__componentOriginala86dcd7e3fb4428c61bb5e13aa161d28); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/filament/forms/components/navigation-builder.blade.php ENDPATH**/ ?>