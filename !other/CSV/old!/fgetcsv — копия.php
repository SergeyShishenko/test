<?php
// // header('Content-Encoding: UTF-8');
// // header('Content-type: text/csv; charset=UTF-8');
// // header('Content-Disposition: attachment; filename=Customers_Export.csv');
// // echo "\xEF\xBB\xBF"; // UTF-8 BOM

// // $handle = file_get_contents('data/files/price.csv');
// // $handle = iconv("WINDOWS-1251", "UTF-8", $handle);



// $f = file_get_contents('_2312.csv');
// $f = iconv("WINDOWS-1251", "UTF-8", $f);
// file_put_contents('zakaz_2312.csv', $f);

// $row = 1;
// if (($handle = fopen("zakaz_2312.csv", "r")) !== FALSE) {
// // if ($handle !== FALSE) {
//     // $handle = iconv("WINDOWS-1251", "UTF-8", $handle);
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "<p> $num полей в строке $row: <br /></p>\n";
//         $row++;
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c] . "<br />\n";
//         }
//     }
//     fclose($handle);
// }
?>
<?php
$f = file_get_contents('_2312.csv');
$f = iconv("WINDOWS-1251", "UTF-8", $f);
file_put_contents('zakaz_2312.csv', $f);
$handle = fopen ("zakaz_2312.csv","r"); 
echo '<table border="1" ><tr>'; 
while ($data = fgetcsv ($handle, 10000, ";")) { 
    //  $data = array_map("utf8_encode", $data); //added 
     $num = count ($data); 
     for ($c=0; $c < $num; $c++) { 
      // output data 
    //   echo "<td style='white-space: nowrap;'>". mb_strtolower($data[$c], 'UTF-8')." </td>"; 
      echo "<td style='white-space: nowrap;'>". $data[$c]." </td>"; 
     } 
     echo "</tr><tr>"; 
} 
?> 
<?php
// /** 
// * getting CSV array with UTF-8 encoding 
// * 
// * @param resource &$handle 
// * @param integer  $length 
// * @param string  $separator 
// * 
// * @return array|false 
// */ 
// $handle = fopen ("zakaz_2312.csv","r"); 
// private function fgetcsvUTF8(&$handle, $length, $separator = ';') 
// { 
//     if (($buffer = fgets($handle, $length)) !== false) 
//     { 
//      $buffer = $this->autoUTF($buffer); 
//      return str_getcsv($buffer, $separator); 
//     } 
//     return false; 
// } 

// /** 
// * automatic convertion windows-1250 and iso-8859-2 info utf-8 string 
// * 
// * @param string $s 
// * 
// * @return string 
// */ 
// private function autoUTF($s) 
// { 
//     // detect UTF-8 
//     if (preg_match('#[\x80-\x{1FF}\x{2000}-\x{3FFF}]#u', $s)) 
//      return $s; 

//     // detect WINDOWS-1250 
//     if (preg_match('#[\x7F-\x9F\xBC]#', $s)) 
//      return iconv('WINDOWS-1250', 'UTF-8', $s); 

//     // assume ISO-8859-2 
//     return iconv('ISO-8859-2', 'UTF-8', $s); 
// } 
?>