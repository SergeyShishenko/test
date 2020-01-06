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
                    echo "<b>Соль</b>{$salt}<br>";
                   
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


function check_login($login,$dbconn,$err){
    # проверям логин
    if(!preg_match("/^[a-zA-Z0-9_-]+$/",$login)){ 
        $err[] = "Логин может состоять только из букв английского алфавита и цифр"; 
    } 

    if(strlen($login) < 3 or strlen($login) > 40){ 
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 40"; 
    }     

    # проверяем, не сущестует ли пользователя с таким именем
   $escape_string_login=mysqli_real_escape_string($dbconn, $login);

   $query = mysqli_query($dbconn,"SELECT COUNT(user_sofia_id) AS count FROM sofia_users WHERE user_login='$escape_string_login'");
   $data = mysqli_fetch_assoc($query); 
   $count = $data['count']; 

    // print "<b>count:</b> $count <br>";
    // var_dump($data);
    // var_dump($count);
    // var_dump(!is_null($count));
    // exit();
    if($count > 0){ 
        $err[] = "Пользователь с таким логином существует в базе данных"; 
    }

return $err;
}
function check_pass($pass,$dbconn,$err){
    # проверям логин
    if(!preg_match("/^[a-zA-Z0-9_-]+$/",$pass)){ 
        $err[] = "Пароль может состоять только из букв английского алфавита и цифр"; 
    } 

    if(strlen($pass) < 6 or strlen($pass) > 40){ 
        $err[] = "Пароль должен быть не меньше 6-х символов и не больше 40"; 
    }     
  

return $err;
}
mysqli_close($dbconn);
?>
ceda6b7d698363d5e49260678dfdd85ba06b9e50
a015133fa86ab0a5deceb4dacf2702ac19ac40b3