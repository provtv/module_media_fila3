<?php

declare(strict_types=1);

return [
    'appearance' => [
        'background' => null,
        'background_color' => '#b31c1c',
        'overlay_color' => null,
        'overlay_opacity' => null,
    ],
    'breadcrumb' => [
        'class' => null,
        'style' => null,
    ],
    'footer' => [
        '_tpl' => null,
        'background' => null,
        'background_color' => null,
        'overlay_color' => null,
        'view' => 'cms::components.blocks.footer.social_media_icons',
    ],
    'headernav' => [
        '_tpl' => 'simple',
        'background' => null,
        'background_color' => '#43bd39',
        'class' => null,
        'overlay_color' => null,
        'overlay_opacity' => null,
        'style' => null,
        'view' => 'fixcity::components.blocks.headernav.agid',
    ],
];
