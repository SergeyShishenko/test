<?php
ini_set('session.gc_maxlifetime', 43200);// 12 часов
// ini_set('session.cookie_lifetime', 0);
// session_set_cookie_params(0);
session_start();
$s_id=session_id();


$_SESSION['ref'] = $_SERVER['REQUEST_URI'];
define('__ROOT__', dirname(dirname(dirname(__FILE__)))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); // подключение к базе данных
$dbconn=dbconnect();
// проверка сессии
$hash=$_COOKIE["hash"];
if (is_null($hash)){
    $hash="-";  
}
$result = mysqli_query($dbconn,"SELECT * FROM `user` WHERE `hash_id` LIKE '%".$hash."%'");
    if (mysqli_num_rows($result) > 0) {//есть запись
    
    $result = mysqli_query($dbconn,"UPDATE `user` SET `date_start` = CURRENT_TIMESTAMP WHERE `hash_id` LIKE '%".$hash."%'");

    // echo '$hash ' . $hash . '<br>';
    // var_dump($hash);
    // exit();
    }
    elseif(!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) ) { header('Location:index-session.php');    exit();}

    mysqli_close($dbconn);  

?> 