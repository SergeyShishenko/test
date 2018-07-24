<?php
// header('Content-Type: text/html; charset=utf-8');
// проверка директории
echo 'Document root: '.$_SERVER['DOCUMENT_ROOT'].'<br>';
echo 'Полный путь к скрипту и его имя: '.$_SERVER['SCRIPT_FILENAME'].'<br>';
echo 'Имя скрипта: '.$_SERVER['SCRIPT_NAME'].'<br>';
$abspath = dirname(__FILE__) .'\\csv\\';
//echo ''.$_SERVER['DOCUMENT_ROOT'].'/csv/Заказ_2317.csv';
echo $abspath;

// $my_string = file_get_contents($abspath.'Заказ_2317.csv');
 
// $my_string = mb_convert_encoding($text, 'UTF-8', 'AUTO');
//$my_string = mb_convert_encoding($text, 'UTF-8', 'ANSI');
//$my_string = mb_convert_encoding($text, 'UTF-8', 'WINDOWS-1251');
//$my_string = iconv('WINDOWS-1251','UTF-8', $text);
// $my_string = iconv('ASCII','UTF-8', $text);

// $tab = array("UTF-8", "ASCII", "Windows-1252", "ISO-8859-15", "ISO-8859-1", "ISO-8859-6", "CP1256"); 
// $chain = ""; 
// foreach ($tab as $i) 
//     { 
//         foreach ($tab as $j) 
//         { 
//             $chain .= " $i$j ".iconv($i, $j, "Кэти (Самаркина Елена Анатольевна)"); 
//         } 
//     } 

// echo $chain.'<br>'; 





 
// file_put_contents($abspath.'Заказ_2317.csv', $my_string);
// $f = fopen($abspath.'Заказ_2317.csv', "rt") or die("Ошибка!");
$f = fopen('http://localhost/csv/Заказ_2317.csv', "rt") or die("Ошибка!");
// $f = iconv("WINDOWS-1251", "UTF-8", $f);
// http://localhost/get-SCV.php
for ($i=0; $data=fgetcsv($f,1000,";"); $i++) {
  $num = count($data);
  echo "<h3>Строка номер $i (полей: $num):</h3>";
  for ($c=0; $c<$num; $c++)
    // print "[$c]: $data[$c]<br>";
    // $text= iconv('ISO-8859-15','UTF-8', $data[$c]);
    // $text=  $data[$c];
    echo $c."  ".iconv('WINDOWS-1251','UTF-8', $data[$c]).'<br>'; 
    // print "[$c]: $data[$c]<br>";
    
}
fclose($f);

header ( "Content-type: application/vnd.ms-excel" );
header ( "Content-Disposition: attachment; filename=foo_bar.xls" );
echo "<table><tr><th>Header1</th></tr><tr><td>value1</td></tr></table>";
?>