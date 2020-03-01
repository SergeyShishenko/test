<?php
if(isset($_POST["ids"]) )
// console.log(arr['table0'][row][td])
{
     $arr=json_decode($_POST["ids"]);
     
    // echo "Получил!<br>";
    // echo "<pre>";
    // var_dump($arr);
    // var_dump($_POST["ids"]);
    // echo "</pre>";
 
}else{
    echo "Ошибка<br>";
    echo "<pre>";
    var_dump($_POST["ids"]);
    echo "</pre>";
}
 echo "Всего: ".count($arr->table0)." строк с шапкой". PHP_EOL;


for ($row=1; $row < count($arr->table0); $row++) { 
    $tr=$arr->table0[$row];
 foreach($tr as  $key=>$var)
 {
    // echo $key. " => " . $var . " | ";
    echo trim($var) . " | ";
 }
 echo  PHP_EOL;
}
?>