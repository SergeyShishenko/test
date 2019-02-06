<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/Moscow');


if (isset($_POST['order'])) {
    // $my_var = $_GET['var1'];
      $arr_product_def=$_POST['arr_product_def'];
    echo "<pre>";
    echo "Тип титульника:   ".$_POST['gen']."<br>";
    echo "Заказчик:         ".$_POST['client']."<br>";
    echo "Представитель:    ".$_POST['agent']."<br>";
    echo "Объект:           ".$_POST['address']."<br>";
    echo "Этаж:             ".$_POST['floor']."<br>";
    echo "Помещение:        ".$_POST['room']."<br>";
    echo "Комплект изделий: ".$_POST['complect']."<br>";
    echo "№ заказа:         ".$_POST['order']."<br>";
    echo "Изделия:          ".$_POST['product']."<hr>";
  
	//  echo var_dump($arr_product_def);	 
    //  echo print_r($arr_product_def);
     
     foreach ($arr_product_def as $key => $value) {      
         echo "Изделие {$key} <br>";
        // echo "{$key} => {$value['def']} <br>";
        // echo "{$key} => {$value['unit']} <br>";
        // echo "{$key} => {$value['count']} <br>";
        // echo "{$key} => {$value['serialnum']} <br>";
        // echo "{$key} => {$value['wood']} <br>";
        // echo "{$key} => {$value['veneer']} <br>";
        // echo "{$key} => {$value['numsample']} <br>";
        // echo "{$key} => {$value['kbKD']} <br>";
        // echo "{$key} => {$value['kbDP']} <br>";
        foreach ($value as $key2 => $value2) {
            echo "{$key2} => {$value2} <br>";

        }
        echo " <hr>";
        // print_r($arr);
    }

    echo "</pre>";
    }else{ echo "<br>Не найден!";}


   



exit();