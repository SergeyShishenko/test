<?php
$f = file_get_contents('_2312.csv');
$f = iconv("WINDOWS-1251", "UTF-8", $f);
file_put_contents('zakaz_2312.csv', $f);
$handle = @fopen("zakaz_2312.csv", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        // echo $buffer . "<hr>";
        list($client,$address,$number_order,,,$complect,$product,,,,,$def,,,,,,,,,,$floor,$room,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$end) = explode(';', $buffer);
        echo "<hr>";
        echo $client." | ".$address." | ".$number_order." | ".$complect." | ".$product." | ".$def." | ".$floor." | ".$room; // hello, world
        // echo "<hr>";
    }
    if (!feof($handle)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($handle);
}
?>