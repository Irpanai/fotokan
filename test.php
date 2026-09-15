<?php
require 'vendor/autoload.php';
$m = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
$image = $m->createImage(200, 200);
$image->text('Jepret Watermark', $image->width() / 2, $image->height() / 2, function($font) {
    $font->size(48);
    $font->color('rgba(255, 255, 255, 0.5)');
    $font->align('center', 'middle');
});
echo "Success\n";
