<?php
    $fields=$getFields();
    $record=$getRecord();
?>
<div
    <?php echo e($attributes
            ->merge($getExtraAttributes(), escape: false)
            ->class([
                'fi-ta-icon flex flex-wrap gap-1.5',
                'px-3 py-4' => ! $isInline(),
                //'flex-col' => $isListWithLineBreaks(),
                'flex-col' => true,
            ])); ?>

>
    <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $state=$field->record($record)->getState();
            if($state==null){
                continue;
            }
            try{
                $out=str_replace(', ',',<br/>',$state).'<br/>';
            }catch(\TypeError $e){
                $out=$field->record($record)->render();
            }
        ?>
        <?php echo $out; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/filament/tables/columns/group.blade.php ENDPATH**/ ?>