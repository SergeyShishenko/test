<?php
// vpi\300_Template.php
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
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
$templatefile='300Template.xls';
$spreadsheet = $reader->load($site . 'vpi/templates/' . $templatefile);

$helper->log('Add new data to the template');
$data = [['title' => 'Excel for dummies',
        'price' => 17.99,
        'quantity' => 2,
    ],
    ['title' => 'PHP for dummies',
        'price' => 15.99,
        'quantity' => 1,
    ],
    ['title' => 'Inside OOP',
        'price' => 12.95,
        'quantity' => 1,
    ],
];

$spreadsheet->getActiveSheet()->setCellValue('D1', Date::PHPToExcel(time()));

$baseRow = 5;
foreach ($data as $r => $dataRow) {
    $row = $baseRow + $r;
    $spreadsheet->getActiveSheet()->insertNewRowBefore($row, 1);

    $spreadsheet->getActiveSheet()->setCellValue('A' . $row, $r + 1)
        ->setCellValue('B' . $row, $dataRow['title'])
        ->setCellValue('C' . $row, $dataRow['price'])
        ->setCellValue('D' . $row, $dataRow['quantity'])
        ->setCellValue('E' . $row, '=C' . $row . '*D' . $row);
}
$spreadsheet->getActiveSheet()->removeRow($baseRow - 1, 1);

// Save
// $helper->write($spreadsheet, __DIR__);
$helper->write($spreadsheet, "BE300_Template.xls");
$path = sys_get_temp_dir().'/phpspreadsheet/';
rename($path . 'BE300_Template.xls', __DIR__ ."/WRITE/". 'RE300_Template.xls');
// echo __FILE__;
// echo __DIR__;
// $helper->write(__DIR__. '\\WRITE\\', 'write300.xls');
// $helper->write($site . 'WRITE/write30.xls');

// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
// $spreadsheet = $reader->load("05featuredemo.xlsx");
// $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
// $writer->save("05featuredemo.xlsx");
