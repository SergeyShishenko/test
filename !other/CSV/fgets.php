<?php
$f = file_get_contents('_2312.csv');
$f = iconv("WINDOWS-1251", "UTF-8", $f);
file_put_contents('zakaz_2312.csv', $f);
$handle = @fopen("zakaz_2312.csv", "r");
echo '<table border="1" ><tr>'; 
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        // echo $buffer . "<hr>";
        list($client,$address,$number_order,,,$complect,$product,$product2,,,,$def,,,,,,,,,,$floor,$room,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$end) = explode(';', $buffer);
        $data=array($client,$address,$number_order,$complect,$product,$product2,$def,$floor,$room);

        $num = count ($data); //полей в строке $row
        for ($c=0; $c < $num; $c++) { 
        // output data    
        // echo "<td style='white-space: nowrap;'>". $data[$c]." </td>"; 
        echo "<td>". $data[$c]." </td>"; 
        } 
        echo "</tr><tr>"; 

      
        // echo $client." | ".$address." | ".$number_order." | ".$complect." | ".$product." | ".$def." | ".$floor." | ".$room; // hello, world
        // echo "<hr>";
    }
    if (!feof($handle)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    echo '</tr></table>'; 
    fclose($handle);
}
?>