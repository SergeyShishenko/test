<?php
// vpi\getxlsx-bazis-specification2.php
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
$worksheetTitle = $sheet->getTitle();

$highestRow = $sheet->getHighestRow(); // e.g. 10
$highestColumn = $sheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5
echo $_POST['name'] .'<br>';
echo $highestRow .' строк<br>'; // начало с 1
echo $highestColumn  .' Максимальная литера<br>';
echo $highestColumnIndex .' Максимальная литера по счёту<br>'; // начало с 1
$row_num=0;

$array = array();
$furniture = array();
    
echo '<table border="1">';

// Получили строки и обойдем их в цикле
$rowIterator = $sheet->getRowIterator();
  // echo "<pre>";
  // echo "rowIterator <br>";
	// print_r( $rowIterator);
  // echo "</pre>";	

foreach ($rowIterator as $row) {
	// Получили ячейки текущей строки и обойдем их в цикле
  $cellIterator = $row->getCellIterator();
  
    $row_num++;
	echo "<tr>";
  // echo '<td>'.$row_num.'</td>';
	foreach ($cellIterator as $cell) {   

        $pos_panel = strpos($cell->getCalculatedValue(), "Спецификация на панели");
        $pos_furn = strpos($cell->getCalculatedValue(), "Спецификация на крепеж");

        if ($pos_panel !== false) {
          //  if ($cell->getCalculatedValue()){echo '<td>'.$cell->getCalculatedValue().'  ('.$cell->getCoordinate().')</td>';}
          //  else{echo '<td> пусто</td>';}           
           $array[] = 'Panel-'.($row_num-3).'-'.$cell->getCoordinate();;
          // echo "Строка '$findme' не найдена в строке '$mystring'";          
      } else if ($pos_furn !== false) { 
        //  echo '<td>'.$cell->getCalculatedValue().' '.$cell->getCoordinate().'</td>';

        //  if ($cell->getCalculatedValue()==""){echo '<td>'.$cell->getCalculatedValue().'  ('.$cell->getCoordinate().')</td>';}
        //  else{echo '<td> пусто</td>';}
         $array[] = 'Furniture-'.($row_num-3).'-'.$cell->getCoordinate();        
          // echo "Строка '$findme' найдена в строке '$mystring'";
          // echo " в позиции $pos";
         
      }
      //  else { 
        
      //   if ($cell->getCalculatedValue()){
        
      //     echo '<td>'.$cell->getValue().'</td>';
      //   }
      //      else{echo '<td> </td>';}
      // }
      echo '<td>'.$cell->getValue().'</td>';
        
        

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




echo 'Всего '.$row_num.' строк';
// echo 'Всего '.count($cellIterator).' строк';




// echo "<pre>";
// 	print_r( $cellIterator);
//   echo "</pre>";


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
    
        if (strpos($array[$i], "Panel") !== false) {
        

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
echo '
ПОЛУЧЕНИЕ ЗНАЧЕНИЯ ЯЧЕЙКИ ПО СТРОКАМ И СТОЛБЦАМ
Для получения значения ячейки, в листе сначала должна быть найдена ячейка с использованием метода getCellByColumnAndRow. Значение ячейки может быть получено с помощью следующей команды:
';
echo "<pre>";
echo '$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, 10)->getValue()<br>';
echo $sheet->getCellByColumnAndRow(0, 10)->getValue();// колонки с 0, строки с 1
echo "</pre>";

// $row_num=0;
// foreach ($rowIterator as $row) {
// 	// Получили ячейки текущей строки и обойдем их в цикле
//   $cellIterator = $row->getCellIterator();
  
//     $row_num++;

// 	foreach ($cellIterator as $cell) {
//     echo "<pre>";
//     echo $row_num;
	  
//     echo $cell->getCalculatedValue();	
// 	}//$cell	

// }//$


/////////////////////////////////////////////////



    $nrColumns = ord($highestColumn) - 64;
    echo "<br>The worksheet ".$worksheetTitle." has ";
    echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
    echo ' and ' . $highestRow . ' row.';
    echo '<br>Data: <table border="1">';
    for ($row = 1; $row <= $highestRow; ++ $row) {
      echo '<tr>';
      readRowByNember($row,$sheet,$highestColumnIndex);
      echo '</tr>';
    }
    echo '</table>';

/////////////////////////////////////////////////
function readRowByNember($row,$sheet,$highestColumnIndex,$separator=""){
  
  
  // echo '<td>' . $highestColumnIndex . '</td>';
        for ($col = 0; $col < $highestColumnIndex; ++ $col) {
            $cell = $sheet->getCellByColumnAndRow($col, $row);
            $val = $cell->getValue();
            $dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
            // echo '<td>' . $val . '<br>(Typ ' . $dataType . ')</td>';
            echo '<td>' . $val . $separator . '</td>';
        }
        
}
/////////////////////////////////////////////////
$separator=":";
readRowByNember(6,$sheet,$highestColumnIndex,$separator);
echo '<br>';
readRowByNember(64,$sheet,$highestColumnIndex,$separator);

echo '<input type="hidden" id="currfile" value="'.$fileDrop.'" form="frm">' ; 	
// echo '<input type="hidden" id="currfile" value="'.$File.'" form="frm">' ; 	

 ?>