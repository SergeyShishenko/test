<?php
$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = '';
$yrishablonyClass= '';
$ustanovochnyeClass= '';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';
if (isset($escape_string_login)){
$result = mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_sess_date_start` = CURRENT_TIMESTAMP, `user_last_page` = '$ref' WHERE user_login='$escape_string_login'");
// setcookie("ref", $_SERVER['REQUEST_URI'], time()+60*60*24*30);// 24 часа
mysqli_close($dbconn);  
}
