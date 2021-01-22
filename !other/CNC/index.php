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

 include "classes_cnc/class_ReadingCNCfiles.php";
 include "classes_cnc/class_CNC.php";
 

 $cncsess= new class_ReadingCNCfiles('files/1');
 $fcnc = new class_CNC('files/1/1.1_81_1.CNC');
//  $fcnc = new class_CNC('files/1/1.1_82_1.CNC');


  ?>
  <table border="1" background=""  cellpadding="10"
  style="width:100%; border-radius:5px;">
  <!--Создаём строку таблицы-->
  <tr>
      <!--Создаём столбец таблицы-->
      <td>
        <!-- <form action="upload.php" method="post">        
            <div id="dropZone">
                Для загрузки, перетащите файл сюда.
            </div>
        </form> -->
        <div class="row">               
                                <div id="drop-files" ondragover="return false">
                                    <!-- <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo; или &laquo;Приложение КБ.xlsx&raquo; сюда</p> -->
                                    <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo;  сюда</p>
                                    <!-- <form > -->
                                    <input type="file" id="uploadbtn" multiple  >
                                    <!-- </form> -->
                                </div>
                               
                              
                                
                             
                                <!-- <input type="button" value="Пустой бланк ВПИ" onclick="blankVPI()" /> -->

                              
                                
                                <!-- /table-saved-files -->

                                <!-- Область предпросмотра -->
                                <div id="uploaded-holder"> 
                                    <div id="dropped-files">
                                        <!-- Кнопки загрузить и удалить, а также количество файлов -->
                                        <div id="upload-button" class="note">
                                            <div class="center note">
                                                <span>0 Файлов</span>
                                                <a href="javascript:void(0)" class="upload note">Загрузить</a>
                                                <a href="javascript:void(0)" class="delete note">Удалить</a>
                                                <!-- <a href="javascript:void(0)" class="count note">Посчитать</a> -->
                                                <!-- Прогресс бар загрузки -->
                                                <div id="loading">
                                                    <div id="loading-bar">
                                                        <div class="loading-color"></div>
                                                    </div>
                                                    <div id="loading-content"></div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <!-- Список загруженных файлов -->
                                <div id="file-name-holder">                      
                                    <div id="uploaded-files">
                                        <!-- <h1>Загруженные данные:</h1> -->
                                    </div>
                                </div>
                
                            </div> 
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
              <a href="">
                  <!--Картинка маркера перед названием страницы-->
                  <!-- <img src="http://trueimages.ru/img/00/06/f4fffdb5.png"> -->
                  <!--Название страницы
style="margin-left:5px;" - отступ названия от маркера-->
                  <span style="margin-left:5px;">Страница</span></a>
              <!--Закрываем абзац-->
          </p>
          <p>
              <a href="">
                  <!-- <img src="http://trueimages.ru/img/31/ab/4dcb087c2ae4305edcd15171696.jpg"> -->
                  <span style="margin-left:5px;">Страница 1</span;></a>
          </p>
          <p>
              <a href="">
                  <!-- <img src="http://trueimages.ru/img/31/ab/4dcb087c2ae4305edcd15171696.jpg"> -->
                  <span style="margin-left:5px;">Страница 2</span></a>
          </p>
          <!--Закрываем строку Меню-->
      </td>
  </tr>
  <!--Создаём строку с дополнительной информацией-->
  <tr>
      <!--Ячейка с дополнительной информацией-->
      <td bgcolor="#e9e9f7" align="center">
          <h3>Общая информация</h3>
          <p>Текст общей информации или реклама</p>
          <!--Закрываем ячейку с общей информацией
и таблицу основного контента-->
      </td>
  </tr>
</table>

<!--ПОДВАЛ-->

<!--Создаём таблицу подвала-->
<table border="1" bgcolor="#d4d4f1" height="100" cellpadding="10"
  style="width:100%; border-radius:5px;">
  <!--Создаём строку.-->
  <tr>
      <!--Создаём столбец-->
      <th>
          <h3>Подвал</h3>
          <!--Закрываем таблицу подвала. При желании в подвале можно
сделать несколько строк и столбцов-->
      </th>
  </tr>
</table>
<!--Закрываем таблицу контейнера-->
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
    <script src="js/dropCNC.js"></script>
</body>
</html>