<?php if (isset($component)) { $__componentOriginal927cc8bfd13cfb89807d806104c70a94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal927cc8bfd13cfb89807d806104c70a94 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'comments::signed.signedLayout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::signed-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    Do you want to approve the comment?

    <form class="form" method="POST">
        <?php echo csrf_field(); ?>
        <button id="confirmationButton" class="button" type="submit">Approve</button>
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal927cc8bfd13cfb89807d806104c70a94)): ?>
<?php $attributes = $__attributesOriginal927cc8bfd13cfb89807d806104c70a94; ?>
<?php unset($__attributesOriginal927cc8bfd13cfb89807d806104c70a94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal927cc8bfd13cfb89807d806104c70a94)): ?>
<?php $component = $__componentOriginal927cc8bfd13cfb89807d806104c70a94; ?>
<?php unset($__componentOriginal927cc8bfd13cfb89807d806104c70a94); ?>
<?php endif; ?>

<script>
    document.getElementById("confirmationButton").click();
</script>

<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments/resources/views/signed/approval/approveCommentConfirmation.blade.php ENDPATH**/ ?>