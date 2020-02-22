<?php
// vpi\getxlsx-bazis-specification3.php
// bazis specification2
# подключаем библиотеку
// echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/\PhpOffice\PhpSpreadsheet\Spreadsheet.php";
// require_once $_SERVER['DOCUMENT_ROOT'] . "/www/vendor/PhpOffice/PhpSpreadsheet/Spreadsheet.php";
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use \PhpOffice\PhpSpreadsheet\Cell\DataType;
use \PhpOffice\PhpSpreadsheet\Cell\Coordinate as Coord;

# Указываем путь до файла .xlsx
// $File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
$File = $_SERVER['DOCUMENT_ROOT'] . "/www/vpi/$filename";
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls(); 
// $Excel = \PhpOffice\PhpSpreadsheet\IOFactory::load($File);
$Excel =  $reader->load($File);;
//Далее формируем массив из всех листов Excel файла с помощью цикла:


// Устанавливаем индекс активного листа
$Excel->setActiveSheetIndex(0);
// Получаем активный лист
$sheet = $Excel->getActiveSheet();
$worksheetTitle = $sheet->getTitle();

$highestRow = $sheet->getHighestRow(); // e.g. 10
$highestColumn = $sheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
// echo $_POST['name'] .'<br>';
// echo $highestRow .' строк<br>'; // начало с 1
// echo $highestColumn  .' Максимальная литера<br>';
// echo $highestColumnIndex .' Максимальная литера по счёту<br>'; // начало с 1
$row_num=0;
$cell_num=0;
// $head=false;

$array = array();
$furniture = array();
    
// echo '<table border="1">';

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
	// echo "<tr>";
  // echo '<td>'.$row_num.'</td>';
	foreach ($cellIterator as $cell) {   
    $cell_num++;
        $pos_panel = strpos($cell->getCalculatedValue(), "Спецификация на панели");
        $pos_furn = strpos($cell->getCalculatedValue(), "Спецификация на крепеж");

        if ($pos_panel !== false) { 
           $array[] = 'Panel-'.($row_num-3).'-'.$cell->getCoordinate();                   
          } else if ($pos_furn !== false) {
            $array[] = 'Furniture-'.($row_num-3).'-'.$cell->getCoordinate(); 
            $head=$row_num+1;
          }

          if($head == $row_num){
            // $articul=strpos($cell->getCalculatedValue(), "Артикул");

            switch ($cell->getCalculatedValue()) {
              case "Заказ":
                $order=$cell->getCoordinate();
                  break;
              case "Изделие":
                $product=$cell->getCoordinate();
                  break;
              case "СЕ":
                $SE=$cell->getCoordinate();
                  break;
              case "Поз.":
                $pos_=$cell->getCoordinate();
                  break;
              case "Артикул":
                $articul=$cell->getCoordinate();
                preg_match('/^[A-Z]+/', $articul, $matches);
                $articul2=\PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($matches[0]);
                // $articul2=$matches[0];
                  break;
              case "Наименование":
                $def=$cell->getCoordinate();
                  break;
              case "Кол-во":
                $count_=$cell->getCoordinate();
                  break;
              case "Примечание":
                $note=$cell->getCoordinate();
                  break;
             
              // case 1:
              //     echo "i равно 1";
              //     break;
              // case 2:
              //     echo "i равно 2";
              //     break;
            }
          }

      // echo '<td>'.$cell->getValue().'</td>';

	}//$cell
	
	// echo "</tr>";
}//$row
// echo "</table>";
echo '$articul '.$articul;
echo '<br>$articul2 '.$articul2;
// print_r($matches);


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




// echo 'Всего '.$row_num.' строк';//!!!
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
// echo "panel";
// print_r( $array_panel);
echo "furn";
print_r( $array_furn);
echo "</pre>";


for($i=0;$i<count($array_furn);$i++) 
{ 
  $num=explode("-", $array_furn[$i]);
  $from_num=$num[0];
  $to=$num[1];
  echo "from " . $from_num . " to " . $to . "<br>";
  echo '<br><table border="1">';
  for($j=$from_num;$j<$to;$j++) 
  {
    readRowByNember($j,$sheet,$highestColumnIndex);
  }
  echo '</table>';

}




// echo '


// ПОЛУЧЕНИЕ ЗНАЧЕНИЯ ЯЧЕЙКИ ПО СТРОКАМ И СТОЛБЦАМ
// Для получения значения ячейки, в листе сначала должна быть найдена ячейка с использованием метода getCellByColumnAndRow. Значение ячейки может быть получено с помощью следующей команды:
// ';
// echo "<pre>";
// echo '$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, 10)->getValue()<br>';
// echo $sheet->getCellByColumnAndRow(0, 10)->getValue();// колонки с 0, строки с 1
// echo "</pre>";

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



    // $nrColumns = ord($highestColumn) - 64;
    // echo "<br>The worksheet ".$worksheetTitle." has ";
    // echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
    // echo ' and ' . $highestRow . ' row.';
    // // echo '<br>Data: <table border="1">';
    // $separator=":";
    // for ($row = 1; $row <= $highestRow; ++ $row) {
    //   // echo '<tr>';
    //  $arrRow = readRowByNember($row,$sheet,$highestColumnIndex,$separator);
    //   // foreach ($arrRow as $row) {
    //   //   echo '<td>' . $row . '</td>';
    //   // }
    //   // echo "<pre>";
    //   // print_r( $array_panel);
    //   // echo "</pre>";
    //   // echo '</tr>';
    // //   echo "<pre>";
    // // print_r( $arrRow);
    // // echo "</pre>";
    // }
    // echo "<pre>";
    // print_r( $arrRow);
    // echo "</pre>";
    // echo '</table>';

/////////////////////////////////////////////////
function readRowByNember($row,$sheet,$highestColumnIndex,$separator=""){
  
  // $arr=array();
  // echo '<td>' . $highestColumnIndex . '</td>';
  echo '<tr>';
        for ($col = 1; $col < $highestColumnIndex; ++ $col) {
            $cell = $sheet->getCellByColumnAndRow($col, $row);
            $val = $cell->getValue();
            // $dataType = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING;
            // echo '<td>' . $val . '<br>(Typ ' . $dataType . ')</td>';
            // array_push($arr,$val);
            // echo '<td>' . $val . $separator . '</td>';
            echo '<td>' . $val .  '</td>';
        }
  echo '</tr>';
        return $arr;
        
}
/////////////////////////////////////////////////
// $separator=":";
//  echo '<br><table border="1">';
//    readRowByNember(60,$sheet,$highestColumnIndex,$separator);
//    readRowByNember(61,$sheet,$highestColumnIndex,$separator);
//    readRowByNember(62,$sheet,$highestColumnIndex,$separator);
//    readRowByNember(63,$sheet,$highestColumnIndex,$separator);
//    readRowByNember(64,$sheet,$highestColumnIndex,$separator);
//    readRowByNember(65,$sheet,$highestColumnIndex,$separator);
//    readRowByNember(66,$sheet,$highestColumnIndex,$separator);
//  echo '</table>';
// echo '<br>';
// print_r(readRowByNember(6,$sheet,$highestColumnIndex,$separator));//!!!
// print_r(readRowByNember(64,$sheet,$highestColumnIndex,$separator));//!!!

echo '<input type="hidden" id="currfile" value="'.$fileDrop.'" form="frm">' ; 	


 ?>