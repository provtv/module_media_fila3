<div class="b-pop-places__item">
    <div class="b-pop-place">
        <div class="b-pop-place__img">
            <a href="<?php echo e($panel->url()); ?>">
                <img width="370" height="245" class="b-pop-place__img__img" src="<?php echo e($row->img); ?>"
                    alt="<?php echo e($row->title); ?>">
            </a>
            <a href="#" class="b-icon-like" data-toggle="tooltip" data-placement="left" title="Like">
                <i class="fa fa-heart" aria-hidden="true"></i>
            </a>
            <div class="b-pop-place__links">
                <div class="press--left">
                    <a href="#" class="b-pop-place__links__item" data-toggle="tooltip" data-placement="right"
                        title="Live music"><i class="fa fa-music" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="b-pop-place__links__item" data-toggle="tooltip" data-placement="right"
                        title="Menu"><i class="fa fa-book" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="b-pop-place__links__item" data-toggle="tooltip" data-placement="right"
                        title="Photo">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="press--right">$100 - $150</div>
            </div>
        </div>
        <div class="b-pop-place__desc clearfix">
            <div class="b-pop-place__rating">4,8</div> <a href="<?php echo e($panel->url()); ?>" class="b-pop-place__name">Lincoln
                square steak</a>
            <h5 class="b-pop-place__cat">Restaurant</h5>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Geo/resources/views/components/card/place.blade.php ENDPATH**/ ?>