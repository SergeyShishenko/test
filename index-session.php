<?php
ini_set('session.gc_maxlifetime', 86400);// 24 часа
// ini_set('session.cookie_lifetime', 0);
// session_set_cookie_params(0);
session_start();
$s_id=session_id();

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php');
$dbconn=dbconnect();
$err = []; 
$newpass = false;
include 'inc/inc-version-css-js.php';
$err2 = '';
// if(  !isset($_SESSION['ref'] )  )  {$_SESSION['ref'] = 'index.php';}

// if (strpos($_SERVER['HTTP_REFERER'], 'index-session.php')=== false){$ref = $_SERVER['HTTP_REFERER']; }

if (isset($_POST['login']) && isset($_POST['passw'])) {

  $err = authorization($_POST['login'],$_POST['passw'],$dbconn,$err);


  if  (in_array("Пользователь с таким логином существует в базе данных", $err)){
    // удаление
    if(($delete_key = array_search("Пользователь с таким логином существует в базе данных", $err)) !== false)
      {
          unset($err[$delete_key]);
      }
  }

// var_dump($err) ;

  if (count($err) > 1) {
    // foreach($err AS $error){
    //     // echo "<b>" . $error . "</b><br>";
    // } 
    $err2 = '<div style="color: red;text-align: center;margin-bottom: -30px;"><b>';
    $err2 .= 'Логин или пароль введены неверно!';
    $err2 .= '</b></div>';

  }
  else{ // нет ошибок

    $_SESSION['sess_login'] = $_POST['login'];  
    $_SESSION['sess_pass'] = $_POST['passw'];
    $login= $_SESSION['sess_login'];
    $escape_string_login=mysqli_real_escape_string($dbconn, $login);
    $hash=mysqli_real_escape_string($dbconn, $_COOKIE['hash']);
    // $hash=checkHash($_COOKIE["hash"]);
   
    if (is_null($hash)){ $hash="-";  }

    $result = mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_hash` = '$hash'");
    if (mysqli_num_rows($result) > 0) {//есть запись   
    
    $result = mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_sess_date_start` = CURRENT_TIMESTAMP WHERE user_login='$escape_string_login'");

    // echo '$escape_string_login ' . $escape_string_login . '<br>';
    // exit();
    
    }
    else{
      // Генерируем случайное число и шифруем его
    $hash = sha1(trim(generateCode(6)));//f4ab52644d28932c185b6a4403e440309381292e
    setcookie("hash", $hash, time()+60*60*24*30);// 24 часа
    $_COOKIE["hash"] = $hash;
    setcookie("login", $login, time()+60*60*24*30);// 24 часа
    $_COOKIE["login"] = $login;
    // $escape_string_login=mysqli_real_escape_string($dbconn, $login);
    $res=mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_login`='$login'");
    $data = mysqli_fetch_assoc($res);
    $_SESSION['ref']=$data['user_last_page']; 
    // (`user_sofia_id`, `user_login`, `user_password`, `user_hash`, `user_mail`, `user_salt`, `user_sess_id`, `user_sess_date_start`) VALUES (NULL, '', '', NULL, NULL, NULL, NULL, NULL);
      // $result = mysqli_query($dbconn,"INSERT INTO `sofia_users` (`s_id`, `sess_id`, `date_start`, `hash_id`) VALUES (NULL,'$s_id', CURRENT_TIMESTAMP, '$hash')");
      $result = mysqli_query($dbconn,"UPDATE `sofia_users` SET `user_hash` = '$hash', `user_sess_date_start` = CURRENT_TIMESTAMP WHERE user_login = '$escape_string_login'");

    }
    
    mysqli_close($dbconn);
    unset($GLOBALS['dbconn']); 
    if(  !isset($_SESSION['ref'] )  )  {$_SESSION['ref'] = 'index.php';}
    header('Location:'.$_SESSION['ref']);
    unset($_SESSION['ref']);
    exit();

  }
 
}
?>


<!DOCTYPE html>
<html  >
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width"/>
    <meta property="og:title" content="СТАНДАРТЫ ПРЕДПРИЯТИЯ" />
    <meta property="og:image" content="https://www.500stp.website/dist/css/prew500stp.jpg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="СТАНДАРТЫ ПРЕДПРИЯТИЯ">
    <meta property="og:description" content="Стандарт предприятия (СТП) необходим для организации четкой и качественной работы, для поддержания успешного и эффективного функционирования компании" />
    <meta property="og:url" content= "https://500stp.website" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:locale" content="ru_RU" />
    <link rel="image_src" href="https://www.500stp.website/dist/css/prew500stp.jpg"/>
    <meta name="yandex-verification" content="07a17e6c1df2c2b2" />
    <title>500.СТП</title>
      <link href="./dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="./dist/css/cover.css" rel="stylesheet">
      <link rel="stylesheet" href="./dist/css/style-form.css?v=<?php echo $styleform; ?>">
      <link rel="stylesheet" href="./dist/css/3dButton.css">
      <link rel="shortcut icon" href="Lock-Icon.png" type="image/x-icon">  
</head>
<body>
<div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container"> 
      <div class="inner cover">
        <hgroup>
        <h1>Вход на сайт</h1>
        <h3>Здравствуйте! Авторизируйтесь, пожалуйста.</h3>
        <div style="color: blue;text-align: center;margin-bottom: -40px; height: 56.667px;" id="say"><b>
    
                <?php 
                  echo $_POST['loginnewpass'];
                  if (isset($_POST['loginnewpass'])){ 
                    $login = $_POST['loginnewpass'];
                  }else{
                    $login = $_POST['login'];
                  }


                // if  (in_array("Пользователь с таким логином существует в базе данных", $err)){
                //   // удаление
                //   if(($delete_key = array_search("Пользователь с таким логином существует в базе данных", $err)) !== false)
                //     {
                //         unset($err[$delete_key]);
                //     }
                // }
                // поиск email
            
                foreach ($err as  $key=>$val){
                  if (strpos($val, 'email:')!==false){
                    // $email = $val;
                    $email = explode(":", $val);
                      // echo "<b>" . $email[1] . "</b><br>";
                    unset($err[$key]);
                  
                  }
                }

                if ($email[1] != ""){
                    // echo "<b>" . $email[1] . "</b><br>";
                    $newpass = true;
                  }else{
                    $newpass = false;
                    // if(($delete_key = array_search("email:", $err)) !== false)
                    // {
                    //     unset($err[$delete_key]);
                    // }
                  }
                
                  foreach($err AS $error){
                    echo "<b>" . $error . "</b><br>";
                  } 
                
                ?>
        </b></div>
        </hgroup>
        <form action="index-session.php" method="POST" >
        <div class="group">
          <input type="text" name="login"  class="used" value="<?php echo $login;?>"><span class="highlight"></span><span class="bar"></span>
          <label>Логин</label>
        </div>
        <div class="group">
          <input type="password" name="passw"  class="used"><span class="highlight"></span><span class="bar"></span>
          <label>Пароль</label>
        </div>     
      
        <button  class="button buttonBlue" type="submit" value="Войти">Вход
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button> 
      
          <?php if($newpass){ ?>      
          <a href="#" class="btn-link" tabindex="0" onclick="sendNewPass(this);"></a>
          <?php } ?>
         
        </form>     
          <input type="hidden" name="loginnewpass" id="loginnewpass" value="<?php echo $login; ?>">     
      </div> 
    </div>
  </div>
</div>
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  -->
<script src="./dist/js/jquery.min.js"></script>
<script  src="./dist/js/index-form.js?v=<?php echo $indexform; ?> "></script> 
</body>
</html>
