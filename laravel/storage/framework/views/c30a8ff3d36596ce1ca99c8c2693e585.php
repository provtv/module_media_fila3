<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field]); ?>
    <?php
        $id = $getId();
        $isDisabled = $isDisabled();
        $statePath = $getStatePath();
    ?>


    <ul role="list" class="grid gap-8 xl:grid-cols-4 lg:grid-cols-4">

        <?php $__currentLoopData = $getOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $shouldOptionBeDisabled = $isDisabled || $isOptionDisabled($value, $image);
            ?>
            <li class="overflow-hidden ">
                <label class="relative">
                    <input <?php if($shouldOptionBeDisabled): echo 'disabled'; endif; ?> id="<?php echo e($id); ?>-<?php echo e($value); ?>"
                        name="<?php echo e($id); ?>" type="radio" value="<?php echo e($value); ?>" wire:loading.attr="disabled"
                        <?php echo e($applyStateBindingModifiers('wire:model')); ?>="<?php echo e($statePath); ?>" class="rb-image" />
                    <span class="img-radio-selected"></span>
                    <div class="img-radio">
                        <img src="<?php echo e($image); ?>" alt="<?php echo e($value); ?>"
                            class="focus:bg-primary-500 cursor-pointer">
                    </div>
                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>

<style>
    input[name="<?php echo e($id); ?>"]:checked+.img-radio-selected {
        background-color: rgba(var(--primary-500), var(--tw-bg-opacity));
        transform: rotate(0.8648rad);

        width: 110px;
        height: 20px;

        position: absolute;
        top: 15px;
        right: -30px;
        z-index: 99999;
    }

    .rb-image {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .img-radio {
        border: 1px solid #dee2e6;
        max-width: 100%;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        height: auto;
        margin: auto;
        padding: 5px;
        position: relative;
        width: 100%;
    }

    .img-radio:hover img {
        -o-object-position: bottom;
        object-position: bottom;
    }

    .img-radio img {
        height: 150px;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: top;
        object-position: top;
        transform-origin: 50% 50%;
        transition-duration: .1s;
        transition: all 2s ease;
        width: 100%;
    }

    .overflow-hidden {
        overflow: hidden;
    }
</style>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/filament/forms/components/radio-image.blade.php ENDPATH**/ ?>