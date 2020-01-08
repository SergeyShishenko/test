<?php
// admin\Authorization\create_table_users_sofia.php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS sofia_users(
    user_sofia_id INT NOT NULL AUTO_INCREMENT,
    user_login VARCHAR(40) NOT NULL,
    user_password VARCHAR(40) NOT NULL,
    user_hash VARCHAR(40) ,
    user_mail VARCHAR(50) ,
    user_salt VARCHAR(4) ,
    user_sess_id VARCHAR(40) ,
    user_sess_date_start datetime ,
    PRIMARY KEY (user_sofia_id))";
// ALTER TABLE `head` ADD COLUMN `number_in_order_head`  INT

if (mysqli_query($dbconn, $query)) echo "Таблица sofia_users создана.<br>";
else echo "Таблица не создана: ".mysqli_error($dbconn);

mysqli_close($dbconn);
