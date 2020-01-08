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
// require_once(__ROOT__.'/DATA/data.php'); // переменные $enter_login = "sofia"; $enter_passw = "202cb962ac59075b964b07152d234b70";

$err2 = '';




if(  !isset($_SESSION['ref'] )  )  {$_SESSION['ref'] = 'index.php';}

// if (strpos($_SERVER['HTTP_REFERER'], 'index-session.php')=== false){$ref = $_SERVER['HTTP_REFERER']; }

//    echo $_SERVER['REQUEST_URI'] . '<br>';
//  echo $_SESSION['ref'];

if (isset($_POST['login']) && isset($_POST['passw'])) {

  $err = authorization($_POST['login'],$_POST['passw'],$dbconn,$err);


  if (count($err) > 0) {
    foreach($err AS $error){
        echo "<b>" . $error . "</b><br>";
    } 
    $err2 = '<div style="color: red;text-align: center;margin-bottom: -30px;"><b>';
    $err2 .= 'Логин или пароль введены неверно!';
    $err2 .= '</b></div>';

  }
  else{ // нет ошибок

    $_SESSION['sess_login'] = $_POST['login'];
    $_SESSION['sess_pass'] = $_POST['passw'];
    $hash=$_COOKIE["hash"];
    // echo '$s_id ' . $s_id . '<br>';
    // var_dump($_SESSION);
    // var_dump($_COOKIE);
    // exit();
    if (is_null($hash)){
      $hash="-";  
  }
    $result = mysqli_query($dbconn,"SELECT * FROM `user` WHERE `hash_id` LIKE '%".$hash."%'");
    if (mysqli_num_rows($result) > 0) {//есть запись
    
    $result = mysqli_query($dbconn,"UPDATE `user` SET `date_start` = CURRENT_TIMESTAMP WHERE `hash_id` LIKE '%".$hash."%'");

    // echo '$hash ' . $hash . '<br>';
    // exit();
    }
    else{
      // Генерируем случайное число и шифруем его
    $hash = sha1(generateCode(10));
    setcookie("hash", $hash, time()+60*60*24*30);// 24 часа
    $_COOKIE["hash"] = $hash;
      $result = mysqli_query($dbconn,"INSERT INTO `user` (`s_id`, `sess_id`, `date_start`, `hash_id`) VALUES (NULL,'$s_id', CURRENT_TIMESTAMP, '$hash')");

      
    }
    // $result = mysqli_query($dbconn,"SELECT * FROM `user` WHERE `sess_id` LIKE '%".$s_id."%'");
    // if (mysqli_num_rows($result) > 0) {//есть запись
    
    // $result = mysqli_query($dbconn,"UPDATE `user` SET `date_start` = CURRENT_TIMESTAMP WHERE `sess_id` LIKE '%".$s_id."%'");
    // // echo '$s_id ' . $s_id . '<br>';
    // // exit();
    // }
    // else{
    //   $result = mysqli_query($dbconn,"INSERT INTO `user` (`s_id`, `sess_id`, `date_start`) VALUES (NULL, '$s_id', CURRENT_TIMESTAMP)");
      
    // }


    mysqli_close($dbconn);
    // header('Location: secure.php');
    // header('Location: index.php');

    // var_dump($_POST);
    // echo '$s_id ' . $s_id . '<br>';
    // exit();
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
      <link rel="stylesheet" href="./dist/css/style-form.css">
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
      <?php echo $err2; ?>
      </hgroup>
      <form action="index-session.php" method="POST">
      <div class="group">
        <input type="text" name="login" autocomplete='' class="used"><span class="highlight"></span><span class="bar"></span>
        <label>Логин</label>
      </div>
      <div class="group">
        <input type="password" name="passw" autocomplete='' class="used"><span class="highlight"></span><span class="bar"></span>
        <label>Пароль</label>
      </div>     
      <?php
      //  echo $_SESSION['ref'];
        ?>
      <button  class="button buttonBlue" type="submit" value="Войти">Вход
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
      </button>  
      </form>
    </div>

    

  </div>

</div>

</div>



  
   


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
    <script  src="./dist/js/index-form.js"></script>
</body>
</html>
