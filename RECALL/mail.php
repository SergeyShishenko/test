<?php

$message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
$message .= "Телефон: {$_POST['phone']}"; // добавляем телефон в текст

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'serge-meb'; // логин от вашей почты
$mail->Password = '20meb14'; // пароль от почтового ящика
// $mail->Username = 'info'; // логин от вашей почты
// $mail->Password = '_MnExd3G'; // пароль от почтового ящика info@500stp.website
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'serge-meb@mail.ru';
$mail->FromName = 'Сергей';
$mail->addAddress('serge-meb@mail.ru', 'Сергей');
$mail->isHTML(true);
$mail->Subject = 'Заказ обратного звонка';
$mail->Body = $message;

if( $mail->send() ){
	echo '<p style="color: green;">Ваше сообщение отправлено</p>';
}else{
	echo '<p style="color: red;">Ошибка!</p>';
}