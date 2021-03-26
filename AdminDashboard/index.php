<?php
// session_start();
// include '../inc/inc-session-start.php';
echo"<pre>";
// var_dump($_SERVER["HTTP_COOKIE"]);
var_dump($_COOKIE['login']);
echo"</pre>";
//  exit();
ini_set('display_errors', 1);
require_once 'application/bootstrap.php';