<?php 
// !other\CNC\cnc.php
// $file = file_get_contents('files/6.1_13_1.CNC', FALSE, NULL, 34);//читаем с 35-го символа
// echo $file;


echo '<br><br>'.'======file====='.'<br><br>';

$names=file('files/6.1_13_1.CNC');
// To check the number of lines
echo "Строк в файле - ".count($names).'<br>';
foreach($names as $name)
{
   echo $name.'<br>';
}
?>
