<?
// admin/Authorization/register.php
// Страница регситрации нового пользователя

# Соединямся с БД

require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
$dbconn=dbconnect();
$err = []; 


// var_dump($_POST);
// exit();
if(isset($_POST['submit'])){
       
    # проверям логин
    $err=check_login($_POST['login'],$dbconn,$err);
    $err=check_pass($_POST['password'],$dbconn,$err);

    // if (in_array("Пользователь с таким логином уже существует в базе данных", $err)) {
    //     echo "Нашел (\"Пользователь с таким логином уже существует в базе данных\")<br>";
    // }

    # Если нет ошибок, то добавляем в БД нового пользователя
    // if(count($err) == 0){
    if (in_array("Пользователя с таким логином не существует в базе данных", $err) && count($err) == 1 || count($err) == 0) {
    
        
        $login = $_POST['login'];        

        # Убераем лишние пробелы и делаем двойное шифрование
        $salt=generateCode(4);
        $password = sha1(trim($_POST['password']).$salt);       

       
        if (mysqli_query($dbconn,"INSERT INTO `sofia_users` (`user_sofia_id`, `user_login`, `user_password`, `user_hash`, `user_mail`, `user_salt`, `user_sess_id`, `user_sess_date_start`) VALUES (NULL, '$login', '$password', NULL, NULL, '$salt', NULL, CURRENT_TIMESTAMP)")) {
            // header("Location: login.php"); exit();
            print "<b>Вы успешно зарегистрировались!</b><br>";
            print "<a href='register.php'>Вернуться</a><br>";
            exit();
        }
        else{
         
            printf("Ошибка: %s\n", mysqli_error($dbconn));
            exit();
        }        

    }
    else{
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error){
            print $error."<br>";
        }        
    }

}

// function check_login($login,$dbconn,$err){
//      # проверям логин
//      if(!preg_match("/^[a-zA-Z0-9_-]+$/",$login)){ 
//          $err[] = "Логин может состоять только из букв английского алфавита и цифр"; 
//      } 
 
//      if(strlen($login) < 3 or strlen($login) > 40){ 
//          $err[] = "Логин должен быть не меньше 3-х символов и не больше 40"; 
//      }     
 
//      # проверяем, не сущестует ли пользователя с таким именем
//     $escape_string_login=mysqli_real_escape_string($dbconn, $login);
 
//     $query = mysqli_query($dbconn,"SELECT COUNT(user_sofia_id) AS count FROM sofia_users WHERE user_login='$escape_string_login'");
//     $data = mysqli_fetch_assoc($query); 
//     $count = $data['count']; 
 
//      // print "<b>count:</b> $count <br>";
//      // var_dump($data);
//      // var_dump($count);
//      // var_dump(!is_null($count));
//      // exit();
//      if($count > 0){ 
//          $err[] = "Пользователь с таким логином уже существует в базе данных"; 
//      }

//  return $err;
// }
// function check_pass($pass,$dbconn,$err){
//      # проверям логин
//      if(!preg_match("/^[a-zA-Z0-9_-]+$/",$pass)){ 
//          $err[] = "Пароль может состоять только из букв английского алфавита и цифр"; 
//      } 
 
//      if(strlen($pass) < 6 or strlen($pass) > 40){ 
//          $err[] = "Пароль должен быть не меньше 6-х символов и не больше 40"; 
//      }     
   

//  return $err;
// }
mysqli_close($dbconn);
?>



<p>РЕГИСТРАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ</p>

<form method="POST">

Логин <input id="login" name="login" type="text" value="<?php echo $_POST['login'] ?>"><br>

Пароль <input id="password" name="password" type="password" autocomplete="new-password"><br>

<input name="submit" type="submit" value="Зарегистрироваться"><br>
</form>

<hr>

Сгенерированный пароль <input id="generatepass" name="generatepass" type="text" value="<?php #echo generateCode(6); ?>"><br>
<input name="generatesubmit" type="submit" value="Сгенерировать пароль" onClick="generateCode()"><br>
<input name="changepass" type="submit" value="Изменить пароль" onClick="changepass()"><br>
<input name="readlogin" type="submit" value="Данные Логина" onClick="readlogin()"><br>
<p id="changepass"></p>




<script>

function generateCode(){
  var request = new XMLHttpRequest();
  request.open('GET','generateCode.php',true);
  request.addEventListener('readystatechange', function() {
    if ((request.readyState==4) && (request.status==200)) {
      var welcome = document.getElementById('generatepass');
      welcome.value = request.responseText;
    }
  });
 request.send();
}

function changepass(){
  var request = new XMLHttpRequest();
  var body = 'login=' +  document.getElementById('login').value +
  '&chpass=' + document.getElementById('generatepass').value;
  console.log(body);
  request.open('POST','changepass.php',true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.addEventListener('readystatechange', function() {
    if ((request.readyState==4) && (request.status==200)) {
      var welcome = document.getElementById('changepass');
      welcome.innerHTML = request.responseText;
    }
  });
 request.send(body);
}

function readlogin(){
  var request = new XMLHttpRequest();
  var body = 'login=' +  document.getElementById('login').value +
  '&pass=' + document.getElementById('password').value;
  console.log(body);
  request.open('POST','readlogin.php',true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.addEventListener('readystatechange', function() {
    if ((request.readyState==4) && (request.status==200)) {
      var welcome = document.getElementById('changepass');
      welcome.innerHTML = request.responseText;
    }
  });
 request.send(body);
}



</script>
