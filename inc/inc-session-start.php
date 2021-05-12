<?php
ini_set('session.gc_maxlifetime', 43200);// 12 часов
// ini_set('session.cookie_lifetime', 0);
// session_set_cookie_params(0);
session_start();
// $s_id=session_id();

$ref = $_SERVER['REQUEST_URI'];

$_SESSION['ref'] = $ref;

define('__ROOT__', dirname(dirname(dirname(__FILE__)))); // было

require_once(__ROOT__.'/DATA/TABLES/configDB.php'); // подключение к базе данных 

$dbconn=dbconnect();

$hash=mysqli_real_escape_string($dbconn, $_COOKIE['hash']);

if (is_null($hash)){ $hash="-"; }


$result = mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_hash` = '$hash'");
   
    if (mysqli_num_rows($result) == 0) {//есть запись     

        if(!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) ) {
            if (basename($ref)=="CNC"){
                header('Location:../index-session.php');    exit();
            }
             header('Location:index-session.php');    exit();
            }     

    }
    $data = mysqli_fetch_assoc($result);
    $role=$data['user_role']; 

    

    // mysqli_close($dbconn);  
  

