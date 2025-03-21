<ul class="ml-auto flex items-center space-x-4">
        <?php $__currentLoopData = $menu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a
                    href="<?php echo e($item['url']); ?>"
                    <?php if($item['type'] === 'external'): ?> target="_blank" <?php endif; ?>
                >
                    <?php echo e($item['title']); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/menu/v1.blade.php ENDPATH**/ ?>