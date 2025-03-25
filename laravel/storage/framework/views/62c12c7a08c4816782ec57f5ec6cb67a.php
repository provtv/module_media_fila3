<?=
/* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <atom:link href="<?php echo e(url($meta['link'])); ?>" rel="self" type="application/rss+xml" />
        <title><?php echo \Spatie\Feed\Helpers\Cdata::out($meta['title'] ); ?></title>
        <link><?php echo \Spatie\Feed\Helpers\Cdata::out(url($meta['link']) ); ?></link>
<?php if(!empty($meta['image'])): ?>
        <image>
            <url><?php echo e($meta['image']); ?></url>
            <title><?php echo \Spatie\Feed\Helpers\Cdata::out($meta['title'] ); ?></title>
            <link><?php echo \Spatie\Feed\Helpers\Cdata::out(url($meta['link']) ); ?></link>
        </image>
<?php endif; ?>
        <description><?php echo \Spatie\Feed\Helpers\Cdata::out($meta['description'] ); ?></description>
        <language><?php echo e($meta['language']); ?></language>
        <pubDate><?php echo e($meta['updated']); ?></pubDate>

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <item>
                <title><?php echo \Spatie\Feed\Helpers\Cdata::out($item->title); ?></title>
                <link><?php echo e(url($item->link)); ?></link>
                <description><?php echo \Spatie\Feed\Helpers\Cdata::out($item->summary); ?></description>
                <author><?php echo \Spatie\Feed\Helpers\Cdata::out($item->authorName.(empty($item->authorEmail)?'':' <'.$item->authorEmail.'>')); ?></author>
                <guid><?php echo e(url($item->id)); ?></guid>
                <pubDate><?php echo e($item->timestamp()); ?></pubDate>
                <?php $__currentLoopData = $item->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <category><?php echo e($category); ?></category>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </item>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </channel>
</rss>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/vendor/spatie/laravel-feed/resources/views/rss.blade.php ENDPATH**/ ?>