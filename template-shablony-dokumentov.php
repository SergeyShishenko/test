<?php
include 'inc-session-start.php';

// /template-shablony-dokumentov.php?obj_id=1

if(isset($_GET['obj_id'])) {
    echo 'id объекта '.$_GET['obj_id'];
    echo '<hr>';
    //подключаем конфигурационный файл
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
    $obj_id=$_GET['obj_id'];
    require_once('DATA/TABLES/configDB.php');

    ?>
    <article id="responds">    
        <?php
        $dbconn=dbconnect();

            // //MySQL запрос
           if ($Result = mysqli_query($dbconn,"SELECT *  FROM obj WHERE obj_id = $obj_id "))
           {
            
                // получаем все записи из таблицы obj
                if($row_obj = mysqli_fetch_array($Result))
                {
                    echo '
                        1.  obj_id - '.$row_obj["obj_id"]. '<br>
                        2.  name_obj - '.$row_obj["name_obj"]. '<br>
                        3.  grupp_id - '.$row_obj["grupp_id"]. '<br>
                        4.  html_id  - '.$row_obj["html_id"]. '<br>
                        5.  path_img_obj  - '.$row_obj["path_img_obj"]. '<br>
                        6.  fname_img_obj  - '.$row_obj["fname_img_obj"]. '<br>
                        7.  data_href_img_obj  - '.$row_obj["data_href_img_obj"]. '<br>
                        8.  fname_img_smoll_obj  - '.$row_obj["fname_img_smoll_obj"]. '<br>
                        9.  data_href_img_smoll_obj  - '.$row_obj["data_href_img_smoll_obj"]. '<br>
                        10. obj_def  - '.$row_obj["obj_def"]. '<br>
                        11. number_in_order_obj  - '.$row_obj["number_in_order_obj"]. '<br>
                        12. characteristic_obj  - '.$row_obj["characteristic_obj"]. '<br>
                        13. template_obj  - '.$row_obj["template_obj"]. '<br>
                        14. img_orientation_obj  - '.$row_obj["img_orientation_obj"]. '<br>
                        15. img_alt_obj  - '.$row_obj["img_alt_obj"]. '<br>

                    ';
                }
                else{echo '<br>Нет такого элемента!';}
            // Free result set
            mysqli_free_result($Result);
           }
           
            //Закрывает соединение с сервером MySQL
            mysqli_close($dbconn);
        ?>

    </article>

    <?php
  
	die("<br>Остановка скрипта"); 

}



 ?>