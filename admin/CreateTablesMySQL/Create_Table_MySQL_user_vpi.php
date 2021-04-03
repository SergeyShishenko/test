<?php
// admin\Create_Table_MySQL_user_vpi.php
// include 'inc/inc-session-start.php';
// include_once("configDB.php");
define('__ROOT__', dirname(dirname(__FILE__))); 
// echo dirname(__ROOT__).'/DATA/TABLES/configDB.php';
require_once dirname(__ROOT__).'/DATA/TABLES/configDB.php'; 
///////////////////////////////create tables////////////////////////////////////////////////


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS user_vpi(
    vpi_id INT NOT NULL AUTO_INCREMENT,   
    vpi_hash_id VARCHAR(40),
    obj_id INT,
    count_obj INT,
    PRIMARY KEY (vpi_id))";
    //,  FOREIGN KEY (s_id)
    //  REFERENCES user(s_id)     
    // ON UPDATE CASCADE ON DELETE CASCADE )";

if (mysqli_query($dbconn, $query)) echo "Таблица user_vpi создана.<br>";
else echo "Таблица user_vpi не создана: ".mysqli_error($dbconn);

mysqli_close($dbconn);
unset($GLOBALS['dbconn']);


////
?>
