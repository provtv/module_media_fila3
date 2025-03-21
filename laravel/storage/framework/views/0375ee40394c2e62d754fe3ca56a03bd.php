<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['date']));

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

foreach (array_filter((['date']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<time datetime="<?php echo e($date->format('Y-m-d H:i:s')); ?>" class="comments-date">
    <?php echo e($date->diffInMinutes() < 1 ? __('comments::comments.just_now') : $date->diffForHumans()); ?>

</time>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/components/date.blade.php ENDPATH**/ ?>