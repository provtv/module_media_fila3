<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['image' => '']));

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

foreach (array_filter((['image' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $background = $image ? 'bg-black' : 'bg-gray-100';
?>

<div class="relative min-h-[200px] flex items-center justify-center <?php echo e($background); ?>">
    <?php if($image): ?>
        <div
            class="absolute inset-0 z-0 opacity-50"
            style="background-image: url(<?php echo e($image); ?>); background-size: cover; background-position: center;"
        ></div>
    <?php endif; ?>

    <div class="relative z-1 p-2 text-4xl text-gray-700 lg:text-6xl">
        <?php echo $slot; ?>

    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/std/banner.blade.php ENDPATH**/ ?>