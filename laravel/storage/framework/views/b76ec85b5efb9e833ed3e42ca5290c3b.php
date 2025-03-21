<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post']));

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

foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div>
    <a class="block text-black" href="<?php echo e(route('post.show', ['slug' => $post->slug])); ?>">
        <img
            class="h-[200px] w-full object-cover object-center bg-gray-100"
            src="<?php echo e($post->getMainImage()); ?>"
            alt=""
            loading="lazy"
        >
        <h2 class="mt-3 text-xl"><?php echo e($post->title); ?></h2>
    </a>
    <div class="mt-1">
        
    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/std/card.blade.php ENDPATH**/ ?>