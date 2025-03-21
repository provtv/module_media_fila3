<?php

use Modules\Cms\Models\Page;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use function Laravel\Folio\{withTrashed,middleware, name,render};

?>

<?php if (isset($component)) { $__componentOriginalf103f87f9e6975b672a2453f5462c100 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf103f87f9e6975b672a2453f5462c100 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.marketing','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.marketing'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div
        x-data="{loggedIn:true}"
        class="max-w-[calc(100%-30px)] sm:max-w-[calc(100%-80px)] lg:max-w-[996px] mx-auto pb-12 font-roboto"
        >
        <?php if($page): ?>
            <div class="py-10">
                <h1 class="text-[2rem] mb-4 font-roboto font-semibold text-neutral-5">
                    <?php echo e($page->title); ?>

                </h1>
            </div>

            
            
            <?php if(!empty($page->sidebar_blocks)): ?>
                <div class="grid grid-cols-1 lg:grid-cols-[21.25rem,1fr] gap-4">
                    <div class="space-y-6">
                        <?php echo e($_theme->showPageSidebarContent($page->slug)); ?>

                    </div>

                    <?php echo e($_theme->showPageContent($page->slug)); ?>

                </div>
            
            <?php else: ?>
                
                <div>
                    <?php echo e($_theme->showPageContent($page->slug)); ?>

                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="flex flex-col items-center justify-center py-8 space-y-4">
                <div>
                    <img class="max-w-lg" src="https://error404.fun/img/full-preview/1x/3.png" alt="">
                </div>
                <div class="space-y-2 text-center">
                    <h2 class="text-2xl font-bold md:text-4xl lg:text-6xl">Whooops!</h2>
                    <p class="text-gray-400"><?php echo e(__('pub_theme::404.no_article')); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $attributes = $__attributesOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__attributesOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $component = $__componentOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__componentOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Themes/Sixteen/resources/views/pages/pages/[slug].blade.php ENDPATH**/ ?>