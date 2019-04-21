<?php
// admin\Create_Table_MySQL current orders.php
define('__ROOT__', dirname(dirname(__FILE__))); 
// echo dirname(__ROOT__).'/DATA/TABLES/configDB.php';
require_once dirname(__ROOT__).'/DATA/TABLES/configDB.php'; 
///////////////////////////////create tables////////////////////////////////////////////////
//client_current_orders - ЗАКАЗЧИК
//number_orders  - НОМЕР ЗАКАЗА 
//group_leader - РУКОВОДИТЕЛЬ ГРУППЫ
//agent - ПРЕДСТАВИТЕЛЬ


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS group_leader(
    group_leader_id INT NOT NULL AUTO_INCREMENT,
    name_group_leader VARCHAR(255) , 
    PRIMARY KEY (group_leader_id))";
    

if (mysqli_query($dbconn, $query)) echo "Таблица group_leader создана.<br>";
else echo "Таблица не создана: ".mysqli_error($dbconn);

mysqli_close($dbconn);


////


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS current_orders(
    current_orders_id INT NOT NULL AUTO_INCREMENT,
    client_current_orders TEXT,
    number_orders  INT,
    group_leader_id INT,
    agent VARCHAR(255),
    PRIMARY KEY (current_orders_id),
    FOREIGN KEY (group_leader_id)
    REFERENCES group_leader(group_leader_id))";
   // ON UPDATE CASCADE ON DELETE CASCADE )
// ALTER TABLE `head` ADD COLUMN `filename_order_head`  INT

if (mysqli_query($dbconn, $query)) echo "Таблица current_orders создана.<br>";
else echo "Таблица не создана: ".mysqli_error($dbconn);

mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `filename_current_orders` FROM `current_orders` WHERE 0");
if ($res) {
echo "Поле 'filename_current_orders' существует.<br>";
}
else {
    $query = "ALTER TABLE `current_orders` ADD COLUMN `filename_current_orders`  VARCHAR(255) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN filename_current_orders в таблицу current_orders.<br>";
else echo "Поле не добавленно: ".mysqli_error($dbconn);
}
mysqli_close($dbconn);

////

