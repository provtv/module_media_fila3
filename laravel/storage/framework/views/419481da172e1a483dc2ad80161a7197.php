<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'compact' => false,
    'left' => false,
    'bottom' => false,
    'title' => '',
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
    'compact' => false,
    'left' => false,
    'bottom' => false,
    'title' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div
    x-cloak
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'comments-modal',
        'is-compact' => $compact,
        'is-left' => $left,
        'is-bottom' => $bottom
    ]); ?>"
    <?php echo e($attributes->except(['compact', 'left', 'bottom'])); ?>

>
    <?php if($title): ?>
        <p class="comments-modal-title">
            <?php echo e($title); ?>

        </p>
    <?php endif; ?>
    <div class="comments-modal-contents">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/components/modal.blade.php ENDPATH**/ ?>