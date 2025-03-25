{
    "version": "https://jsonfeed.org/version/1.1",
    "title": "<?php echo e($meta['title']); ?>",
<?php if(!empty($meta['description'])): ?>
    "description": "<?php echo e($meta['description']); ?>",
<?php endif; ?>
    "home_page_url": "<?php echo e(config('app.url')); ?>",
    "feed_url": "<?php echo e(url($meta['link'])); ?>",
    "language": "<?php echo e($meta['language']); ?>",
<?php if(!empty($meta['image'])): ?>
    "icon": "<?php echo e($meta['image']); ?>",
<?php endif; ?>
    "authors": [<?php $__currentLoopData = $items->unique('authorName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
            "name": "<?php echo e($item->authorName); ?>"
        }<?php if(! $loop->last): ?>,<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    ],
    "items": [<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
            "id": "<?php echo e(url($item->id)); ?>",
            "title": <?php echo json_encode($item->title); ?>,
            "url": "<?php echo e(url($item->link)); ?>",
            "content_html": <?php echo json_encode($item->summary); ?>,
            "summary": <?php echo json_encode($item->summary); ?>,
            "date_published": "<?php echo e($item->timestamp()); ?>",
            "date_modified": "<?php echo e($item->timestamp()); ?>",
            "authors": [{ "name": <?php echo json_encode($item->authorName); ?> }],
<?php if($item->__isset('image')): ?>
            "image": "<?php echo e(url($item->image)); ?>",
<?php endif; ?>
<?php if($item->__isset('enclosure')): ?>
            "attachments": [
                {
                    "url": "<?php echo e(url($item->enclosure)); ?>",
                    "mime_type": "<?php echo e($item->enclosureType); ?>",
                    "size_in_bytes": <?php echo e($item->enclosureLength); ?>

                }
            ],
<?php endif; ?>
            "tags": [ <?php echo implode(',', array_map(fn($c) => '"'.$c.'"', $item->category)); ?> ]
        }<?php if(! $loop->last): ?>,
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    ]
}
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/spatie/laravel-feed/resources/views/json.blade.php ENDPATH**/ ?>