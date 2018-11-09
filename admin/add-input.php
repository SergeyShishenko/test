<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

$dbconn=dbconnect();
//проверяем $_POST["content_txt"] на пустое значение
// if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0)
// {

//     // очищаем значение переменной, PHP фильтры FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH
//     // (Удаляют тэги, при необходимости удаляет или кодирует специальные символы)

$contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING);
$tbl = filter_var($_POST["tbl"],FILTER_SANITIZE_STRING);
$field = filter_var($_POST["field"],FILTER_SANITIZE_STRING);
$fieldid = filter_var($_POST["fieldid"],FILTER_SANITIZE_STRING);
$parent = filter_var($_POST["parent"],FILTER_SANITIZE_STRING);
$href = filter_var($_POST["href"],FILTER_SANITIZE_STRING);
$order = filter_var($_POST["order"],FILTER_SANITIZE_STRING);
$action = filter_var($_POST["action"],FILTER_SANITIZE_STRING);
$id = filter_var($_POST["id"],FILTER_SANITIZE_STRING);
$htmlid = filter_var($_POST["htmlid"],FILTER_SANITIZE_STRING);
    

echo '<li class="hidden"  >';//class="hidden" 
echo '<span id="form-contentToSave" data-val="'.$contentToSave.'">contentToSave - '.$contentToSave.'</span>';
echo '<br><span id="form-tbl" data-val="'.$tbl.'">'.$tbl.'</span>' ;
echo '<br><span id="form-field" data-val="'.$field.'">'.$field.'</span>' ;
echo '<br><span id="form-fieldid" data-val="'.$fieldid.'">'.$fieldid.'</span>' ;
echo '<br><span id="form-parent" data-val="'.$parent.'">'.$parent.'</span>' ;
echo '<br><span id="form-href" data-val="'.$href.'">'.$href.'</span>' ;
echo '<br><span id="form-order" data-val="'.$order.'">'.$order.'</span>' ;
echo '<br><span id="form-action" data-val="'.$action.'">'.$action.'</span>' ;
echo '<br><span id="form-id" data-val="'.$id.'">'.$id.'</span>' ;
echo '</li>';

$clickedID = explode( '_', $id ); //Разбиваем строку (Split работает аналогично PHP explode)
$DbNumberID = $clickedID[1]; //и получаем номер из массива

// echo '<br>$DbNumberID - '.$DbNumberID ;

switch ($tbl) {
/////"head"    
    case "head":
    $Result_head = mysqli_query($dbconn,"SELECT *  FROM head WHERE head_id = $DbNumberID");//MySQL запрос
    $row_head = mysqli_fetch_array($Result_head);//получаем все записи из таблицы
    // $row_head["obj_id"]
        echo '<li>';
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">
                        
                        <span class="input-group-addon">Имя</span>
                        <input type="text" class="form-control"  id="recipient-name" value="'.$row_head["name_head"].'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="head" data-field ="name_head" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        echo '</li>';
        echo '<li id="tb-head" class="active">';      

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Файл</span>
                        <input type="text" class="form-control" id="recipient-href" value="'.$row_head["data_href_head"].'" required>
                        <span class="input-group-btn">
                            <button type="button" data-tbl="head" data-field ="data_href_head" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Номер по порядку</span>
                        <input type="text" class="form-control"  id="recipient-order" value="'.$row_head["number_in_order_head"].'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="head"  data-field ="number_in_order_head" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';
        mysqli_free_result($Result_head); 
        break;
/////"head"
/////"category"
    case "category":
    if ($action=="change")
    {
        $Result_category = mysqli_query($dbconn,"SELECT *  FROM category WHERE category_id = $DbNumberID");//MySQL запрос
        $row_category = mysqli_fetch_array($Result_category);//получаем все записи из таблицы
        echo '<li>';
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">
                        
                        <span class="input-group-addon">Имя</span>
                        <input type="text" class="form-control"  id="recipient-name" value="'.$row_category["name_category"].'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="category" data-field ="name_category" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';
        echo '<li id="tb-head" class="active">';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Файл</span>
                        <input type="text" class="form-control" id="recipient-href" value="'.$row_category["data_href_category"].'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="category"  data-field ="data_href_category" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';     

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Родитель</span>
                        <input type="text" class="form-control" id="recipient-parent" value="'.$row_category["head_id"].'" required disabled>
                        <span class="input-group-btn">
                            <button type="button"   data-tbl="category"  data-field ="head_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Номер по порядку</span>
                        <input type="text" class="form-control" id="recipient-order" value="'.$row_category["number_in_order_category"].'" required>
                        <span class="input-group-btn">
                            <button type="button"   data-tbl="category"   data-field ="number_in_order_category" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';
        mysqli_free_result($Result_category); 
    }
    else //add new category
    {
        echo '<li>';
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">
                        
                        <span class="input-group-addon">Имя</span>
                        <input type="text" class="form-control"  id="recipient-name" value="" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="category" data-field ="name_category" data-action="action"  class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';
        echo '<li id="tb-head" class="active">';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Файл</span>
                        <input type="text" class="form-control" id="recipient-href" value="" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="category"  data-field ="data_href_category" data-action="action" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';     

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Родитель</span>
                        <input type="text" class="form-control" id="recipient-parent" value="'.$parent.'" required disabled>
                        <span class="input-group-btn">
                            <button type="button"   data-tbl="category"  data-field ="head_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Номер по порядку</span>
                        <input type="text" class="form-control" id="recipient-order" value="" required>
                        <span class="input-group-btn">
                            <button type="button"   data-tbl="category"   data-field ="number_in_order_category" data-action="action" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';

    }

        break;
/////"category" 
/////"grupp"
    case "grupp":

    if ($action=="change")
    {
        $Result_grupp = mysqli_query($dbconn,"SELECT *  FROM grupp WHERE grupp_id = $DbNumberID");//MySQL запрос
        $row_grupp = mysqli_fetch_array($Result_grupp);//получаем все записи из таблицы
            echo '<li>';
            echo '<div class="row">
                    <div class="input-group col-md-12">
                        <div class="input-group ">
                            
                            <span class="input-group-addon">Имя</span>
                            <input type="text" class="form-control"  id="recipient-name" value="'.$row_grupp["name_grupp"].'" required>
                            <span class="input-group-btn">
                                <button type="button"  data-tbl="grupp" data-field ="name_grupp" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                ';
            echo '</li>';

            echo '<li id="tb-head" class="active">';
            echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                      
                                <span class="input-group-addon">Идентификатор (html_id)</span>
                                <input type="text" class="form-control" id="recipient-html-id" value="'.$row_grupp["html_id"].'" required>
                                <span class="input-group-btn">
                                    <button type="button"   data-tbl="grupp"  data-field ="html_id" class="btn  btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';

            echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                      
                                <span class="input-group-addon">Родитель</span>
                                <input type="text" class="form-control" id="recipient-parent" value="category_id-'.$row_grupp["category_id"].'" required disabled>
                                <span class="input-group-btn">
                                    <button type="button"  data-tbl="grupp"   data-field ="category_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';

            echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                      
                                <span class="input-group-addon">Номер по порядку</span>
                                <input type="text" class="form-control" id="recipient-order" value="'.$row_grupp["number_in_order_grupp"].'" required>
                                <span class="input-group-btn">
                                    <button type="button" data-tbl="grupp"  data-field ="number_in_order_grupp" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
            echo '</li>';
            mysqli_free_result($Result_grupp); 
        }
        else //add new grupp
        {
            echo '<li>';
            echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                                
                                <span class="input-group-addon">Имя</span>
                                <input type="text" class="form-control"  id="recipient-name" value="" required>
                                <span class="input-group-btn">
                                    <button type="button"  data-tbl="grupp" data-field ="name_grupp" data-action="action"  class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
            echo '</li>';
            echo '<li id="tb-head" class="active">';
            echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                      
                                <span class="input-group-addon">Идентификатор (html_id)</span>
                                <input type="text" class="form-control" id="recipient-html-id" value="" required>
                                <span class="input-group-btn">
                                    <button type="button"   data-tbl="grupp"  data-field ="html_id" data-action="action"  class="btn  btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';

            echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                      
                                <span class="input-group-addon">Родитель</span>
                                <input type="text" class="form-control" id="recipient-parent" value="'.$parent.'" required disabled>
                                <span class="input-group-btn">
                                    <button type="button"  data-tbl="grupp"   data-field ="category_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';

            echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                      
                                <span class="input-group-addon">Номер по порядку</span>
                                <input type="text" class="form-control" id="recipient-order" value="" required>
                                <span class="input-group-btn">
                                    <button type="button" data-tbl="grupp"  data-field ="number_in_order_grupp" data-action="action"  class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
            echo '</li>';

        }
        break;
/////"grupp"
/////"obj"
    case "obj":

    if ($action=="change")
    {
 /////if        
    /////obj
        $Result_obj = mysqli_query($dbconn,"SELECT *  FROM obj WHERE obj_id = $DbNumberID");//MySQL запрос
        $row_obj = mysqli_fetch_array($Result_obj);//получаем все записи из таблицы
        echo '<li>';
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">
                        
                        <span class="input-group-addon">Имя</span>
                        <input type="text" class="form-control"  id="recipient-name" value="'.$row_obj["name_obj"].'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj" data-field ="name_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        echo '</li>';
        echo '<li id="tb-head" class="active">'; 
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Родитель (grupp_id)</span>
                        <input type="text" class="form-control" id="recipient-parent" value="'.$parent.'" required disabled>
                        <span class="input-group-btn">
                            <button type="button" data-tbl="obj" data-field ="grupp_id" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Идентификатор (html_id)</span>
                        <input type="text" class="form-control" id="recipient-html-id" value="'.$row_obj["html_id"].'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj"  data-field ="html_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">Путь к изображению (path_img_obj)</span>
        //             <input type="text" class="form-control" id="recipient-path_img_obj" value="'.$row_obj["path_img_obj"].'" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="path_img_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Имя файла изображения (fname_img_obj)</span>
                    <input type="text" class="form-control" id="recipient-fname_img_obj " value="'.$row_obj["fname_img_obj"].'" required>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="fname_img_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';

        echo '   <div class="row">
                <!-- <center><a href="gallery.php" class="nav">Перейти в галерею</a></center> -->
                <!-- Область для перетаскивания -->
                <div id="drop-files" ondragover="return false">
                    <p>Перетащите изображение сюда</p>
                    <!-- Область предпросмотра -->
                    <div id="uploaded-holder"> 
                        <div id="dropped-files">
                            <!-- Кнопки загрузить и удалить, а также количество файлов -->
                            <div id="upload-button">
                                <div class="pull-right">
                                    <span>0 Файлов</span>
                                    <a href="#" class="upload">Загрузить</a>
                                    <a href="#" class="delete">Удалить</a>
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
                    <form id="frm">
                        <input type="file" id="uploadbtn" multiple style="display: none;">			
                    </form>
                    <div id="img-db" class="image"  style="background:url('. substr($row_obj["path_img_obj"],1)."thumbs/".$row_obj["fname_img_obj"].'); background-size: cover;width: 100px; height: 100px; position: relative;"></div>
                </div><!-- drop-files -->
                <!-- Область предпросмотра -->
              
                <!--  <button type = "button" name = "del1" style = "width: 80px; height:50px;">
                    <b>Удалить</b>
                </button><br>
                -->
                <!-- Список загруженных файлов -->
                <div id="file-name-holder">
                    <ul id="uploaded-files">
                        <h1>Загруженные файлы</h1>
                    </ul>
                </div>
                
            </div>
        ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">data_href изображения (data_href_img_obj)</span>
        //             <input type="text" class="form-control" id="recipient-data_href " value="'.$row_obj["data_href_img_obj"].'" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="data_href_img_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">Имя маленькой картинки (fname_img_smoll_obj)</span>
        //             <input type="text" class="form-control" id="recipient-fname_img_smoll_obj" value="'.$row_obj["fname_img_smoll_obj"].'" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="fname_img_smoll_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">Путь маленькой картинки (data_href_img_smoll_obj)</span>
        //             <input type="text" class="form-control" id="recipient-data_href_img_smoll_obj" value="'.$row_obj["data_href_img_smoll_obj"].'" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="data_href_img_smoll_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Описание (obj_def)</span>                    
                    <textarea class="form-control"  id="recipient-obj_def" name="text">'.$row_obj["obj_def"].'</textarea>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="obj_def" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Характеристики (characteristic_obj)</span>                   
                    <textarea class="form-control"  id="recipient-characteristic_obj" name="text">'.$row_obj["characteristic_obj"].'</textarea>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="characteristic_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Шаблон (template_obj)</span>
                    <input type="text" class="form-control" id="recipient-template_obj" value="'.$row_obj["template_obj"].'" required>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="template_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';
        if ($row_obj["img_orientation_obj"] == "album")
        {
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                                
                        <span class="input-group-addon">Ориентация (img_orientation_obj)</span>                                
                        <select class="form-control" id="recipient-orientation">                                
                            <option selected value="album">Альбомная</option>
                            <option value="book">Книжная</option>
                        </select>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj"  data-field ="img_orientation_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        }
        else
        {
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                                  
                        <span class="input-group-addon">Ориентация (img_orientation_obj)</span>                                
                        <select class="form-control" id="recipient-orientation" >                                
                            <option value="album">Альбомная</option>
                            <option selected value="book">Книжная</option>
                        </select>
                        <span class="input-group-btn">
                            <button type="button"   data-tbl="obj"  data-field ="img_orientation_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        }
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Номер по порядку (number_in_order_obj)</span>
                        <input type="text" class="form-control" id="recipient-order" value="'.$row_obj["number_in_order_obj"].'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj"  data-field ="number_in_order_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        mysqli_free_result($Result_obj); 
    /////obj    
    /////obj_download 
        $Result_obj_download = mysqli_query($dbconn,"SELECT *  FROM obj_download WHERE obj_id = $DbNumberID");//MySQL запрос
        $row_obj_download = mysqli_fetch_array($Result_obj_download);//получаем все записи из таблицы
        
        echo '<div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list-alt"></i> Файлы для скачивания (obj_download)</h2>    
                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-down"></i></a>       
                            </div>
                        </div>
                        <div class="box-content"> 
                    ';

                    echo '
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="checkbox">
                            Юридические документы
                        </label>
                    </div>
                    ';
                    echo '<div class="noyri">';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">PDF</span>
                                    <input type="text" class="form-control" id="recipient-PDF " value="'.$row_obj_download["pdf_obj"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="pdf_obj"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    '; 
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">XLS</span>
                                    <input type="text" class="form-control" id="recipient-XLS " value="'.$row_obj_download["xls_obj"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="xls_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">DOC</span>
                                    <input type="text" class="form-control" id="recipient-DOC " value="'.$row_obj_download["doc_obj"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="doc_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">DWG</span>
                                    <input type="text" class="form-control" id="recipient-DWG" value="'.$row_obj_download["dwg_obj"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button" data-tbl="obj_download"  data-field ="dwg_obj"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';


                    echo '<div class="row">
                            <div class="col-xs-12">
                                <ul class="file-list">
                                    <li class="file">
                                        <a class="file-link" href="#" title="file-name.doc">
                                            <div class="file-thumbnail file-thumbnail-doc"></div>
                                            <div class="file-info">
                                                <span class="file-ext">doc</span>
                                                <span class="file-name">file-name.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="file">
                                        <a class="file-link" href="#" title="file-name.xls">
                                            <div class="file-thumbnail file-thumbnail-xls"></div>
                                            <div class="file-info">
                                                <span class="file-ext">xls</span>
                                                <span class="file-name">file-name.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="file">
                                        <a class="file-link" href="#" title="file-name.pdf">
                                            <div class="file-thumbnail file-thumbnail-pdf"></div>
                                            <div class="file-info">
                                                <span class="file-ext">pdf</span>
                                                <span class="file-name">file-name.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="file">
                                        <a class="file-link" href="#" title="file-name.zip">
                                            <div class="file-thumbnail file-thumbnail-zip"></div>
                                            <div class="file-info">
                                                <span class="file-ext">zip</span>
                                                <span class="file-name">file-name.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="file">
                                        <a class="file-link" href="#" title="file-name.zip">
                                            <div class="file-thumbnail file-thumbnail-dwg"></div>
                                            <div class="file-info">
                                                <span class="file-ext">dwg</span>
                                                <span class="file-name">file-name.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="file">
                                        <a class="file-link" href="#" title="file-name.*">
                                            <div class="file-thumbnail file-thumbnail-att"></div>
                                            <div class="file-info">
                                                <span class="file-ext">*</span>
                                                <span class="file-name">file-name.</span>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    <li class="file">
                                        <a class="file-link" href="img/0189082606.jpg" title="0189082606.jpg" download="0189082606.jpg">
                                            <div class="file-thumbnail" style="background-image: url(img/0189082606.jpg);"></div>
                                            <div class="file-info">
                                                <span class="file-ext">jpg</span>
                                                <span class="file-name">0189082606.</span>
                                            </div>
                                        </a>
                                        <button class="file-delete-btn delete" title="Delete" type="button">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    ';


                    echo '</div><!--class="noyri"-->';
                    echo '<div class="yri">';

                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">ЮРИ-PDF</span>
                                    <input type="text" class="form-control" id="recipient-yriPDF " value="'.$row_obj_download["data_ypdf"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_ypdf" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    '; 
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">ЮРИ-XLS</span>
                                    <input type="text" class="form-control" id="recipient-yriXLS " value="'.$row_obj_download["data_yxls"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_yxls" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">ЮРИ-DOC</span>
                                    <input type="text" class="form-control" id="recipient-yriDOC " value="'.$row_obj_download["data_ydoc"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_ydoc" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';

                    echo '</div><!--class="yri"-->';


                   

                    if ($row_obj_download["data_spng"] == "noPNG")
                    {
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">  
                                <!--<span class="input-group-addon">PNG</span>-->                     
                                    <span class="input-group-addon">'.$row_obj_download["data_spng"].'</span>                                
                                    <select class="form-control" id="recipient-PNG">                                
                                        <option selected value="noPNG">Нет</option>
                                        <option value="PNG">Да</option>
                                    </select>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_spng" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    }
                    else
                    {
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">   
                                <!--<span class="input-group-addon">PNG</span>-->                      
                                    <span class="input-group-addon">PNG</span>                                
                                    <select class="form-control" id="recipient-PNG" >                                
                                        <option value="noPNG">Нет скачивания изображения</option>
                                        <option selected value="PNG">Есть скачивание изображения</option>
                                    </select>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_spng" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
    
                    }

                    if ($row_obj_download["data_prnt"] == "noPrint")
                    {
                        echo '<div class="row">
                                <div class="input-group col-md-12">
                                    <div class="input-group ">  
                                    <!--<span class="input-group-addon">Print</span> -->                    
                                        <span class="input-group-addon">Печать</span>
                                        <select class="form-control"  id="recipient-prnt">
                                            <option selected value="noPrint">Нет</option>
                                            <option value="Print">Да</option>
                                        </select>
                                        <span class="input-group-btn">
                                            <button type="button"  data-tbl="obj_download"  data-field ="data_prnt" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    else
                    {
                        echo '<div class="row">
                                <div class="input-group col-md-12">
                                    <div class="input-group ">   
                                    <!--<span class="input-group-addon">Print</span> -->                    
                                        <span class="input-group-addon">Печать</span>
                                        <select class="form-control"  id="recipient-prnt" >
                                            <option value="noPrint">Нет</option>
                                            <option selected value="Да">Печать</option>
                                        </select>
                                        <span class="input-group-btn">
                                            <button type="button"  data-tbl="obj_download"  data-field ="data_prnt" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                   
                    echo '
                        </div>      
                    </div>
                </div>            
            </div><!--/row-->'
        ;
        mysqli_free_result($Result_obj_download); 
    /////obj_download            
    /////obj_alias             
        $Result_obj_alias = mysqli_query($dbconn,"SELECT *  FROM obj_alias WHERE obj_id = $DbNumberID");//MySQL запрос      
        echo '   
        <div class="row">
            <div class="box col-md-12">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-list-alt"></i> Псевдонимы (obj_alias)</h2>    
                        <div class="box-icon">
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-down"></i></a>       
                        </div>
                    </div>
                    <div class="box-content obj_alias" > 
                    ';
                    $row1="row1";
                    while($row_obj_alias = mysqli_fetch_array($Result_obj_alias))
                    {
                    echo '<div class="row '.$row1.'">
                                <div class="input-group col-md-12">
                                    <div class="input-group ">                       
                                        <span class="input-group-addon">Keywords</span>
                                        <input type="text" class="form-control" id="recipient-obj_alias__'.$row_obj_alias["obj_alias_id"].'" value="'.$row_obj_alias["keywords_alias"].'" required>
                                        <span class="input-group-btn">
                                            <button type="button"  data-tbl="obj_alias"  data-field ="keywords_alias" data-fieldid="obj_alias_id" data-id="alias_'.$row_obj_alias["obj_alias_id"].'" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                            <button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>
                                            <button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>                                          
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ';
                        $row1="";
                }//while      
                echo ' 
                    </div>      
                </div>
            </div>            
        </div><!--/row-->'
        ;    
        mysqli_free_result($Result_obj_alias);
    /////obj_alias
    /////obj_in_addition             
        $Result_obj_in_addition = mysqli_query($dbconn,"SELECT *  FROM obj_in_addition WHERE obj_id = $DbNumberID");//MySQL запрос
        echo '   
        <div class="row">
            <div class="box col-md-12">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-list-alt"></i> Дополнительные страницы (obj_in_addition)</h2>    
                        <div class="box-icon">
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-down"></i></a>       
                        </div>
                    </div>
                    <div class="box-content obj_in_addition">   
                    ';
                    $row1="row1";
                    while($row_obj_in_addition = mysqli_fetch_array($Result_obj_in_addition))
                    {
                    echo '<div class="row '.$row1.'">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon btn btn-minimize  btn-default  button34">Страница №_ (fname_img_obj_in_addition)<i class="glyphicon glyphicon-chevron-down"></i></span>
                                    <input type="text" class="form-control" id="recipient-fname_img_obj_in_addition__'.$row_obj_in_addition["obj_in_addition_id"].'" value="'.$row_obj_in_addition["fname_img_obj_in_addition"].'" required>
                                    <span class="input-group-btn">
                                            <button type="button" data-tbl="obj_in_addition"  data-field ="fname_img_obj_in_addition"  data-fieldid="obj_in_addition_id" data-id="addition_'.$row_obj_in_addition["obj_in_addition_id"].'"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                            <button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>
                                            <button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>  
                                        <!-- <button type="button" class="btn btn-minimize btn-default button34"><i class="glyphicon glyphicon-chevron-down"></i></button> -->                                                                                   
                                    </span>
                                </div>
                                <div class="box-content">
                                ';

                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">html_in_addition_id</span>
                                                        <input type="text" class="form-control" id="recipient-html_in_addition_id__'.$row_obj_in_addition["obj_in_addition_id"].'" value="'.$row_obj_in_addition["html_in_addition_id"].'" required>
                                                        <span class="input-group-btn">
                                                            <button type="button" data-tbl="obj_in_addition" data-field="html_in_addition_id"  data-fieldid="obj_in_addition_id" data-id="addition_'.$row_obj_in_addition["obj_in_addition_id"].'"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">path_img_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-path_img_obj_in_addition__'.$row_obj_in_addition["obj_in_addition_id"].'" value="'.$row_obj_in_addition["path_img_obj_in_addition"].'" required>
                                                        <span class="input-group-btn">
                                                            <button type="button" data-tbl="obj_in_addition" data-field ="path_img_obj_in_addition"  data-fieldid="obj_in_addition_id" data-id="addition_'.$row_obj_in_addition["obj_in_addition_id"].'"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">data_href_img_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-data_href_img_obj_in_addition__'.$row_obj_in_addition["obj_in_addition_id"].'" value="'.$row_obj_in_addition["data_href_img_obj_in_addition"].'" required>
                                                        <span class="input-group-btn">
                                                            <button type="button" data-tbl="obj_in_addition" data-field ="data_href_img_obj_in_addition"  data-fieldid="obj_in_addition_id" data-id="addition_'.$row_obj_in_addition["obj_in_addition_id"].'"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">fname_img_smoll_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-fname_img_smoll_obj_in_addition__'.$row_obj_in_addition["obj_in_addition_id"].'" value="'.$row_obj_in_addition["fname_img_smoll_obj_in_addition"].'" required>
                                                        <span class="input-group-btn">
                                                            <button type="button" data-tbl="obj_in_addition" data-field ="fname_img_smoll_obj_in_addition"  data-fieldid="obj_in_addition_id" data-id="addition_'.$row_obj_in_addition["obj_in_addition_id"].'"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">data_href_img_smoll_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-data_href_img_smoll_obj_in_addition__'.$row_obj_in_addition["obj_in_addition_id"].'" value="'.$row_obj_in_addition["data_href_img_smoll_obj_in_addition"].'" required>
                                                        <span class="input-group-btn">
                                                            <button type="button" data-tbl="obj_in_addition" data-field ="data_href_img_smoll_obj_in_addition"  data-fieldid="obj_in_addition_id" data-id="addition_'.$row_obj_in_addition["obj_in_addition_id"].'"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">img_def</span>
                                                        <textarea class="form-control"  id="recipient-img_def__'.$row_obj_in_addition["obj_in_addition_id"].'" name="text">'.$row_obj_in_addition["img_def"].'</textarea>
                                                        <span class="input-group-btn">
                                                            <button type="button" data-tbl="obj_in_addition" data-field ="img_def" data-fieldid="obj_in_addition_id" data-id="addition_'.$row_obj_in_addition["obj_in_addition_id"].'"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';

                                    echo '
                                </div>
                            </div>
                        </div>
                    ';
                    $row1="";
                    }//while   
                    mysqli_free_result($Result_obj_in_addition); 
                        echo '
                    </div>      
                </div>
            </div>            
        </div><!--/row-->'
        ;
    /////obj_in_addition  
    /////obj_furnitur_prop            
        $Result_obj_furnitur_prop = mysqli_query($dbconn,"SELECT *  FROM obj_furnitur_prop WHERE obj_id = $DbNumberID");//MySQL запрос
        $row_obj_furnitur_prop = mysqli_fetch_array($Result_obj_furnitur_prop);//получаем все записи из таблицы
        echo '    
        <div class="row">
            <div class="box col-md-12">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-list-alt"></i> Свойства фурнитуры (obj_furnitur_prop)</h2>    
                        <div class="box-icon">
                            
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            
                                        
                        </div>
                    </div>
                    <div class="box-content">
                    ';   
                
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">name_furnitur_obj_prop</span>
                                    <input type="text" class="form-control" id="recipient-name_furnitur_obj_prop" value="'.$row_obj_furnitur_prop["name_furnitur_obj_prop"].'" required>
                                    <span class="input-group-btn">
                                            <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="name_furnitur_obj_prop" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>                                                                                   
                                    </span>
                                </div>
                            </div>
                        </div>
                    '; 
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">articul_furnitur_obj</span>
                                    <input type="text" class="form-control" id="recipient-articul_furnitur_obj" value="'.$row_obj_furnitur_prop["articul_furnitur_obj"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="articul_furnitur_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">made_furnitur_obj</span>
                                    <input type="text" class="form-control" id="recipient-made_furnitur_obj" value="'.$row_obj_furnitur_prop["made_furnitur_obj"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="made_furnitur_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">url_furnitur_obj_prop</span>
                                    <input type="text" class="form-control" id="recipient-url_furnitur_obj_prop" value="'.$row_obj_furnitur_prop["url_furnitur_obj_prop"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="url_furnitur_obj_prop" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">url_video_obj_prop</span>
                                    <input type="text" class="form-control" id="recipient-url_video_obj_prop" value="'.$row_obj_furnitur_prop["url_video_obj_prop"].'" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="url_video_obj_prop" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';

                    echo '
                    </div>      
                </div>
            </div>            
        </div><!--/row-->'
        ;
        mysqli_free_result($Result_obj_furnitur_prop);
        echo '</li>';
    /////obj_furnitur_prop 
 /////if
    }
    else //add new obj
    {
     /////obj 
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">
                        
                        <span class="input-group-addon">Имя</span>
                        <input type="text" class="form-control"  id="recipient-name" value="" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj" data-field ="name_obj"   class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        echo '<li id="tb-head" class="active">'; 
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Родитель (grupp_id)</span>
                        <input type="text" class="form-control" id="recipient-parent" value="'.$parent.'" required disabled>
                        <span class="input-group-btn">
                            <button type="button" data-tbl="obj" data-field ="grupp_id"    class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Идентификатор (html_id)</span>
                        <input type="text" class="form-control" id="recipient-html-id" value="" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj"  data-field ="html_id"    class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">Путь к изображению (path_img_obj)</span>
        //             <input type="text" class="form-control" id="recipient-path_img_obj" value="./dist/images/" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="path_img_obj"    class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Имя файла изображения (fname_img_obj)</span>
                    <input type="text" class="form-control" id="recipient-fname_img_obj " value="test.png" required>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="fname_img_obj"   class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">data_href изображения (data_href_img_obj)</span>
        //             <input type="text" class="form-control" id="recipient-data_href " value="" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="data_href_img_obj"   class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">Имя маленькой картинки (fname_img_smoll_obj)</span>
        //             <input type="text" class="form-control" id="recipient-fname_img_smoll_obj" value="test.png" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="fname_img_smoll_obj"    class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        // echo '<div class="row">
        //     <div class="input-group col-md-12">
        //         <div class="input-group ">                       
        //             <span class="input-group-addon">Путь маленькой картинки (data_href_img_smoll_obj)</span>
        //             <input type="text" class="form-control" id="recipient-data_href_img_smoll_obj" value="" required>
        //             <span class="input-group-btn">
        //                 <button type="button"  data-tbl="obj"  data-field ="data_href_img_smoll_obj"    class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
        //             </span>
        //         </div>
        //     </div>
        //     </div>
        // ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Описание (obj_def)</span>                    
                    <textarea class="form-control"  id="recipient-obj_def" name="text"></textarea>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="obj_def"   class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Характеристики (characteristic_obj)</span>
                    <textarea class="form-control"  id="recipient-characteristic_obj" name="text"></textarea>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="characteristic_obj"   class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Шаблон (template_obj)</span>
                    <input type="text" class="form-control" id="recipient-template_obj" value="shablony-dokumentov.php" required>
                    <span class="input-group-btn">
                        <button type="button"  data-tbl="obj"  data-field ="template_obj"   class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
            </div>
        ';    
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                                
                        <span class="input-group-addon">Ориентация (img_orientation_obj)</span>                                
                        <select class="form-control" id="recipient-orientation">                                
                            <option selected value="album">Альбомная</option>
                            <option value="book">Книжная</option>
                        </select>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj"  data-field ="img_orientation_obj"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';  
        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Номер по порядку (number_in_order_obj)</span>
                        <input type="text" class="form-control" id="recipient-order" value="9999" required>
                        <span class="input-group-btn">
                            <button type="button"  data-tbl="obj"  data-field ="number_in_order_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        ';    
     /////obj    
     /////obj_download      
        echo '<div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list-alt"></i> Файлы для скачивания (obj_download)</h2>    
                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-down"></i></a>       
                            </div>
                        </div>
                        <div class="box-content"> 
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">PDF</span>
                                    <input type="text" class="form-control" id="recipient-PDF " value="" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="pdf_obj"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    '; 
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">XLS</span>
                                    <input type="text" class="form-control" id="recipient-XLS " value="" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="xls_obj"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">DOC</span>
                                    <input type="text" class="form-control" id="recipient-DOC " value="" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="doc_obj"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">DWG</span>
                                    <input type="text" class="form-control" id="recipient-DWG" value="" required>
                                    <span class="input-group-btn">
                                        <button type="button" data-tbl="obj_download"  data-field ="dwg_obj"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                
                                    <span class="input-group-addon">PNG</span>                                
                                    <select class="form-control" id="recipient-PNG" >                                
                                        <option value="noPNG">Нет скачивания изображения</option>
                                        <option selected value="PNG">Есть скачивание изображения</option>
                                    </select>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_spng"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';                
                    echo '<div class="row">
                                <div class="input-group col-md-12">
                                    <div class="input-group ">  
                                    <!--<span class="input-group-addon">Print</span> -->                    
                                        <span class="input-group-addon">Печать</span>
                                        <select class="form-control"  id="recipient-prnt">
                                            <option selected value="noPrint">Нет</option>
                                            <option value="Print">Да</option>
                                        </select>
                                        <span class="input-group-btn">
                                            <button type="button"  data-tbl="obj_download"  data-field ="data_prnt"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                    ';
                
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">ЮРИ-PDF</span>
                                    <input type="text" class="form-control" id="recipient-yriPDF " value="" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_ypdf"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    '; 
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">ЮРИ-XLS</span>
                                    <input type="text" class="form-control" id="recipient-yriXLS " value="" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-tbl="obj_download"  data-field ="data_yxls"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                                <div class="input-group col-md-12">
                                    <div class="input-group ">                       
                                        <span class="input-group-addon">ЮРИ-DOC</span>
                                        <input type="text" class="form-control" id="recipient-yriDOC " value="" required>
                                        <span class="input-group-btn">
                                            <button type="button"  data-tbl="obj_download"  data-field ="data_ydoc"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ';
                    echo '
                            </div>      
                        </div>
                    </div>            
                </div><!--/row-->'
            ;
    
     /////obj_download            
     /////obj_alias   
        echo '   
            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list-alt"></i> Псевдонимы (obj_alias)</h2>    
                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-down"></i></a>       
                            </div>
                        </div>
                        <div class="box-content obj_alias" > 
                        ';
                        $row1="row1";                 
                        echo '<div class="row '.$row1.'">
                                    <div class="input-group col-md-12">
                                        <div class="input-group ">                       
                                            <span class="input-group-addon">Keywords</span>
                                            <input type="text" class="form-control" id="recipient-obj_alias__00" value="" required>
                                            <span class="input-group-btn">
                                                <button type="button"  data-tbl="obj_alias"  data-field ="keywords_alias" data-fieldid="obj_alias_id"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                <button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>
                                                <button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>                                          
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            ';
                            $row1="";                
                    echo ' 
                            </div>      
                        </div>
                    </div>            
                </div><!--/row-->'
            ;
     /////obj_alias
     /////obj_in_addition 
        echo '   
            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list-alt"></i> Дополнительные страницы (obj_in_addition)</h2>    
                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-down"></i></a>       
                            </div>
                        </div>
                        <div class="box-content obj_in_addition">   
                        ';
                        $row1="row1";                
                        echo '<div class="row '.$row1.'">
                                <div class="input-group col-md-12">
                                    <div class="input-group ">                       
                                        <span class="input-group-addon btn btn-minimize  btn-default  button34">Страница №_ (fname_img_obj_in_addition)<i class="glyphicon glyphicon-chevron-down"></i></span>
                                        <input type="text" class="form-control" id="recipient-fname_img_obj_in_addition__00" value="" required>
                                        <span class="input-group-btn">
                                                <button type="button" data-tbl="obj_in_addition"  data-field ="fname_img_obj_in_addition"  data-fieldid="obj_in_addition_id"    class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                <button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>
                                                <button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>                                                                                                                       
                                        </span>
                                    </div>
                                    <div class="box-content">
                                    ';

                                        echo '<div class="row">
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group ">                       
                                                            <span class="input-group-addon">html_in_addition_id</span>
                                                            <input type="text" class="form-control" id="recipient-html_in_addition_id__00" value="" required>
                                                            <span class="input-group-btn">
                                                                <button type="button" data-tbl="obj_in_addition" data-field="html_in_addition_id"  data-fieldid="obj_in_addition_id"     class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        ';
                                        echo '<div class="row">
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group ">                       
                                                            <span class="input-group-addon">path_img_obj_in_addition</span>
                                                            <input type="text" class="form-control" id="recipient-path_img_obj_in_addition__00" value="" required>
                                                            <span class="input-group-btn">
                                                                <button type="button" data-tbl="obj_in_addition" data-field ="path_img_obj_in_addition"  data-fieldid="obj_in_addition_id"     class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        ';
                                        echo '<div class="row">
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group ">                       
                                                            <span class="input-group-addon">data_href_img_obj_in_addition</span>
                                                            <input type="text" class="form-control" id="recipient-data_href_img_obj_in_addition__00" value="" required>
                                                            <span class="input-group-btn">
                                                                <button type="button" data-tbl="obj_in_addition" data-field ="data_href_img_obj_in_addition"  data-fieldid="obj_in_addition_id"    class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        ';
                                        echo '<div class="row">
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group ">                       
                                                            <span class="input-group-addon">fname_img_smoll_obj_in_addition</span>
                                                            <input type="text" class="form-control" id="recipient-fname_img_smoll_obj_in_addition__00" value="" required>
                                                            <span class="input-group-btn">
                                                                <button type="button" data-tbl="obj_in_addition" data-field ="fname_img_smoll_obj_in_addition"  data-fieldid="obj_in_addition_id"     class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        ';
                                        echo '<div class="row">
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group ">                       
                                                            <span class="input-group-addon">data_href_img_smoll_obj_in_addition</span>
                                                            <input type="text" class="form-control" id="recipient-data_href_img_smoll_obj_in_addition__00" value="" required>
                                                            <span class="input-group-btn">
                                                                <button type="button" data-tbl="obj_in_addition" data-field ="data_href_img_smoll_obj_in_addition"  data-fieldid="obj_in_addition_id"    class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        ';
                                        echo '<div class="row">
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group ">                       
                                                            <span class="input-group-addon">img_def</span>
                                                            <textarea class="form-control"  id="recipient-img_def__00" name="text"></textarea>
                                                            <span class="input-group-btn">
                                                                <button type="button" data-tbl="obj_in_addition" data-field ="img_def" data-fieldid="obj_in_addition_id"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        ';

                                        echo '
                                    </div>
                                </div>
                            </div>
                        ';
                        $row1="";
                        
                            echo '
                        </div>      
                    </div>
                </div>            
            </div><!--/row-->'
        ;
     /////obj_in_addition  
     /////obj_furnitur_prop 
        echo '    
                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-inner">
                            <div class="box-header well" data-original-title="">
                                <h2><i class="glyphicon glyphicon-list-alt"></i> Свойства фурнитуры (obj_furnitur_prop)</h2>    
                                <div class="box-icon">
                                    
                                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                    
                                                
                                </div>
                            </div>
                            <div class="box-content">
                            ';   
                        
                            echo '<div class="row">
                                    <div class="input-group col-md-12">
                                        <div class="input-group ">                       
                                            <span class="input-group-addon">name_furnitur_obj_prop</span>
                                            <input type="text" class="form-control" id="recipient-name_furnitur_obj_prop" value="" required>
                                            <span class="input-group-btn">
                                                    <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="name_furnitur_obj_prop"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>                                                                                   
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            '; 
                            echo '<div class="row">
                                    <div class="input-group col-md-12">
                                        <div class="input-group ">                       
                                            <span class="input-group-addon">articul_furnitur_obj</span>
                                            <input type="text" class="form-control" id="recipient-articul_furnitur_obj" value="" required>
                                            <span class="input-group-btn">
                                                <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="articul_furnitur_obj"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            ';
                            echo '<div class="row">
                                    <div class="input-group col-md-12">
                                        <div class="input-group ">                       
                                            <span class="input-group-addon">made_furnitur_obj</span>
                                            <input type="text" class="form-control" id="recipient-made_furnitur_obj" value="" required>
                                            <span class="input-group-btn">
                                                <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="made_furnitur_obj"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            ';
                            echo '<div class="row">
                                    <div class="input-group col-md-12">
                                        <div class="input-group ">                       
                                            <span class="input-group-addon">url_furnitur_obj_prop</span>
                                            <input type="text" class="form-control" id="recipient-url_furnitur_obj_prop" value="" required>
                                            <span class="input-group-btn">
                                                <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="url_furnitur_obj_prop"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            ';
                            echo '<div class="row">
                                    <div class="input-group col-md-12">
                                        <div class="input-group ">                       
                                            <span class="input-group-addon">url_video_obj_prop</span>
                                            <input type="text" class="form-control" id="recipient-url_video_obj_prop" value="" required>
                                            <span class="input-group-btn">
                                                <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="url_video_obj_prop"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                              <!--  <button type="button"  data-tbl="obj_furnitur_prop"  data-field ="url_video_obj_prop"  data-action="action" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>-->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            ';

                            echo '
                            </div>      
                        </div>
                    </div>            
                </div><!--/row-->'
        ;
        
        echo '</li>';
     /////obj_furnitur_prop    
    }
        break;
/////"obj"        
}
mysqli_close($dbconn);

?>