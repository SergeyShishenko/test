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
 $fcnc = new class_CNC('files/1.1_81_1.CNC');

// 
// echo "<pre>";
// var_dump( $fcnc->findVal(2,"DL"));
// echo "</pre>";
// echo "<pre>";
// var_dump( $fcnc->findVal(49,"#3"));
// echo "</pre>";

// echo $fcnc->findVal(2,"DL")."<br>";
echo $fcnc->nameFile()."<br>";
echo "Длина = ".$fcnc->getDL()."<br>";
echo "Ширина = ".$fcnc->getDH()."<br>";
echo "Толщина = ".$fcnc->getDS()."<br>";




// echo $fcnc->findVal(2,"DH")."<br>";
// echo $fcnc->findVal(2,"DS")."<br>";
// echo $fcnc->findNumByStr("W#89{")."<br>";

echo $fcnc->outputCNC();
echo $fcnc->checkCNC();
echo $fcnc->outputCNC();
 ?>
</body>
</html>