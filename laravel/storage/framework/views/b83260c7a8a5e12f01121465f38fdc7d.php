<?php

use Modules\Ticket\Models\Ticket;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Modules\Ticket\Enums\TicketStatusEnum;
use Modules\Ticket\Enums\TicketPriorityEnum;
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
    <?php if (isset($component)) { $__componentOriginalf677d0adafd3d883cca1809390b93580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf677d0adafd3d883cca1809390b93580 = $attributes; } ?>
<?php $component = Spatie\LivewireComments\View\Components\Styles::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments::styles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Spatie\LivewireComments\View\Components\Styles::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf677d0adafd3d883cca1809390b93580)): ?>
<?php $attributes = $__attributesOriginalf677d0adafd3d883cca1809390b93580; ?>
<?php unset($__attributesOriginalf677d0adafd3d883cca1809390b93580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf677d0adafd3d883cca1809390b93580)): ?>
<?php $component = $__componentOriginalf677d0adafd3d883cca1809390b93580; ?>
<?php unset($__componentOriginalf677d0adafd3d883cca1809390b93580); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.marketing.breadcrumbs','data' => ['crumbs' => [
        [
            'href' => '/tickets',
            'text' => 'Tickets'
        ],
        [
            'text' => $ticket->name
        ]
    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.marketing.breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['crumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        [
            'href' => '/tickets',
            'text' => 'Tickets'
        ],
        [
            'text' => $ticket->name
        ]
    ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d)): ?>
<?php $attributes = $__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d; ?>
<?php unset($__attributesOriginale8a44c44c7a0a4bc7823ce1677e3510d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d)): ?>
<?php $component = $__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d; ?>
<?php unset($__componentOriginale8a44c44c7a0a4bc7823ce1677e3510d); ?>
<?php endif; ?>

    <article class="container max-w-6xl p-4 mx-auto space-y-8">

        <section>
            <div class="relative flex w-full gap-6 pb-4 overflow-x-auto snap-x">
                <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="snap-center shrink-0">
                        <img class="object-cover h-64 rounded shadow-lg aspect-video" 
                            src="<?php echo e($media->getUrl()); ?>" />
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        <div class="grid lg:grid-cols-3">
            <div class="space-y-6 lg:col-span-2">
                <section class="flex flex-col justify-center space-y-2">
                    <div>
                        <p>Di <strong><?php echo e($ticket->creator->name); ?></strong> il <?php echo e($ticket->created_at->isoFormat('LLL')); ?></p>
                    </div>
                    <h1 class="text-4xl font-bold heading md:text-6xl dark:text-white md:leading-tight">
                        <?php echo e($ticket->name); ?>

                    </h1>
                    <div class="flex space-x-4">
                        <div class="flex items-center px-4 py-2 space-x-1 text-sm text-orange-600 border rounded-full bg-orange-500/20 border-orange-500/30">
                            <?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => ''.e($ticket->priority->getIcon()).'','class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ''.e($ticket->priority->getIcon()).'','class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $attributes = $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $component = $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
                            <span>Priorità</span>
                            <span class="font-semibold"> <?php echo e($ticket->priority->getLabel()); ?></span>
                        </div>
                        <div class="flex items-center px-4 py-2 space-x-1 text-sm text-blue-600 border rounded-full bg-blue-500/20 border-blue-500/30">
                            <?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => ''.e($status->getIcon()).'','class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ''.e($status->getIcon()).'','class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $attributes = $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $component = $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
                            <span>Stato</span>
                            <span class="font-semibold"> <?php echo e($status->getLabel()); ?></span>
                        </div>
                    </div>
                </section>

                <section class="prose-sm prose md:prose-lg">
                    <?php echo $ticket->content; ?>

                </section>

                <?php if(auth()->guard()->check()): ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comments', ['model' => $ticket]);

$__html = app('livewire')->mount($__name, $__params, 'lw-387688999-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comments', ['readOnly' => true,'model' => $ticket]);

$__html = app('livewire')->mount($__name, $__params, 'lw-387688999-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                    <p class="comments-no-comment-yet">
                        <?php echo e(__('comment::txt.log-in-for-comment')); ?>

                    </p>
                <?php endif; ?>


            </div>
            <section class="space-y-4">
                <h2 class="text-2xl font-bold">Timeline</h2>
                <div>
                    <ol class="relative border-gray-200 border-s dark:border-gray-700">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"><?php echo e($status->created_at->isoFormat('LLL')); ?></time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white"><?php echo e(__('ticket::enums.'.$status->name.'.label')); ?></h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400"><?php echo e($status->reason); ?></p>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </ol>
                </div>
            </section>
        </div>

    </article>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $attributes = $__attributesOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__attributesOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $component = $__componentOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__componentOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/pages/tickets/[slug].blade.php ENDPATH**/ ?>