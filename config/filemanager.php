<?php
return [
    'base_route'      => '/filemanager',
    'middleware'      => ['web'],
    'allow_format'    => 'jpeg,jpg,png,gif,webp,svg',
    'max_size'        => 500,
    'max_image_width' => 1024,
    'image_quality'   => 80,
];