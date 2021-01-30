<?php 
include '../inc/inc-session-start.php';
include "createzip.php";
?>
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
      /* кнопка */
        input.button22 {
            position: relative;
            display: inline-block;
            /* width: 6em; */
            height: 2.5em;
            line-height: 2.4em;
            vertical-align: middle;
            text-align: center;
            text-decoration: none;
            user-select: none;
            color: #000;
            outline: none;
            border: 1px solid rgba(110,121,128,.8);
            border-top-color: rgba(0,0,0,.3);
            border-radius: 5px;
            background: rgb(206, 220, 231) linear-gradient(rgb(206,220,231), rgb(89,106,114));
            box-shadow:
            0 -1px rgba(10,21,28,.9) inset,
            0 1px rgba(255,255,255,.5) inset;
            cursor:pointer;
            }
            input.button22:hover {
            background: linear-gradient(#d2dfea, #71828c);
            }
            input.button22:active {
            line-height: 2.6em;
            background: linear-gradient(#bac6cf, #c5d3de 20%, #71828c);
            box-shadow: 0 -1px rgba(255,255,255,.4) inset;
            }
            input.button22:before {
            content: "";
            position: absolute;
            top: -10px; right: -10px; bottom: -10px; left: -10px;
            z-index: -1;
            border-radius: 8px;
            background: linear-gradient(rgba(200,200,200,.5), rgba(240,240,240,.5));
            }
            .disabled {
            pointer-events: none;  /**<-----------*/
            opacity: 0.2;
            }
    </style>
</head>
<body>
<br>
<?php
//  include "classes_cnc/class_ReadingCNCfiles.php";
//  include "classes_cnc/class_CNC.php";
 

//  $cncsess= new class_ReadingCNCfiles('files/');
//  $fcnc = new class_CNC('files/1/1.1_81_1.CNC');
//  $fcnc = new class_CNC('files/1/1.1_82_1.CNC');


  ?>
  <form name="zips" method="post">
  <?php if(!empty($error)) { ?>
  <p id="err" style=" border:#C10000 1px solid; background-color:#FFA8A8; color:#B00000;padding:8px; width:588px; margin:0 auto 10px; text-align: center;"><?php echo $error; ?></p>
  <?php } ?>

  <table border="1" background=""  cellpadding="10"  style="width:100%; border-radius:5px;"> 
  <tr>      
      <td>
            <a href="../shablony-dokumentov-titulnyy-kd.php" class="nav">Вернуться на сайт</a>
            <?php    include "inc-drop.php"; ?>
      </td>
  </tr>
</table>


<table border="1" bgcolor="#e9e9f7" cellpadding="10" style="width:100%; border-radius:5px;" id="tableoutput"> 
  <tr>
      <!-- <td rowspan="2" style="width:80%"> -->
      <td id="def_err">
          <h2>Проверяемые ошибки</h2>         
          <p> Ошибка #1: Проверка глубины сверления в торцах деталей. Максимальная глубина сверления:  &Oslash;5 = -35 мм;  &Oslash;8 = -39 мм; </p> 
          <p> Ошибка #2: Проверка на максимальную глубину сверления в пласть детали; </p> 
          <p> Ошибка #3: Проверка на чистовой выход сквозного сверления; </p> 
      </td>
  </tr> 
 
</table>

<!--ПОДВАЛ-->


    <table border="1" bgcolor="#e9e9f7" height="100" cellpadding="10"
    style="width:100%; border-radius:5px;">  
    <!-- disabled -->
    <!-- style="border:0px; background-color:#800040; color:#FFF; padding:10px; cursor:pointer; font-weight:bold; border-radius:5px;"  -->
    <!-- class="button22" -->
    <tr>      
        <td align="center">
        <input type="submit" name="createzip"       
        value="Скачать архив ZIP" class="button22 " />
        <!-- value="Скачать архив ZIP" class="button22 disabled" onclick="alert('Скачать архив ZIP');" /> -->
        
        </td>
    </tr>
    </table>

</td>
</tr>
</table>
</form>
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
    <script src="js/tooltip.js"></script>
    <!-- <script src="js/dropCNC.js"></script> -->
    <script>
    // запрет повторной отправки формы
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>
 
</body>
</html>