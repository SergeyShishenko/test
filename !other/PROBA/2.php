<?php
if(isset($_POST["ids"]) )
// console.log(arr['table0'][row][td])
{
    $arr=json_encode($_POST["ids"]);
    // echo $arr['table0'][4][5];
    echo "Получил!<br>";
    echo "<pre>";
    // var_dump($arr);
    var_dump($_POST["ids"]);
    echo "</pre>";

}else{
    echo "Ошибка<br>";
    echo "<pre>";
    var_dump($_POST["ids"]);
    echo "</pre>";
}
?>