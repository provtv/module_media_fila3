<?php $__env->startComponent('mail::message'); ?>
# <?php echo e(__('comments::notifications.approved_comment_mail_title', [
    'commentable_name' => $topLevelComment->commentable->commentableName(),
    'commentable_url' => $topLevelComment->commentable->commentUrl(),
    'commentator_name' => $comment->commentatorProperties()->name ?? 'anonymous',
])); ?>


<?php echo e(__('comments::notifications.approved_comment_mail_body', [
    'commentable_name' => $topLevelComment->commentable->commentableName(),
    'commentable_url' => $topLevelComment->commentable->commentUrl(),
    'commentator_name' => $comment->commentatorProperties()->name ?? 'anonymous',
])); ?>


<?php echo $comment->text; ?>


<?php $__env->startComponent('mail::button', ['url' => $comment->commentUrl()]); ?>
<?php echo e(__('comments::notifications.view_comment')); ?>

<?php echo $__env->renderComponent(); ?>

<?php if($unsubscribeUrl = $commentator->unsubscribeFromCommentNotificationsUrl($comment)): ?>
<a href="<?php echo e($unsubscribeUrl); ?>">Unsubscribe from receive notification about <?php echo e($topLevelComment->commentable->commentableName()); ?></a>
<?php endif; ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments/resources/views/mail/approvedCommentNotification.blade.php ENDPATH**/ ?>