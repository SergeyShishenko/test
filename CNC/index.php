<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="CHPU.bmp" type="image/x-icon">  
    <title>ЧПУ</title>
    <link rel="stylesheet" href="CSS/style.css">
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
<!-- <img id="capcha" src="imagecreate.php" height="200" width="200" class="flip-vertical"/> -->
<br>
<?php
// include "cnc.php";

//  include "classes_cnc/class_ReadingCNCfiles.php";
//  include "classes_cnc/class_CNC.php";
 

//  $cncsess= new class_ReadingCNCfiles('files/');
//  $fcnc = new class_CNC('files/1/1.1_81_1.CNC');
//  $fcnc = new class_CNC('files/1/1.1_82_1.CNC');


  ?>

  <table border="1" background=""  cellpadding="10"  style="width:100%; border-radius:5px;"> 
  <tr>      
      <td>
            <a href="../shablony-dokumentov-titulnyy-kd.php" class="nav">Вернуться на сайт</a>
            <?php    include "inc-drop.php"; ?>
      </td>
  </tr>
</table>


<table border="1" bgcolor="#e9e9f7" cellpadding="10" style="width:100%; border-radius:5px;"> 
  <tr>
      <td rowspan="2" style="width:80%">
          <h2>Страница</h2>
          <!--Начинаем абзац с красной строки-->
          <p style="text-indent:20px">
              Здравствуйте уважаемые будущие веб-мастера!
              Мне 55 лет и я рад приветствовать Вас на своём сайте.
              Этот сайт первый, который я разработал самостоятельно,
              а до этого умел только входить в интернет.</p>

          <p style="text-indent:20px">Почему я решил его сделать?
              За те 3 месяца, пока разбирался в
              сайтостроении и создавал этот ресурс обнаружилось,
              что авторы руководств по созданию
              сайтов считают многие нюансы само собой разумеющимися
              и не обращают на них внимание
              А мне, учитывая возраст и «опыт», было не просто
              понять как раз эти нюансы, они отнимали больше всего
              времени.</p>
         
      </td>
      <td bgcolor="#e9e9f7">
          <h3>Меню</h3>       
          <p>             
              <a href=""><span style="margin-left:5px;">Страница</span></a>              
          </p>
          <p>
              <a href=""><span style="margin-left:5px;">Страница 1</span;></a></p>
          <p>
              <a href=""><span style="margin-left:5px;">Страница 2</span></a>
          </p>          
      </td>
  </tr> 
  <tr>      
      <td bgcolor="#e9e9f7" align="center">
          <h3>Общая информация</h3>
          <p>Текст общей информации или реклама</p> 
      </td>
  </tr>
</table>

<!--ПОДВАЛ-->


    <table border="1" bgcolor="#d4d4f1" height="100" cellpadding="10"
    style="width:100%; border-radius:5px;">  
    <tr>      
        <th>
            <h3>Подвал</h3>
        </th>
    </tr>
    </table>

</td>
</tr>
</table>

<?php
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




// $cncsess->checkAllCNC();

//   echo "<br>++++++++++++++++<br><br>";
?> 
    <script src="js/jquery.min.js"></script>  
    <!-- <script src="js/script.js"></script> -->
    <script src="js/javascript.js"></script>
    <!-- <script src="js/dropCNC.js"></script> -->
 
</body>
</html>