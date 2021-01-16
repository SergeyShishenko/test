<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="CHPU.bmp" type="image/x-icon">  
    <title>Document</title>
    <style>
    /* Для отражения по горизонтали */
    .flip-horizontal{
        -moz-transform: scale(-1, 1);
        -webkit-transform: scale(-1, 1);
        -o-transform: scale(-1, 1);
        transform: scale(-1, 1);
        filter: FlipH;
        -ms-filter: "FlipH";
        }
    /* Для отражения по вертикали */
    .flip-vertical{
        -moz-transform: scale(1,-1);
        -webkit-transform: scale(1, -1);
        -o-transform: scale(1, -1);
        transform: scale(1, -1);
        filter: FlipV;
        -ms-filter: "FlipV";
        }
    </style>
</head>
<body>
<img id="capcha" src="imagecreate.php" height="200" width="200" class="flip-vertical"/>
<br>
<?php
// include "cnc.php";
 include "classes_cnc/class_CNC.php";
 $fcnc = new class_CNC('files/6.1_13_1.CNC');

echo $fcnc->outputCNC();
 
//  echo $fcnc->getNumStrCNC(0);
//  echo "<br>";
//  echo $fcnc->countStr();
 ?>
</body>
</html>