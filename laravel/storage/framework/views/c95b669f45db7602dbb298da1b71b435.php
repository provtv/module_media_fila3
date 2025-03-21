<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'crumbs' => [], 
    'page' => 'About'
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
    'crumbs' => [], 
    'page' => 'About'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>



<nav class="flex justify-between border-t border-b dark:border-gray-800/60">
    <ol class="inline-flex max-w-6xl mx-auto  items-center w-full py-2 px-8 mb-3 space-x-3 text-sm text-slate-800/70 dark:text-white/70 [&amp;_.active-breadcrumb]:text-neutral-500/80 sm:mb-0">
        <li class="flex items-center h-full"><a href="/" class="py-1 dark:hover:text-neutral-100"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path><path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path></svg></a></li>
        <?php $__currentLoopData = $crumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="mx-2 text-slate-600/20 dark:text-white/40">/</span>
            <?php if(isset($crumb['href'])): ?>
                <li><a href="<?php echo e($crumb['href']); ?>" class="inline-flex items-center py-1 font-normal dark:hover:text-neutral-100 focus:outline-none"><?php echo e($crumb['text']); ?></a></li>
            <?php else: ?>
                <li><span><?php echo e($crumb['text']); ?></li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</nav><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/ui/marketing/breadcrumbs.blade.php ENDPATH**/ ?>