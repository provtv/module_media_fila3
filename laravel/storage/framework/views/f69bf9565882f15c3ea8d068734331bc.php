<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;

?>

<?php if (isset($component)) { $__componentOriginalf103f87f9e6975b672a2453f5462c100 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf103f87f9e6975b672a2453f5462c100 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.marketing','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.marketing'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .fi-input-wrp {
            ring: none !important;
            box-shadow: none !important;
            border-bottom: solid 1px !important;
            box-shadow: none !important;
            border-radius: 0 !important;
            font-family: 'Titillium Web', sans-serif !important;
            font-weight: 400 !important;
            color: '#5d7083';
        }

        .title {
            font-family: 'Titillium Web', sans-serif !important;
            font-weight: 800 !important;
        }

        .fi-fo-rich-editor {
            border: none !important;
            box-shadow: none !important;
            --tw-ring-shadow: none !important;
            --tw-ring-color: transparent !important;
            background: transparent !important;
            padding: 0 !important;
            color: black !important;
            font-weight: 400 !important;
        }

        .fi-fo-rich-editor.fi-disabled {
            background: transparent !important;
            --tw-ring-shadow: none !important;
            --tw-ring-color: transparent !important;
            color: black !important;
            font-weight: 400 !important;
        }

        /* New styles for the form */
        .fi-fo-wizard {
            box-shadow: none !important;
            border: none !important;
            background: transparent !important;
        }

        .fi-fo-section {
            box-shadow: none !important;
            border: none !important;
            background: transparent !important;
        }

        .fi-fo-textarea {
            border-radius: 0 !important;
            box-shadow: none !important;
            border-bottom: solid 1px !important;
        }

        .fi-fo-select {
            border-radius: 0 !important;
            box-shadow: none !important;
            border-bottom: solid 1px !important;
        }
    </style>
    <div class="container mx-auto px-4 max-w-5xl">
        <?php if (isset($component)) { $__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.marketing.breadcrumbs','data' => ['crumbs' => [['text' => 'Tickets'],['text' => 'Create']]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.marketing.breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['crumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['text' => 'Tickets'],['text' => 'Create']])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d)): ?>
<?php $attributes = $__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d; ?>
<?php unset($__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d)): ?>
<?php $component = $__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d; ?>
<?php unset($__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d); ?>
<?php endif; ?>
        <div class="w-full">
            <h1 class="text-5xl mt-5 mb-2 title">Segnalazione disservizio</h1>
            <br />
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split(\Modules\Fixcity\Filament\Widgets\CreateTicketWidget::class);

$__html = app('livewire')->mount($__name, $__params, 'lw-4135362797-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $attributes = $__attributesOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__attributesOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $component = $__componentOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__componentOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Fixcity/resources/views/pages/tickets/create.blade.php ENDPATH**/ ?>