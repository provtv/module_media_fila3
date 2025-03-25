<?php $__env->startSection('content'); ?>
     
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('ticket.create', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3264825145-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:ticket.create>
   
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pub_theme::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/tickets/index/acts/create.blade.php ENDPATH**/ ?>