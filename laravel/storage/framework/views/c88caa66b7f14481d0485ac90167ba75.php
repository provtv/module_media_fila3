<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'image' => false,
    'url' => false,
    'alt' => false,
    'caption' => false,
    'ratio' => false,
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
    'image' => false,
    'url' => false,
    'alt' => false,
    'caption' => false,
    'ratio' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $src = $image ? Storage::url($image) : $url;
    if(!$src){
        $src = $model->getMedia($img_uuid)->first()->getUrl();
    }
    $ratioClass = \Modules\UI\Filament\Blocks\Image::getRatioClass($ratio ?: '4-3');
?>

<?php if($src && $caption): ?>
    <figure>
        <img
            class="w-full <?php echo e($ratioClass); ?> object-cover object-center"
            src="<?php echo e($src); ?>"
            <?php if($alt): ?> alt="<?php echo e($alt); ?>" <?php endif; ?>
        >
        <figcaption><?php echo e($caption); ?></figcaption>
    </figure>
<?php elseif($src): ?>
    <img
        class="w-full <?php echo e($ratioClass); ?>"
        src="<?php echo e($src); ?>"
        <?php if($alt): ?> alt="<?php echo e($alt); ?>" <?php endif; ?>
    >
<?php endif; ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/blocks/image_spatie.blade.php ENDPATH**/ ?>