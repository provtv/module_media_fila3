<header class="w-full">
    <div class="relative z-20 flex items-center justify-between w-full h-12  px-6 mx-auto">
        <div x-data="{ mobileMenuOpen: false }" class="relative flex items-center md:space-x-2 text-neutral-800">

            <div class="relative z-50 flex items-center w-auto h-full">
                <a href="<?php echo e(route('home')); ?>" class="flex items-center mr-0 md:mr-5 shrink-0">
                    
                    <?php if (isset($component)) { $__componentOriginalb501e8c73315a10eb0eb5fd14fda0d94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb501e8c73315a10eb0eb5fd14fda0d94 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb501e8c73315a10eb0eb5fd14fda0d94)): ?>
<?php $attributes = $__attributesOriginalb501e8c73315a10eb0eb5fd14fda0d94; ?>
<?php unset($__attributesOriginalb501e8c73315a10eb0eb5fd14fda0d94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb501e8c73315a10eb0eb5fd14fda0d94)): ?>
<?php $component = $__componentOriginalb501e8c73315a10eb0eb5fd14fda0d94; ?>
<?php unset($__componentOriginalb501e8c73315a10eb0eb5fd14fda0d94); ?>
<?php endif; ?>
                    
                
                </a>
                <div @click="mobileMenuOpen=!mobileMenuOpen"
                    class="relative flex items-center justify-center w-8 h-8 ml-5 overflow-hidden text-gray-500 bg-gray-100 rounded cursor-pointer md:hidden hover:text-gray-700 hover:bg-gray-200">
                    <div :class="{ 'rotate-0': mobileMenuOpen }"
                        class="flex flex-col items-center justify-center w-4 h-4 duration-300 ease-in-out">
                        <span :class="{ '-rotate-[135deg] translate-y-[5px]': mobileMenuOpen }"
                            class="block ease-in-out duration-300 w-full h-0.5 bg-gray-800 rounded-full"></span>
                        <span :class="{ 'w-0': mobileMenuOpen, 'w-full': !mobileMenuOpen }"
                            class="block ease-in-out duration-300 w-full h-0.5 my-[3px] bg-gray-800 rounded-full"></span>
                        <span :class="{ '-rotate-45 -translate-y-[5px]': mobileMenuOpen }"
                            class="block ease-in-out duration-300 w-full h-0.5 bg-gray-800 rounded-full"></span>
                    </div>
                </div>
            </div>

            <div :class="{ 'flex': mobileMenuOpen, 'hidden md:flex': !mobileMenuOpen }"
                class="fixed top-0 left-0 z-40 flex-col items-start justify-start hidden w-full h-full min-h-screen pt-20 space-y-5 text-sm font-medium duration-150 ease-out transform md:pt-0 text-neutral-500 md:h-auto md:min-h-0 md:left-auto md:items-center md:relative">
                
                <nav
                    class="flex flex-col w-full p-6 space-y-2 bg-white md:p-0 md:flex-row md:space-x-2 md:space-y-0 md:w-auto md:bg-transparent md:flex">
                    <?php if (isset($component)) { $__componentOriginal230d78629742508075cd03dd9439398e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal230d78629742508075cd03dd9439398e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.nav-link','data' => ['href' => '/']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/']); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal230d78629742508075cd03dd9439398e)): ?>
<?php $attributes = $__attributesOriginal230d78629742508075cd03dd9439398e; ?>
<?php unset($__attributesOriginal230d78629742508075cd03dd9439398e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal230d78629742508075cd03dd9439398e)): ?>
<?php $component = $__componentOriginal230d78629742508075cd03dd9439398e; ?>
<?php unset($__componentOriginal230d78629742508075cd03dd9439398e); ?>
<?php endif; ?>
                    <?php $__currentLoopData = $_theme->getMenu('headernav_right'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal230d78629742508075cd03dd9439398e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal230d78629742508075cd03dd9439398e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.nav-link','data' => ['href' => ''.e($_theme->getMenuUrl($item)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e($_theme->getMenuUrl($item)).'']); ?><?php echo e($item['title']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal230d78629742508075cd03dd9439398e)): ?>
<?php $attributes = $__attributesOriginal230d78629742508075cd03dd9439398e; ?>
<?php unset($__attributesOriginal230d78629742508075cd03dd9439398e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal230d78629742508075cd03dd9439398e)): ?>
<?php $component = $__componentOriginal230d78629742508075cd03dd9439398e; ?>
<?php unset($__componentOriginal230d78629742508075cd03dd9439398e); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
                
            </div>

        </div>
        <div class="relative z-50 flex items-stretch space-x-3 text-neutral-800">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('lang.change', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1432853576-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:lang.change>
            <div x-data class="flex-shrink-0 hidden w-[38px] overflow-hidden rounded-full h-[38px] sm:block" x-cloak>
                <?php if (isset($component)) { $__componentOriginal4c1cef46934dc3ee5d6cd5b4b56bde60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c1cef46934dc3ee5d6cd5b4b56bde60 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.light-dark-switch','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.light-dark-switch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c1cef46934dc3ee5d6cd5b4b56bde60)): ?>
<?php $attributes = $__attributesOriginal4c1cef46934dc3ee5d6cd5b4b56bde60; ?>
<?php unset($__attributesOriginal4c1cef46934dc3ee5d6cd5b4b56bde60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c1cef46934dc3ee5d6cd5b4b56bde60)): ?>
<?php $component = $__componentOriginal4c1cef46934dc3ee5d6cd5b4b56bde60; ?>
<?php unset($__componentOriginal4c1cef46934dc3ee5d6cd5b4b56bde60); ?>
<?php endif; ?>
            </div>
            <?php if(auth()->guard()->check()): ?>
                
                <div class="flex items-center w-auto">
                    <?php if (isset($component)) { $__componentOriginalb3773b6803c137c9da32546d8a32fa98 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3773b6803c137c9da32546d8a32fa98 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.profile.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('profile.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb3773b6803c137c9da32546d8a32fa98)): ?>
<?php $attributes = $__attributesOriginalb3773b6803c137c9da32546d8a32fa98; ?>
<?php unset($__attributesOriginalb3773b6803c137c9da32546d8a32fa98); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3773b6803c137c9da32546d8a32fa98)): ?>
<?php $component = $__componentOriginalb3773b6803c137c9da32546d8a32fa98; ?>
<?php unset($__componentOriginalb3773b6803c137c9da32546d8a32fa98); ?>
<?php endif; ?>
                </div>
            <?php else: ?>
                <div class="flex items-center w-auto">
                    <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.button','data' => ['type' => 'secondary','submit' => 'true','tag' => 'a','href' => ''.e(route('login')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'secondary','submit' => 'true','tag' => 'a','href' => ''.e(route('login')).'']); ?>
                        Login
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $attributes = $__attributesOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__attributesOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $component = $__componentOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__componentOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
                </div>
                <div class="flex items-center w-auto">
                    <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.button','data' => ['type' => 'primary','submit' => 'true','tag' => 'a','href' => ''.e(route('register')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'primary','submit' => 'true','tag' => 'a','href' => ''.e(route('register')).'']); ?>
                        Sign Up
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $attributes = $__attributesOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__attributesOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $component = $__componentOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__componentOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</header>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/UI/resources/views/components/headernav/simple.blade.php ENDPATH**/ ?>