<?php
// include 'inc-session-start.php';
ini_set('session.gc_maxlifetime', 43200);// 12 часов
ini_set('session.cookie_lifetime', 43200);
// session_set_cookie_params(0);
session_start();
// $_SESSION['ref'] = $_SERVER['REQUEST_URI'];
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/data.php'); 
// require_once('./DATA/data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) || $_SESSION['sess_login']!==$enter_login || $_SESSION['sess_pass']!==$enter_passw) { header('Location:index-session.php');    exit();}

// /template-shablony-dokumentov.php?obj_id=1
// echo 'id объекта '.$_SESSION['obj_id'];
if(isset($_SESSION['obj_id']))
{
    // echo 'id объекта '.$_SESSION['obj_id'];
    // echo '<hr>';
    // echo dirname(__ROOT__).'<br>';
    //подключаем конфигурационный файл
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
    $obj_id=$_SESSION['obj_id'];
    // require_once('DATA/TABLES/configDB.php');
    require_once('configDB.php');
    $dbconn=dbconnect();

        //MySQL запрос
        if ($Result_obj = mysqli_query($dbconn,"SELECT *  FROM obj WHERE obj_id = $obj_id"))
        {
        
            // получаем все записи из таблицы obj
            if($row_obj = mysqli_fetch_array($Result_obj))
            {
                // echo '
                //     TABLE obj:<br>
                //     1.  obj_id - '.$row_obj["obj_id"]. '<br>
                //     4.  html_id  - '.$row_obj["html_id"]. '<br>
                    
                //     13. template_obj  - '.$row_obj["template_obj"]. '<br>
                    

                // ';
                    
                $template_obj=$row_obj["template_obj"];    
                $html_id=$row_obj["html_id"];

                    

            }
            else{
                echo '<br>Нет такого элемента!';
            }
            // Free result set
            mysqli_free_result($Result_obj);
        }
           
    //Закрывает соединение с сервером MySQL
    mysqli_close($dbconn); 

    // echo 'Location:'.dirname(dirname(dirname($_SERVER['PHP_SELF']))).$template_obj;
    header('Location:'.dirname(dirname(dirname($_SERVER['PHP_SELF']))).$template_obj.'#'.$html_id);
    // header('Location:shablony-dokumentov.php');



}//if(isset($_SESSION['obj_id']))



 ?>