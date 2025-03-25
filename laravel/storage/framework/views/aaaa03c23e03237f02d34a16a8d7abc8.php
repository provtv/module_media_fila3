<div>
<?php if (isset($component)) { $__componentOriginalb525200bfa976483b4eaa0b7685c6e24 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb525200bfa976483b4eaa0b7685c6e24 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-widgets::components.widget','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-widgets::widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    <form wire:submit="create">
        <?php echo e($this->form); ?>

        <style>
            .fi-btn.fi-btn-color-primary {
                background-color: #007a52 !important;
                color: white !important;
            }
            
            .fi-btn.fi-btn-color-primary:hover {
                background-color: #007a52 !important;
            }
            .fi-btn.fi-color-custom {
                @apply bg-emerald-600 hover:bg-emerald-500;
            }

            .subtitle {
                font-family: 'Titillium Web', sans-serif !important;
                font-weight: 800 !important;
            }

            /* Style submit button */
            button[type="submit"].fi-btn {
                background-color: white !important;
                color: #007a52 !important;
                border: 2px solid #007a52 !important;
                --c-400: none !important;
                --c-500: none !important;
                --c-600: none !important;
                cursor: pointer;
            }

            button[type="submit"].fi-btn:hover {
                background-color: white !important;
                color: #007a52 !important;
                border: 2px solid #007a52 !important;
                --c-400: none !important;
                --c-500: none !important;
                --c-600: none !important;
                cursor: pointer;
            }

            .fi-fo-wizard-header-step-indicator {
                display: none !important;
            }

            /* Hide the circle container */
            .fi-fo-wizard-header-step-icon-ctn {
                display: none !important;
            }

            /* Modify step borders */
            .fi-fo-wizard-header {
                border: none !important;
            }

            .fi-fo-wizard-header-step {
                border-left: 2px solid #e5e7eb !important;
                border-bottom: none !important;
            }

            .fi-fo-wizard-header-step.fi-active {
                border-left: 2px solid #007a52 !important;
                border-bottom: 2px solid #007a52 !important;
            }

            /* Change text color and font for active step */
            .fi-fo-wizard-header-step.fi-active .fi-fo-wizard-header-step-label {
                color: #007a52 !important;
                font-size: 1.125rem !important;
                font-weight: 600 !important;
            }

            /* Style for all step labels */
            .fi-fo-wizard-header-step-label {
                font-size: 1.125rem !important;
                font-weight: 600 !important;
            }

            /* Hide the separator between steps */
            .fi-fo-wizard-header-step-separator {
                display: none !important;
            }

            /* Style error message */
            .fi-fo-field-wrp-error-message {
                color: #dc2626 !important;
                font-weight: 500 !important;
                font-size: 1rem !important;
                margin-top: 0.5rem !important;
            }

            /* Add grey background to outer wrapper and padding */
            .fi-section-content-ctn {
                background-color: lightgrey !important;
                padding: 1.5rem !important;
                border-radius: 0.5rem !important;
            }

            /* Keep inner content section white */
            .fi-section-content {
                background-color: white !important;
                border-radius: 0.5rem !important;
                padding: 1.5rem !important;
            }

            /* Remove default section styling */
            .fi-section {
                background-color: transparent !important;
                box-shadow: none !important;
                border: none !important;
            }

            /* Style previous step button */
            button[type="button"].fi-btn-color-gray {
                background-color: white !important;
                color: #007a52 !important;
                --c-400: none !important;
                --c-500: none !important;
                --c-600: none !important;
                border: none !important;
                cursor: pointer;
            }

            button[type="button"].fi-btn-color-gray:hover {
                background-color: white !important;
                color: #007a52 !important;
                --c-400: none !important;
                --c-500: none !important;
                --c-600: none !important;
                border: none !important;
                cursor: pointer;
            }
        </style>

    </form>

    <?php if (isset($component)) { $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.modals','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-actions::modals'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $attributes = $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $component = $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb525200bfa976483b4eaa0b7685c6e24)): ?>
<?php $attributes = $__attributesOriginalb525200bfa976483b4eaa0b7685c6e24; ?>
<?php unset($__attributesOriginalb525200bfa976483b4eaa0b7685c6e24); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb525200bfa976483b4eaa0b7685c6e24)): ?>
<?php $component = $__componentOriginalb525200bfa976483b4eaa0b7685c6e24; ?>
<?php unset($__componentOriginalb525200bfa976483b4eaa0b7685c6e24); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/filament/widgets/create-ticket.blade.php ENDPATH**/ ?>