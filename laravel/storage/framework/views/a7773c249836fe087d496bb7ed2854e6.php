<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'item',
    'statePath',
    'disableNewChildRecordCreation',
    'disableRecordEdit',
    'disableRecordDeletion',
    'disableRecordsSorting',
]));

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

foreach (array_filter(([
    'item',
    'statePath',
    'disableNewChildRecordCreation',
    'disableRecordEdit',
    'disableRecordDeletion',
    'disableRecordsSorting',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-data="{ open: false }" wire:key="<?php echo e($statePath); ?>" data-id="<?php echo e($statePath); ?>" class="space-y-2"
    data-sortable-item>
    <div class="relative group">
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'bg-white rounded-lg border border-gray-300 w-full flex',
            'dark:bg-gray-700 dark:border-gray-600',
        ]); ?>">
            <?php if(!$disableRecordsSorting): ?>
                <button type="button" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'flex items-center bg-gray-50 rounded-l-lg border-r border-gray-300 px-px',
                    'dark:bg-gray-800 dark:border-gray-600',
                ]); ?>" data-sortable-handle>
                    <?php echo e(svg('heroicon-o-ellipsis-vertical', 'text-gray-400 w-4 h-4 -mr-2')); ?>
                    <?php echo e(svg('heroicon-o-ellipsis-vertical', 'text-gray-400 w-4 h-4')); ?>
                </button>
            <?php endif; ?>

            <button type="button"
                <?php if(!$disableRecordEdit): ?> wire:click="editItem('<?php echo e($statePath); ?>')" wire:loading.attr="disabled" <?php endif; ?>
                class="appearance-none px-3 py-2 text-left">
                <div style="float:left;">
                    <span><?php echo e($item['label']); ?></span>
                    <div wire:loading wire:target="editItem('<?php echo e($statePath); ?>')"> <?php echo e(svg('heroicon-o-arrow-path', 'w-3 h-3 text-blue-500 hover:text-blue-900 animate-spin')); ?> </div>
                </div>
            </button>

            <?php if(count($item['children']) > 0): ?>
                <button type="button" x-on:click="open = !open" title="Toggle children"
                    class="appearance-none text-gray-500">
                    <svg class="w-3.5 h-3.5 transition ease-in-out duration-200"
                        x-bind:class="{
                            '-rotate-90': !open,
                        }"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            <?php endif; ?>
        </div>

        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'absolute top-0 right-0 h-6 divide-x rounded-bl-lg rounded-tr-lg border-gray-300 border-b border-l overflow-hidden rtl:border-l-0 rtl:border-r rtl:right-auto rtl:left-0 rtl:rounded-bl-none rtl:rounded-br-lg rtl:rounded-tr-none rtl:rounded-tl-lg hidden opacity-0 group-hover:opacity-100 group-hover:flex transition ease-in-out duration-250',
            'dark:border-gray-600 dark:divide-gray-600',
        ]); ?>">

            <?php if(!$disableNewChildRecordCreation): ?>
                <button wire:loading.remove wire:target="addChild('<?php echo e($statePath); ?>')" x-init
                    x-tooltip.raw.duration.0="<?php echo e(__('ui::filament-navigation.items.add-child')); ?>" type="button"
                    wire:click="addChild('<?php echo e($statePath); ?>')" class="p-1"
                    title="<?php echo e(__('ui::filament-navigation.items.add-child')); ?>">
                    <?php echo e(svg('heroicon-o-plus', 'w-3 h-3 text-gray-500 hover:text-gray-900')); ?>
                </button>
                <button wire:loading wire:target="addChild('<?php echo e($statePath); ?>')" type="button" class="p-1">
                    <?php echo e(svg('heroicon-o-arrow-path', 'w-3 h-3 text-blue-500 hover:text-blue-900 animate-spin')); ?>
                </button>
            <?php endif; ?>

            <?php if(!$disableRecordDeletion): ?>
                <button wire:loading.remove wire:target="removeItem('<?php echo e($statePath); ?>')" x-init
                    x-tooltip.raw.duration.0="<?php echo e(__('ui::filament-navigation.items.remove')); ?>" type="button"
                    wire:click="removeItem('<?php echo e($statePath); ?>')" class="p-1"
                    title="<?php echo e(__('ui::filament-navigation.items.remove')); ?>">
                    <?php echo e(svg('heroicon-o-trash', 'w-3 h-3 text-danger-500 hover:text-danger-900')); ?>
                </button>
                <button wire:loading wire:target="removeItem('<?php echo e($statePath); ?>')" type="button" class="p-1">
                    <?php echo e(svg('heroicon-o-arrow-path', 'w-3 h-3 text-blue-500 hover:text-blue-900 animate-spin')); ?>
                </button>
            <?php endif; ?>
        </div>
    </div>

    <div x-show="open" x-collapse class="ml-6">
        <div class="space-y-2" wire:key="<?php echo e($statePath); ?>-children" x-data="navigationSortableContainer({
            statePath: <?php echo \Illuminate\Support\Js::from($statePath . '.children')->toHtml() ?>
        })">
            <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uuid => $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal970822b23c4ee404d72ede98c696a493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal970822b23c4ee404d72ede98c696a493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'ui::components.nav-item','data' => ['statePath' => $statePath . '.children.' . $uuid,'item' => $child,'disableNewChildRecordCreation' => $disableNewChildRecordCreation,'disableRecordEdit' => $disableRecordEdit,'disableRecordDeletion' => $disableRecordDeletion,'disableRecordsSorting' => $disableRecordsSorting]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui::nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['statePath' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statePath . '.children.' . $uuid),'item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child),'disableNewChildRecordCreation' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableNewChildRecordCreation),'disableRecordEdit' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableRecordEdit),'disableRecordDeletion' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableRecordDeletion),'disableRecordsSorting' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disableRecordsSorting)]); ?>
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/nav-item.blade.php ENDPATH**/ ?>