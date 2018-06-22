<?php

// $message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
// $message .= "Телефон: {$_POST['phone']}<br><br>"; // добавляем телефон в текст
// $message .= "{$_POST['message']}"; // добавляем сообщение в текст
$message = "{$_POST['message']}"; // добавляем сообщение в текст

//  require 'phpmailer/PHPMailerAutoload.php';
require 'class.phpmailer.php';
require 'class.smtp.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'mail.500stp.website';//'mail.500stp.website';//
$mail->SMTPAuth = true;
$mail->Username = 'info@500stp.website'; // логин от вашей почты
$mail->Password = '_MnExd3G'; // пароль от почтового ящика
// $mail->Username = 'info'; // логин от вашей почты
// $mail->Password = '_MnExd3G'; // пароль от почтового ящика info@500stp.website
$mail->SMTPSecure = 'ssl'; //'tls'; //
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'info@500stp.website';//Ваш Email
$mail->FromName = '500СТП';
$mail->addAddress('serge-meb@mail.ru');// Email получателя

// исправление ошибки отправления
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
); 

// // Прикрепление файлов
// for ($ct = 0; $ct < count($_FILES[‘userfile’][‘tmp_name’]); $ct++) {
// 	$uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES[‘userfile’][‘name’][$ct]));
// 	$filename = $_FILES[‘userfile’][‘name’][$ct];
// 	if (move_uploaded_file($_FILES[‘userfile’][‘tmp_name’][$ct], $uploadfile)) {
// 	$mail->addAttachment($uploadfile, $filename);
// 	} else {
// 	$msg .= ‘Failed to move file to ‘ . $uploadfile;
// 	}
// 	} 

// Письмо
$mail->isHTML(true);
$mail->Subject = 'Сообщение с сайта 500СТП';
$mail->Body = $message;

if( $mail->send() ){
	echo '<p style="color: green; ">Ваше сообщение отправлено!</p>';
}else{
	echo '<p style="color: red; padding: 6px;">Ошибка!</p>';
	echo '<p style="color: red;">'.$mail->ErrorInfo.'</p>';
	
}