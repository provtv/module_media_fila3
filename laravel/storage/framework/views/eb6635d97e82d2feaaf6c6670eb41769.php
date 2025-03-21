<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>

            <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
        <?php else: ?>
            <title><?php echo e(config('app.name')); ?></title>
        <?php endif; ?>

        <!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo e(url(asset('favicon.ico'))); ?>">

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
        
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css'],'themes/TwentyOne/dist'); ?>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    </head>

    <body>
        <?php echo $__env->yieldContent('body'); ?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('notifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-2655239069-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js'],'themes/TwentyOne/dist'); ?>
    </body>
</html>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Themes/TwentyOne/resources/views/layouts/base.blade.php ENDPATH**/ ?>