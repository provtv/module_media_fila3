<?php $__env->startComponent('mail::message'); ?>

<?php echo e(__('comments::notifications.pending_comment_mail_body', [
    'commentable_name' => $topLevelComment->commentable->commentableName(),
    'commentator_name' => $comment->commentatorProperties()->name ?? 'anonymous',
])); ?>


[<?php echo e(__('comments::notifications.view_comment')); ?>](<?php echo e($comment->commentUrl()); ?>)

<?php echo $comment->text; ?>


<?php $__env->startComponent('mail::button', ['url' => $comment->approveUrl()]); ?>
    <?php echo e(__('comments::notifications.approve_comment')); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => $comment->rejectUrl()]); ?>
    <?php echo e(__('comments::notifications.reject_comment')); ?>

<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments/resources/views/mail/pendingCommentNotification.blade.php ENDPATH**/ ?>