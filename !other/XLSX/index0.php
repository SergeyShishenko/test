<?php
# подключаем библиотеку
echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
require_once "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
# Указываем путь до файла .xlsx
$File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/test.xlsx";
 
$Excel = PHPExcel_IOFactory::load($File);
 
# С какой строки начинаются данные
$Start = 2;
$Res = array();
for ($i= $Start; $i <= 1000; $i++)
{
    $Row = new stdClass();
    $Row->id = $i;
		
    $Row->date = $Excel->getActiveSheet()->getCell('A'.$i )->getValue(); 
    # Преобразовываем формат даты из MS в привычный
    $Row->date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($oRow->date));
    $Row->name = $Excel->getActiveSheet()->getCell('B'.$i )->getValue(); 	
    $Row->mail = $Excel->getActiveSheet()->getCell('C'.$i )->getValue(); 
 
    if($Row->name == null) continue;
		
    $Res[] = $Row;
}
	 
 echo "<pre>";
	print_r($Res);
 echo "</pre>";

 echo "<hr>";

// Файл xlsx
// $xls = PHPExcel_IOFactory::load(__DIR__ . '/test.xlsx');
$xls = PHPExcel_IOFactory::load($File);

// Первый лист
$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
echo "<pre>";
foreach ($sheet->toArray() as $row) {
    // if(array_sum(array_column($row, 0)) === 0) continue;
   print_r($row);
}
echo "</pre>";
echo "<hr>";

// // Файл xlsx
// $File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
// // $xls = PHPExcel_IOFactory::load(__DIR__ . '/test.xlsx');
// $xls = PHPExcel_IOFactory::load($File);

// // Первый лист
// $xls->setActiveSheetIndex(0);
// $sheet = $xls->getActiveSheet();
// echo "<pre>";
// foreach ($sheet->toArray() as $row) {
//     // if(array_sum(array_column($row, 0)) === 0) continue;
//    print_r($row);
// }
// echo "</pre>";
// echo "<hr>";


# Указываем путь до файла .xlsx
$File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
 
$Excel = PHPExcel_IOFactory::load($File);
 
# С какой строки начинаются данные
$Start = 9;
$Res = array();
for ($i= $Start; $i <= 1000; $i++)
{
    $Row = new stdClass();
    $Row->id = $i;
		
    $Row->numorder = $Excel->getActiveSheet()->getCell('A'.$i )->getValue(); 
    # Преобразовываем формат даты из MS в привычный
    // $Row->date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($oRow->date));
    $Row->name = $Excel->getActiveSheet()->getCell('B'.$i )->getValue(); 	
    $Row->price = $Excel->getActiveSheet()->getCell('O'.$i )->getValue(); 
 
    if($Row->numorder == null) continue;
		
    $Res[] = $Row;
}
	 
 echo "<pre>";
	print_r($Res);
 echo "</pre>";

 echo "<hr>";

 ?>