<?php 
// users\checkemailaccess.php
require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
$dbconn=dbconnect();
if(isset($_POST['login']) && isset($_POST['Email'])){
    $mailadres=mysqli_real_escape_string($dbconn,$_POST['Email']);
    $login =mysqli_real_escape_string($dbconn,$_POST['login']);;
    $res=mysqli_query($dbconn,"SELECT * FROM `sofia_users`  WHERE `user_login` = '$login'");
    if(mysqli_num_rows($res) > 0)
    {
        $data = mysqli_fetch_assoc($res);
        if ($data['user_status']==1 ){
         echo 1;
        }else{
            echo 0; 
        }

    }else{
        printf("Ошибка: %s\n", mysqli_error($dbconn));
    exit();
    } 
    
}else{
    echo 2; 
}

?>