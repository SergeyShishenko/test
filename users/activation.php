<?php
// users\activation.php
 require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
 $dbconn=dbconnect();
 $err = []; 
 $msg='';
 if(!empty($_GET['code']) && isset($_GET['code']))
 {
 $code=mysqli_real_escape_string($dbconn,$_GET['code']);
    $c=mysqli_query($dbconn,"SELECT `user_sofia_id` FROM `sofia_users` WHERE `user_activation`='$code'");
//  echo mysqli_num_rows($c)." c<br>";
 if(mysqli_num_rows($c) > 0)
 {
 $count=mysqli_query($dbconn,"SELECT `user_sofia_id` FROM `sofia_users` WHERE `user_activation`='$code' AND `user_status`= 0");
//  echo mysqli_num_rows($count)." count<br>";
 if(mysqli_num_rows($count) == 1)
 {
mysqli_query($dbconn,"UPDATE sofia_users SET `user_status`= 1 WHERE user_activation='$code'");
 $msg="Ваш email подтвержден"; 
 }
 else
 {
 $msg ="Ваш email уже подтвержден.";
 }
 }
 else
 {
 $msg ="Неверный код подтверждения.";
 }
 }
?>

<?php echo $msg; ?>