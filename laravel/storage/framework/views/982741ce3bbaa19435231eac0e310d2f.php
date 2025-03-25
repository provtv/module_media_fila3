<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'submit' => false,
    'small' => false,
    'danger' => false,
    'link' => false,
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
    'submit' => false,
    'small' => false,
    'danger' => false,
    'link' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<button
    type="<?php echo e($submit ? 'submit' : 'button'); ?>"
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'comments-button',
        'is-small' => $small,
        'is-danger' => $danger,
        'is-link' => $link,
    ]); ?>"
    <?php echo e($attributes->except('type', 'size', 'submit', 'link')); ?>

>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/components/button.blade.php ENDPATH**/ ?>