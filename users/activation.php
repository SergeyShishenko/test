<?php
// users\activation.php активация почты
session_start();
 require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
 $dbconn=dbconnect();
 $err = []; 
 $msg='';
 if(!empty($_GET['do']) && isset($_GET['do']))
 {
 $code=mysqli_real_escape_string($dbconn,$_GET['do']);
 $c=mysqli_query($dbconn,"SELECT `user_sofia_id` FROM `sofia_users` WHERE `user_activation`='$code'");

    if(mysqli_num_rows($c) > 0)
    {
    $count=mysqli_query($dbconn,"SELECT `user_sofia_id` FROM `sofia_users` WHERE `user_activation`='$code' AND `user_status`= 0");

        if(mysqli_num_rows($count) == 1)
        {
        mysqli_query($dbconn,"UPDATE sofia_users SET `user_status`= 1 WHERE user_activation='$code'");
        header('Location:../messages/messages.php?msg=1'); 
        // $msg="Ваш email подтвержден."; //msg=1
        }
        else
        {
            header('Location:../messages/messages.php?msg=2'); 
        // $msg ="Ваш email уже подтвержден.";//msg=2
        }
    }else{
        header('Location:../messages/messages.php?msg=3'); 
        // $msg ="Неверный код подтверждения.";//msg=3
        }
 
 }else{
    header('Location:../messages/messages.php?msg=3'); 
    // $msg ="Неверный код подтверждения.";//msg=13
    }
?>

<?php //echo $msg; ?>