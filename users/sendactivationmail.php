<?php
// RECALL\sendactivationmail.php
// http://www.sesmikcms.ru/pages/read/ischerpyvajuschaja-instrukcija-po-php-mailer/
// $message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
// $message .= "Телефон: {$_POST['phone']}<br><br>"; // добавляем телефон в текст
// $message .= "{$_POST['message']}"; // добавляем сообщение в текст
// $message = "{$_POST['message']}"; // добавляем сообщение в текст
require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
 $dbconn=dbconnect();
 $mailadres=mysqli_real_escape_string($dbconn,$_POST['Email']);
 $login =$_POST['login'];
 $code=sha1(generateCode(6));
//  echo $mailadres;
//  exit();

//  mysqli_query($dbconn,"INSERT INTO users(email,password,activation) VALUES('$email','$password','$activation')");
$Result_user=mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_mail` = '$mailadres', `user_activation` = '$code', `user_status`= 0  WHERE `user_login` = '$login'");
if(!$Result_user)
{printf("Ошибка2: %s\n", mysqli_error($dbconn));}

//  require 'phpmailer/PHPMailerAutoload.php';
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
	require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
	$site='https://www.500stp.website';
}
else {
	require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
	$site='http://localhost/www';
}
// $base_url=$_SERVER['DOCUMENT_ROOT'] .$site."/users/activation.php?code=";
$base_url=$site."/users/activation.php?do=";

require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/inc-mail.php'); 
// echo (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/inc-mail.php');
// define('__ROOT__', dirname(dirname(dirname(__FILE__)))); 
// require_once(__ROOT__.'/DATA/TABLES/inc-mail.php'); // 
// echo __ROOT__.'/DATA/TABLES/inc-mail.php';
$mail->addAddress($mailadres, $login);// Email получателя
// исправление ошибки отправления
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
); 


// Письмо
$mail->isHTML(true);
$mail->Subject = 'Сообщение с сайта 500СТП';
$mail->Body = 'Здравствуйте, '.$login.'! <br/> <br/> Пожалуйста, подтвердите адрес вашей электронной почты, и вам будет доступна функция «Восстановление пароля». <br/> <br/> <a href="'.$base_url.$code.'">'.$base_url.$code.'</a>';


if( $mail->send() ){
	echo 'Вам отправлено письмо со ссылкой для подтверждения!';

}else{
	echo '<p style="color: red; padding: 6px;">Ошибка!</p>';
	echo '<p style="color: red;">'.$mail->ErrorInfo.'</p>';
	
}
