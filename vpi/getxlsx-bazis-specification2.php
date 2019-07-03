<?php
// vpi\getxlsx-bazis-specification.php
// bazis specification2
# подключаем библиотеку
// echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
require_once "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";

# Указываем путь до файла .xlsx
// $File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
$File = "$_SERVER[DOCUMENT_ROOT]/www/vpi/$filename";
 
$Excel = PHPExcel_IOFactory::load($File);
//Далее формируем массив из всех листов Excel файла с помощью цикла:


// Устанавливаем индекс активного листа
$Excel->setActiveSheetIndex(0);
// Получаем активный лист
$sheet = $Excel->getActiveSheet();
$row_num=0;

$array = array();
    
echo '<table border="1">';

// Получили строки и обойдем их в цикле
$rowIterator = $sheet->getRowIterator();
foreach ($rowIterator as $row) {
	// Получили ячейки текущей строки и обойдем их в цикле
	$cellIterator = $row->getCellIterator();
    $row_num++;
	echo "<tr>";
		
	foreach ($cellIterator as $cell) {

        $pos_panel = strpos($cell->getCalculatedValue(), "Спецификация на панели");
        $pos_furn = strpos($cell->getCalculatedValue(), "Спецификация на крепеж");
        if ($pos_panel !== false) {         

           echo '<td>'.$cell->getCalculatedValue().' Количество колонок-'.count($cellIterator).'</td>';
           $array[] = 'P-'.($row_num-3);
          // echo "Строка '$findme' не найдена в строке '$mystring'";
          
      } else if ($pos_furn !== false) { 
         echo '<td>'.$cell->getCalculatedValue().' Количество колонок-'.count($cellIterator).'</td>';
         $array[] = 'F-'.($row_num-3);
          // echo "Строка '$findme' найдена в строке '$mystring'";
          // echo " в позиции $pos";
         
      } else { 
        echo "<td>" . $cell->getCalculatedValue() .' Количество колонок-'.count($cellIterator). "</td>";
      }

        
        

	}//$cell
	
	echo "</tr>";
}//$row
echo "</table>";
  // Вывод сформированного массива в виде HTML таблиц(ы) :
//    foreach($lists as $list){
//     $row_num=0;
//     $col_num=0;
//     $array = array();
//     echo '<table border="1">';
//     // Перебор строк
//     foreach($list as $row){
//         $cellIterator=count($row);
//         $row_num++;
//         echo '<tr>';
//         // Перебор столбцов
//         foreach($row as $col){
//             $col_num++;
//             $pos_panel = strpos($col, "Спецификация на панели");
//             $pos_furn = strpos($col, "Спецификация на крепеж");
//             if ($pos_panel !== false) {

            

//             echo '<td>'.$col.' Количество колонок-'.$cellIterator.'</td>';
//             $array[] = 'P-'.($row_num-3);
//             // echo "Строка '$findme' не найдена в строке '$mystring'";
            
//         } else if ($pos_furn !== false) { 
//             echo '<td>'.$col.' Количество колонок-'.$cellIterator.'</td>';
//             $array[] = 'F-'.($row_num-3);
//             // echo "Строка '$findme' найдена в строке '$mystring'";
//             // echo " в позиции $pos";
            
//         } else { 
//             echo '<td>'.$col.'</td>';
//         }
            
//         }
//         echo '</tr>';
//         }
//         echo '</table>';
//         echo 'Всего '.$row_num.' строк';
//    }//foreach($lists as $list)
echo 'Всего '.count($rowIterator).' строк';

	echo "<pre>";
	print_r( $array);
  echo "</pre>";	
  $array_panel = array();
  $array_furn = array();
  $arr_length = count($array); 

    for($i=0;$i<$arr_length;$i++) 
    { 

    //   $pieces = explode(" ", $pizza);
    // echo $pieces[0]; // кусок1
    $from_num=(explode("-", $array[$i])[1]);
    $to=$i+1;
    if ($to==$arr_length){
        $last_num=$row_num;
    }else{
        $last_num=(explode("-", $array[$to])[1])-2;
    } 
    
        if (strpos($array[$i], "P") !== false) {
        

        $array_panel[]=$from_num.'-'.$last_num;
        }else{
        $array_furn[]=$from_num.'-'.$last_num;
        }
    }
echo "<pre>";
echo "panel";
print_r( $array_panel);
echo "furn";
print_r( $array_furn);
echo "</pre>";	

 ?>