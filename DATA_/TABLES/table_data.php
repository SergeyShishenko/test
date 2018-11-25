<?php
// include 'inc-session-start.php';
ini_set('session.gc_maxlifetime', 43200);// 12 часов
ini_set('session.cookie_lifetime', 43200);
// session_set_cookie_params(0);
session_start();
$_SESSION['ref'] = $_SERVER['REQUEST_URI'];
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/data.php'); 
// require_once('./DATA/data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) || $_SESSION['sess_login']!==$enter_login || $_SESSION['sess_pass']!==$enter_passw) { header('Location:index-session.php');    exit();}

// /template-shablony-dokumentov.php?obj_id=1

if(isset($_SESSION['obj_id'])) {
    // echo 'id объекта '.$_SESSION['obj_id'];
    // echo '<hr>';
    //подключаем конфигурационный файл
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
    $obj_id=$_SESSION['obj_id'];
    // require_once('DATA/TABLES/configDB.php');
    require_once('configDB.php');

   
        $dbconn=dbconnect();

            // //MySQL запрос
           if ($Result_obj = mysqli_query($dbconn,"SELECT *  FROM obj WHERE obj_id = $obj_id"))
           {
            
                // получаем все записи из таблицы obj
                if($row_obj = mysqli_fetch_array($Result_obj))
                {
                    // echo '
                    //     TABLE obj:<br>
                    //     1.  obj_id - '.$row_obj["obj_id"]. '<br>
                    //     2.  name_obj - '.$row_obj["name_obj"]. '<br>
                    //     3.  grupp_id - '.$row_obj["grupp_id"]. '<br>                        
                    //     4.  html_id  - '.$row_obj["html_id"]. '<br>
                    //     5.  path_img_obj  - '.$row_obj["path_img_obj"]. '<br>
                    //     6.  fname_img_obj  - '.$row_obj["fname_img_obj"]. '<br>
                    //     7.  data_href_img_obj  - '.$row_obj["data_href_img_obj"]. '<br>
                    //     8.  fname_img_smoll_obj  - '.$row_obj["fname_img_smoll_obj"]. '<br>
                    //     9.  data_href_img_smoll_obj  - '.$row_obj["data_href_img_smoll_obj"]. '<br>
                    //     10. obj_def  - '.$row_obj["obj_def"]. '<br>
                    //     11. number_in_order_obj  - '.$row_obj["number_in_order_obj"]. '<br>
                    //     12. characteristic_obj  - '.$row_obj["characteristic_obj"]. '<br>
                    //     13. template_obj  - '.$row_obj["template_obj"]. '<br>
                    //     14. img_orientation_obj  - '.$row_obj["img_orientation_obj"]. '<br>
                    //     15. img_alt_obj  - '.$row_obj["img_alt_obj"]. '<br>

                    // ';
                    $img_orientation_obj  =$row_obj["img_orientation_obj"];
                    $img_alt_obj  =$row_obj["img_alt_obj"];
                    $path_img_obj =$row_obj["path_img_obj"];
                    $fname_img_obj =$row_obj["fname_img_obj"];
                    $html_id_obj  =$row_obj["html_id"];
                    $name_obj =$row_obj["name_obj"];
                        //MySQL запрос
                        if ($Result_obj_download = mysqli_query($dbconn,"SELECT *  FROM obj_download WHERE obj_id = $obj_id"))
                        {
                            // получаем все записи из таблицы obj_download
                            if($row_obj_download = mysqli_fetch_array($Result_obj_download))
                            {
                                // echo '<hr>';
                                // echo '
                                //     TABLE obj_download:<br>
                                //     1.  obj_download_id - '.$row_obj_download["obj_download_id"]. '<br>
                                //     2.  pdf_obj - '.$row_obj_download["pdf_obj"]. '<br>                                                          
                                //     3.  xls_obj - '.$row_obj_download["xls_obj"]. '<br>                                                            
                                //     4.  doc_obj - '.$row_obj_download["doc_obj"]. '<br>
                                //     5.  dwg_obj - '.$row_obj_download["dwg_obj"]. '<br> 
                                //     6.  obj_id  - '.$row_obj_download["obj_id"]. '<br> 
                                //     7.  data_prnt - '.$row_obj_download["data_prnt"]. '<br> 
                                //     8.  data_spng - '.$row_obj_download["data_spng"]. '<br> 
                                //     9.  data_ydoc - '.$row_obj_download["data_ydoc"]. '<br> 
                                //     10. data_ypdf - '.$row_obj_download["data_ypdf"]. '<br> 
                                //     11. data_yxls - '.$row_obj_download["data_yxls"]. '<br> 
                                // ';
                                // $head_id =$row_obj["head_id"];
                                $data_prnt =$row_obj_download["data_prnt"];
                                $data_spng =$row_obj_download["data_spng"];
                                $pdf_obj =$row_obj_download["pdf_obj"];
                            }
                            else{echo '<br>Нет такого элемента!';}
                        // Free result set
                        mysqli_free_result($Result_obj_download);
                        }

                        //MySQL запрос
                        if ($Result_obj_furnitur_prop = mysqli_query($dbconn,"SELECT *  FROM obj_furnitur_prop WHERE obj_id = $obj_id"))
                        {
                            // получаем все записи из таблицы obj_furnitur_prop
                            if($row_obj_furnitur_prop = mysqli_fetch_array($Result_obj_furnitur_prop))
                            {
                                // echo '<hr>';
                                // echo '
                                //     TABLE obj_furnitur_prop:<br>
                                //     1.  obj_furnitur_prop_id - '.$row_obj_furnitur_prop["obj_furnitur_prop_id"]. '<br>
                                //     2.  name_furnitur_obj_prop  - '.$row_obj_furnitur_prop["name_furnitur_obj_prop"]. '<br>                                                          
                                //     3.  articul_furnitur_obj  - '.$row_obj_furnitur_prop["articul_furnitur_obj"]. '<br>                                                            
                                //     4.  made_furnitur_obj - '.$row_obj_furnitur_prop["made_furnitur_obj"]. '<br>
                                //     5.  url_furnitur_obj_prop - '.$row_obj_furnitur_prop["url_furnitur_obj_prop"]. '<br> 
                                //     6.  obj_id  - '.$row_obj_download["obj_id"]. '<br> 
                                //     7.  url_video_obj_prop - '.$row_obj_furnitur_prop["url_video_obj_prop"]. '<br>                                    
                                // ';
                                // $head_id =$row_obj["head_id"];
                            }
                            else{echo '<br>Нет такого элемента!';}
                        // Free result set
                        mysqli_free_result($Result_obj_furnitur_prop);
                        }

                        //MySQL запрос
                        if ($Result_obj_in_addition = mysqli_query($dbconn,"SELECT *  FROM obj_in_addition WHERE obj_id = $obj_id"))
                        {
                            // получаем все записи из таблицы obj_furnitur_prop
                            if($row_obj_in_addition = mysqli_fetch_array($Result_obj_in_addition))
                            {
                                // echo '<hr>';
                                // echo '
                                //     TABLE obj_in_addition:<br>
                                //     1.  obj_in_addition_id - '.$row_obj_in_addition["obj_in_addition_id"]. '<br>
                                //     2.  html_in_addition_id  - '.$row_obj_in_addition["html_in_addition_id"]. '<br>                                                          
                                //     3.  path_img_obj_in_addition  - '.$row_obj_in_addition["path_img_obj_in_addition"]. '<br>                                                            
                                //     4.  fname_img_obj_in_addition - '.$row_obj_in_addition["fname_img_obj_in_addition"]. '<br>
                                //     5.  data_href_img_obj_in_addition - '.$row_obj_in_addition["data_href_img_obj_in_addition"]. '<br> 
                                //     6.  fname_img_smoll_obj_in_addition  - '.$row_obj_in_addition["fname_img_smoll_obj_in_addition"]. '<br> 
                                //     8.  img_def - '.$row_obj_in_addition["img_def"]. '<br> 
                                //     9.  obj_id - '.$row_obj_in_addition["obj_id"]. '<br>                                                                      
                                // ';
                                // $head_id =$row_obj["head_id"];
                            }
                            else{echo '<br>Нет такого элемента!';}
                        // Free result set
                        mysqli_free_result($Result_obj_in_addition);
                        }

                        //MySQL запрос
                        if ($Result_obj_alias = mysqli_query($dbconn,"SELECT *  FROM obj_alias WHERE obj_id = $obj_id"))
                        {
                            // получаем все записи из таблицы obj_alias
                            if($row_obj_alias = mysqli_fetch_array($Result_obj_alias))
                            {
                                // echo '<hr>';
                                // echo '
                                //     TABLE obj_in_addition:<br>
                                //     1.  obj_alias_id  - '.$row_obj_alias["obj_alias_id"]. '<br>
                                //     2.  keywords_alias  - '.$row_obj_alias["keywords_alias"]. '<br>
                                //     3.  obj_id - '.$row_obj_alias["obj_id"]. '<br>                                                                      
                                // ';
                                // $head_id =$row_obj["head_id"];
                            }
                            else{echo '<br>Нет такого элемента!';}
                        // Free result set
                        mysqli_free_result($Result_obj_alias);
                        }

/////////////////////////////////////////

                    $grupp_id =$row_obj["grupp_id"];

                        // //MySQL запрос
                        if ($Result_grupp = mysqli_query($dbconn,"SELECT *  FROM grupp WHERE grupp_id = $grupp_id "))
                        {
                        
                            // получаем все записи из таблицы grupp
                            if($row_grupp = mysqli_fetch_array($Result_grupp))
                            {
                                // echo '<hr><hr>';
                                // echo '
                                //     TABLE grupp:<br>
                                //     1.  grupp_id - '.$row_grupp["grupp_id"]. '<br>
                                //     2.  name_grupp - '.$row_grupp["name_grupp"]. '<br>                                                          
                                //     3.  html_id  - '.$row_grupp["html_id"]. '<br>
                                //     4.  category_id   - '.$row_grupp["category_id"]. '<br> 
                                //     5.  number_in_order_grupp    - '.$row_grupp["number_in_order_grupp"]. '<br>                                    

                                // ';
                                $html_id_grupp  =$row_grupp["html_id"];
                                $name_grupp =$row_grupp["name_grupp"];
                                $category_id =$row_grupp["category_id"];

                                    //MySQL запрос
                                    if ($Result_category = mysqli_query($dbconn,"SELECT *  FROM category WHERE category_id = $category_id"))
                                    {
                                    
                                        // получаем все записи из таблицы category
                                        if($row_category = mysqli_fetch_array($Result_category))
                                        {
                                            // echo '<hr>';
                                            // echo '
                                            //     TABLE category:<br>
                                            //     1.  category_id - '.$row_category["category_id"]. '<br>
                                            //     2.  name_category - '.$row_category["name_category"]. '<br>                                                          
                                            //     3.  data_href_category  - '.$row_category["data_href_category"]. '<br>
                                            //     4.  head_id   - '.$row_category["head_id"]. '<br> 
                                            //     5.  number_in_order_grupp    - '.$row_category["number_in_order_category"]. '<br>                                    

                                            // ';
                                            $head_id =$row_category["head_id"];
                                                //MySQL запрос
                                                if ($Result_head = mysqli_query($dbconn,"SELECT *  FROM head WHERE head_id = $head_id"))
                                                {

                                                    // получаем все записи из таблицы head
                                                    if($row_head = mysqli_fetch_array($Result_head))
                                                    {
                                                        // echo '<hr>';
                                                        // echo '
                                                        //     TABLE head:<br>
                                                        //     1.  head_id - '.$row_head["head_id"]. '<br>
                                                        //     2.  name_head - '.$row_head["name_head"]. '<br>                                                          
                                                        //     3.  data_href_head  - '.$row_head["data_href_head"]. '<br>                                                            
                                                        //     4.  number_in_order_head    - '.$row_head["number_in_order_head"]. '<br>                                    

                                                        // ';
                                                        // $head_id =$row_obj["head_id"];
                                                    }
                                                    else{echo '<br>Нет такого элемента!';}
                                                // Free result set
                                                mysqli_free_result($Result_head);
                                                }


                                        }
                                        else{echo '<br>Нет такого элемента!';}
                                    // Free result set
                                    mysqli_free_result($Result_category);
                                    }
                            }
                            else{echo '<br>Нет такого элемента!';}
                        // Free result set
                        mysqli_free_result($Result_grupp);
                        }

                }
                else{echo '<br>Нет такого элемента!';}
            // Free result set
            mysqli_free_result($Result_obj);
           }
           
            //Закрывает соединение с сервером MySQL
            mysqli_close($dbconn);
    
  
	// die("<br>Остановка скрипта"); 

}



 ?>