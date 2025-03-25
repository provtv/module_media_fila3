<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use Modules\Fixcity\Models\Ticket;
use Modules\Fixcity\Enums\TicketTypeEnum;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

?>


<div class="py-4 space-y-12 text-gray-950">
    <!-- Breadcrumbs -->
    <section class="max-w-screen-lg px-4 mx-auto">
        <div class="text-sm breadcrumbs">
            <ul>
                <li><a class="link-success">Home</a></li>
                <li>Elenco segnalazioni</li>
            </ul>
        </div>
    </section>
    <!-- Title -->
    <section class="max-w-screen-lg px-4 mx-auto">
        <h1 class="mb-2 text-3xl font-bold lg:text-5xl">Elenco segnalazioni</h1>
        <p>Negli ultimi 12 mesi sono state risolte <?php echo e($resolvedTicketsCount); ?> segnalazioni.</p>
    </section>
    <!-- Divider -->
    <div class="max-w-screen-xl px-4 mx-auto">
        <hr class="my-4" />
    </div>
    <!-- Category & Maps -->
    <section class="max-w-screen-xl px-4 mx-auto">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-24">
            <div class="space-y-4">
                <h4 class="font-bold text-emerald-800">CATEGORIA</h4>
                <div>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-control">
                        <label class="cursor-pointer label !justify-start space-x-4">
                            <input
                                type="checkbox"
                                class="checkbox checkbox-sm"
                                wire:model.live="selectedCategories"
                                value="<?php echo e($category['value']); ?>" />
                            <span class="label-text text-gray-950"><?php echo e($category['label']); ?> (<?php echo e($category['count']); ?>)</span>
                        </label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if(count($selectedCategories) > 0): ?>
                    <div class="mt-2">
                        <button
                            wire:click="clearCategories"
                            class="text-sm text-emerald-600 hover:text-emerald-800">
                            Mostra tutte le categorie
                        </button>
                    </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <div class="col-span-2 space-y-4">
                <div class="flex justify-between text-sm">
                    <div><?php echo e($filteredCount); ?> Risultati</div>
                    <div>
                        <!--[if BLOCK]><![endif]--><?php if(count($selectedCategories) > 0): ?>
                        <button
                            wire:click="clearCategories"
                            class="text-emerald-800">
                            Rimuovi tutti i filtri
                        </button>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <hr />
                <div role="tablist" class="grid-cols-2 tabs tabs-bordered">
                    <input type="radio" name="my_tabs_1" role="tab" class="text-lg text-gray-950 border-0 rounded-none tab focus:!bg-transparent hover:!bg-transparent checked:bg-transparent focus:ring-0 focus:!border-emerald-800" aria-label="Mappa" checked="checked" />
                    <div role="tabpanel" class="py-8 space-y-6 tab-content">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split(\Modules\Fixcity\Filament\Widgets\TicketsMapWidget::class, [
                        'categoryFilter' => $selectedCategories
                        ]);

$__html = app('livewire')->mount($__name, $__params, 'map-' . implode('-', $selectedCategories), $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                    <input type="radio" name="my_tabs_1" role="tab" class="text-lg text-gray-950 border-0 rounded-none tab focus:!bg-transparent hover:!bg-transparent checked:bg-transparent focus:ring-0 focus:!border-emerald-800" aria-label="Elenco" />
                    <div role="tabpanel" class="py-8 space-y-4 tab-content">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalee08b1367eba38734199cf7829b1d1e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee08b1367eba38734199cf7829b1d1e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="space-y-4">
                                <h3 class="text-xl font-bold"><?php echo e($ticket->name); ?></h3>
                                <div class="space-y-2">
                                    <p>Tipologia di segnalazione</p>
                                    <p><strong><?php echo e($ticket->type?->getLabel() ?? 'Non specificato'); ?></strong></p>
                                </div>
                                <!--[if BLOCK]><![endif]--><?php if(in_array($ticket->id, $expandedTickets)): ?>
                                <div class="space-y-4">
                                    <!-- Location Information -->

                                    <div class="space-y-2">
                                        <p><strong>Indirizzo:</strong><br>
                                            <!--[if BLOCK]><![endif]--><?php if($ticket->latitude && $ticket->longitude): ?>
                                            <?php echo e($ticket->address); ?>

                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </p>
                                    </div>

                                    <!-- Rest of your expanded ticket content -->
                                    <div class="space-y-2">
                                        <p class="font-medium">Dettaglio</p>
                                        <p><?php echo e($ticket->content); ?></p>
                                    </div>


                                    <div class="space-y-2">
                                        <p class="font-medium">Immagini</p>
                                        <!--[if BLOCK]><![endif]--><?php if($ticket->media->count() > 0): ?>
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $ticket->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="relative aspect-square">
                                                <img
                                                    src="<?php echo e(asset($media->getUrl())); ?>"
                                                    alt="Immagine segnalazione"
                                                    class="object-cover w-full h-full rounded-lg" />
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <hr class="border-gray-300" />
                                <button wire:click="toggleTicket(<?php echo e($ticket->id); ?>)" class="btn btn-neutral">
                                    <div class="text-white"><?php echo e(in_array($ticket->id, $expandedTickets) ? 'Mostra meno' : 'Mostra tutto'); ?></div>
                                    <x-bi-arrow-<?php echo e(in_array($ticket->id, $expandedTickets) ? 'up' : 'down'); ?>-circle-fill class="size-4" />
                                </button>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $attributes = $__attributesOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $component = $__componentOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__componentOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--><?php if($hasMorePages): ?>
                        <div class="py-4 text-center">
                            <button wire:click="loadMore" class="btn btn-outline text-emerald-600 btn-lg">
                                Carica altre segnalazioni
                            </button>
                        </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold lg:text-4xl">Fai una segnalazione</h2>
                    <p>Se vuoi aggiungere una segnalazione, puoi farlo dopo esserti autenticato con le tue credenziali SPID o CIE.</p>
                    <br />
                    <a href="<?php echo e(route('ticket.create', ['lang'=>$lang])); ?>" class="text-white btn btn-neutral">Segnala disservizio</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs -->
    <div class="px-4 py-12 bg-emerald-700">
        <section class="max-w-screen-md p-6 px-4 mx-auto space-y-4 bg-white rounded-lg lg:p-12">
            <h4 class="text-2xl font-bold">Quanto sono chiare le informazioni su questa pagina?</h4>
            <div class="rating">
                <input type="radio" name="rating-2" class="bg-orange-400 mask mask-star-2 checked:!bg-orange-400" />
                <input type="radio" name="rating-2" class="bg-orange-400 mask mask-star-2 checked:!bg-orange-400" />
                <input type="radio" name="rating-2" class="bg-orange-400 mask mask-star-2 checked:!bg-orange-400" />
                <input type="radio" name="rating-2" class="bg-orange-400 mask mask-star-2 checked:!bg-orange-400" />
                <input type="radio" name="rating-2" class="bg-orange-400 mask mask-star-2 checked:!bg-orange-400" />
            </div>
        </section>
    </div>
    <div class="py-12 !my-0 bg-gray-50 px-4">
        <section class="max-w-screen-md p-6 px-4 mx-auto space-y-4 bg-white rounded-lg lg:p-12">
            <h4 class="text-2xl font-bold">Contatta il comune</h4>
            <ul class="space-y-2">
                <li>
                    <a href="" class="flex items-center space-x-2 text-emerald-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div>Leggi le domande frequenti</div>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center space-x-2 text-emerald-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div>Richiedi assistenza</div>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center space-x-2 text-emerald-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div>Chiama il numero verde 05 0505</div>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center space-x-2 text-emerald-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div>Prenota appuntamento</div>
                    </a>
                </li>
            </ul>
        </section>
    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/storage/framework/views/b71ca2469e4a6ea52ee4a2fe4b5ba9ba.blade.php ENDPATH**/ ?>