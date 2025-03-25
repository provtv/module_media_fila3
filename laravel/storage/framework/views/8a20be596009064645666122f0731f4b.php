<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => 'Page Header Title', 
    'description' => 'Description goes here'
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
    'title' => 'Page Header Title', 
    'description' => 'Description goes here'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<div class="w-full h-auto bg-gradient-to-b from-slate-100/70 to-transparent dark:bg-gradient-to-b dark:from-slate-950 dark:to-transparent">
    <div class="max-w-6xl px-8 py-8 mx-auto text-left dark:text-white">
        <h1 class="text-2xl font-medium tracking-tighter leading-tighter font-heading md:text-3xl"><?php echo e($title); ?></h1>
        <p class="mx-auto mt-1.5 text-base font-medium text-neutral-400 dark:text-slate-400 md:mt-2"><?php echo e($description); ?></p>
    </div>
</div><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/ui/marketing/page-header.blade.php ENDPATH**/ ?>