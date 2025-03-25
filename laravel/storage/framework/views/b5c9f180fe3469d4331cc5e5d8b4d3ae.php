<?php if (isset($component)) { $__componentOriginalbe23554f7bded3778895289146189db7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe23554f7bded3778895289146189db7 = $attributes; } ?>
<?php $component = Filament\View\LegacyComponents\Page::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Filament\View\LegacyComponents\Page::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php if($project->currentSprint): ?>

        <div class="mx-auto w-full" wire:ignore>
            <details class="w-full bg-white open:bg-gray-200 duration-300">
                <summary
                    class="relative w-full bg-inherit px-5 py-3 text-base cursor-pointer text-gray-500">
                    <?php echo e(__('Filters')); ?>

                </summary>
                <div class="bg-white px-5 py-3">
                    <form>
                        <?php echo e($this->form); ?>

                    </form>
                </div>
            </details>
        </div>

        <div class="kanban-container">

            <?php $__currentLoopData = $this->getStatuses(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('partials.kanban.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <?php $__env->startPush('scripts'); ?>
            <script src="<?php echo e(asset('js/Sortable.js')); ?>"></script>
            <script>

                (() => {
                    let record;
                    <?php $__currentLoopData = $this->getStatuses(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        record = document.querySelector('#status-records-<?php echo e($status['id']); ?>');

                    Sortable.create(record, {
                        group: {
                            name: 'status-<?php echo e($status['id']); ?>',
                            pull: true,
                            put: true
                        },
                        handle: '.handle',
                        animation: 100,
                        onEnd: function (evt) {
                            Livewire.emit('recordUpdated',
                                +evt.clone.dataset.id, // id
                                +evt.newIndex, // newIndex
                                +evt.to.dataset.status, // newStatus
                            );
                        },
                    })
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                })();
            </script>
        <?php $__env->stopPush(); ?>
    <?php else: ?>
        <div class="w-full flex flex-col">
            <span class="text-gray-500 text-lg font-medium">
                <?php echo e(__('No active sprint for this project!')); ?>

            </span>
            <?php if(auth()->user()->can('update', $project)): ?>
                <span class="text-gray-500 text-sm">
                    <?php echo e(__("Click the below button to manage project's sprints")); ?>

                </span>
                <a href="<?php echo e(route('filament.resources.projects.view', $project)); ?>"
                   class="px-3 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded mt-3 w-fit">
                    <?php echo e(__('Manage sprints')); ?>

                </a>
            <?php else: ?>
                <span class="text-gray-500 text-sm">
                    <?php echo e(__("If you think a sprint should be started, please contact an administrator")); ?>

                </span>
            <?php endif; ?>
        </div>
    <?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $attributes = $__attributesOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__attributesOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $component = $__componentOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__componentOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/filament/pages/scrum.blade.php ENDPATH**/ ?>