<div>

    <?php $__env->startComponent('ui::components.modal.simple', ['guid' => $modal_guid, 'title' => $modal_title]); ?>
        <?php $__env->slot('content'); ?>
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success" style="margin-top:30px;">x
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <?php $__currentLoopData = $goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('rate.single', ['model' => $model, 'goal' => $goal]);

$__html = app('livewire')->mount($__name, $__params, 'lw-914954708-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('btns'); ?>
            <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <button data-toggle="modal" data-target="#<?php echo e($modal_guid); ?>" class="btn btn-primary mb-2">
        Vota <i class="fas fa-star"></i>
    </button>

</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Rating/resources/views/rate/multi.blade.php ENDPATH**/ ?>