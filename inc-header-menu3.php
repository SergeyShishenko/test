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
  ';
  define('__ROOT__', dirname(dirname(__FILE__))); 
  require_once(__ROOT__.'/DATA/TABLES/configDB.php');   
  $dbconn=dbconnect();
  $sess_id=session_id();
    $Result_user = mysqli_query($dbconn,"SELECT *  FROM `user` WHERE `sess_id` = '$sess_id'");//MySQL запрос
    $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
    $s_id=$row_user['s_id'];

    $res   = mysqli_query($dbconn,"SELECT COUNT(s_id) AS count FROM `user_vpi`WHERE `s_id` = $s_id "); 
    $data = mysqli_fetch_assoc($res); 
    // echo session_id();
    // echo "data[count] " .$data['count']; 


    $Result_vpi = mysqli_query($dbconn,"SELECT * FROM `user_vpi` WHERE `s_id` = $s_id ");        

   
    echo'  
         
                <!-- КОРЗИНА -->
               
                     <div id="vpi"  >
                            <div id="header" style="padding-top: 0">
                                <div class="top-nav-bg abs col-xs-20">
                                    <div style="display:inline-block">
                                        
                                        <div id="cart" >
                                            <div class="heading"><a href="" class=""></a>
                                                <a><span id="cart-total" class="cart-full">'.$data["count"].'</span></a>
                                            </div>
                                            <div class="content" style="overflow: hidden;">
                                                <div class="mini-cart-info">
                                                    <table class="table table-striped">
                                                    <tbody>
                        ';
// получаем все записи из таблицы user_vpi
  while($row_vpi = mysqli_fetch_array($Result_vpi))
  {  
      $furn_id=$row_vpi['obj_furnitur_prop_id'];
    $Result_furniture = mysqli_query($dbconn,"SELECT * FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = $furn_id "); 
    $furniture = mysqli_fetch_assoc($Result_furniture); 
  echo'   
                                                        
                                                            <tr>
                                                                <td class="image">
                                                                    <img src="./dist/filesdb/images/thumbs/tbs'.$furniture["fname_img_furn"].'" alt="'.$furniture["name_furnitur_obj_prop"].'"  title="'.$furniture["name_furnitur_obj_prop"].'">
                                                                </td>
                                                                <td class="articul">'.$furniture['articul_furnitur_obj'].'</td>
                                                                <td class="name" ><p>'.$furniture['def_obj_prop'].'</p></td>
                                                                <td class="quantity" style="width: 140px;">
                                                                <div class="form-group" style=" width: 112px;">				
                                                                    <input id="vpi_id-'.$row_vpi['vpi_id'].'" data-fid="'.$row_vpi['vpi_id'].'" class="form-control" type="number" value="'.$row_vpi['count_obj'].'" min="1" max="999" style=" width: 70px;margin-left: -1px;">
                                                                </div>
                                                                </td>
                                                                <td class="unit">'.$furniture['unit_obj_prop'].' </td>
                                                                <td class="remove">
                                                                    <img src="./dist/css/remove-small.png" alt="Удалить" title="Удалить"
                                                                        >
                                                                </td>
                                                            </tr>
    ';       
    }//while
    mysqli_free_result($Result_vpi);
    //Закрывает соединение с сервером MySQL
    mysqli_close($dbconn);         
    
    echo'  
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="checkout">
                                                    <!-- <a href="" id="checkout" class="button">Скачать ведомость</a>-->
                                                    <a href="./vpi/vpi-12-10-2018-06-44-55.xls" type="button" id="checkoutd" class="btn btn-info im-download" download title="Скачать" style="display: none;"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> XLS</a>
                                                    <button id="checkout" class="btn btn-info ">СГЕНЕРИРОВАТЬ ВЕДОМОСТЬ</button>
                                                    <!--  <button id="cd" class="btn btn-info ">CD</button>-->
                                                    <button id="close" class="btn btn-info ">ЗАКРЫТЬ</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
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
                    <a href="metodichki-dokument-117.php">МЕТОДИЧКИ</a>
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
                <span class="glyphicon glyphicon-search zbz"></span>
                <input type="text" class="form-control who zbz-input-clearable" placeholder="Поиск">                               
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
?>

