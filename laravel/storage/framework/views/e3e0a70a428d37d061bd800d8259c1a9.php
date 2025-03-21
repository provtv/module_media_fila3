<?php if($writable): ?>
    <div
        class="comments-form comments-reply"
        wire:key="<?php echo e($comment->nestedComments->last()?->id ?? 0); ?>"
    >
        <?php if($showAvatar): ?>
            <?php if (isset($component)) { $__componentOriginal4b3f051e4d38e619b3793cf61c537a36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4b3f051e4d38e619b3793cf61c537a36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.avatar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4b3f051e4d38e619b3793cf61c537a36)): ?>
<?php $attributes = $__attributesOriginal4b3f051e4d38e619b3793cf61c537a36; ?>
<?php unset($__attributesOriginal4b3f051e4d38e619b3793cf61c537a36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b3f051e4d38e619b3793cf61c537a36)): ?>
<?php $component = $__componentOriginal4b3f051e4d38e619b3793cf61c537a36; ?>
<?php unset($__componentOriginal4b3f051e4d38e619b3793cf61c537a36); ?>
<?php endif; ?>
        <?php endif; ?>
        <form class="comments-form-inner" wire:submit.prevent="reply">
            <div
                x-data="{ isExpanded: false }"
                x-init="$watch('isExpanded', (isExpanded) => {
                    isExpanded
                        ? $dispatch('open-editor-<?php echo e($comment->id); ?>')
                        : $dispatch('close-editor-<?php echo e($comment->id); ?>')
                })">
                <input
                    x-show="!isExpanded"
                    @click="isExpanded = true"
                    @focus="isExpanded = true"
                    class="comments-placeholder"
                    placeholder="<?php echo e(__('comments::comments.write_reply')); ?>"
                >
                <div x-show="isExpanded">
                    <div>
                        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => \Spatie\LivewireComments\Support\Config::editor()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => 'replyText','comment' => $comment,'placeholder' => __('comments::comments.write_reply'),'autofocus' => true]); ?>
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
                        <?php $__errorArgs = ['replyText'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="comments-error">
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php if (isset($component)) { $__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.button','data' => ['submit' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => true]); ?>
                            <?php echo e(__('comments::comments.create_reply')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d)): ?>
<?php $attributes = $__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d; ?>
<?php unset($__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d)): ?>
<?php $component = $__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d; ?>
<?php unset($__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.button','data' => ['link' => true,'@click' => 'isExpanded = false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => true,'@click' => 'isExpanded = false']); ?>
                            <?php echo e(__('comments::comments.cancel')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d)): ?>
<?php $attributes = $__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d; ?>
<?php unset($__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d)): ?>
<?php $component = $__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d; ?>
<?php unset($__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/livewire/partials/replyTo.blade.php ENDPATH**/ ?>