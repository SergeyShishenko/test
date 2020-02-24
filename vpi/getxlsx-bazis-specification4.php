<?php
// vpi\getxlsx-bazis-specification4.php
# подключаем библиотеку
require_once '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
// use \PhpOffice\PhpSpreadsheet\Cell\DataType as DType;
use \PhpOffice\PhpSpreadsheet\Cell\Coordinate as Coord;
# Указываем путь до файла .xlsx
$File = $_SERVER['DOCUMENT_ROOT'] . "/www/vpi/$filename";
echo '<input type="hidden" id="currfile" value="'.$fileDrop.'" form="frm">' ;
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$reader->setReadDataOnly(true); 
$Excel =  $reader->load($File);;
//Далее формируем массив из всех листов Excel файла с помощью цикла:
// Устанавливаем индекс активного листа
$Excel->setActiveSheetIndex(0);
// Получаем активный лист
$sheet = $Excel->getActiveSheet();
$worksheetTitle = $sheet->getTitle();

$highestRow = $sheet->getHighestRow(); // e.g. 10
$highestColumn = $sheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = Coord::columnIndexFromString($highestColumn); // e.g. 5
// echo $_POST['name'] .'<br>';
// echo $highestRow .' строк<br>'; // начало с 1
// echo $highestColumn  .' Максимальная литера<br>';
// echo $highestColumnIndex .' Максимальная литера по счёту<br>'; // начало с 1
$row_num=0;
$cell_num=0;
$Order=0;
$Product=0;
// $head=false;

$array = array();
$furniture = array();
$arrIndex = array();
    
// echo '<table border="1">';

// Получили строки и обойдем их в цикле
$rowIterator = $sheet->getRowIterator();
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
                $arrIndex[0] =get_colomn_index($cell); 
                  break;
              case "Изделие":
                $arrIndex[1]=get_colomn_index($cell); 
                  break;
              case "СЕ":
                $arrIndex[2]=get_colomn_index($cell); 
                  break;
              case "Поз.":
                $arrIndex[3]=get_colomn_index($cell); 
                  break;
              case "Артикул":
                $arrIndex[4]=get_colomn_index($cell);                
                  break;
              case "Наименование":
                $arrIndex[5]=get_colomn_index($cell); 
                  break;
              case "Кол-во":
                $arrIndex[6]=get_colomn_index($cell); 
                  break;
              case "Примечание":
                $arrIndex[7]=get_colomn_index($cell); 
                  break;             
            }
          }

      // echo '<td>'.$cell->getValue().'</td>';

	}//$cell	
	// echo "</tr>";
}//$row
// echo "</table>";

  $array_panel = array();
  $array_furn = array();
  $arr_length = count($array); 

    for($i=0;$i<$arr_length;$i++) 
    {
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
  // $Order=0;
  // $Product=0;
  $Order = $sheet->getCellByColumnAndRow(2, $from_num)->getValue();
  $Product = $sheet->getCellByColumnAndRow(2, $from_num+1)->getValue();
  echo "Order " . $Order. "<br>"; 
  echo "Product " . $Product. "<br>"; 
  echo '<br><table border="1">';
  for($j=$from_num+4;$j<$to;$j++) 
  {  
    readRowByNember($j,$sheet,$arrIndex,$Order,$Product);
  }
  echo '</table>';
}

function readRowByNember($row,$sheet,$arrIndex,$Order,$Product){  
  // $arr=array();  
  echo '<tr>';    
        foreach ( $arrIndex as $index ) {           
            $cell = $sheet->getCellByColumnAndRow($index, $row);
            // $val = $cell->getCalculatedValue();

            switch ($index) {
              case 1:
                $cell->getCalculatedValue() ? $val = $cell->getCalculatedValue() : $val = $Order;
              break;
              case 2:
                $cell->getCalculatedValue() ? $val = $cell->getCalculatedValue() : $val = $Product;
              break;
              default;
                $val = $cell->getCalculatedValue();
              break;
            }
            
         

            echo '<td>' . $val .'</td>';  
            // $dataType = DType::TYPE_STRING;
             
          }          
  echo '</tr>';
        // return $arr;        
}

function get_colomn_index($cell){
  preg_match('/^[A-Z]+/', $cell->getCoordinate(), $matches); 
  return Coord::columnIndexFromString($matches[0]);
}
// echo '<input type="hidden" id="currfile" value="'.$fileDrop.'" form="frm">' ;

// проверка строки артикула из входящего файла
function strip_data($text)
{
    $quotes = array ("\x27", "\x22", "\x60", "\t", "\n", "\r", "*", "%", "<", ">", "?", "!" );
    // $goodquotes = array ("-", "+", "#" );
    $goodquotes = array ( "+", "#" );
    $repquotes = array ("\-", "\+", "\#" );
    $text = trim( strip_tags( $text ) );
    $text = str_replace( $quotes, '', $text );
    $text = str_replace( $goodquotes, $repquotes, $text );
    $text = ereg_replace(" +", " ", $text);
            
    return $text;
}
//Пример использования фильтрации:
// $input_text = strip_data($_GET['input_text']);
// $input_text = htmlspecialchars($input_text);
// $input_text = mysqli_real_escape_string($dbconn,$input_text);
