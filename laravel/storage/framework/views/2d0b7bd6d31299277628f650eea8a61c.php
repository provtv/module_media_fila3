<?php $__env->startSection('content'); ?>
<?php
$ticket=$row;
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">Ticket #<?php echo e($ticket->id); ?></div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    <?php echo e(trans('cruds.ticket.fields.title')); ?>

                                </th>
                                <td>
                                    <?php echo e($ticket->title); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('cruds.ticket.fields.content')); ?>

                                </th>
                                <td>
                                    <?php echo $ticket->content; ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('cruds.ticket.fields.attachments')); ?>

                                </th>
                                <td>
                                    <?php $__currentLoopData = $ticket->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e($attachment->getUrl()); ?>"><?php echo e($attachment->file_name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('cruds.ticket.fields.status')); ?>

                                </th>
                                <td>
                                    <?php echo e($ticket->status->name ?? ''); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('cruds.ticket.fields.author_name')); ?>

                                </th>
                                <td>
                                    <?php echo e($ticket->author_name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('cruds.ticket.fields.author_email')); ?>

                                </th>
                                <td>
                                    <?php echo e($ticket->author_email); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('cruds.ticket.fields.comments')); ?>

                                </th>
                                <td>
                                    <?php $__empty_1 = true; $__currentLoopData = $ticket->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="row">
                                            <div class="col">
                                                <p class="font-weight-bold"><a href="mailto:<?php echo e($comment->author_email); ?>"><?php echo e($comment->author_name); ?></a> (<?php echo e($comment->created_at); ?>)</p>
                                                <p><?php echo e($comment->comment_text); ?></p>
                                            </div>
                                        </div>
                                        <?php if(!$loop->last): ?>
                                            <hr />
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="row">
                                            <div class="col">
                                                <p>There are no comments.</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="<?php echo e(route('tickets.storeComment', $ticket->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="comment_text">Leave a comment</label>
                            <textarea class="form-control <?php $__errorArgs = ['comment_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="comment_text" name="comment_text" rows="3" required></textarea>
                            <?php $__errorArgs = ['comment_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('global.submit'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pub_theme::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/tickets/show.blade.php ENDPATH**/ ?>