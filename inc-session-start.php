<?php
session_start();
$_SESSION['ref'] = $_SERVER['REQUEST_URI'];
require_once('data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) || $_SESSION['sess_login']!==$enter_login || $_SESSION['sess_pass']!==$enter_passw) { header('Location:index-session.php');    exit();}
?>