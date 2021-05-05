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

// include_once dirname(__DIR__ ). '/Classes/Logger.php';
// Logger::$PATH = dirname(__FILE__)."/LOGS";


$getReaderType = getReaderTypeFromExtension($filename);// подбор класса по расширению
$reader = $getReaderType[0];// подбор класса по расширению
$reader->setReadDataOnly(true); 
$Excel =  $reader->load($filename);

// Устанавливаем индекс активного листа


$sheetCount = $Excel->getSheetCount();
//  Logger::getLogger('log_class_CNC')->log("count -> ".$sheetCount);
$find=false;
for ($i = 0; $i < $sheetCount; $i++) {

    $sheet = $Excel->getSheet($i);
    // Logger::getLogger('log_class_CNC')->log("strpos -> ".strpos($sheet->getCellByColumnAndRow(3, 1)->getCalculatedValue(), "СЕ/пСЕ"));
    if (strpos($sheet->getCellByColumnAndRow(3, 1)->getCalculatedValue(), "СЕ/пСЕ")!==false){
        $Excel->setActiveSheetIndex($i);
// Получаем активный лист
        $sheet = $Excel->getActiveSheet();
        // $worksheetTitle = $sheet->getTitle();
        $find=true;
        // return false;
    //   exit();
        }    

}//for
if (!$find){  return false;
        //   exit();
        }
// $Excel->setActiveSheetIndex(0);
// // Получаем активный лист
// $sheet = $Excel->getActiveSheet();
// $worksheetTitle = $sheet->getTitle();

$highestRow = $sheet->getHighestRow(); // e.g. 10
$highestColumn = $sheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = Coord::columnIndexFromString($highestColumn); // e.g. 5

// echo $sheet->getCellByColumnAndRow(1, 1)->getCalculatedValue(),"<br>";//№ Заказа
// echo $sheet->getCellByColumnAndRow(3, 1)->getCalculatedValue(),"<br>";//№ Изделия

// if (strpos($sheet->getCellByColumnAndRow(3, 1)->getCalculatedValue(), "СЕ/пСЕ")==false){
//     return false;
// //   exit();
//     }

$list=[];
 $list[]=array("№  Заказа", "№  Изделия", "№ СЕ/пСЕ" , "№ Детали" , "Длина" , "Ширина" , "Толщина");
for ($row = 2; $row <= $highestRow; ++$row) {
  // for ($col = 1; $col <= $highestColumnIndex; ++$col) {
  //     $value = $sheet->getCellByColumnAndRow($col, $row)->getCalculatedValue();
  //     echo $value." | "; 
  // }
 
  if ( $sheet->getCellByColumnAndRow(4, $row)->getCalculatedValue()) {   

    //   echo $sheet->getCellByColumnAndRow(1, $row)->getCalculatedValue()." | "; 
    //   echo $sheet->getCellByColumnAndRow(2, $row)->getCalculatedValue()." | "; 
    //   echo $sheet->getCellByColumnAndRow(3, $row)->getCalculatedValue()." | "; 
    //   echo $sheet->getCellByColumnAndRow(4, $row)->getCalculatedValue()." | "; 
    //   echo $sheet->getCellByColumnAndRow(10, $row)->getCalculatedValue()." | "; 
    //   echo $sheet->getCellByColumnAndRow(11, $row)->getCalculatedValue()." | "; 
    //   echo $sheet->getCellByColumnAndRow(12, $row)->getCalculatedValue();   
    //   echo "<br>";
      $list[]=array(
        $sheet->getCellByColumnAndRow(1, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(2, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(3, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(4, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(10, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(11, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(12, $row)->getCalculatedValue(),
        $sheet->getCellByColumnAndRow(5, $row)->getCalculatedValue()
      );
  }
}
// №  Заказа ; №  Изделия ; № СЕ/пСЕ ; № Детали ; Длина ; Ширина ; Толщина 
$namecsvfile=basename($filename,$getReaderType[1]).'csv';
$fp = fopen("temp/".$namecsvfile, 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields,";");
}
fclose($fp);

if (file_exists("temp/".$namecsvfile)) {
    // echo "Файл $namecsvfile существует!";
    return $namecsvfile;
}else{
    // echo "Файл $namecsvfile НЕ существует!";
    return false;
}
// exit();

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
            return array(new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(),$pathinfo['extension']);
        case 'xls': // Excel (BIFF) Spreadsheet
        case 'xlt': // Excel (BIFF) Template
            // return 'Xls';
            return array(new \PhpOffice\PhpSpreadsheet\Reader\Xls() , $pathinfo['extension']);
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