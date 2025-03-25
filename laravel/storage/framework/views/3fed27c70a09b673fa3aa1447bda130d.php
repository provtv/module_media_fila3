<?php if($user): ?>
    <div>
        <?php ($uniqid = uniqid()); ?>
        <img src="<?php echo e($user->avatar_url); ?>"
             alt="<?php echo e($user->name); ?>"
             data-popover-target="popover-user-<?php echo e($user->id); ?>-<?php echo e($uniqid); ?>"
             class="w-6 h-6 rounded-full bg-gray-200 bg-cover bg-center"/>

        <div data-popover id="popover-user-<?php echo e($user->id); ?>-<?php echo e($uniqid); ?>" role="tooltip"
             class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500
                                        bg-white rounded-lg border border-gray-200 shadow-sm opacity-0
                                        transition-opacity duration-300 dark:text-gray-400 dark:bg-gray-800
                                        dark:border-gray-600">
            <div class="p-3">
                <div class="flex justify-between items-center mb-2">
                    <img class="w-10 h-10 rounded-full"
                         src="<?php echo e($user->avatar_url); ?>" alt="<?php echo e($user->name); ?>">
                </div>
                <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                    <a><?php echo e($user->name); ?></a>
                </p>
                <p class="mb-3 text-sm font-normal">
                    <a href="mailto:<?php echo e($user->email); ?>"
                       class="hover:underline">
                        <?php echo e($user->email); ?>

                    </a>
                </p>
                <p class="mb-4 text-sm font-light">
                    <?php echo e(__('Member since')); ?>

                    <a class="text-blue-600 dark:text-blue-500">
                        <?php echo e($user->created_at->format('Y-m-d')); ?>

                    </a>
                </p>
                <ul class="flex text-sm font-light">
                    <li class="mr-2">
                        <div>
                        <span class="font-semibold text-gray-900 dark:text-white">
                            <?php echo e(collect(($user->ticketsOwned ?? collect())
                                    ->merge(($user->ticketsResponsible ?? collect())))->unique('id')->count()); ?>

                        </span>
                            <span><?php echo e(__('Tickets')); ?></span>
                        </div>
                    </li>
                    <li>
                        <div>
                        <span class="font-semibold text-gray-900 dark:text-white">
                            <?php echo e(collect(($user->projectsOwning ?? collect())
                                ->merge(($user->projectsAffected ?? collect())))->unique('id')->count()); ?>

                        </span>
                            <span><?php echo e(__('Projects')); ?></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div data-popper-arrow></div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/components/user-avatar.blade.php ENDPATH**/ ?>