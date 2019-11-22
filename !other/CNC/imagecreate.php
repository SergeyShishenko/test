<?php

// создаем изображение 200*200
$img = imagecreatetruecolor(200, 200);

// создаем несколько цветов
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

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