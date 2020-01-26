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
    // if (in_array("Пользователя с таким логином не существует в базе данных", $err) && count($err) == 1 || count($err) == 0) {
    if (in_array("Пользователя с таким логином не существует в базе данных", $err) && count($err) == 2) {
   
    
        
        $login = $_POST['login'];        

        # Убераем лишние пробелы и делаем двойное шифрование
        $salt=generateCode(4);
        $password = sha1(trim($_POST['password']).$salt);       

       
        if (mysqli_query($dbconn,"INSERT INTO `sofia_users` (`user_login`, `user_password`, `user_salt`, `user_sess_date_start`,`user_activation`) VALUES ('$login', '$password','$salt', CURRENT_TIMESTAMP, '-')")) {
            // header("Location: login.php"); exit();
            print "<b>Вы успешно зарегистрировались!</b><br>";
            echo "Логин:<b> {$login}</b><br> Пароль:<b> {$_POST['password']}</b><br> Соль:<b> {$salt}</b><br>";
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


mysqli_close($dbconn);
?>



<p>РЕГИСТРАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ</p>

<form method="POST">

    Логин <input id="login" name="login" type="text" value="<?php echo $_POST['login'] ?>"><br><br>

    Пароль <input id="password" name="password" type="password" autocomplete="new-password"><br><br>

    <input name="submit" type="submit" value="Зарегистрироваться"><br>
</form>

<hr>

Сгенерированный пароль <input id="generatepass" name="generatepass" readonly type="text" value="<?php #echo generateCode(6); ?>" ><br><br>
<input name="generatesubmit" type="submit" value="Сгенерировать пароль" onClick="generateCode()" ><br><br>
<input name="changepass" type="submit" value="Изменить пароль" onClick="changepass()"><br><br>
<input name="readlogin" type="submit" value="Данные Логина" onClick="readlogin()"><br><br>
<p id="changepass"></p>




<script>

function generateCode(){
  var request = new XMLHttpRequest();
  request.open('GET','generateCode.php',true);
  request.addEventListener('readystatechange', function() {
    if ((request.readyState==4) && (request.status==200)) {
      var welcome = document.getElementById('generatepass');
      var welcome2 = document.getElementById('password');
      welcome.value = request.responseText;
      welcome.readOnly = true;
      welcome.disabled = true;
      welcome2.value = request.responseText;
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
