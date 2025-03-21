<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'comment' => null,
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
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    /** @var ?\Spatie\Comments\Models\Comment $comment */
    $avatar = $comment?->commentatorProperties()?->avatar;

    if (! $avatar) {
        $defaultImage = Spatie\Comments\Support\Config::getGravatarDefaultImage();
        $avatar = "https://www.gravatar.com/avatar/unknown?d={$defaultImage}";

        if ($user = auth()->user()) {
            $segment = md5(strtolower($user->email));
            $avatar = "https://www.gravatar.com/avatar/{$segment}?d={$defaultImage}";
        }
    }
?>
<img
    class="comments-avatar"
    src="<?php echo e($avatar); ?>"
    alt="<?php echo e(trim("{$comment?->commentatorProperties()?->name} avatar")); ?>"
>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/components/avatar.blade.php ENDPATH**/ ?>