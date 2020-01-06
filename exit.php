<?php
session_start();
// echo'<pre>';
// Print_r ($_SESSION);
// echo'</pre>';
session_unset(); // Удаляем все переменные
session_destroy();
header("Location: index-session.php");
?>
