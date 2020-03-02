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
    $site = $_SERVER['DOCUMENT_ROOT'] ."./"; 
}
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
$templatefile='VPI_template.xls';
$spreadsheet = $reader->load($site . 'vpi/templates/' . $templatefile);

// $helper->log('Add new data to the template');
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

$baseRow = 3;
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


for ($r=1; $r < count($arr->table0); $r++) { 
    $tr=$arr->table0[$r];   
        $row = $baseRow + $r;
        $spreadsheet->getActiveSheet()->setCellValue('A'.$row, $tr[0])
        ->setCellValue('B'.$row, $tr[1])
        ->setCellValue('C'.$row, $tr[2])
        ->setCellValue('D'.$row, $tr[3])
        ->setCellValue('E'.$row, $tr[4])
        ->setCellValue('F'.$row, $tr[5])
        ->setCellValue('G'.$row, $tr[6])
        ->setCellValue('H'.$row, $tr[7])
        ->setCellValue('I'.$row, $tr[8])
        ->setCellValue('J'.$row, $tr[9])
        ->setCellValue('K'.$row, $tr[10]);
        $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(-1);
}
// foreach ($data as $r => $dataRow) {
//     $row = $baseRow + $r;
//     $spreadsheet->getActiveSheet()->setCellValue('A'.$row, $dataRow['0'])
//     ->setCellValue('B'.$row, $dataRow['name_furnitur_obj_prop'])
//     ->setCellValue('C'.$row, $dataRow['name_furnitur_obj_prop'])
//     ->setCellValue('D'.$row, $dataRow['name_furnitur_obj_prop'])
//     ->setCellValue('E'.$row, $dataRow['name_furnitur_obj_prop'])
//     ->setCellValue('F'.$row, $dataRow['name_furnitur_obj_prop'])
//     ->setCellValue('G'.$row, $dataRow['made_furnitur_obj'])
//     ->setCellValue('H'.$row, $dataRow['color_obj_prop'])
//     ->setCellValue('I'.$row, $dataRow['unit_obj_prop'])
//     ->setCellValue('J'.$row, $dataRow['count'])
//     ->setCellValue('K'.$row, $dataRow['count']);

  
//     // if (file_exists($imagePath)) {
//     // $objDrawing = new drawing();
//     // $objDrawing->setWorksheet($spreadsheet->getActiveSheet());                                          
//     // $objDrawing->setName('Paid');
//     // $objDrawing->setDescription('Paid');

//     // $objDrawing->setPath($imagePath);
//     // $objDrawing->setCoordinates('K'.$row);
//     // $objDrawing->setOffsetX(10);
//     // $objDrawing->setOffsetY(10);

//     // } 
// }

//   $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(170);
$spreadsheet->getActiveSheet()->removeRow(3,1);//удаление строки

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

// echo "vpi/WRITE/". $fname;
echo $fname;
