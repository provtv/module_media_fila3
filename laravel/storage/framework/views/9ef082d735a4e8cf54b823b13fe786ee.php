<div>
    <div class="home-address-container delay-1s animate__fadeInUp animate__animated">
        <div class="home-address">
            <form name="address" wire:submit.prevent="search()">
                <div class="home-address-group" id="address-group" >

                    <input type="hidden" wire:model.lazy="form_data.<?php echo e($name); ?>" />

                    <input type="text" data-google-address="{&quot;field&quot;: &quot;<?php echo e($name); ?>&quot;}"
                        class="input home-address-input" autocomplete="off"
                        wire:model.lazy="form_data.<?php echo e($name); ?>_value" />
                    <?php if($warningCivicNumber): ?>
                        <input type="text" name="civic" placeholder="N°" wire:model.lazy="form_data.street_number"
                            class="home-address-input home-civic-input ng-pristine ng-valid ng-touched d-none">
                    <?php endif; ?>
                    <button class="home-address-button home-geolocalize-button" type="button">
                        <img src="<?php echo e(Theme::asset('pub_theme::assets/img/svg/navigate.svg')); ?>" />
                    </button>
                </div>
                <button class="home-address-button home-search-address-button" type="submit" wire:click="search()">
                    Cerca
                </button>
                <div style="clear:both;"></div>
            </form>
            <br />
            <?php if($warningCivicNumber): ?>
                <div class="only-desktop home-error-popup home-address-messages home-error-popup-civic">
                    Per favore inserisci anche il numero civico
                </div>
            <?php endif; ?>


            <?php if($warningSuggestedAddresses): ?>
                <div class="only-desktop home-error-popup home-address-messages">
                    Per favore inserisci la via e il comune, poi scegli tra gli indirizzi suggeriti
                </div>
            <?php endif; ?>

        </div>
    </div>
    <?php if($showActivityTypes): ?>
        <div class="activities-categories-home-container text-center animate__fadeInUp animate__animated">
            <div class="activities-categories-home">
                <?php $__currentLoopData = $enabledTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="activities-categories-home-item" href="<?php echo e($type->url); ?>">
                        <img src="<?php echo e($type->img_src); ?>" /><br />
                        <p><?php echo e($type->title); ?></p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="modal" id="modalNotServed" tabindex="-1" wire:key="noserved-model" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="row" style="margin-left: -10px; margin-top: 10px; margin-right: -10px">
                    <div class="col-sm-12">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px"
                                viewBox="0 0 512 512" xml:space="preserve" width="16px" height="16px">
                                <g>
                                    <path
                                        d="M505.943,6.058c-8.077-8.077-21.172-8.077-29.249,0L6.058,476.693c-8.077,8.077-8.077,21.172,0,29.249    C10.096,509.982,15.39,512,20.683,512c5.293,0,10.586-2.019,14.625-6.059L505.943,35.306    C514.019,27.23,514.019,14.135,505.943,6.058z"
                                        fill="currentColor"></path>
                                </g>
                                <g>
                                    <path
                                        d="M505.942,476.694L35.306,6.059c-8.076-8.077-21.172-8.077-29.248,0c-8.077,8.076-8.077,21.171,0,29.248l470.636,470.636    c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.587-2.019,14.624-6.057C514.018,497.866,514.018,484.771,505.942,476.694z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                        </button>

                        <h3>Ci dispiace, non siamo ancora presenti nella tua zona!</h3>
                        <p>
                            Inserisci il tuo indirizzo email e il CAP, ti
                            informeremo non appena la tua zona sarà coperta dal nostro
                            servizio.
                        </p>
                        <img src="<?php echo e(Theme::asset('pub_theme::assets/img/svg/missing_cap.svg')); ?>" width="100" />
                        <br /><br />

                        <form wire:submit.prevent="saveNotServed" style="margin-bottom:50px;">
                            <div class="modal-body max-width">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="<?php echo e(Theme::asset('pub_theme::assets/img/svg/email.svg')); ?>"
                                                width="24" /></span>
                                        <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="email" name="email" placeholder="Your Email" wire:model.lazy="email">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div id="invalidEmailFeedback" class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="<?php echo e(Theme::asset('pub_theme::assets/img/svg/cap.svg')); ?>"
                                                width="24" /></span>
                                        <input type="text" class="form-control <?php $__errorArgs = ['cap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="cap" name="cap" placeholder="Your cap" wire:model.lazy="cap">
                                        <?php $__errorArgs = ['cap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div id="invalidEmailFeedback" class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-default">Conferma</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php $__env->startPush('styles'); ?>
    <style>
        .ap-input-icon.ap-icon-pin {
            right: 5px !important;
        }

        .ap-input-icon.ap-icon-clear {
            right: 10px !important;
        }

        .pac-container {
            z-index: 10000 !important;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        //Function that will be called by Google Places Library
        function initAutocomplete() {

            $('[data-google-address]').each(function() {
                var $this = $(this);
                var $addressConfig = $this.data('google-address');
                var $field = $('[name="' + $addressConfig.field + '"]');

                if ($field.val().length) {
                    //console.log($field.val());
                    var existingData = JSON.parse($field.val());
                    $this.val(existingData.value);
                }

                var options = {
                    componentRestrictions: {
                        country: "IT"
                    },
                    types: ["address"],
                };

                var $autocomplete = new google.maps.places.Autocomplete(
                    ($this[0]), options
                );


                $autocomplete.addListener('place_changed', function fillInAddress() {

                    var place = $autocomplete.getPlace();

                    var value = $this.val();
                    var latlng = place.geometry.location;
                    var data = {
                        "value": value,
                        "latlng": latlng
                    };

                    for (var i = 0; i < place.address_components.length; i++) {
                        var addressType = place.address_components[i].types[0];
                        data[addressType] = place.address_components[i]['long_name'];
                        data[addressType + '_short'] = place.address_components[i]['short_name'];
                    }



                    $val = JSON.stringify(data);
                    $field.val($val);
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').placeChanged($val, value);
                });

                $this.change(function() {
                    if (!$this.val().length) {
                        $field.val("");
                    }
                });


            });

        }


        window.addEventListener('openModalNotServed', event => {
            $("#modalNotServed").modal('show');
        })


        window.addEventListener('closeModalNotServed', event => {
            $("#modalNotServed").modal('hide');
        })
        /*

        window.addEventListener('openModalWrongEmailCap', event => {
            $("#modalWrongEmailCap").modal('show');
        })


        window.addEventListener('closeModalWrongEmailCap', event => {
            $("#modalWrongEmailCap").modal('hide');
        })
        */
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(config('services.google.maps_key')); ?>&libraries=places&callback=initAutocomplete"
        async defer></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/livewire/form_search_address_categories.blade.php ENDPATH**/ ?>