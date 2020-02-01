<?php
// отправка сообщений с сайта

define('__ROOT__', dirname(dirname(dirname(__FILE__)))); 
require_once(__ROOT__.'/DATA/TABLES/inc-mail.php'); // 


// $message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
// $message .= "Телефон: {$_POST['phone']}<br><br>"; // добавляем телефон в текст
// $message .= "{$_POST['message']}"; // добавляем сообщение в текст
$message = "{$_POST['message']}"; // добавляем сообщение в текст
$login ="{$_POST['login']}";

// $mail->addAddress('slashd@mail.ru','Ян');// Email получателя
// $mail->addAddress('nedelko.iv.serg@ya.ru','Иван');// Email получателя
// $mail->addAddress('ivanmaksimow@mail.ru','Иван');// Email получателя
// $mail->addAddress('tomilov.decor@yandex.ru','Олег');// Email получателя
// $mail->addAddress('schistobaev@bk.ru','Сергей');// Email получателя
// $mail->addAddress('yu.constructor@mail.ru','Александр');// Email получателя
// $mail->addAddress('Logunov.sofia@yandex.ru','Дмитрий');// Email получателя
// $mail->addAddress('ivan.sofiadec@gmail.com','Иван');// Email получателя
// $mail->addAddress('chip012@yandex.ru','Михаил');// Email получателя
// $mail->addAddress('5532862@mail.ru','Андрей');// Email получателя
// $mail->addAddress('pudovkinalera@gmail.com','Лера');// Email получателя
// $mail->addAddress('PPK.sofdekorworking@yandex.ru','Паша');// Email получателя

$mail->addAddress('serge-meb@mail.ru','Сергей');// Email получателя


// $mail->addAddress('serge-meb@mail.ru','MAIL');// Email получателя

// Для добавления нескольких получателей вы должны повторить вызов функции AddAddress столько раз, скольким людям вы хотите отослать ваше сообщение
// адрес является обязательным, а имя адресата опциональным и может быть опущено.
// $mailer->AddAddress('recipient2@domain.com', 'Второй человек');
// $mailer->AddAddress('recipient3@domain.com', 'Третий человек');
// $mailer->AddAddress('recipient1@domain.com', 'Четвертый человек');
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

// узнать ip адрес
 
// $client  = @$_SERVER['HTTP_CLIENT_IP'];
// $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
// $remote  = @$_SERVER['REMOTE_ADDR'];
 
// if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
// elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
// else $ip = $remote;
 
// название файла в youtube https://youtu.be/rT2qBoTtB-U
// $youtube="rT2qBoTtB-U";
// $youtube="nWdH_vYaQk4";
// $youtube="uLMm-fsyZyI";
// $youtube="GlsmBD7z8eY";

// Письмо
$mail->isHTML(true);
$mail->Subject = 'Сообщение с сайта 500СТП';
$mail->Body = $message ."<br>Сообщение от <b>". $login . "</b>";
// . $_SERVER['HTTP_REFERER']."<br>"
// . "<a href=\"https://500stp.website/shablony-dokumentov-titulnyy-dp.php#list-titulnyy-proektirovshchika\">ЛИСТ ТИТУЛЬНЫЙ ТЗ для проектировщика</a><br>"
// . "<a href=\"https://500stp.website/shablony-dokumentov-titulnyy-dp.php\">АЛЬБОМ ДИЗАЙН-ПРОЕКТА </a><br>"
// . "<a href=\"https://500stp.website/shablony-dokumentov-albom-obrazcov.php\">ШАБЛОН АЛЬБОМА ОБРАЗЦОВ </a><br>"
// . "<a href=\"https://500stp.website/izdeliya-mebel-korpusnaya.php#stenka-zadnyaya-v-paz-korpusa-shkafa\">5000202-99_105 стенка задняя В ПАЗ корпуса шкафа </a> <br>"
// . "<a href=\"https://500stp.website/izdeliya-mebel-korpusnaya.php#stenka-zadnyaya-nabivnaya-korpusa-shkafa\">5000202-99_106 стенка задняя НАБИВНАЯ корпуса шкафа </a> <br>"
// . "<a href=\"https://500stp.website/izdeliya-mebel-korpusnaya.php#modul-tumba-polnovstraivaemyh-yashchikov\">5000202-99_125 модуль-тумба полновстраиваемых ящиков</a> <br>"
// . "<a href=\"https://500stp.website/izdeliya-mebel-korpusnaya.php#uzel-vkladnoe-dno-korpus-shkafa\">Вкладное дно корпуса шкафа (отверстия для регулировки опор) </a> <br>"
// . "https://500stp.website/metodichki-stp-po-proektnoy-rabote.php#shtampergonom <br>"
//.$ip

// ВИДЕО

// ."<video width=\"320\" height=\"240\" poster='https://i.ytimg.com/vi/eQqX-N3Vmu0/hqdefault.jpg' controls=\"controls\" alt='bunny'>
// <source type=\"video/mp4\" src=\"img/mov_bbb.mp4\"></source>
// <source type=\"video/ogg\" src=\"img/mov_bbb.ogg\"></source>
// <source type=\"video/webm\" src=\"img/mov_bbb.webm\"></source>
// <a href=\"https://youtu.be/eQqX-N3Vmu0\"><img src='https://i.ytimg.com/vi/eQqX-N3Vmu0/hqdefault.jpg'  alt='bunny2' width=\"320\" height=\"240\" /></a>
// </video>"

// ."<video width=\"320\" height=\"240\" poster='https://i.ytimg.com/vi/$youtube/hqdefault.jpg' controls=\"controls\" alt='VIDEO'>
// <source type=\"video/mp4\" src=\"img/mov_bbb.mp4\"></source>
// <source type=\"video/ogg\" src=\"img/mov_bbb.ogg\"></source>
// <source type=\"video/webm\" src=\"img/mov_bbb.webm\"></source>
// <a href=\"https://youtu.be/$youtube\"><img src='https://i.ytimg.com/vi/$youtube/hqdefault.jpg'  alt='VIDEO' width=\"320\" height=\"240\" /></a>
// </video>"

// ."<hr>Логин: sofia <br>Пароль: 123"


// ;

if( $mail->send() ){
	echo '<p style="color: green; ">Ваше сообщение отправлено!</p>
	<script>
	setTimeout(function(){
		$(\'button.close\').trigger(\'click\');
	  }, 1000);
	  </script>
	  ';
}else{
	echo '<p style="color: red; padding: 6px;">Ошибка!</p>';
	echo '<p style="color: red;">'.$mail->ErrorInfo.'</p>
	<script>
	setTimeout(function(){
		$(\'button.close\').trigger(\'click\');
	  }, 1000);
	  </script>
	  ';
	
}