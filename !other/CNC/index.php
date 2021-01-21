<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="CHPU.bmp" type="image/x-icon">  
    <title>ЧПУ</title>
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

 include "classes_cnc/class_ReadingCNCfiles.php";
 include "classes_cnc/class_CNC.php";
 

 $cncsess= new class_ReadingCNCfiles('files/1');
 $fcnc = new class_CNC('files/1/1.1_81_1.CNC');
//  $fcnc = new class_CNC('files/1/1.1_82_1.CNC');

$cncsess->checkAllCNC();



  echo "<br>++++++++++++++++<br><br>";


//   $cncsess->getArr();

//  echo "<br>****************<br><br>";
//  $cncsess->output();// вывод всех наименований
//  $cncsess->getArr();// вывод всех наименований

// echo "<br>!!!!!!!!!<br><br>";

// echo $fcnc->nameFile()."<br>";
// echo "Длина = ".$fcnc->getDL()."<br>";
// echo "Ширина = ".$fcnc->getDH()."<br>";
// echo "Толщина = ".$fcnc->getDS()."<br>";


// echo $fcnc->outputCNC();
// echo "<br>****************<br>";
// echo $fcnc->checkCNC();
// echo "<br>***ОШИБКИ***<br>";
// echo $fcnc->err;
// // var_dump($fcnc->err);
// echo "<br>****************<br>";
// echo $fcnc->outputCNC();

// $fcnc->correctionRecord();


 ?>
</body>
</html>