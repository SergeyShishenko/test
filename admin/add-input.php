<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

// $dbconn=dbconnect();
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
    $id = filter_var($_POST["id"],FILTER_SANITIZE_STRING);
    $htmlid = filter_var($_POST["htmlid"],FILTER_SANITIZE_STRING);
    

//     // Обновляем запись
//     // UPDATE  `u0474172_default`.`head` SET  `name_head` =  'Раздел 1' WHERE  `head`.`head_id` =52;
//     // if(mysqli_query($dbconn,"INSERT INTO head(name_head) VALUES('".$contentToSave."')"))
//     // echo "UPDATE  ".$tbl." SET  ".$field." =  '".$contentToSave."' WHERE  ".$fieldid."` ='.$id.'";
//     // TRIM('region_name')
    
//     $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";
//     // echo $sql;
//     if(mysqli_query($dbconn,$sql))
//     {
//         //Record is successfully inserted, respond to ajax request
//         $head_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
        
       
//         mysqli_close($dbconn);

//     }else{
//         //вывод ошибки
//         // echo $sql;
//         //header('HTTP/1.1 500 '.mysql_error());
//         header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
//         exit();
//     }

// }



// echo 'contentToSave - '.$contentToSave;
// echo '<br>tbl - '.$tbl ;
// echo '<br>field - '.$field ;
// echo '<br>fieldid - '.$fieldid ;
// echo '<br>parent - '.$parent ;
// echo '<br>href - '.$href ;
// echo '<br>order - '.$order ;
// echo '<br>id - '.$id ;




switch ($tbl) {
    case "head":
        echo '<li id="tb-head" class="active">';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Файл</span>
                        <input type="text" class="form-control" id="recipient-href" value="'.$href.'" required>
                        <span class="input-group-btn">
                            <button type="button" data-field ="data_href_head" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Номер по порядку</span>
                        <input type="text" class="form-control"  id="recipient-order" value="'.$order.'" required>
                        <span class="input-group-btn">
                            <button type="button" data-field ="number_in_order_head" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';
        break;

    case "category":
        echo '<li id="tb-head" class="active">';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Файл</span>
                        <input type="text" class="form-control" id="recipient-href" value="'.$href.'" required>
                        <span class="input-group-btn">
                            <button type="button" data-field ="data_href_category" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';     

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Родитель</span>
                        <input type="text" class="form-control" id="recipient-head_id" value="'.$parent.'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-field ="head_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Номер по порядку</span>
                        <input type="text" class="form-control" id="recipient-order" value="'.$order.'" required>
                        <span class="input-group-btn">
                            <button type="button"   data-field ="number_in_order_category" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';
        break;
    case "grupp":
        echo '<li id="tb-head" class="active">';


        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Идентификатор (html_id)</span>
                        <input type="text" class="form-control" id="recipient-html-id" value="'.$htmlid.'" required>
                        <span class="input-group-btn">
                            <button type="button" class="btn  data-field ="html_id" btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Родитель</span>
                        <input type="text" class="form-control" id="recipient-category_id" value="'.$parent.'" required>
                        <span class="input-group-btn">
                            <button type="button"   data-field ="category_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                      
                        <span class="input-group-addon">Номер по порядку</span>
                        <input type="text" class="form-control" id="recipient-order" value="'.$order.'" required>
                        <span class="input-group-btn">
                            <button type="button" data-field ="number_in_order_grupp" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '</li>';
        break;
    case "obj":
        echo '<li id="tb-head" class="active">';      
     

        echo '<div class="row">
                <div class="input-group col-md-12">
                    <div class="input-group ">                       
                        <span class="input-group-addon">Родитель (grupp_id)</span>
                        <input type="text" class="form-control" id="recipient-parent" value="'.$parent.'" required>
                        <span class="input-group-btn">
                            <button type="button"  data-field ="grupp_id" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Идентификатор (html_id)</span>
                    <input type="text" class="form-control" id="recipient-html-id" value="'.$htmlid.'" required>
                    <span class="input-group-btn">
                        <button type="button"  data-field ="html_id" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
          </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Путь к изображению (path_img_obj)</span>
                    <input type="text" class="form-control" id="recipient-path_img_obj" value="'.$i.'" required>
                    <span class="input-group-btn">
                        <button type="button"  data-field ="path_img_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
          </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Имя файла изображения (fname_img_obj)</span>
                    <input type="text" class="form-control" id="recipient-fname_img_obj " value="'.$i.'" required>
                    <span class="input-group-btn">
                        <button type="button"  data-field ="fname_img_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
          </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">data_href изображения (data_href_img_obj)</span>
                    <input type="text" class="form-control" id="recipient-data_href " value="'.$i.'" required>
                    <span class="input-group-btn">
                        <button type="button"  data-field ="data_href_img_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
          </div>
        ';
        echo '<div class="row">
            <div class="input-group col-md-12">
                <div class="input-group ">                       
                    <span class="input-group-addon">Номер по порядку (number_in_order_obj)</span>
                    <input type="text" class="form-control" id="recipient-order" value="'.$order.'" required>
                    <span class="input-group-btn">
                        <button type="button"  data-field ="number_in_order_obj" class="btn btn-default button31"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                </div>
            </div>
          </div>
        ';



        echo '    
        <div class="row">
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
                                <input type="text" class="form-control" id="recipient-PDF " value="./dist/files/pdf/shablon-alboma-obrazcov.pdf" required>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="pdf_obj"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                '; 
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">XLS</span>
                                <input type="text" class="form-control" id="recipient-XLS " value="./dist/files/pdf/shablon-alboma-obrazcov.XLS" required>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="xls_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">DOC</span>
                                <input type="text" class="form-control" id="recipient-DOC " value="./dist/files/pdf/shablon-alboma-obrazcov.DOC" required>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="doc_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">DWG</span>
                                <input type="text" class="form-control" id="recipient-DWG " value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                <span class="input-group-btn">
                                    <button type="button" data-field ="dwg_obj"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">Print</span>
                                <select class="form-control" >
                                    <option selected value="noPrint">Нет</option>
                                    <option value="">Печать</option>
                                </select>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="data_prnt" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">PNG</span>
                                <select class="form-control" >
                                    <option selected value="noPNG">Нет</option>
                                    <option value="">Да</option>
                                </select>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="data_spng" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">ЮРИ-PDF</span>
                                <input type="text" class="form-control" id="recipient-yriPDF " value="./dist/files/pdf/shablon-alboma-obrazcov.pdf" required>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="data_ypdf" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                '; 
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">ЮРИ-XLS</span>
                                <input type="text" class="form-control" id="recipient-yriXLS " value="./dist/files/pdf/shablon-alboma-obrazcov.XLS" required>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="data_yxls" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                ';
                echo '<div class="row">
                        <div class="input-group col-md-12">
                            <div class="input-group ">                       
                                <span class="input-group-addon">ЮРИ-DOC</span>
                                <input type="text" class="form-control" id="recipient-yriDOC " value="./dist/files/pdf/shablon-alboma-obrazcov.DOC" required>
                                <span class="input-group-btn">
                                    <button type="button"  data-field ="data_ydoc" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
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
                    
                    echo '<div class="row row1">
                                <div class="input-group col-md-12">
                                    <div class="input-group ">                       
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" id="recipient-obj_alias " value="KRYWORD1" required>
                                        <span class="input-group-btn">
                                            <button type="button"  data-field ="keywords_alias" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                            <button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>
                                            <button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>                                          
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
                                    <input type="text" class="form-control" id="recipient-name_furnitur_obj_prop" value="./dist/files/pdf/shablon-alboma-obrazcov.pdf" required>
                                    <span class="input-group-btn">
                                            <button type="button"  data-field ="name_furnitur_obj_prop" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>                                                                                   
                                    </span>
                                </div>
                            </div>
                        </div>
                    '; 
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">articul_furnitur_obj</span>
                                    <input type="text" class="form-control" id="recipient-articul_furnitur_obj" value="./dist/files/pdf/shablon-alboma-obrazcov.XLS" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-field ="articul_furnitur_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">made_furnitur_obj</span>
                                    <input type="text" class="form-control" id="recipient-made_furnitur_obj" value="./dist/files/pdf/shablon-alboma-obrazcov.DOC" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-field ="made_furnitur_obj" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">url_furnitur_obj_prop</span>
                                    <input type="text" class="form-control" id="recipient-url_furnitur_obj_prop" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-field ="url_furnitur_obj_prop" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ';
                    echo '<div class="row">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">url_video_obj_prop</span>
                                    <input type="text" class="form-control" id="recipient-url_video_obj_prop" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                    <span class="input-group-btn">
                                        <button type="button"  data-field ="url_video_obj_prop" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
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
    
        echo '   
        <div class="row">
            <div class="box col-md-12">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-list-alt"></i> Параметры дополнений (obj_in_addition)</h2>    
                        <div class="box-icon">
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-down"></i></a>       
                        </div>
                    </div>
                    <div class="box-content obj_in_addition">   
                    ';

                    echo '<div class="row row1">
                            <div class="input-group col-md-12">
                                <div class="input-group ">                       
                                    <span class="input-group-addon">fname_img_obj_in_addition</span>
                                    <input type="text" class="form-control" id="recipient-fname_img_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                    <span class="input-group-btn">
                                            <button type="button" data-field ="fname_img_obj_in_addition"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                            <button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>
                                            <button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>  
                                            <button type="button" class="btn btn-minimize btn-default button34"><i class="glyphicon glyphicon-chevron-down"></i></button>                                                                                    
                                    </span>
                                </div>
                                <div class="box-content">
                                ';

                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">html_in_addition_id</span>
                                                        <input type="text" class="form-control" id="recipient-html_in_addition_id" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                                        <span class="input-group-btn">
                                                            <button type="button"  data-field ="html_in_addition_id"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">path_img_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-path_img_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                                        <span class="input-group-btn">
                                                            <button type="button"  data-field ="path_img_obj_in_addition" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">data_href_img_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-data_href_img_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                                        <span class="input-group-btn">
                                                            <button type="button"  data-field ="data_href_img_obj_in_addition" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">fname_img_smoll_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-fname_img_smoll_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                                        <span class="input-group-btn">
                                                            <button type="button" data-field ="fname_img_smoll_obj_in_addition"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">data_href_img_smoll_obj_in_addition</span>
                                                        <input type="text" class="form-control" id="recipient-data_href_img_smoll_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>
                                                        <span class="input-group-btn">
                                                            <button type="button"  data-field ="data_href_img_smoll_obj_in_addition"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    ';
                                    echo '<div class="row">
                                                <div class="input-group col-md-12">
                                                    <div class="input-group ">                       
                                                        <span class="input-group-addon">img_def</span>
                                                        <textarea class="form-control"  name="text"></textarea>
                                                        <span class="input-group-btn">
                                                            <button type="button"  data-field ="img_def" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>
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

                  

                        echo '
                    </div>      
                </div>
            </div>            
        </div><!--/row-->'
        ;

        echo '</li>';
        break;
        
}



?>