<?php
// admin\Authorization\changepass.php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
$dbconn=dbconnect();
$err = []; 
$err = authorization($_POST['login'],$_POST['pass'],$dbconn,$err);

if (count($err) > 0) {
    foreach($err AS $error){
        echo "<b>" . $error . "</b><br>";
    } 
}

// function authorization($login,$pass,$dbconn,$err){
//     if(isset($login) && isset($pass)){
//         $err=check_login($login,$dbconn,$err);
//         $err=check_pass($pass,$dbconn,$err);




//         if (in_array("Пользователь с таким логином существует в базе данных", $err) && count($err) == 1) {
//                 // echo "Нашел (\"Пользователь с таким логином существует в базе данных\")<br>";
            
            
//             // $login = $_POST['login'];        
//             $Result_user = mysqli_query($dbconn,"SELECT * FROM `sofia_users`  WHERE `user_login` = '$login'");
//             if($Result_user){ 
//                     $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
//                     # Убераем лишние пробелы и делаем двойное шифрование
//                     $salt=$row_user['user_salt'];
//                     $password = sha1(trim($pass).$salt);       
            
                
//                     // if (mysqli_query($dbconn,"INSERT INTO `sofia_users` (`user_sofia_id`, `user_login`, `user_password`, `user_hash`, `user_mail`, `user_salt`) VALUES (NULL, '$login','$password',NULL,NULL,'$salt')")) {
//                     if ($password == $row_user['user_password']) {
//                         // header("Location: login.php"); exit();
//                         echo "<b>Пароль верный!</b><br>";

//                         // while ($row_user) {
//                         //     printf("ID: %s  Логин: %s", $row_user["user_sofia_id"], $row_user["user_login"]);
//                         // }
                    
//                             echo 'user_sofia_id________' . $row_user['user_sofia_id'] . '<br />';
//                             echo 'user_login___________' .  $row_user['user_login'] . '<br />';
//                             echo 'user_password________' .  $row_user['user_password'] . '<br />';
//                             echo 'user_hash____________' . $row_user['user_hash'] . '<br />';
//                             echo 'user_mail____________' . $row_user['user_mail'] . '<br />';
//                             echo 'user_salt____________' . $row_user['user_salt'] . '<br />';
//                             echo 'user_sess_id_________' . $row_user['user_sess_id'] . '<br />';
//                             echo 'user_sess_date_start_' . $row_user['user_sess_date_start'] . '<br />';
                        

//                         mysqli_free_result($Result_user);
//                         exit();
//                     }else{   
//                         echo "<b>Пароль неверный!</b>";              
//                         // echo "Пароль не совпал: <br> Пароль ". $password;
//                         // echo "<br> Пароль ". sha1(trim($pass).$salt); ;
//                         // echo '<br> $_POST[pass] ' . trim($pass);
//                         // echo "<br> Пароль в Базе ". $row_user['user_password'];
//                         // echo "<br> Соль ". $salt;
//                         mysqli_free_result($Result_user);
//                         exit();
//                     }  

//             }
//             else{
                    
//                     printf("Ошибка2: %s\n", mysqli_error($dbconn));
//                     // var_dump($Result_user);
//                     foreach($err AS $error){
//                         echo "<b>" . $error . "</b><br>";
//                     } 
//                     exit();         
//                 }
//         }

       
//         // var_dump($_POST);
//         // var_dump($err);
//         return $err;
//     }        

// } 



// function check_login($login,$dbconn,$err){
//     # проверям логин
//     if(!preg_match("/^[a-zA-Z0-9_-]+$/",$login)){ 
//         $err[] = "Логин может состоять только из букв английского алфавита и цифр"; 
//     } 

//     if(strlen($login) < 3 or strlen($login) > 40){ 
//         $err[] = "Логин должен быть не меньше 3-х символов и не больше 40"; 
//     }     

//     # проверяем, не сущестует ли пользователя с таким именем
//    $escape_string_login=mysqli_real_escape_string($dbconn, $login);

//    $query = mysqli_query($dbconn,"SELECT COUNT(user_sofia_id) AS count FROM sofia_users WHERE user_login='$escape_string_login'");
//    $data = mysqli_fetch_assoc($query); 
//    $count = $data['count']; 

//     // print "<b>count:</b> $count <br>";
//     // var_dump($data);
//     // var_dump($count);
//     // var_dump(!is_null($count));
//     // exit();
//     if($count > 0){ 
//         $err[] = "Пользователь с таким логином существует в базе данных"; 
//     }elseif($count == 0){
//         $err[] = "Пользователя с таким логином не существует в базе данных";
//     }

// return $err;
// }

// function check_pass($pass,$dbconn,$err){
//     # проверям логин
//     if(!preg_match("/^[a-zA-Z0-9_-]+$/",$pass)){ 
//         $err[] = "Пароль может состоять только из букв английского алфавита и цифр"; 
//     } 

//     if(strlen($pass) < 6 or strlen($pass) > 40){ 
//         $err[] = "Пароль должен быть не меньше 6-х символов и не больше 40"; 
//     }     
  

// return $err;
// }

mysqli_close($dbconn);

?>