<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/Moscow');


if (isset($_POST['client'])) {
    // $my_var = $_GET['var1'];
      $arr_product_def=$_POST['arr_product_def'];
    echo "<pre>";
  
	//  echo var_dump($arr_product_def);	 
    //  echo print_r($arr_product_def);
     
     foreach ($arr_product_def as $key => $value) {
        // $arr[3] будет перезаписываться значениями $arr при каждой итерации цикла
        echo "{$key} => {$value['def']} <br>";
        echo "{$key} => {$value['unit']} <br>";
        echo "{$key} => {$value['count']} <br>";
        echo "{$key} => {$value['serialnum']} <br>";
        echo "{$key} => {$value['wood']} <br>";
        echo "{$key} => {$value['veneer']} <br>";
        echo "{$key} => {$value['numsample']} <br>";
        echo "{$key} => {$value['kbKD']} <br>";
        echo "{$key} => {$value['kbDP']} <br>";
        echo " <hr>";
        // print_r($arr);
    }

    echo "</pre>";
    }else{ echo "<br>Не найден!";}


   



exit();