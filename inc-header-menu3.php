<?php
// переменные на странице 
// $detaliClass = '';
// $izdeliyaClass = '';
// $shablonyClass = 'class="active"';
// $metodichkiClass = '';
// $furnituraClass = '';
// $materialyClass = '';
// $literaturaClass = '';
// include 'inc-head.php';
// include 'inc-header-menu.php';
?>
<?php echo'
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top" >
<div class="container">            
    <div class="navbar navbar-inverse " role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">500.СТП</a > 
            <!-- КОРЗИНА -->               
            <div id="vpi"  >
  ';
  
//   define('__ROOT__', dirname(dirname(__FILE__))); 


//echo $_SERVER['DOCUMENT_ROOT'];
//require_once(__ROOT__.'/DATA/data.php'); 
//echo dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php';
  //require_once(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php'); 
$dbconn=dbconnect();  
/* изменение набора символов на utf8 */
if (!mysqli_set_charset($dbconn, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($link));
    exit();
} else {
    //printf("Текущий набор символов: %s\n", mysqli_character_set_name($link));
}
//if($dbconn)

//{echo 'Соединение установлено.';}

//else

//{die('Ошибка подключения к серверу баз данных.');}


if (file_exists($_SERVER['DOCUMENT_ROOT'].'/vpi/cart.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/vpi/cart.php');// для сайта !!!!!!!
}
else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/www/vpi/cart.php');// для localhost
}

//   require_once($_SERVER['DOCUMENT_ROOT'].'/vpi/cart.php');// для сайта !!!!!!!
  //require_once($_SERVER['DOCUMENT_ROOT'].'/www/vpi/cart.php');// для localhost
  mysqli_close($dbconn);  
 
 
   echo'
            </div>                                 
            <!-- КОРЗИНА -->
        </div>                
        <div class="navbar-collapse collapse top-menu">
            <ul class="nav navbar-nav navbar-link " id="navmain">
                <li '.$detaliClass.'>
                    <a href="detali-profili.php">ДЕТАЛИ</a>
                </li>
                <li '.$izdeliyaClass.'>
                    <a href="izdeliya-bloki-dvernye.php">ИЗДЕЛИЯ</a>
                </li>
                <li '.$shablonyClass.'>
                    <a href="shablony-dokumentov-titulnyy-kd.php" class="dblstr-menu">ШАБЛОНЫ <br>ДОКУМЕНТОВ</a>
                </li>
                <li '.$yrishablonyClass.'>                            
                    <a href="yuridicheskie-dokumenty.php" class="dblstr-menu">ЮРИДИЧЕСКИЕ <br>ДОКУМЕНТЫ</a >                           
                </li>
                <li '.$ustanovochnyeClass.' class=" disabled">                            
                    <a href="#" class="dblstr-menu">УСТАНОВОЧНЫЕ <br>ДОКУМЕНТЫ</a >                           
                </li>
                <li '.$metodichkiClass.'>
                    <a href="metodichki-BASIS.php">МЕТОДИЧКИ</a>
                </li>
                <li '.$furnituraClass.'>
                    <a href="furnitura-dlya-dvernyh-blokov.php">ФУРНИТУРА</a>
                </li>
                <li '.$materialyClass.'>
                    <a href="materialy-ne-derevyannye-steklo-zerkalo-vitrazh.php">МАТЕРИАЛЫ</a>
                </li>
                <li '.$literaturaClass.' class=" disabled">
                <a href="literatura-gost.php">ЛИТЕРАТУРА</a>
                </li>
                
                <!--<li  id="other">
                    <a href="#" title="ЕЩЁ">&#10010;</a >
                  
                     <span class="caret3"></span> 
                    <ul class="dropdown-menu  dropdown-menu-right">
                        <li '.$literaturaClass.' class=" disabled">
                        <a href="literatura-gost.php">ЛИТЕРАТУРА</a>
                        </li>
                        <li><a href="furnitura-video.php" >Видео</a>
                        </li> 
                                                                                                                                             
                    </ul> 
                </li>-->
            </ul>  
        </div>
        <div class="navbar-form navbar-right " id="search">
            <div class="form-group">                                
                
                <input type="text" class="form-control who zbz-input-clearable" placeholder="Поиск">   
                <span class="glyphicon glyphicon-search zbz" style="visibility: visible;margin-right: 0px;margin-left: -25px;"></span>                            
            </div>                            
            <ul class="search_result" style="display: none;"></ul>
        </div>            
    </div>
</div>
</header>
    <!-- .modal -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="image-gallery">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                    <i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" class="btn btn-secondary float-right" id="show-next-image">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
    <!-- /.modal -->
    <div  style="position:fixed; left:0; top:150px; " class="btn-side">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-default  animated tada" data-toggle="modal" data-target="#mySendModal" title="Отправить сообщение">
            <span class=" glyphicon glyphicon-envelope" ></span>
        </button>
       
    </div>
    <div  style="position:fixed; left:0; top:185px;" class="btn-side">
        <!-- Button trigger modal -->
        
        <button type="button" class="btn btn-default center" onclick="location.href=\'exit.php\';" title="Выйти">  
        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
        </button>
    </div>
    <div  style="position:fixed; left:0; top:220px;" class="btn-side">
    <!-- Button trigger modal -->
    
        <button type="button" class="btn btn-default center" onclick="location.href=\'index.php\';" title="Карта сайта">  
        <span class="glyphicon glyphicon-home" ></span>
        </button>
    </div>
    <div  style="position:fixed; left:0; top:255px;" class="btn-side left-menu">
    <!-- Button trigger modal -->
    
        <button type="button" class="btn btn-default center "  title="Левое меню">  
        <span class="glyphicon glyphicon-list" ></span>
        </button>
    </div>
';
include 'inc-header-send-modal.php';
include 'inc-func.php';

?>

