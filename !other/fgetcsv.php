<?php
//csv
$f = file_get_contents('_2312.csv');
$f = iconv("WINDOWS-1251", "UTF-8", $f);
file_put_contents('zakaz_2312.csv', $f);
$handle = fopen ("zakaz_2312.csv","r"); 
echo '<table border="1" ><tr>'; 
$row=1;// 
while ($data = fgetcsv ($handle, 10000, ";"))// строка из файла -> массив (10000-max длина строки элемента)
 {        
     $num = count ($data); //полей в строке $row
     for ($c=0; $c < $num; $c++) { 
      // output data    
      echo "<td style='white-space: nowrap;'>". $data[$c]." </td>"; 
     } 
     echo "</tr><tr>"; 
     if ($row==1){
        $key_client = array_search('Заказчик', $data); 
     }
     

     $row++;  
} 
// echo $key_client;
echo $num;
fclose($handle);

// $string = 'hello|wild|world';
// list($hello, , $world) = explode('|', $string);
// echo("$hello, $world"); // hello, world

?> 