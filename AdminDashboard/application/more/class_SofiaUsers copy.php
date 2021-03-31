<?php
// AdminDashboard\application\more\class_SofiaUsers.php
class class_SofiaUsers
{
    public static $err ;
    // private $dbconn;
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

    // авторизация

   public static function authorization($login,$pass,$dbconn){
        if(isset($login) && isset($pass)){
            self::$err[]=self::check_login($login,$dbconn);
            self::$err[]=self::check_pass($pass);
            if (in_array("Пользователь с таким логином существует в базе данных", self::$err)) {
                    // echo "Нашел (\"Пользователь с таким логином существует в базе данных\")<br>";          
                
                // $login = $_POST['login'];        
                $Result_user = mysqli_query($dbconn,"SELECT * FROM `sofia_users`  WHERE `user_login` = '$login'");
                if($Result_user){ 
                        
                        $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
                        $email=$row_user['user_mail'];
                        self::$err[] =  "email:".$email; 
                        # Убераем лишние пробелы и делаем двойное шифрование
                        $salt=$row_user['user_salt'];
                        $password = sha1(trim($pass).$salt);       
                
                    
                        // if (mysqli_query($dbconn,"INSERT INTO `sofia_users` (`user_sofia_id`, `user_login`, `user_password`, `user_hash`, `user_mail`, `user_salt`) VALUES (NULL, '$login','$password',NULL,NULL,'$salt')")) {
                        if ($password == $row_user['user_password']) {
                            // header("Location: login.php"); exit();
                            // echo "<b>Пароль верный!</b><br>";
                            // unset($err);
                            // while ($row_user) {
                            //     printf("ID: %s  Логин: %s", $row_user["user_sofia_id"], $row_user["user_login"]);
                            // }
                        
                                // echo 'user_sofia_id________' . $row_user['user_sofia_id'] . '<br />';
                                // echo 'user_login___________' .  $row_user['user_login'] . '<br />';
                                // echo 'user_password________' .  $row_user['user_password'] . '<br />';
                                // echo 'user_hash____________' . $row_user['user_hash'] . '<br />';
                                // echo 'user_mail____________' . $row_user['user_mail'] . '<br />';
                                // echo 'user_salt____________' . $row_user['user_salt'] . '<br />';
                                // echo 'user_sess_id_________' . $row_user['user_sess_id'] . '<br />';
                                // echo 'user_sess_date_start_' . $row_user['user_sess_date_start'] . '<br />';
                            

                            mysqli_free_result($Result_user);
                            // exit();
                        }else{   
                            // $email=$row_user['user_mail'];
                            // self::$err[] =  "email:".$email; 
                            self::$err[] =  "Пароль неверный!";  

                                        
                            // echo "Пароль не совпал: <br> Пароль ". $password;
                            // echo "<br> Пароль ". sha1(trim($pass).$salt); ;
                            // echo '<br> $_POST[pass] ' . trim($pass);
                            // echo "<br> Пароль в Базе ". $row_user['user_password'];
                            // echo "<br> Соль ". $salt;
                            mysqli_free_result($Result_user);
                            // exit();
                        }  

                }
                else{
                        
                        printf("Ошибка2: %s\n", mysqli_error($dbconn));
                        // var_dump($Result_user);
                        foreach(self::$err AS $error){
                            echo "<b>" . $error . "</b><br>";
                        } 
                        // exit();         
                    }
            }

        
            // var_dump($_POST);
            // var_dump($err);
            return self::$err;
        }else{
            self::$err[] =  "email:";
        }        

    } //isset($login) && isset($pass)



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
    //    $Result_user = mysqli_query($dbconn,"SELECT * FROM `sofia_users`  WHERE `user_login` = '$escape_string_login'");
    //             if($Result_user){ 
                        
    //                     $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
    //                     $email=$row_user['user_mail'];
    //                     self::$err[] =  "email:".$email; 
    //             }

        // print "<b>count:</b> $count <br>";
        // var_dump($data);
        // var_dump($count);
        // var_dump(!is_null($count));
        // exit();
        if($count > 0){ 
            self::$err[] = "Пользователь с таким логином существует в базе данных"; 
            //  echo "Пользователь с таким логином существует в базе данных -" . var_dump(self::$err);
        }elseif($count == 0){
            self::$err[] = "Пользователя с таким логином не существует в базе данных";
            // self::$err[] =  "email:";
        }

    return self::$err;
    }

   public static function check_pass($pass){
        # проверям логин
        //  $em=true;
        $errpass=[];
        if(!preg_match("/^[a-zA-Z0-9_-]+$/",$pass)){ 
            $errpass[] = "Пароль может состоять только из букв английского алфавита и цифр"; 
            // self::$err[] =  "email:";
            // $em=false;
        } 

        if(strlen($pass) < 6 or strlen($pass) > 40){ 
            $errpass[] = "Пароль должен быть не меньше 6-х символов и не больше 40"; 
            // if ($em) {self::$err[] =  "email:";}
        }     
    
     
    return $errpass;
    }


}


