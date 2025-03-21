<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <?php echo $_theme->metatags(); ?>

        <!-- Used to add dark mode right away, adding here prevents any flicker -->
        <script>
            if (typeof(Storage) !== "undefined") {
                if(localStorage.getItem('dark_mode') && localStorage.getItem('dark_mode') == 'true'){
                    document.documentElement.classList.add('dark');
                }
            }
        </script>
        <style>
			[x-cloak] {
			display: none !important;
			}
		</style>
		<?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>


        <?php echo app('Illuminate\Foundation\Vite')([/*'resources/css/filament/theme.css',*/'resources/css/app.css',],'themes/Sixteen/dist'); ?>


    </head>
    <body class="min-h-screen antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
        <?php echo e($slot); ?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('toast', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2555631226-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('notifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-2555631226-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
		<?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js'],'themes/Sixteen/dist'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset("vendor/cookie-consent/css/cookie-consent.css")); ?>">
    </body>
</html>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Themes/Sixteen/resources/views/components/layouts/main.blade.php ENDPATH**/ ?>