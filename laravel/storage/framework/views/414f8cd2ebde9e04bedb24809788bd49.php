<div class="grid min-h-screen md:grid-cols-2">
    <div class="p-16 text-white bg-[#0F2734] hidden md:block">
        <div class="flex flex-col justify-between h-full">
            <a href="/" class="">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </a>
            
            <h1 class="text-[64px] leading-tight font-semibold">Make your<br/>prediction</h1>
        </div>
    </div>
    <div class="bg-[#ECEFED] relative">
        <button class="absolute start-5 top-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20">
                <path fill="currentColor" fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10" clip-rule="evenodd" />
            </svg>
        </button>
        <main class="container max-w-sm px-5 mx-auto">
            <div class="py-16 space-y-6">
                <h4 class="text-3xl font-semibold text-center">Welcome back!</h4>
                <div class="space-y-4">
                    
                    <a 
                        href="<?php echo e(route('socialite.', ['provider' => 'google'])); ?>"
                        class="flex items-center w-full px-4 py-4 font-semibold transition-colors duration-500 border rounded-lg border-slate-400 hover:bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.18em" height="1.2em" viewBox="0 0 256 262">
                            <path fill="#4285f4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                            <path fill="#34a853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" />
                            <path fill="#fbbc05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602z" />
                            <path fill="#eb4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" />
                        </svg>
                        <span class="block tracking-widest text-center grow">Enter with Google</span>
                    </a>
                    
                </div>
                <div class="flex items-center py-2">
                    <div class="flex-1 border-t border-slate-400"></div>
                    <span class="px-3 text-sm text-slate-800">or</span>
                    <div class="flex-1 border-t border-slate-400"></div>
                </div>
                <form class="space-y-4" wire:submit.prevent="authenticate">
                    <div class="space-y-1">
                        <label for="email" class="block font-semibold">E-mail</label>
                        <input wire:model.lazy="email" id="email" type="email" class="block w-full p-4 transition bg-transparent border rounded-lg h-14 border-slate-400 hover:bg-slate-300 hover:border-slate-300 focus:bg-transparent focus:border-slate-400" placeholder="example@email.com"/>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <div class="space-y-1">
                        <label for="password" class="block font-semibold">Password</label>
                        <div class="relative">
                            <input wire:model.lazy="password" id="password" type="password" class="block w-full p-4 transition bg-transparent border rounded-lg h-14 border-slate-400 hover:bg-slate-300 hover:border-slate-300 focus:bg-transparent focus:border-slate-400" />
                            <button id="visibilityToggler" type="button" class="absolute inset-y-0 p-2 right-2">
                                <svg style="display: none;" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178" />
                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0" />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12c1.292 4.339 5.31 7.5 10.066 7.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.499a10.522 10.522 0 0 1-4.293 5.773M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <div>
                        <button class="flex bg-[#0027cc] text-white items-center w-full px-4 py-4 font-semibold transition-colors duration-500 border rounded-lg border-slate-400 hover:bg-[#061989]">
                            <span class="block tracking-widest text-center grow">Login</span>
                        </button>
                    </div>
                    <div class="text-center">
                        <a class="font-semibold text-[#0027cc]" href="<?php echo e(route('password.request')); ?>">Forgot your password?</a>
                    </div>
                </form>
                <!--[if BLOCK]><![endif]--><?php if(Route::has('register')): ?>
                    <div class="text-center">
                        <p class="font-semibold">
                            <span>Dont have an account?</span>
                            <a class="font-semibold text-[#0027cc]" href="<?php echo e(route('register')); ?>">Register</a>
                        </p>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </main>
    </div>
</div>
<script>
    const togglePasswordVisibility = () => {
        let password = document.querySelector('#password');
        password.type = password.type == 'password' ? 'text' : 'password';
        document.querySelector('#visibilityToggler').children[0].style.display = password.type == 'password' ? 'none' : 'inherit';
        document.querySelector('#visibilityToggler').children[1].style.display = password.type == 'password' ? 'inherit' : 'none';
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#visibilityToggler').addEventListener('click', togglePasswordVisibility)
    })
</script><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Themes/TwentyOne/resources/views/livewire/auth/login.blade.php ENDPATH**/ ?>