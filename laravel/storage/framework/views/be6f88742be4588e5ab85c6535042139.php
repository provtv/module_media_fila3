<footer class="px-4 py-6 text-white bg-gray-900 xl:py-12">
    <div class="mx-auto space-y-12 max-w-7xl">
        <div class="flex flex-wrap items-center gap-4">
            <img class="block h-16 pt-2" src="https://italia.github.io/design-comuni-pagine-statiche/assets/images/logo-eu-inverted.svg" alt="">
            <div class="flex items-center space-x-2">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-building-library'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
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
                <div class="text-xl font-bold">Nome del Comune</div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 xl:grid-cols-4">
            <div class="space-y-4">
                <h5 class="text-sm font-bold uppercase">Amministrazione</h5>
                <hr class="border-gray-400" />
                <ul class="space-y-1">
                    <li><a class="text-sm text-gray-300 underline" href="">Organi di governo</a></li>
                    <li><a class="text-sm text-gray-300 underline" href="">Aree amministrative</a></li>
                    <li><a class="text-sm text-gray-300 underline" href="">Uffici</a></li>
                    <li><a class="text-sm text-gray-300 underline" href="">Enti e fondazioni</a></li>
                    <li><a class="text-sm text-gray-300 underline" href="">Politici</a></li>
                    <li><a class="text-sm text-gray-300 underline" href="">Personale amministrativo</a></li>
                    <li><a class="text-sm text-gray-300 underline" href="">Documenti e dati</a></li>
                </ul>
            </div>
            <div class="space-y-4 lg:col-span-2">
                <h5 class="text-sm font-bold uppercase">Categorie di servizio</h5>
                <hr class="border-gray-400" />
                <div class="grid grid-cols-1 gap-1 sm:grid-cols-2">
                    <ul class="space-y-1">
                        <li><a class="text-sm text-gray-300 underline" href="">Anagrafe e stato civile</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Cultura e tempo libero</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Vita lavorativa</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Imprese e commercio</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Appalti pubblici</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Catasto e urbanistica</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Turismo</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Mobilità e trasporti</a></li>
                    </ul>
                    <ul class="space-y-1">
                        <li><a class="text-sm text-gray-300 underline" href="">Educazione e formazione</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Giustizia e sicurezza pubblica</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Tributi, finanze e contravvenzioni</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Ambiente</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Salute, benessere e assistenza</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Autorizzazioni</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Agricoltura e pesca</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <div class="space-y-4">
                    <h5 class="text-sm font-bold uppercase">Novità</h5>
                    <hr class="border-gray-400" />
                    <ul class="space-y-1">
                        <li><a class="text-sm text-gray-300 underline" href="">Notizie</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Comunicati</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Avvisi</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h5 class="text-sm font-bold uppercase">Vivere il comune</h5>
                    <hr class="border-gray-400" />
                    <ul class="space-y-1">
                        <li><a class="text-sm text-gray-300 underline" href="">Luoghi</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Eventi</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 xl:grid-cols-4">
            <div class="col-span-3 space-y-4">
                <h5 class="text-sm font-bold uppercase">Contatti</h5>
                <hr class="border-gray-400" />
                <div class="grid grid-cols-1 text-sm text-gray-300 sm:grid-cols-3">
                    <div>
                        <p>Comune di Nome Comune</p>
                        <p>Via Roma 123 - 00100 Comune</p>
                        <p>Codice fiscale / P. IVA: 00123456789</p>
                        <br />
                        <p><a href="" class="underline">Ufficio Relazioni con il Pubblico</a></p>
                        <p>Numero verde: 800 016 123</p>
                        <p>SMS e WhatsApp: +39 320 1234567</p>
                        <p>Posta Elettronica Certificata</p>
                        <p>Centralino unico: 012 3456</p>
                    </div>
                    <ul class="space-y-1">
                        <li><a class="text-sm text-gray-300 underline" href="">Leggi le FAQ</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Prenotazione appuntamento</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Segnalazione disservizio</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Richiesta d'assistenza</a></li>
                    </ul>
                    <ul class="space-y-1">
                        <li><a class="text-sm text-gray-300 underline" href="">Amministrazione trasparente</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Informativa privacy</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Note legali</a></li>
                        <li><a class="text-sm text-gray-300 underline" href="">Dichiarazione di accessibilità</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-4">
                <h5 class="text-sm font-bold uppercase">Seguici su</h5>
                <hr class="border-gray-400" />
                <ul class="items-center hidden px-1 menu menu-horizontal md:inline-flex md:me-2">
                    <?php $__currentLoopData = ['facebook', 'twitter', 'instagram', 'linkedin']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="p-2">
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
                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <hr class="border-gray-400" />
        <ul class="flex space-x-4">
            <li><a class="text-sm text-gray-300 underline" href="">Media Policy</a></li>
            <li><a class="text-sm text-gray-300 underline" href="">Mappa del sito</a></li>
        </ul>
    </div>
</footer><?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Ticket/resources/views/components/blocks/footer/agid.blade.php ENDPATH**/ ?>