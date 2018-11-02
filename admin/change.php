<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

$dbconn=dbconnect();
//проверяем $_POST["content_txt"] на пустое значение
if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0)
{

    // очищаем значение переменной, PHP фильтры FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH
    // (Удаляют тэги, при необходимости удаляет или кодирует специальные символы)

    $contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING);
    $tbl = filter_var($_POST["tbl"],FILTER_SANITIZE_STRING);
    $field = filter_var($_POST["field"],FILTER_SANITIZE_STRING);
    $fieldid = filter_var($_POST["fieldid"],FILTER_SANITIZE_STRING);
    $id = filter_var($_POST["id"],FILTER_SANITIZE_STRING);
    $action = filter_var($_POST["action"],FILTER_SANITIZE_STRING);
    $parent = explode("-", filter_var($_POST["parent"],FILTER_SANITIZE_STRING));
    // $clickedID = explode("_", $id);
    // $DbNumberID = $clickedID[1];

    // echo $id  ; //response - число или "" или "undefined"
    // exit();
   
    $obj="";
    if ($tbl=="obj" or $tbl=="obj_download" or $tbl=="obj_alias" or $tbl=="obj_in_addition" or $tbl=="obj_furnitur_prop")
        {$obj="obj_";}
    if ($action=="action")
    {
        // $insert_id=$tbl;  
        if ($tbl=="obj" or $tbl=="obj_download" or $tbl=="obj_alias" or $tbl=="obj_in_addition" or $tbl=="obj_furnitur_prop")
        {
            // $obj="obj_";
            if (isset($id))
            {               
                // добавляем новую запись во все таблицы объекта
                $sql = "INSERT INTO  `obj`(`grupp_id`,`path_img_obj`,`fname_img_obj`,`fname_img_smoll_obj`,`template_obj`,`img_orientation_obj`) VALUES ('$parent[1]','./dist/images/','test.png','test.png','shablony-dokumentov.php','album')";
                if(mysqli_query($dbconn,$sql))
                {                    
                    $id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL  
                    $action=="change";
                    mysqli_query($dbconn, "INSERT INTO  `obj_alias`(`obj_id`) VALUES ('$id')");
                    mysqli_query($dbconn, "INSERT INTO  `obj_download`(`obj_id`) VALUES ('$id')");
                    mysqli_query($dbconn, "INSERT INTO  `obj_furnitur_prop`(`obj_id`) VALUES ('$id')");
                    mysqli_query($dbconn, "INSERT INTO  `obj_in_addition`(`obj_id`) VALUES ('$id')");
                }else{//вывод ошибки                                        
                    header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
                    exit();
                }                
            }
        }
        
        // $sql = "INSERT INTO  `$tbl`(`$field`,`$parent[0]`) VALUES ('$contentToSave','$parent[1]')";
        $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";
      
        
        
        // header('HTTP/1.1 400 Zapros dla dobavleniy! '.$sql);
        
        // exit();

        
    }
    else //$action=="change"
    { 
        $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";
    }    

    
    if(mysqli_query($dbconn,$sql))
    {        
        // $insert_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL 
        mysqli_close($dbconn);
        echo $obj.$id ; //response

    }else{//вывод ошибки 
        header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
        exit();
    }

}

?>