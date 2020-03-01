<?php
// vpi\vpi_template_bazis.php
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
// use PhpOffice\PhpSpreadsheet\Worksheet\Drawing as drawing; // Instead PHPExcel_Worksheet_Drawing
session_start();

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
 echo "Всего: ".count($arr->table0)." строк с шапкой". PHP_EOL;


for ($row=1; $row < count($arr->table0); $row++) { 
    $tr=$arr->table0[$row];
 foreach($tr as  $key=>$var)
 {
    // echo $key. " => " . $var . " | ";
    echo trim($var) . " | ";
 }
 echo  PHP_EOL;
}


exit();


////////////////////////////////////

// vendor\phpoffice\phpspreadsheet\samples\Header.php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){
    $site = $_SERVER['DOCUMENT_ROOT'] ."/www/";
}else{
    $site = $_SERVER['DOCUMENT_ROOT'] ."./"; 
}
// echo $_SERVER['DOCUMENT_ROOT'] . '/www/index.php';
// echo $site . 'vendor/autoload.php';
// echo __DIR__ . PHP_EOL ;
// require $site . 'vendor/autoload.php';
// vendor\phpoffice\phpspreadsheet\samples\Header.php
// require __DIR__ . '/../Header.php';
require $site . 'vendor/phpoffice/phpspreadsheet/samples/Header.php';

$helper->log('Load from Xls template');
$reader = IOFactory::createReader('Xls');
// echo __DIR__ . '/../templates/30template.xls';
$templatefile='VPI_template.xls';
$spreadsheet = $reader->load($site . 'vpi/templates/' . $templatefile);

$helper->log('Add new data to the template');
// $data = [['title' => 'Excel for dummies',
//         'price' => 17.99,
//         'quantity' => 2,
//     ],
//     ['title' => 'PHP for dummies',
//         'price' => 15.99,
//         'quantity' => 1,
//     ],
//     ['title' => 'Inside OOP',
//         'price' => 12.95,
//         'quantity' => 1,
//     ],
// ];

$spreadsheet->getActiveSheet()->setCellValue('D1', Date::PHPToExcel(time()));

$baseRow = 4;
// foreach ($data as $r => $dataRow) {
//     $row = $baseRow + $r;
//     $spreadsheet->getActiveSheet()->insertNewRowBefore($row, 1);

//     $spreadsheet->getActiveSheet()->setCellValue('A' . $row, $r + 1)
//         ->setCellValue('B' . $row, $dataRow['title'])
//         ->setCellValue('C' . $row, $dataRow['price'])
//         ->setCellValue('D' . $row, $dataRow['quantity'])
//         ->setCellValue('E' . $row, '=C' . $row . '*D' . $row);
// }
// $spreadsheet->getActiveSheet()->removeRow($baseRow - 1, 1);

foreach ($data as $r => $dataRow) {
    $row = $baseRow + $r;
    $spreadsheet->getActiveSheet()->setCellValue('E'.$row, $dataRow['articul_furnitur_obj'])
    ->setCellValue('F'.$row, $dataRow['name_furnitur_obj_prop'])
    ->setCellValue('G'.$row, $dataRow['made_furnitur_obj'])
    ->setCellValue('H'.$row, $dataRow['color_obj_prop'])
    ->setCellValue('I'.$row, $dataRow['unit_obj_prop'])
    ->setCellValue('J'.$row, $dataRow['count']);

    $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(170);
    // if (file_exists($imagePath)) {
    // $objDrawing = new drawing();
    // $objDrawing->setWorksheet($spreadsheet->getActiveSheet());                                          
    // $objDrawing->setName('Paid');
    // $objDrawing->setDescription('Paid');

    // $objDrawing->setPath($imagePath);
    // $objDrawing->setCoordinates('K'.$row);
    // $objDrawing->setOffsetX(10);
    // $objDrawing->setOffsetY(10);

    // } 
}
$spreadsheet->getActiveSheet()->removeRow($baseRow-1,1);//удаление строки

// Save
$fname="vpi-".date('m-d-Y-H-i-s').".xls";  

$helper->write($spreadsheet, $fname);
$path = sys_get_temp_dir().'/phpspreadsheet/';
// $fnameX=$path . $fname.".xlsx";
rename($path . $fname, __DIR__ ."/WRITE/". $fname);
rename($path . $fname."x", __DIR__ ."/WRITE/". $fname."x");
// удалить xlsx... 
$un=  __DIR__ ."/WRITE/". $fname."x" ;   
unlink($un);


// $arr_output["output"]=__DIR__ ."/WRITE/". $fname;
// echo __DIR__ ."/WRITE/". $fname;

echo "vpi/WRITE/". $fname;
