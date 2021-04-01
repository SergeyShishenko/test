<?php
// AdminDashboard\application\more\class_SofiaUsers.php
class class_SofiaUsers
{
    public static $err ;
    
// Функция для генерации случайной строки
   public static function generateCode($length=6) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789-";
        $code = "";
        $clen = strlen($chars) - 1;  
        while (strlen($code) < $length) {
                $code .= $chars[mt_rand(0,$clen)];  
        }
        return $code;

    }   

   public static function check_login($login,$dbconn){
        # проверям логин
        // if(!preg_match("/^[a-zA-Z0-9_-]+$/",$login)){             
        if(!preg_match("/[-a-zA-Z0-9\._]/",$login)){ 
            self::$err[] = "Логин может состоять только из букв английского алфавита и цифр"; 
        } 

        if(strlen($login) < 3 or strlen($login) > 40){ 
            self::$err[] = "Логин должен быть не меньше 3-х символов и не больше 40"; 
        }          

        # проверяем, не сущестует ли пользователя с таким именем
        $escape_string_login=mysqli_real_escape_string($dbconn, $login);
        $query = mysqli_query($dbconn,"SELECT COUNT(user_sofia_id) AS count FROM sofia_users WHERE user_login='$escape_string_login'");
        $data = mysqli_fetch_assoc($query); 
        $count = $data['count'];  
        if($count > 0){ 
            self::$err[] = "Пользователь с таким логином существует в базе данных"; 
        }elseif($count == 0){
            self::$err[] = "Пользователя с таким логином не существует в базе данных";            
        }
        return self::$err;
    }

   public static function check_pass($pass){
        $errpass=[];
        if(!preg_match("/^[a-zA-Z0-9_-]+$/",$pass)){ 
            $errpass[] = "Пароль может состоять только из букв английского алфавита и цифр";           
        } 

        if(strlen($pass) < 6 or strlen($pass) > 40){ 
            $errpass[] = "Пароль должен быть не меньше 6-х символов и не больше 40";            
        }   
        return $errpass;
    }

    public static function changepass($dbconn, $login, $pass){
             # Убераем лишние пробелы и делаем двойное шифрование
             $check = self::check_pass($pass);
             if(count($check)>0) {
                return $check; 
             } 

             $salt=  mysqli_real_escape_string($dbconn,self::generateCode(4));
             $password = mysqli_real_escape_string($dbconn,sha1(trim($pass).$salt));
             $login= mysqli_real_escape_string($dbconn, $login);
             // if (mysqli_query($dbconn,"INSERT INTO `sofia_users` (`user_sofia_id`, `user_login`, `user_password`, `user_hash`, `user_mail`, `user_salt`) VALUES (NULL, '$login','$password',NULL,NULL,'$salt')")) {
             if (mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_password` = '$password', `user_salt` = '$salt' WHERE `user_login` = '$login'")) {
                 // header("Location: login.php"); exit();
                 self::$err[] = "<b>Пароль изменен!</b><br>";
                 self::$err[] = "Логин:<b> {$login}</b><br> Пароль:<b> {$pass}</b><br> Соль:<b> {$salt}</b><br>";
                
                 return self::$err;
             }
             else{
              
                self::$err[]="Ошибка: %s\n". mysqli_error($dbconn);
                 return self::$err;
             }  

    }

    public static function newregister($dbconn, $login, $pass){
             # Убераем лишние пробелы и делаем двойное шифрование
            //  printf("Текущий набор символов: %s\n", mysqli_character_set_name($dbconn));
             $checkpass = self::check_pass($pass);
             if(count($checkpass)>0) {
                return $checkpass; 
             } 
             $checklogin = self::check_login($login,$dbconn);
             if (in_array("Пользователь с таким логином существует в базе данных", $checklogin)){
            //  if(count($checklogin)>0) {
                return $checklogin; 
             } 

            //  удаление из err "Пользователя с таким логином не существует в базе данных"; 
             self::$err = array_diff(self::$err, array("Пользователя с таким логином не существует в базе данных"));
             if(count(self::$err)>0){return self::$err;}
            //  $salt=self::generateCode(4);
            //  $password = sha1(trim($pass).$salt);   
            $salt=  mysqli_real_escape_string($dbconn,self::generateCode(4));
            $password = mysqli_real_escape_string($dbconn,sha1(trim($pass).$salt));
            $login= mysqli_real_escape_string($dbconn, $login);    
     
            
                if (mysqli_query($dbconn,"INSERT INTO `sofia_users` (`user_login`, `user_password`, `user_salt`, `user_sess_date_start`,`user_activation`) VALUES ('$login', '$password','$salt', CURRENT_TIMESTAMP, '-')")) {
                    // header("Location: login.php"); exit();
                    self::$err[]= "<b>Вы успешно зарегистрировались!</b><br>";
                    self::$err[]= "Логин:<b> {$login}</b><br> Пароль:<b> {$pass}</b><br> Соль:<b> {$salt}</b><br>";
                   
                    return self::$err;
                }
             else{
              
                self::$err[]="Ошибка: %s\n". mysqli_error($dbconn);
                 return self::$err;
             }  

    }

    public static function deluser($dbconn, $login){     
        $checklogin = self::check_login($login,$dbconn);
        if (in_array("Пользователь с таким логином существует в базе данных", $checklogin)){ 
            //  удаление из err"Пользователь с таким логином существует в базе данных"; 
            self::$err = array_diff(self::$err, array("Пользователь с таким логином существует в базе данных"));
            if(count(self::$err)>0){return self::$err;}
            // self::$err[]="err ".count(self::$err);
        
            $login= mysqli_real_escape_string($dbconn, $login); 
            if (mysqli_query($dbconn,"DELETE FROM  `sofia_users` WHERE `user_login` = '$login'")) {
                // header("Location: login.php"); exit();
                self::$err[]= "<b>Учетная запись пользователя $login удалена!</b><br>"; 
                return self::$err;
            }
            else{            
                self::$err[]="Ошибка: %s\n". mysqli_error($dbconn);
                return self::$err;
            }  
        } 
        return self::$err;
    }

}// end class
?>