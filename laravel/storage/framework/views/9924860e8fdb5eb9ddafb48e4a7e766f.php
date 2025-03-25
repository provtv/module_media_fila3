<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'comment' => null,
    'placeholder' => '',
    'model',
    'autofocus' => false,
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
    'comment' => null,
    'placeholder' => '',
    'model',
    'autofocus' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<textarea
    wire:model="<?php echo e($model); ?>"
    <?php if($autofocus): ?>
        x-data
        x-on:open-editor-<?php echo e($comment->id); ?>.window="$nextTick(() => $el.focus())"
    <?php endif; ?>
    class="comments-textarea"
    placeholder="<?php echo e($placeholder); ?>"
></textarea>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/components/editors/textarea.blade.php ENDPATH**/ ?>