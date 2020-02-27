<?php
// vpi\getxlsx-bazis-specification4.php
# подключаем библиотеку
require_once '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
// use \PhpOffice\PhpSpreadsheet\Cell\DataType as DType;
use \PhpOffice\PhpSpreadsheet\Cell\Coordinate as Coord;

// define('__ROOT__', dirname(dirname(__FILE__))); 
require_once dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php' ;
require_once dirname(dirname(__FILE__)).'/vendor/MyClass/class_DataBase.php';

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
                $arrIndex[0] =get_colomn_index($cell); //1
                  break;
              case "Изделие":
                $arrIndex[1]=get_colomn_index($cell); //2
                  break;
              case "СЕ":
                $arrIndex[2]=get_colomn_index($cell); //3
                  break;
              case "Поз.":
                $arrIndex[3]=get_colomn_index($cell); //4
                  break;
              case "Артикул":
                $arrIndex[4]=get_colomn_index($cell); //5               
                  break;
              case "Наименование":
                $arrIndex[5]=get_colomn_index($cell); //6
                  break;
              case "Кол-во":
                $arrIndex[6]=get_colomn_index($cell); //8
                  break;
              case "Примечание":
                $arrIndex[7]=get_colomn_index($cell); //9
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
  $start_num=$from_num+4;
  $to=$num[1];
  echo "from " . $from_num . " to " . $to . "<br>";
  // $Order=0;
  // $Product=0;
  $Order = $sheet->getCellByColumnAndRow(2, $from_num)->getValue();
  $Product = $sheet->getCellByColumnAndRow(2, $from_num+1)->getValue();
  echo "Order " . $Order. "<br>"; 
  echo "Product " . $Product. "<br>"; 
  // echo "<pre>";
  // echo "arrIndex";
  // print_r( $arrIndex);
  // echo "</pre>";
  $db = class_DataBase::getDB(); // Создаём объект базы данных
  echo '<br><table border="1" style="width: 100%;">';
  for($j=$start_num;$j<=$to;$j++) 
  {  
    readRowByNember($j,$sheet,$arrIndex,$Order,$Product,$start_num,$db);
  }
  echo '</table>';
}

function readRowByNember($row,$sheet,$arrIndex,$Order,$Product,$start_num,$db){  

  // $arr=array();  
  echo '<tr>';    
        // foreach ( $arrIndex as $index ) {           
        //     $cell = $sheet->getCellByColumnAndRow($index, $row);
        //     // $val = $cell->getCalculatedValue();

        //     switch ($index) {
        //       case 1:
        //         $cell->getCalculatedValue() ? $val = $cell->getCalculatedValue() : $val = $Order;
        //       break;
        //       case 2:
        //         $cell->getCalculatedValue() ? $val = $cell->getCalculatedValue() : $val = $Product;
        //       break;
        //       default;
        //         $val = $cell->getCalculatedValue();
        //       break;
        //     }
            
         
            $sheet->getCellByColumnAndRow($arrIndex[0], $row)->getCalculatedValue() ? $val = $sheet->getCellByColumnAndRow($arrIndex[0], $row)->getCalculatedValue() : $val = $Order;
            echo '<td>' . $val .'</td>';  //1
            $sheet->getCellByColumnAndRow($arrIndex[1], $row)->getCalculatedValue() ? $val = $sheet->getCellByColumnAndRow($arrIndex[1], $row)->getCalculatedValue() : $val = $Product;
            echo '<td>' . $val .'</td>';  //2

            echo '<td>' . $sheet->getCellByColumnAndRow($arrIndex[2], $row)->getCalculatedValue() .'</td>';  //3
            echo '<td>' . $sheet->getCellByColumnAndRow($arrIndex[3], $row)->getCalculatedValue() .'</td>';  //4
            $articul = htmlspecialchars(trim($sheet->getCellByColumnAndRow($arrIndex[4], $row)->getCalculatedValue())); //5 Артикул
            if ($articul !="" && $row != $start_num){
              // var_dump($articul);exit();
              $query = "SELECT * FROM `obj_furnitur_prop` WHERE `articul_furnitur_obj` = {?} ";
               $table = $db->select($query, array($articul)); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
                if ($table){
                  echo '<td>' . $table[0]['articul_furnitur_obj'] .' !!!</td>'; 
                }else{
                  echo '<td>' . $articul .'</td>'; 
                }
                
            }else{
              echo '<td>' . $articul .'</td>'; 
            }
            
            echo '<td>' . $sheet->getCellByColumnAndRow($arrIndex[5], $row)->getCalculatedValue() .'</td>';  //6
            if ($row==$start_num){
              echo '<td>' . 'Поставщик' .'</td>';  //7
              echo '<td>' . 'Цвет' .'</td>';  //8
              echo '<td>' . 'Ед.измерения' .'</td>';  //9

            }else{
              echo '<td>' . '' .'</td>';  //7
            echo '<td>' . '' .'</td>';  //8
            echo '<td>' . '' .'</td>';  //9
            }
            
            echo '<td>' . $sheet->getCellByColumnAndRow($arrIndex[6], $row)->getCalculatedValue() .'</td>';  //10
            echo '<td>' . $sheet->getCellByColumnAndRow($arrIndex[7], $row)->getCalculatedValue() .'</td>';  //11
            // $dataType = DType::TYPE_STRING;
             
          // }          
  echo '</tr>';
        // return $arr;        
}

function get_colomn_index($cell){
  preg_match('/^[A-Z]+/', $cell->getCoordinate(), $matches); 
  return Coord::columnIndexFromString($matches[0]);
}

////!!!!!!!!!!!!!!!!!!!!!!!//////
  $db = class_DataBase::getDB(); // Создаём объект базы данных
  // $query = "SELECT * FROM `obj_furnitur_prop` WHERE `color_obj_prop` = {?} AND `made_furnitur_obj` = {?}";
  $query = "SELECT * FROM `obj_furnitur_prop` WHERE `articul_furnitur_obj` = {?} ";
  $table = $db->select($query, array(htmlspecialchars("050104"))); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
  // $table = $db->select($query, array("Оцинкованный", "BLUM")); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
  // $query = "SELECT `user_login` FROM `sofia_users` WHERE `user_mail` = {?}";
  // $login = $db->selectCell($query, array("serge-meb@mail.ru"));// Запрос должен вывести конкретную ячейку, поэтому вызываем метод selectCell()
  echo "<pre>";
  var_dump($table);
  echo "</pre>";
  // var_dump($login);
  foreach ( $table[0] as $key => $value ) {  
    echo "{$key} => {$value} <br> "; 
  }
////!!!!!!!!!!!!!!!!!!!!!!!//////
