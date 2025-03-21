<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['text', 'level']));

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

foreach (array_filter((['text', 'level']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="py-4">
    
    
        <div class="flex flex-col gap-5">
            <article class="bg-white pt-6 lg:pl-6 pb-[18px] lg:pr-[18px] rounded-lg flex flex-col gap-6">
                <div class="pl-6 lg:pl-0">
                    <!-- Since there's no event_start_date, the related div is omitted -->
                    <a
                        href="#will-the-us-national-vacancies-rate-rise-above-66-in-q4"
                        class="mt-1 sm:max-w-[310px] text-xl font-semibold text-neutral-4 block"
                        >
                        <?php echo e($text); ?>

                    </a>

                    <!-- categories -->
                    

                </div>
                <div class="px-6 lg:px-0 flex items-center justify-between">
                    <!-- Placeholder for interactive elements such as tooltips -->
                </div>
            </article>
        </div>
    
</div><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/blocks/title/v2.blade.php ENDPATH**/ ?>