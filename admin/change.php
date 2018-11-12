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
    $parent_ = explode("_", filter_var($_POST["parent"],FILTER_SANITIZE_STRING));
    
    // $clickedID = explode("_", $id);
    // $DbNumberID = $clickedID[1];
    
    // echo $id  ; //response - число или "" или "undefined"
    // header('HTTP/1.1 400 $parent= '.$parent[0] );
    // exit();
   
    $obj=$tbl."_";
    if ($tbl=="obj" or $tbl=="obj_download" or $tbl=="obj_alias" or $tbl=="obj_in_addition" or $tbl=="obj_furnitur_prop")
        {$obj="obj_";}
    if (!isset($id) or $id=="")//$action=="action"
    {
        // $insert_id=$tbl; 
        // header('HTTP/1.1 400 action= '.$action);
        
        // exit();
         
        if ($tbl=="obj" or $tbl=="obj_download" or $tbl=="obj_alias" or $tbl=="obj_in_addition" or $tbl=="obj_furnitur_prop")
        {
            // $obj="obj_";
            // if (isset($id))
            // {               
                // добавляем новую запись во все таблицы объекта
                $sql = "INSERT INTO  `obj`(`grupp_id`,`path_img_obj`,`fname_img_obj`,`template_obj`,`img_orientation_obj`) VALUES ('$parent[0]','./dist/images/','test.png','shablony-dokumentov.php','album')";
                // (`obj_id`, `name_obj`, `grupp_id`, `html_id`, `path_img_obj`, `fname_img_obj`, `data_href_img_obj`, `fname_img_smoll_obj`, `data_href_img_smoll_obj`, `obj_def`, `number_in_order_obj`, `characteristic_obj`, `template_obj`, `img_orientation_obj`, `img_alt_obj`) VALUES (NULL, 'Лист10', '1', '', NULL, 'test.png', NULL, 'no-foto.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
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
                        mysqli_query($dbconn, "INSERT INTO  `obj_furnitur_prop`(`obj_id`) VALUES ('$id')");
                        mysqli_query($dbconn, "INSERT INTO  `obj_in_addition`(`obj_id`) VALUES ('$id')");
                         }
                        else{//вывод ошибки                                        
                            header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
                            exit();
                        } 
                    
                }else{//вывод ошибки                                        
                    header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
                    exit();
                }                
            // }

            $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";
        }
        else // не obj
        {   
            $obj=$tbl."_";
            $sql = "INSERT INTO  `$tbl`(`$field`,`$parent[0]`) VALUES ('$contentToSave','$parent[1]')";
            if(mysqli_query($dbconn,$sql))
            {                    
                $id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
                if ($tbl = "grupp")
                {
                  $html_id = "grupp_".$id;
                $sql = "UPDATE `grupp` SET `html_id`='$html_id' WHERE `grupp_id`=$id";
                mysqli_query($dbconn,$sql);   
                }              
            }else{//вывод ошибки                                        
                header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
                exit();
            }  
        }
        
        // $sql = "INSERT INTO  `$tbl`(`$field`,`$parent[0]`) VALUES ('$contentToSave','$parent[1]')";
        $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";
        if(!mysqli_query($dbconn,$sql))
        {        
          //вывод ошибки
          header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
            exit();
        }

        
        
        // header('HTTP/1.1 400 Zapros dla dobavleniy! '.$sql);
        
        // exit();


    }
    else //$action=="change"
    { 
        if ($tbl=="obj" or $tbl=="obj_download" or $tbl=="obj_alias" or $tbl=="obj_in_addition" or $tbl=="obj_furnitur_prop")
        {$fieldid='obj_id';}

        // .$field.'-'.$contentToSave 
        
        if(stristr($field, 'number_in_order') ) 
        {
            // echo '"number_in_order" найдена в строке';
            $Result = mysqli_query($dbconn,"SELECT *  FROM `$tbl` WHERE $fieldid = $id ");//MySQL запрос    ORDER BY $field ASC
            $row = mysqli_fetch_array($Result);//получаем все записи из таблицы
            $old=$row[$field];
            $new=$contentToSave;
            // if (!isset($parent_[0]) or $parent_[0]=="")  {$parent_[0]="head";$parent[1]=$id;}
            // $grupp=$row[$parent[0]];
            // header('HTTP/1.1 400 !!! '.$field.' old='.$old.'->'.$new.'->'.$tbl.'->'.$parent_[0]);
            // exit(); 
            mysqli_free_result($Result);
            // switch ($tbl) { 
            // case "obj":
            // $('#image-'+DbNumberID).fadeOut("slow");
            // break;
            // case "category":
            //     $('span[id="name_'+sdata+'"]').parent().fadeOut("slow");
            //     break;
            // case "grupp":
            //     $('span[id="name_'+sdata+'"]').parent().fadeOut("slow");
            //     break;
            // case "head":
            //     $('#item_'+DbNumberID).fadeOut("slow");
            // break;
            // }
            if ($tbl=="head") 
            {$Result = mysqli_query($dbconn,"SELECT *  FROM `$tbl`");}
            else{$Result = mysqli_query($dbconn,"SELECT *  FROM `$tbl` WHERE $parent_[0]_id = $parent[1]");}
            
            // $row = mysqli_fetch_array($Result);//получаем все записи из таблицы
            // $x = 0;
            // header('HTTP/1.1 400 !!! '."SELECT *  FROM `$tbl` WHERE $parent_[0]_id = $parent[1]");
            // exit(); 
                        
            while ($rows = mysqli_fetch_array($Result))
             {
                $my_array[]=array("tbl"=>$tbl,"id"=>$rows[$tbl.'_id'],"number_in_order"=>$rows[$field] ) ;
                // $my_array[]=array("id"=>$rows[$tbl.'_id'],"tbl"=>$tbl,"number_in_order"=>$rows[$field]);
                // $x++;
             }
            //  header('HTTP/1.1 400 !!! '.$my_array[0]['name']);
             header('HTTP/1.1 400 !!! '.count($my_array).' '.$my_array[1]["number_in_order"]);
exit(); 
            if ($new > $old)
            {  
                // $i=1;
                foreach ($row as $key => $field) {
                    $pointer[$key] = $val;
                }
                $c=count($row[0]);
                                header('HTTP/1.1 400 !!!-> '. $c);
            exit(); 
                for ($i = $old+1; $i <= $new; $i++)
                {
                    // echo $rows[$i].[$field];
                    header('HTTP/1.1 400 !!!'.$rows[$i][$field]);
                    // $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";

                } 
                // header('HTTP/1.1 400 !!!');
                    exit(); 
            }
            

        }

        $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";

        //  header('HTTP/1.1 400 $sql= '.$sql);        
        // exit();

        if(mysqli_query($dbconn,$sql))
        {        
            // $insert_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL 
          
    
        }else{//вывод ошибки 
            header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
            exit();
        }


    }    

    
   
        mysqli_close($dbconn);
        echo $obj.$id ; //response

  
}

?>