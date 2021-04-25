<?php

// создаем изображение 200*200
$img = imagecreatetruecolor(200, 200);

// создаем несколько цветов
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

// imagearc ( resource $image , int $cx , int $cy , int $width , int $height , int $start , int $end , int $color ) : bool
// imagearc() рисует дугу окружности с заданными координатами центра.
// $image   Ресурс изображения, возвращаемый одной из функций создания изображений, например, такой как imagecreatetruecolor().
// $cx      x-координата центра.
// $cy      y-координата центра.
// $width   Ширина дуги.
// $height  Высота дуги.
// $start   Угол начала дуги в градусах.
// $end     Угол окончания дуги в градусах. 0° соответствует положению 3 часа, дуга рисуется по часовой стрелке.
// $color   Идентификатор цвета, созданный функцией imagecolorallocate().

// рисуем голову
imagearc($img, 100, 100, 200, 200,  0, 360, $white);
// рот
imagearc($img, 100, 100, 150, 150, 25, 155, $red);
// глаза
imagearc($img,  60,  75,  50,  50,  0, 360, $green);
imagearc($img, 140,  75,  50,  50,  0, 360, $blue);

// выводим изображение в броузере
header("Content-type: image/png");
imagepng($img);

// освобождаем память
imagedestroy($img);

?>