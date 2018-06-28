<?php
ini_set('session.gc_maxlifetime', 86400);// 24 часа
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);
session_start();
require_once('data.php');
$err = '';
if(  !isset($_SESSION['ref'] )  )  {$_SESSION['ref'] = 'index.php';}

// if (strpos($_SERVER['HTTP_REFERER'], 'index-session.php')=== false){$ref = $_SERVER['HTTP_REFERER']; }

//    echo $_SERVER['REQUEST_URI'] . '<br>';
//  echo $_SESSION['ref'];
if (isset($_POST['login']) && isset($_POST['passw'])) {
   $_POST['passw'] = md5($_POST['passw']);
   if ($_POST['login']===$enter_login && 
      $_POST['passw']===$enter_passw) {
      // session_start();
      $_SESSION['sess_login'] = $_POST['login'];
      $_SESSION['sess_pass'] = $_POST['passw'];

      // header('Location: secure.php');
      // header('Location: index.php');
      header('Location:'.$_SESSION['ref']);
      unset($_SESSION['ref']);
      exit();
   }
   else {
      $err = '<div style="color: red;text-align: center;margin-bottom: -30px;"><b>';
      $err .= 'Логин или пароль введены неверно!';
      $err .= '</b></div>';
   }
}
?>
<!-- <form action="index-session.php" method="POST">

 <div align="center" style="padding: 250px 0 0 0">
  <table border="0" cellspacing="0" width="200">
   <caption><b>Вход на сайт</b></caption>
   <tr><td align="right"><b>Логин:</b></td>
   <td><input type="text" name="login"></td></tr>
   <tr><td align="right"><b>Пароль:</b></td>
   <td><input type="password" name="passw"></td></tr>
   <tr>
   <td align="center" colspan="2">
    <input type="submit" value="Войти">
  </td></tr></table>
  
  
 </div>
</form> -->

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
      <?php echo $err; ?>
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
