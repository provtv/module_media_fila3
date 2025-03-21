<div
    id="comment-<?php echo e($comment->id); ?>"
    class="comments-group <?php echo e($showAvatar ? 'comments-group-with-avatars' : ''); ?>"
    x-data="{ confirmDelete: false, urlCopied: false }"
    x-effect="
        if (urlCopied) {
            window.navigator.clipboard.writeText(window.location.href.split('#')[0] + '#comment-<?php echo e($comment->id); ?>');
            window.setTimeout(() => urlCopied = false, 2000);
        }
    "
>
    <div class="comments-comment">
        <?php if($showAvatar): ?>
            <?php if (isset($component)) { $__componentOriginal4b3f051e4d38e619b3793cf61c537a36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4b3f051e4d38e619b3793cf61c537a36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.avatar','data' => ['comment' => $comment]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['comment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment)]); ?>
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
        <div class="comments-comment-inner">
            <div class="comments-comment-header">
                <?php if($url = $comment->commentatorProperties()?->url): ?>
                    <a href="<?php echo e($url); ?>">
                        <?php echo e($comment->commentatorProperties()->name); ?>

                    </a>
                <?php else: ?>
                    <?php echo e($comment->commentatorProperties()?->name ?? __('comments::comments.guest')); ?>

                <?php endif; ?>
                <ul class="comments-comment-header-actions">
                    <li>
                        <a
                            href="#comment-<?php echo e($comment->id); ?>"
                            @click.prevent="urlCopied = true"
                        >
                            <?php if (isset($component)) { $__componentOriginal967243a7a1b9dc0660a47819b611b4a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal967243a7a1b9dc0660a47819b611b4a7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.date','data' => ['date' => $comment->created_at]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment->created_at)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal967243a7a1b9dc0660a47819b611b4a7)): ?>
<?php $attributes = $__attributesOriginal967243a7a1b9dc0660a47819b611b4a7; ?>
<?php unset($__attributesOriginal967243a7a1b9dc0660a47819b611b4a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal967243a7a1b9dc0660a47819b611b4a7)): ?>
<?php $component = $__componentOriginal967243a7a1b9dc0660a47819b611b4a7; ?>
<?php unset($__componentOriginal967243a7a1b9dc0660a47819b611b4a7); ?>
<?php endif; ?>
                            <span class="comments-comment-header-copied" x-show="urlCopied" style="display: none;">
                                ✓ <?php echo e(__('comments::comments.copied')); ?>!
                            </span>
                        </a>
                    </li>
                    <?php if($writable): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $comment)): ?>
                            <li>
                                <?php if($isEditing): ?>
                                    <a href="#" id="stop" wire:click.prevent="stopEditing" aria-role="button"><?php echo e(__('comments::comments.cancel')); ?></a>
                                <?php else: ?>
                                    <a href="#" id="start" wire:click.prevent="startEditing" aria-role="button"><?php echo e(__('comments::comments.edit')); ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $comment)): ?>
                            <li>
                                <a href="#" @click.prevent="confirmDelete = true" aria-role="button"><?php echo e(__('comments::comments.delete')); ?></a>
                                <?php if (isset($component)) { $__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.modal','data' => ['right' => true,'bottom' => true,'xShow' => 'confirmDelete','@click.outside' => 'confirmDelete = false','title' => __('comments::comments.delete_confirmation_title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['right' => true,'bottom' => true,'x-show' => 'confirmDelete','@click.outside' => 'confirmDelete = false','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('comments::comments.delete_confirmation_title'))]); ?>
                                    <p><?php echo e(__('comments::comments.delete_confirmation_text')); ?></p>
                                    <?php if (isset($component)) { $__componentOriginal8a3f3ba598cfc7044f4fc5bce84e689d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a3f3ba598cfc7044f4fc5bce84e689d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.button','data' => ['danger' => true,'small' => true,'wire:click' => 'delete('.e($comment->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['danger' => true,'small' => true,'wire:click' => 'delete('.e($comment->id).')']); ?>
                                        <?php echo e(__('comments::comments.delete')); ?>

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
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5)): ?>
<?php $attributes = $__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5; ?>
<?php unset($__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5)): ?>
<?php $component = $__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5; ?>
<?php unset($__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5); ?>
<?php endif; ?>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php echo $__env->make('comments::extraCommentHeaderActions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            </div>

            <?php if($comment->isPending()): ?>
                <div class="comments-approval">
                    <span>
                        <?php echo e(__('comments::comments.awaits_approval')); ?>

                    </span>
                    <span class="comments-approval-buttons">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reject', $comment)): ?>
                            <button
                                class="comments-button is-small is-danger"
                                wire:click="reject">
                                <?php echo e(__('comments::comments.reject_comment')); ?>

                            </button>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('approve', $comment)): ?>
                            <button
                                class="comments-button is-small"
                                wire:click="approve">
                                <?php echo e(__('comments::comments.approve_comment')); ?>

                            </button>
                        <?php endif; ?>
                    </span>
                </div>
            <?php endif; ?>
            <?php if($isEditing): ?>
                <div class="comments-form">
                    <form class="comments-form-inner" wire:submit.prevent="edit">
                        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => \Spatie\LivewireComments\Support\Config::editor()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => 'editText','comment' => $comment,'autofocus' => true]); ?>
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
                        <?php $__errorArgs = ['editText'];
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
                            <?php echo e(__('comments::comments.edit_comment')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.button','data' => ['link' => true,'wire:click' => 'stopEditing']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => true,'wire:click' => 'stopEditing']); ?>
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
                    </form>
                </div>
            <?php else: ?>
                <div class="comment-text">
                    <?php echo $comment->text; ?>

                </div>
                <?php if($showReactions): ?>
                    <?php if($writable || $comment->reactions->summary()->isNotEmpty()): ?>
                        <div class="comments-reactions">
                            <?php $__currentLoopData = $comment->reactions->summary(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $summary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    wire:key="<?php echo e($comment->id); ?><?php echo e($summary['reaction']); ?>"
                                    <?php if(auth()->guard()->check()): ?>
                                    wire:click="toggleReaction('<?php echo e($summary['reaction']); ?>')"
                                    <?php endif; ?>
                                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['comments-reaction', 'is-reacted' => $summary['commentator_reacted']]); ?>"
                                >
                                    <?php echo e($summary['reaction']); ?> <?php echo e($summary['count']); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if($writable): ?>
                                <div
                                    x-cloak
                                    x-data="{ open: false }"
                                    @click.outside="open = false"
                                    class="comments-reaction-picker"
                                >
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('react', $comment)): ?>
                                        <button class="comments-reaction-picker-trigger" type="button"
                                                @click="open = !open">
                                            <?php if (isset($component)) { $__componentOriginal99cd20aab6cfa2b1720da5cbc8c5bcab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99cd20aab6cfa2b1720da5cbc8c5bcab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.icons.smile','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::icons.smile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99cd20aab6cfa2b1720da5cbc8c5bcab)): ?>
<?php $attributes = $__attributesOriginal99cd20aab6cfa2b1720da5cbc8c5bcab; ?>
<?php unset($__attributesOriginal99cd20aab6cfa2b1720da5cbc8c5bcab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99cd20aab6cfa2b1720da5cbc8c5bcab)): ?>
<?php $component = $__componentOriginal99cd20aab6cfa2b1720da5cbc8c5bcab; ?>
<?php unset($__componentOriginal99cd20aab6cfa2b1720da5cbc8c5bcab); ?>
<?php endif; ?>
                                        </button>
                                        <?php if (isset($component)) { $__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.modal','data' => ['xShow' => 'open','compact' => true,'left' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'open','compact' => true,'left' => true]); ?>
                                            <div class="comments-reaction-picker-reactions">
                                                <?php $__currentLoopData = config('comments.allowed_reactions'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $commentatorReacted = ! is_bool(array_search(
                                                            $reaction,
                                                            array_column($comment->reactions->toArray(), 'reaction'),
                                                        ));
                                                    ?>
                                                    <button
                                                        type="button"
                                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['comments-reaction-picker-reaction', 'is-reacted' => $commentatorReacted]); ?>"
                                                        wire:click="toggleReaction('<?php echo e($reaction); ?>')"
                                                    >
                                                        <?php echo e($reaction); ?>

                                                    </button>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5)): ?>
<?php $attributes = $__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5; ?>
<?php unset($__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5)): ?>
<?php $component = $__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5; ?>
<?php unset($__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if($showReplies && $comment->isTopLevel()): ?>
        <div class="comments-nested">
            <?php if($this->newestFirst): ?>
                <?php if(auth()->check() || config('comments.allow_anonymous_comments')): ?>
                    <?php echo $__env->make('comments::livewire.partials.replyTo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php $__currentLoopData = $comment->nestedComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nestedComment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(! \Illuminate\Support\Facades\Gate::check('see', $nestedComment)) continue; ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comments-comment', ['comment' => $nestedComment,'showAvatar' => $showAvatar,'newestFirst' => $newestFirst,'writable' => $writable]);

$__html = app('livewire')->mount($__name, $__params, $nestedComment->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(! $this->newestFirst): ?>
                <?php if(auth()->check() || config('comments.allow_anonymous_comments')): ?>
                    <?php echo $__env->make('comments::livewire.partials.replyTo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/livewire/comment.blade.php ENDPATH**/ ?>