<?php
    use Spatie\Comments\Enums\NotificationSubscriptionType;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Gate;
?>

<section class="comments <?php echo e($newestFirst ? 'comments-newest-first' : ''); ?>">
    <header class="comments-header">
        <?php if($writable && $showNotificationOptions && Auth::check()): ?>
            <div x-data="{ subscriptionsOpen: false}" class="comments-subscription">
                <button @click.prevent="subscriptionsOpen = true" class="comments-subscription-trigger">
                    <?php echo e(NotificationSubscriptionType::from($selectedNotificationSubscriptionType)->longDescription()); ?>

                </button>
                <?php if (isset($component)) { $__componentOriginalf3ea63e85cf5d7f6098753ddc114c3f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf3ea63e85cf5d7f6098753ddc114c3f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::components.modal','data' => ['bottom' => true,'compact' => true,'xShow' => 'subscriptionsOpen','@click.outside' => 'subscriptionsOpen = false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bottom' => true,'compact' => true,'x-show' => 'subscriptionsOpen','@click.outside' => 'subscriptionsOpen = false']); ?>
                    <?php $__currentLoopData = NotificationSubscriptionType::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button class="comments-subscription-item" @click="subscriptionsOpen = false" wire:click="updateSelectedNotificationSubscriptionType('<?php echo e($case->value); ?>')">
                            <?php echo e($case->description()); ?>

                        </button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            </div>
        <?php endif; ?>
    </header>

    <?php if($newestFirst): ?>
        <?php echo $__env->make('comments::livewire.partials.newComment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php $__empty_1 = true; $__currentLoopData = $this->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if(! Gate::check('see', $comment)) continue; ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comments-comment', ['comment' => $comment,'showAvatar' => $showAvatars,'newestFirst' => $newestFirst,'writable' => $writable,'showReplies' => $showReplies,'showReactions' => $showReactions]);

$__html = app('livewire')->mount($__name, $__params, $comment->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="comments-no-comment-yet"><?php echo e($noCommentsText ?? __('comments::comments.no_comments_yet')); ?></p>
    <?php endif; ?>

    <?php if($this->comments->hasPages()): ?>
        <?php echo e($this->comments->links()); ?>

    <?php endif; ?>

    <?php if(! $newestFirst): ?>
        <?php echo $__env->make('comments::livewire.partials.newComment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</section>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/livewire/comments.blade.php ENDPATH**/ ?>