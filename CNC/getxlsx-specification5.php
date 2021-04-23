<?php
// CNC\getxlsx-specification5.php
# подключаем библиотеку
require_once '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// use \PhpOffice\PhpSpreadsheet\Cell\DataType as DType;
use \PhpOffice\PhpSpreadsheet\Cell\Coordinate as Coord;

require_once dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php' ;

//if (!isset($filename)){$filename="test/2533_8,9,338 (пом14).xlsx";}
if (!isset($filename)){$filename="test/1111_6_Спецификации.xls";}
$File = $_SERVER['DOCUMENT_ROOT'] . "/www/CNC/$filename";//localhost
if (!file_exists($File)) {
  $File = $_SERVER['DOCUMENT_ROOT'] . "/CNC/$filename";//site
}
$reader = getReaderTypeFromExtension($filename);// подбор класса по расширению
$reader->setReadDataOnly(true); 
$Excel =  $reader->load($File);;

// Устанавливаем индекс активного листа
$Excel->setActiveSheetIndex(0);
// Получаем активный лист
$sheet = $Excel->getActiveSheet();
$worksheetTitle = $sheet->getTitle();

$highestRow = $sheet->getHighestRow(); // e.g. 10
$highestColumn = $sheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = Coord::columnIndexFromString($highestColumn); // e.g. 5

// echo $sheet->getCellByColumnAndRow(1, 1)->getCalculatedValue(),"<br>";//№ Заказа
// echo $sheet->getCellByColumnAndRow(3, 1)->getCalculatedValue(),"<br>";//№ Изделия

if (strpos($sheet->getCellByColumnAndRow(3, 1)->getCalculatedValue(), "СЕ/пСЕ")==false){
  exit();
    }
//echo strpos($sheet->getCellByColumnAndRow(3, 1)->getCalculatedValue(), "СЕ/пСЕ"),"<br>";//№ СЕ/пСЕ
$list=[];
 $list[]=array("№  Заказа", "№  Изделия", "№ СЕ/пСЕ" , "№ Детали" , "Длина" , "Ширина" , "Толщина");
for ($row = 2; $row <= $highestRow; ++$row) {
  // for ($col = 1; $col <= $highestColumnIndex; ++$col) {
  //     $value = $sheet->getCellByColumnAndRow($col, $row)->getCalculatedValue();
  //     echo $value." | "; 
  // }
 
  if ( $sheet->getCellByColumnAndRow(4, $row)->getCalculatedValue()) {   

      echo $sheet->getCellByColumnAndRow(1, $row)->getCalculatedValue()." | "; 
      echo $sheet->getCellByColumnAndRow(2, $row)->getCalculatedValue()." | "; 
      echo $sheet->getCellByColumnAndRow(3, $row)->getCalculatedValue()." | "; 
      echo $sheet->getCellByColumnAndRow(4, $row)->getCalculatedValue()." | "; 
      echo $sheet->getCellByColumnAndRow(10, $row)->getCalculatedValue()." | "; 
      echo $sheet->getCellByColumnAndRow(11, $row)->getCalculatedValue()." | "; 
      echo $sheet->getCellByColumnAndRow(12, $row)->getCalculatedValue();   
      echo "<br>";
      $list[]=array(
        $sheet->getCellByColumnAndRow(1, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(2, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(3, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(4, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(10, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(11, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(12, $row)->getCalculatedValue()
      );
  }
}
// №  Заказа ; №  Изделия ; № СЕ/пСЕ ; № Детали ; Длина ; Ширина ; Толщина 

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields,";");
}

exit();


function get_colomn_index($cell){
  preg_match('/^[A-Z]+/', $cell->getCoordinate(), $matches); 
  return Coord::columnIndexFromString($matches[0]);
}

function getReaderTypeFromExtension($filename) {
    $pathinfo = pathinfo($filename);
    if (!isset($pathinfo['extension'])) {
        return null;
    }
    switch (strtolower($pathinfo['extension'])) {
        case 'xlsx': // Excel (OfficeOpenXML) Spreadsheet
        case 'xlsm': // Excel (OfficeOpenXML) Macro Spreadsheet (macros will be discarded)
        case 'xltx': // Excel (OfficeOpenXML) Template
        case 'xltm': // Excel (OfficeOpenXML) Macro Template (macros will be discarded)
            // return 'Xlsx';
            return new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        case 'xls': // Excel (BIFF) Spreadsheet
        case 'xlt': // Excel (BIFF) Template
            // return 'Xls';
            return new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        case 'ods': // Open/Libre Offic Calc
        case 'ots': // Open/Libre Offic Calc Template
            return 'Ods';
        case 'slk':
            return 'Slk';
        case 'xml': // Excel 2003 SpreadSheetML
            return 'Xml';
        case 'gnumeric':
            return 'Gnumeric';
        case 'htm':
        case 'html':
            return 'Html';
        case 'csv':
            // Do nothing
            // We must not try to use CSV reader since it loads
            // all files including Excel files etc.
            return null;
        default:
            return null;
    }
}
?>