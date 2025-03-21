<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'href' => '/'
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
    'href' => '/'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<a 
    <?php echo e($attributes); ?> class="<?php if(Request::is( (($href == '/') ? '/' : trim($href, '/')) )): ?><?php echo e('bg-slate-200/60 text-slate-900 dark:bg-slate-900 dark:text-white'); ?><?php endif; ?> inline-block sm:w-auto w-full px-4 py-2 text-sm rounded-full text-slate-700 dark:text-slate-200 dark:hover:bg-slate-900 dark:hover:text-white hover:bg-slate-200/60 hover:text-slate-900" 
    href="<?php echo e($href); ?>"
>
    <?php echo e($slot); ?>

</a><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/ui/nav-link.blade.php ENDPATH**/ ?>