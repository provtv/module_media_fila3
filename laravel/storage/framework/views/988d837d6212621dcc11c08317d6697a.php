<?php $__env->startSection('title', 'Verify your email address'); ?>

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="<?php echo e(route('home')); ?>">
            <?php if (isset($component)) { $__componentOriginal9b4fc78ff293a6d4b952ba6864567c7e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b4fc78ff293a6d4b952ba6864567c7e = $attributes; } ?>
<?php $component = Modules\UI\View\Components\Logo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\UI\View\Components\Logo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-auto h-16 mx-auto text-indigo-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b4fc78ff293a6d4b952ba6864567c7e)): ?>
<?php $attributes = $__attributesOriginal9b4fc78ff293a6d4b952ba6864567c7e; ?>
<?php unset($__attributesOriginal9b4fc78ff293a6d4b952ba6864567c7e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b4fc78ff293a6d4b952ba6864567c7e)): ?>
<?php $component = $__componentOriginal9b4fc78ff293a6d4b952ba6864567c7e; ?>
<?php unset($__componentOriginal9b4fc78ff293a6d4b952ba6864567c7e); ?>
<?php endif; ?>
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Verify your email address
        </h2>

        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                sign out
            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <?php if(session('resent')): ?>
                <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow" role="alert">
                    <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>

                    <p>A fresh verification link has been sent to your email address.</p>
                </div>
            <?php endif; ?>

            <div class="text-sm text-gray-700">
                <p>Before proceeding, please check your email for a verification link.</p>

                <p class="mt-3">
                    If you did not receive the email, <a wire:click="resend" class="text-indigo-700 cursor-pointer hover:text-indigo-600 focus:outline-none focus:underline transition ease-in-out duration-150">click here to request another</a>.
                </p>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Themes/Sixteen/resources/views/livewire/auth/verify.blade.php ENDPATH**/ ?>