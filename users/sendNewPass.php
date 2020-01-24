<?php
// users\sendNewPass.php
// http://www.sesmikcms.ru/pages/read/ischerpyvajuschaja-instrukcija-po-php-mailer/
// $message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
// $message .= "Телефон: {$_POST['phone']}<br><br>"; // добавляем телефон в текст
// $message .= "{$_POST['message']}"; // добавляем сообщение в текст
// $message = "{$_POST['message']}"; // добавляем сообщение в текст
// session_start();
require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
 $dbconn=dbconnect();
//  $mailadres=mysqli_real_escape_string($dbconn,$_POST['Email']);
 $login =$_POST['loginnewpass'];
//   echo $login;

//  $code=sha1(generateCode(6));


 $salt = generateCode(4);
//  echo $salt;
 $gpassword = generateCode(6);
 $password = sha1(trim($gpassword).$salt); 
 

 $res=mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_login` = '$login'");
 if(mysqli_num_rows($res) > 0)
    {
        $data = mysqli_fetch_assoc($res);
        $mailadres=$data['user_mail'];
        // if (!$mailadres) {$msg="Ваш email не подтвержден"; exit();}
if (!mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_password` = '$password', `user_salt` = '$salt' WHERE `user_login` = '$login'")) {
    
   printf("Ошибка: %s\n", mysqli_error($dbconn));
    exit();
    }   

    }
    //  
 

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
// $base_url=$site."/users/activation.php?do=";

require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/inc-mail.php'); 

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
$mail->Body = 'Здравствуйте, <b>'.$login.'</b>! 
<br/> <br/> 
Как Вы и просили, Ваш пароль был переустановлен.<br>
Новый пароль: <b>'.$gpassword.'</b><br><br>
С уважением,<br>
Служба поддержки пользователей проекта www.500stp.website.'
;



if( $mail->send() ){
	echo 'На адрес <b>'.$mailadres.'</b> отправлено письмо со ссылкой для подтверждения!';

}else{
	echo '<p style="color: red; padding: 6px;">Ошибка!</p>';
	echo '<p style="color: red;">'.$mail->ErrorInfo.'</p>';
	
}
exit();
