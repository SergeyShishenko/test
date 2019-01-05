<?php
# подключаем библиотеку
// echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
require_once "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";

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

//  echo "<hr>";

 ?>