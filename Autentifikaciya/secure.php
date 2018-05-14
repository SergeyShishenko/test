<?php
session_start();
require_once('data.php');
if (isset($_SESSION['sess_login']) && isset($_SESSION['sess_pass'])) {
   if ($_SESSION['sess_login']===$enter_login && 
         $_SESSION['sess_pass']===$enter_passw) {
               
      echo "Информация для прошедших аутентификацию<br><br>\n";

      echo "<a href=\"exit.php\">Выйти из системы</a>\n";
   }
   else {
      header('Location:index-session.php');
      exit();
   }
}
else {
   header('Location: index-session.php');
   exit();
}
?>
