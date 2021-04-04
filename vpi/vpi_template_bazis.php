<?php
// vpi\vpi_template_bazis.php
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
// use PhpOffice\PhpSpreadsheet\Worksheet\Drawing as drawing; // Instead PHPExcel_Worksheet_Drawing
session_start();
error_reporting(0);

///////////////////////////////////
if(isset($_POST["ids"]) )
// console.log(arr['table0'][row][td])
{
     $arr=json_decode($_POST["ids"]);    
 
}else{
    echo "Ошибка<br>";
    echo "<pre>";
    var_dump($_POST["ids"]);
    echo "</pre>";
}


//  echo "Всего: ".count($arr->table0)." строк с шапкой". PHP_EOL;


// for ($row=1; $row < count($arr->table0); $row++) { 
//     $tr=$arr->table0[$row];
//         for ($td=0; $td < 10; $td++) { 
//         echo trim($tr[$td]) . " | ";
//         }
//  echo  PHP_EOL;
// }


// exit();


////////////////////////////////////

// vendor\phpoffice\phpspreadsheet\samples\Header.php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){
    $site = $_SERVER['DOCUMENT_ROOT'] ."/www/";
}else{
    $site = $_SERVER['DOCUMENT_ROOT'] ."/"; 
}
// echo $site;
// echo "!!!!";
// echo $_SERVER['DOCUMENT_ROOT'] . '/www/index.php';
// echo $site . 'vendor/autoload.php';
// echo __DIR__ . PHP_EOL ;
// require $site . 'vendor/autoload.php';
// vendor\phpoffice\phpspreadsheet\samples\Header.php
// require __DIR__ . '/../Header.php';
require $site . 'vendor/phpoffice/phpspreadsheet/samples/HeaderVPI.php';

// $helper->log('Load from Xls template');
$reader = IOFactory::createReader('Xls');
// echo __DIR__ . '/../templates/30template.xls';

// $templatefile='VPI_template.xls';
$templatefile='VPI_template_pz.xls';
$spreadsheet = $reader->load($site . 'vpi/templates/' . $templatefile);

// $spreadsheet->getActiveSheet()->setCellValue('D1', Date::PHPToExcel(time()));

// $baseRow = 3;//VPI_template.xls
$baseRow = 7;//VPI_template_pz.xls



for ($r=1; $r < count($arr->table0); $r++) { 
    $tr=$arr->table0[$r];   
        $row = $baseRow + $r;
        $spreadsheet->getActiveSheet()
        ->setCellValue('A'.$row, "")
        ->setCellValue('B'.$row, "")
        ->setCellValue('C'.$row, $tr[0])
        ->setCellValue('D'.$row, $tr[1])
        ->setCellValue('E'.$row, $tr[2])
        ->setCellValue('F'.$row, $tr[3])
        ->setCellValue('G'.$row, $tr[4])
        ->setCellValue('H'.$row, $tr[5])
        ->setCellValue('I'.$row, $tr[6])
        ->setCellValue('J'.$row, $tr[7])
        ->setCellValue('K'.$row, $tr[8])
        ->setCellValue('L'.$row, $tr[9])
        ->setCellValue('M'.$row, $tr[10])
        ;
        $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(-1);
}
//   $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(170);
$spreadsheet->getActiveSheet()->removeRow($baseRow+1,1);//удаление строки
$spreadsheet->getActiveSheet()->freezePane('A8');

// Save
$pref="";

if (isset($tr[0])){
    $pref=$tr[0]."_".$tr[1]."_";
}
    

$fname= $pref."vpi-".date('m-d-Y-H-i-s').".xls";  
$fname=ltrim($fname,'_');// убрать подчеркивание если нет номера заказа
$helper->write($spreadsheet, $fname);
$path = sys_get_temp_dir().'/phpspreadsheet/';
// $fnameX=$path . $fname.".xlsx";
rename($path . $fname, __DIR__ ."/WRITE/". $fname);
rename($path . $fname."x", __DIR__ ."/WRITE/". $fname."x");
// удалить xlsx... 
$un=  __DIR__ ."/WRITE/". $fname."x" ;   
unlink($un);

echo $fname;
