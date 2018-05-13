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
      header('Location: secure.php');
      exit();
   }
   else {
      $err = '<span style="color: red"><b>';
      $err .= 'Логин или пароль введены неправильно!';
      $err .= '</b></span><br>';
   }
}
?>
<form action="index-session.php" method="POST">
 <div align="center" style="padding: 250px 0 0 0">
  <table border="0" cellspacing="0" width="200">
   <caption><b>Вход в систему</b></caption>
   <tr><td align="right"><b>Логин:</b></td>
   <td><input type="text" name="login"></td></tr>
   <tr><td align="right"><b>Пароль:</b></td>
   <td><input type="password" name="passw"></td></tr>
   <tr>
   <td align="center" colspan="2">
    <input type="submit" value="Войти">
  </td></tr></table>
  <?php echo $err; ?>
 </div>
</form>
