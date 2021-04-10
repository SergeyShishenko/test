<?php
ini_set('session.gc_maxlifetime', 43200);// 12 часов
// ini_set('session.cookie_lifetime', 0);
// session_set_cookie_params(0);
session_start();
// $s_id=session_id();

$ref = $_SERVER['REQUEST_URI'];
// echo basename($ref);
$_SESSION['ref'] = $ref;
// abstract function dbconnect(){};
define('__ROOT__', dirname(dirname(dirname(__FILE__)))); // было
// require_once(__ROOT__.'/DATA/TABLES/configDB.php'); // подключение к базе данных

// define('__ROOT__', $_SERVER['DOCUMENT_ROOT']); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); // подключение к базе данных

// echo __ROOT__ ,PHP_EOL;
//  echo $_SERVER['DOCUMENT_ROOT'],PHP_EOL;
// echo basename($_SERVER['DOCUMENT_ROOT']);
// /var/www/u0474172/data/www
// /var/www/u0474172/data/www/500stp.website
// $loc = 'Location:'.$_SERVER['DOCUMENT_ROOT'].'/www/index-session.php';

    


$dbconn=dbconnect();
// проверка сессии
$hash=mysqli_real_escape_string($dbconn, $_COOKIE['hash']);
// $login= $_SESSION['sess_login'];
// $escape_string_login=mysqli_real_escape_string($dbconn, $login);
if (is_null($hash)){ $hash="-"; }


$result = mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_hash` LIKE '%".$hash."%'");

    // if (mysqli_num_rows($result) > 0) {//есть запись         
    // // $result = mysqli_query($dbconn,"UPDATE `user` SET `date_start` = CURRENT_TIMESTAMP WHERE `hash_id` LIKE '%".$hash."%'");
    // // обновить время и last page
    // $result = mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_sess_date_start` = CURRENT_TIMESTAMP, `user_last_page` = '$ref' WHERE user_login='$escape_string_login'");

    // }
    // elseif(!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) ) { header('Location:index-session.php');    exit();}

    if (mysqli_num_rows($result) == 0) {//есть запись     

        if(!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) ) {
            if (basename($ref)=="CNC"){
                header('Location:../index-session.php');    exit();
            }
             header('Location:index-session.php');    exit();
            }
        // if(!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) ) { header($loc);    exit();}

    }
    $data = mysqli_fetch_assoc($result);
    $role=$data['user_role']; 

    

    // mysqli_close($dbconn);  
  

