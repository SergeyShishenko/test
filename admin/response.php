<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 
require_once dirname(dirname(__FILE__)).'/vendor/MyClass/class_DataBase.php';

$dbconn=dbconnect();
if ($dbconn->connect_errno) {
    printf("Не удалось подключиться: %s\n", $dbconn->connect_error);
    exit();
}
$db = class_DataBase::getDB(); // Создаём объект базы данных
//проверяем $_POST["content_Furn"] на пустое значение
if(isset($_POST["content_Furn"]) && strlen($_POST["content_Furn"])>0)
{

// проверка на существование артикула в Базе



    $Furn=$_POST["content_Furn"];
    $Art=$_POST["content_Art"];
    $Alias1=$_POST["content_Alias1"];
    $Alias2=$_POST["content_Alias2"];
    $Alias3=$_POST["content_Alias3"];
    $NameFile=$_POST["content_NameFile"];    
    $GruppId=$_POST["content_grupp_id"];
    $Bild=$_POST["content_Bild"];
    $Colour=$_POST["content_Colour"];
    $Unit=$_POST["content_Unit"];
    $HrefArticul=$_POST["content_HrefArticul"];
    $typeFurn=$_POST["content_path_img_obj"];

   if (arniculCheck ($Art,$db)){exit();}
   if (arniculCheck ($Alias1,$db)){exit();}
   if (arniculCheck ($Alias2,$db)){exit();}
   if (arniculCheck ($Alias3,$db)){exit();}


 // добавляем новую запись во все таблицы объекта
                    $sql = " INSERT INTO `obj` (`obj_id`, `name_obj`, `grupp_id`, `html_id`, `path_img_obj`, `fname_img_obj`, `data_href_img_obj`, `fname_img_smoll_obj`, `data_href_img_smoll_obj`, `obj_def`, `number_in_order_obj`, `characteristic_obj`, `img_orientation_obj`, `img_alt_obj`, `template_obj`)
                     VALUES (NULL,'$Furn', '$GruppId', '', '$typeFurn','$NameFile', NULL, '', NULL, '$Furn', NULL, NULL, 'album', NULL, NULL)";
                    if(mysqli_query($dbconn,$sql))
                    {                    
                        $id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL 
                        $html_id = "obj_".$id;
                        $sql = "UPDATE `obj` SET `html_id`='$html_id' WHERE `obj_id`=$id";
                        if(mysqli_query($dbconn,$sql))
                            { 
                            mysqli_query($dbconn, "UPDATE `obj` SET `html_id` = $html_id WHERE `obj`.`obj_id`=$id");
                            mysqli_query($dbconn, "INSERT INTO  `obj_alias`(`obj_id`) VALUES ('$id')");
                            mysqli_query($dbconn, "INSERT INTO  `obj_download`(`obj_id`) VALUES ('$id')");
                           
                           if( !mysqli_query($dbconn, "INSERT INTO  `obj_furnitur_prop`(`obj_furnitur_prop_id`, `name_furnitur_obj_prop`, `articul_furnitur_obj`, `articul_alias1`, `articul_alias2`, `articul_alias3`, `made_furnitur_obj`, `url_furnitur_obj_prop`, `obj_id`, `url_video_obj_prop`, `color_obj_prop`, `def_obj_prop`, `unit_obj_prop`, `fname_img_furn`)  
                             VALUES (NULL, '$Furn', '$Art', '$Alias1', '$Alias2', '$Alias3', '$Bild', '$HrefArticul', '$id', NULL, '$Colour', '$Furn', '$Unit', '$NameFile')")){
                                header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.$sql." -> ".mysqli_error($dbconn));
                                // exit();
                             }



//INSERT INTO `obj_furnitur_prop` (`obj_furnitur_prop_id`, `name_furnitur_obj_prop`, `articul_furnitur_obj`, `made_furnitur_obj`, `url_furnitur_obj_prop`, `obj_id`, `url_video_obj_prop`, `color_obj_prop`, `def_obj_prop`, `unit_obj_prop`, `fname_img_furn`) VALUES (NULL, 'name_furnitur_obj_prop\r\n', 'articul_furnitur_obj', 'made_furnitur_obj', 'url_furnitur_obj_prop', '24', NULL, 'color_obj_prop', 'def_obj_prop', 'unit_obj_prop', NULL);




                            mysqli_query($dbconn, "INSERT INTO  `obj_in_addition`(`obj_id`) VALUES ('$id')");
                             }
                            else{//вывод ошибки                                        
                                header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.$sql." -> ".mysqli_error($dbconn));
                                exit();
                            } 
                        
                    }else{//вывод ошибки                                        
                        header('HTTP/1.1 500 Looks like mysql error, could not insert record2! '.$_POST["parent"]." ---".$sql." -> ".mysqli_error($dbconn));
                        exit();
                    }  


    echo $html_id;
}




//проверяем $_POST["content_txt"] на пустое значение
if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0)
{

    // очищаем значение переменной, PHP фильтры FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH
    // (Удаляют тэги, при необходимости удаляет или кодирует специальные символы)

    $contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING);

    // Insert sanitize string in record
    // INSERT INTO `head` (`head_id`, `name_head`, `data_href_head`, `number_in_order_head`, `disabled`) VALUES (NULL, '".$contentToSave."', NULL, NULL, '0');
    $res   = mysqli_query($dbconn,"SELECT COUNT(head_id) AS count FROM head "); 
    $data = mysqli_fetch_assoc($res); 
    // echo $data['count']; 
    mysqli_free_result($res); 
    $number = $data['count']+1;
    if(mysqli_query($dbconn,"INSERT INTO `head` (`head_id`, `name_head`, `data_href_head`, `number_in_order_head`, `disabled`) VALUES (NULL, '$contentToSave', NULL, '$number', '0')"))
    {
        //Record is successfully inserted, respond to ajax request
        $head_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
        // INSERT INTO `category` (`category_id`, `name_category`, `data_href_category`, `head_id`, `number_in_order_category`, `disabled`) VALUES (NULL, '', NULL, '$head_id', NULL, '0');
        if(mysqli_query($dbconn,"INSERT INTO `category` (`category_id`, `name_category`, `data_href_category`, `head_id`, `number_in_order_category`, `disabled`) VALUES (NULL, 'Категория 1', NULL, '$head_id', '1', '0')"))
        {  
            //Record is successfully inserted, respond to ajax request
             $category_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
            //  INSERT INTO `grupp` (`grupp_id`, `name_grupp`, `data_href_grupp`, `category_id`, `number_in_order_grupp`, `disabled`) VALUES (NULL, 'Группа 1', NULL, '$category_id', '1', '0');
            if(mysqli_query($dbconn,"INSERT INTO `grupp` (`grupp_id`, `name_grupp`, `html_id`, `category_id`, `number_in_order_grupp`, `disabled`) VALUES (NULL, 'Группа 1', NULL, '$category_id', '1', '0')"))
            {  
                //Record is successfully inserted, respond to ajax request
                $grupp_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
                // $sql = "INSERT INTO obj(name_obj,grupp_id) VALUES('Элемент 1','.$grupp_id.')";
                     // INSERT INTO `obj` (`obj_id`, `name_obj`, `grupp_id`, `html_id`, `path_img_obj`, `fname_img_obj`, `data_href_img_obj`, `fname_img_smoll_obj`, `data_href_img_smoll_obj`, `obj_def`, `number_in_order_obj`, `characteristic_obj`) VALUES (NULL, 'Элемент 1', NULL, '', NULL, 'test.png', NULL, 'no-foto.png', NULL, NULL, '1', NULL);
                // $sql = "INSERT INTO  `obj`(`name_obj`,`grupp_id`,`path_img_obj`,`fname_img_obj`,`fname_img_smoll_obj`,`template_obj`,`img_orientation_obj`) VALUES ('Элемент 1','$grupp_id','./dist/images/','test.png','test.png','shablony-dokumentov.php','album')";
                $sql = "INSERT INTO `obj` (`obj_id`, `name_obj`, `grupp_id`, `html_id`, `path_img_obj`, `fname_img_obj`, `data_href_img_obj`, `fname_img_smoll_obj`, `data_href_img_smoll_obj`, `obj_def`, `number_in_order_obj`, `characteristic_obj`) VALUES (NULL, 'Элемент 1', '$grupp_id', '', NULL, 'test.png', NULL, 'no-foto.png', NULL, NULL, '1', NULL)";
                if(mysqli_query($dbconn,$sql))
                {  
                    //Record is successfully inserted, respond to ajax request
                    $obj_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL

                    // mysqli_query($dbconn, "INSERT INTO  `obj_alias`(`obj_id`) VALUES ('$obj_id')");
                    if(mysqli_query($dbconn,"INSERT INTO  `obj_alias`(`obj_id`) VALUES ('$obj_id')")) {  }else{header('HTTP/1.1 500 Looks like mysql error, could not insert record obj_alias!'.mysqli_error($dbconn));exit();}
                    
                    // mysqli_query($dbconn, "INSERT INTO  `obj_download`(`obj_id`) VALUES ('$obj_id')");
                    if(mysqli_query($dbconn,"INSERT INTO  `obj_download`(`obj_id`) VALUES ('$obj_id')")) {  }else{header('HTTP/1.1 500 Looks like mysql error, could not insert record obj_download!'.mysqli_error($dbconn));exit();}

                    // mysqli_query($dbconn, "INSERT INTO  `obj_furnitur_prop`(`obj_id`) VALUES ('$obj_id')");
                    if(mysqli_query($dbconn,"INSERT INTO  `obj_furnitur_prop`(`obj_id`) VALUES ('$obj_id')")) {  }else{header('HTTP/1.1 500 Looks like mysql error, could not insert record obj_furnitur_prop!'.mysqli_error($dbconn));exit();}

                    // mysqli_query($dbconn, "INSERT INTO  `obj_in_addition`(`obj_id`) VALUES ('$obj_id')");
                    if(mysqli_query($dbconn,"INSERT INTO  `obj_in_addition`(`obj_id`) VALUES ('$obj_id')")) {  }else{header('HTTP/1.1 500 Looks like mysql error, could not insert record obj_in_addition!'.mysqli_error($dbconn));exit();}

                    ?>                   
                            
                        <div class="box col-md-12" id="item_<?php echo $head_id ?>"><!--Раздел--> 
                            <div class="box-inner">
                                <div class="box-header well">
                                    <h2><i class="glyphicon glyphicon-th"></i> <span id="name_head_<?php echo $head_id ?>"><?php echo $contentToSave ?></span></h2>
                                    <div class="box-icon">
                                        <a href="#" class="btn btn-setting btn-round btn-default" 
                                            id="head-<?php echo $head_id ?>"
                                            data-content="РЕДАКТИРОВАТЬ РАЗДЕЛ"
                                            data-name="<?php echo $contentToSave ?>"
                                            data-href=""
                                            data-order=""
                                            data-toggle="modal"
                                            data-target="#myModal" 
                                            title="РЕДАКТИРОВАТЬ РАЗДЕЛ"  
                                            data-tbl="head"
                                            data-field="name_head"
                                            data-field-id="head_id"
                                            data-action="change"
                                            data-id="head_<?php echo $head_id ?>"
                                            >
                                            <i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>  
                                        <!-- <a href="#" class="btn btn-close btn-round btn-default" title="ДОБАВИТЬ РАЗДЕЛ"><i class="glyphicon glyphicon-plus-sign"></i></a> -->
                                    </div>
                                </div>

                                <div  class="box-content">
                                    <div>
                                        <!-- START PANEL -->
                                        <div class="panel panel-transparent">  
                                            <div class="panel-body no-padding">
                                                <div class="row">
                                                    <div class="col-sm-12">                                   
                                                        <div class="box-icon">
                                                            <a href="#" class="btn btn-setting btn-round btn-default" 
                                                                data-content="ДОБАВИТЬ КАТЕГОРИЮ"
                                                                data-name="Категория 1"
                                                                data-href=""
                                                                data-order=""
                                                                data-toggle="modal"
                                                                data-target="#myModal" 
                                                                title="ДОБАВИТЬ КАТЕГОРИЮ"
                                                                data-tbl="category"
                                                                data-field="name_category"
                                                                data-field-id="category_id"
                                                                data-action="action"
                                                                data-id="category_<?php echo $category_id ?>"
                                                                >
                                                                <i class="glyphicon glyphicon-plus-sign"></i>
                                                            </a>
                                                        </div>
                                                        <div class="panel panel-transparent ">
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx" id="parent-item_<?php echo $head_id ?>"><!--Категории--> 
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#tab-fillup<?php echo $category_id ?>"
                                                                    data-tbl="category"
                                                                    data-title="КАТЕГОРИЮ" 
                                                                    data-name="Категория 1"
                                                                    data-href=""
                                                                    data-order="" 
                                                                    data-field="name_category"
                                                                    data-field-id="category_id"
                                                                    data-id="category_<?php echo $category_id ?>"
                                                                    ><span  id="id_<?php echo $category_id ?>">Категория 1</span></a>
                                                                </li>                                                        
                                                            </ul>
                                                            <!-- Tab panes -->
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="tab-fillup<?php echo $category_id ?>">
                                                                    <div class="row column-seperation panelTab">
                                                                        <div class="col-md-12">
                                                                            <div class="panel-body no-padding">
                                                                                <div class="row">
                                                                                    <div class="box-icon ">
                                                                                        <a href="#" class="btn btn-setting btn-round btn-default "
                                                                                            data-content="ДОБАВИТЬ ГРУППУ"
                                                                                            data-parent="category_id-<?php echo $category_id ?>"
                                                                                            data-name="Группа 1"
                                                                                            data-toggle="modal"
                                                                                            data-target="#myModal" 
                                                                                            title="ДОБАВИТЬ ГРУППУ"
                                                                                            data-tbl="grupp"
                                                                                            data-field="name_grupp"
                                                                                            data-field-id="grupp_id"
                                                                                            data-action="action"
                                                                                            data-id="grupp_<?php echo $grupp_id ?>"
                                                                                            >                                                                                                    
                                                                                            <i class="glyphicon glyphicon-plus-sign"></i>
                                                                                        </a>
                                                                                    </div>

                                                                                    <div class="col-lg-12 ">
                                                                                        <div class="panel panel-transparent ">

                                                                                            <ul class="nav nav-tabs nav-tabs-simple nav-tabs-left bg-white" id="tab-parent-category_<?php echo $category_id ?>"><!--Группы--> 
                                                                                            
                                                                                                <li class="active">
                                                                                                    <a data-toggle="tab" href="#tabobj<?php echo $grupp_id ?>"
                                                                                                    data-tbl="grupp"
                                                                                                    data-title="ГРУППУ"
                                                                                                    data-name="Группа 1"
                                                                                                    data-htmlid=""
                                                                                                    data-category_id="<?php echo $category_id ?>"
                                                                                                    data-order=""
                                                                                                    data-parent="category_id-<?php echo $category_id ?>"
                                                                                                    data-field="name_grupp"
                                                                                                    data-field-id="grupp_id"
                                                                                                    data-id="grupp_<?php echo $grupp_id ?>"
                                                                                                    ><span id="name_grupp_<?php echo $grupp_id ?>">Группа 1</span></a>
                                                                                                </li>

                                                                                            </ul>
                                                                                            <div class="tab-content bg-white">
                                                                                                
                                                                                                <div class="tab-pane active" id="tabobj<?php echo $grupp_id ?>">
                                                                                                    <div class="box-content pane">

                                                                                                        <ul class="thumbnails gallery" id="obj-parent-grupp_<?php echo $grupp_id ?>"><!--Объекты-->                                                                                                                    
                                                                                                            
                                                                                                            <li id="image-'. $i.'" class="thumbnail" data-name="Элемент 1">
                                                                                                                    <p class="" id="name_obj_'<?php echo $obj_id ?>">Элемент 1</p>
                                                                                                                    <a style="background:url(/dist/images/thumbs/test.png);"
                                                                                                                    title="Элемент 1"
                                                                                                                    href="/dist/images/test.png"                                                                                                                
                                                                                                                    >
                                                                                                                    <img
                                                                                                                        class="grayscale"
                                                                                                                        src="/dist/images/thumbs/test.png"
                                                                                                                        alt="Элемент 1"
                                                                                                                        data-parent="grupp_id-<?php echo $grupp_id ?>"
                                                                                                                        data-id="obj_<?php echo $obj_id ?>"
                                                                                                                        data-content="РЕДАКТИРОВАТЬ ОБЪЕКТ"
                                                                                                                        data-name="Элемент 1"
                                                                                                                        data-htmlid=""
                                                                                                                        data-action="change"
                                                                                                                    >
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>
                                                                                    </div>

                                                                                </div> <!--row-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!--tab-pane-->
                                                                
                                                                <!-- <div class="tab-pane" id="tab-fillup21">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <h3>“ Nothing is
                                                                                </h3>
                                                                            <p>A style represents visual customizations on top of a layout.
                                                                                By editing a style, you can use Squarespaces visual
                                                                                interface to customize your...</p>
                                                                            <br>
                                                                            <p class="pull-right">
                                                                                <button type="button" class="btn btn-default btn-cons">White</button>
                                                                                <button type="button" class="btn btn-success btn-cons">Success</button>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="tab-fillup31">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <h3>Follow us &amp; get updated!</h3>
                                                                            <p>Instantly connect to whats most important to you. Follow
                                                                                your friends, experts, favorite celebrities, and breaking
                                                                                news.</p>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- END PANEL -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- END box col-md-12 -->

                    <?php  
                    mysqli_close($dbconn);

                }else{
                    //вывод ошибки
            
                    //header('HTTP/1.1 500 '.mysql_error());
                    header('HTTP/1.1 500 Looks like mysql error, could not insert record 1!'.mysqli_error($dbconn));
                    exit();
                }                                                                                                         

            }else{
                //вывод ошибки
        
                //header('HTTP/1.1 500 '.mysql_error());
                header('HTTP/1.1 500 Looks like mysql error, could not insert record 2!'.mysqli_error($dbconn));
                exit();
            }           

        }else{
            //вывод ошибки
    
            //header('HTTP/1.1 500 '.mysql_error());
            header('HTTP/1.1 500 Looks like mysql error, could not insert record 3!'.mysqli_error($dbconn));
            exit();
        }         

    }else{
        //вывод ошибки
        
        //header('HTTP/1.1 500 '.mysql_error());
        header('HTTP/1.1 500 Looks like mysql error, could not insert record 4! '.mysqli_error($dbconn));
        exit();
    }

}
// elseif(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
// {//do we have a delete request? $_POST["recordToDelete"]

//     // очищаем значение переменной, PHP фильтр FILTER_SANITIZE_NUMBER_INT
//     // Удаляет все символы, кроме цифр и знаков плюса и минуса

//     $idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT);

//     //try deleting record using the record ID we received from POST
//     if(!mysqli_query($dbconn,"DELETE FROM head WHERE id=".$idToDelete))
//     {
//         //If mysql delete record was unsuccessful, output error
//         header('HTTP/1.1 500 Could not delete record!');
//         exit();
//     }
//     mysqli_close($dbconn);

// }
// else{

//     //Output error
//     header('HTTP/1.1 500 Error occurred, Could not process request!');
//     exit();
// }

function arniculCheck ($articul,$db){
    if($articul !=""){
        $query = "SELECT * FROM `obj_furnitur_prop` WHERE `articul_furnitur_obj` = {?} OR `articul_alias1` = {?} OR `articul_alias2` = {?} OR `articul_alias3` = {?} ";
        $table = $db->select($query, array($articul)); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
        if ($table){
            echo "Артикул уже внесен в Базу Данных!";
            return true;
        }
        else {
            return false;
        }
    }
   

}

?>