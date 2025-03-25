<?=
    /* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
    '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL.
    '<?xml-stylesheet href="/vendor/feed/atom.xsl" type="text/xsl"?>'
?>

<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="<?php echo e($meta['language']); ?>">
    <?php $__currentLoopData = $meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $metaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key === 'link'): ?>
            <<?php echo e($key); ?> href="<?php echo e(url($metaItem)); ?>" rel="self"></<?php echo e($key); ?>>
        <?php elseif($key === 'title'): ?>
            <<?php echo e($key); ?>><?php echo \Spatie\Feed\Helpers\Cdata::out($metaItem); ?></<?php echo e($key); ?>>
        <?php elseif($key === 'description'): ?>
            <subtitle><?php echo e($metaItem); ?></subtitle>
        <?php elseif($key === 'language'): ?>
        <?php elseif($key === 'image'): ?>
<?php if(!empty($metaItem)): ?>
            <logo><?php echo $metaItem; ?></logo>
<?php else: ?>

<?php endif; ?>
        <?php else: ?>
            <<?php echo e($key); ?>><?php echo e($metaItem); ?></<?php echo e($key); ?>>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <entry>
            <title><?php echo \Spatie\Feed\Helpers\Cdata::out($item->title); ?></title>
            <link rel="alternate" href="<?php echo e(url($item->link)); ?>" />
            <id><?php echo e(url($item->id)); ?></id>
            <author>
                <name><?php echo \Spatie\Feed\Helpers\Cdata::out($item->authorName); ?></name>
<?php if(!empty($item->authorEmail)): ?>
                <email><?php echo \Spatie\Feed\Helpers\Cdata::out($item->authorEmail); ?></email>

<?php endif; ?>
            </author>
            <summary type="html">
                <?php echo \Spatie\Feed\Helpers\Cdata::out($item->summary); ?>

            </summary>
            <?php if($item->__isset('enclosure')): ?>
            <link href="<?php echo e(url($item->enclosure)); ?>" length="<?php echo e($item->enclosureLength); ?>" type="<?php echo e($item->enclosureType); ?>" />
            <?php endif; ?>
            <?php $__currentLoopData = $item->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <category term="<?php echo e($category); ?>" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <updated><?php echo e($item->timestamp()); ?></updated>
        </entry>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</feed>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/spatie/laravel-feed/resources/views/atom.blade.php ENDPATH**/ ?>