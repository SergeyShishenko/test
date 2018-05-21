<?php
require_once('data.php');
$err = '';
if (isset($_POST['login']) && isset($_POST['passw'])) {
   $_POST['passw'] = md5($_POST['passw']);
   if ($_POST['login']===$enter_login && 
      $_POST['passw']===$enter_passw) {
      session_start();
      $_SESSION['sess_login'] = $_POST['login'];
      $_SESSION['sess_pass'] = $_POST['passw'];

      // header('Location: secure.php');
      header('Location: index.php');
      exit();
   }
   else {
      $err = '<div style="color: red;text-align: center;margin-bottom: -37px"><b>';
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
  <meta charset="UTF-8">
  <title>Авторизация</title>   
      <link rel="stylesheet" href="./dist/css/style-form.css">
      <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">  
</head>
<body>
  <hgroup>
  <h1>Вход на сайт</h1>
  <h3>Здравствуйте! Авторизируйтесь пожалуйста.</h3>
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
  
  <button  class="button buttonBlue" type="submit" value="Войти">Вход
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
  
  
</form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
    <script  src="./dist/js/index-form.js"></script>
</body>
</html>
