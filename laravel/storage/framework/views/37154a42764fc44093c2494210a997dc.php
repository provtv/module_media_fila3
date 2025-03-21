<div>
    <?php $__env->startComponent('ui::components.modal.simple', ['guid' => $modal_guid, 'title' => $modal_title]); ?>
        <?php $__env->slot('content'); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('rate_single');

$__html = app('livewire')->mount($__name, $__params, 'lw-1233904408-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('btns'); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <button data-toggle="modal" data-target="#<?php echo e($modal_guid); ?>" class="btn btn-primary mb-2">
        Vota <i class="fas fa-star"></i>
    </button>

</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Rating/resources/views/rate_it.blade.php ENDPATH**/ ?>