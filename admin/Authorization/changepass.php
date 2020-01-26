<?php
// admin\Authorization\changepass.php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
$dbconn=dbconnect();
$err = []; 

if(isset($_POST['login']) && isset($_POST['chpass'])){
    $err=check_login($_POST['login'],$dbconn,$err);
    $err=check_pass($_POST['chpass'],$dbconn,$err);

    if (in_array("Пользователь с таким логином существует в базе данных", $err) && count($err) == 1) {
            // echo "Нашел (\"Пользователь с таким логином существует в базе данных\")<br>";
           
        
                $login = $_POST['login'];        
        
                # Убераем лишние пробелы и делаем двойное шифрование
                $salt=generateCode(4);
                $password = sha1(trim($_POST['chpass']).$salt);       
        
               
                // if (mysqli_query($dbconn,"INSERT INTO `sofia_users` (`user_sofia_id`, `user_login`, `user_password`, `user_hash`, `user_mail`, `user_salt`) VALUES (NULL, '$login','$password',NULL,NULL,'$salt')")) {
                if (mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_password` = '$password', `user_salt` = '$salt' WHERE `user_login` = '$login'")) {
                    // header("Location: login.php"); exit();
                    echo "<b>Пароль изменен!</b><br>";
                    echo "Логин:<b> {$login}</b><br> Пароль:<b> {$_POST['chpass']}</b><br> Соль:<b> {$salt}</b><br>";
                   
                    exit();
                }
                else{
                 
                    printf("Ошибка: %s\n", mysqli_error($dbconn));
                    exit();
                }  

    }

    if(count($err) == 0){

    echo "<b>Логин: {$_POST['login']} </b><br>";
    echo "<b>Новый пароль: {$_POST['chpass']} </b><br>";
    }else{
        echo "<b>Неудача!</b><br>";
        // print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error){
            print $error."<br>";
        }  
    }
}else{
    echo "<b>Неудача!</b><br>";
}


mysqli_close($dbconn);
?>
