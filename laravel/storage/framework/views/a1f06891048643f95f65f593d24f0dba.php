
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
    Lat-lng <br/>
    lat:<?php echo e($lat); ?><br/>
    lng:<?php echo e($lng); ?><br/>
    err_code:<?php echo e($err_code); ?><br/>
    err_message:<?php echo e($err_message); ?><br/>



    <?php
        $__scriptKey = '1371779452-0';
        ob_start();
    ?>
<script>

    navigator.geolocation.getCurrentPosition(
        function success(pos) {
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('lat',pos.coords.latitude);
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('lng',pos.coords.longitude);

        },
        function error(err) {
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('err_code',err.code);
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('err_message',err.message);
            console.log(err);
        }
    );
    </script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>

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
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/filament/widgets/lat-lng.blade.php ENDPATH**/ ?>