<?php
    $data=Arr::get($block,'data.gallery.0',null);
    if($data==null){
      return ;
    }    
?>

<div>
  <?php echo $__env->make('ui::components.blocks.'.$tpl.'.'.$data['version'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/blocks/images_gallery.blade.php ENDPATH**/ ?>