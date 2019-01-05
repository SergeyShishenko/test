<?php
# подключаем библиотеку
// echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
require_once "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";

# Указываем путь до файла .xlsx
$File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
 
$Excel = PHPExcel_IOFactory::load($File);
 
# С какой строки начинаются данные
$Start = 9;
$order=end(explode(" ", $Excel->getActiveSheet()->getCell('F3')->getValue())); 
$client= $Excel->getActiveSheet()->getCell('C1')->getValue(); 
$Res = array();
for ($i= $Start; $i <= 1000; $i++)
{
    $Row = new stdClass();
    // $Row->id = $i;
    
    $Row->client = $client;
	$Row->order = $order;	
    $Row->product = $Excel->getActiveSheet()->getCell('A'.$i )->getValue(); 
    # Преобразовываем формат даты из MS в привычный
    // $Row->date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($oRow->date));
    $Row->name = $Excel->getActiveSheet()->getCell('B'.$i )->getValue(); 	
    $Row->price = $Excel->getActiveSheet()->getCell('O'.$i )->getValue(); 
 
    if($Row->product == null) continue;// пустая ячейка
		
    $Res[] = $Row;
}
	 
 echo "<pre>";
	print_r($Res);
 echo "</pre>";

 echo "<br>";
					echo '<table border="1" class="table table-striped table-responsive" >'; 			
		
						$num = count ($Res); //строк с шапкой
                        // echo 'num '. $num; 
                        
						for ($row=0; $row < $num; $row++) { 
							echo "<tr>"; 
							
                            echo "<td>". $Res[$row]->client." </td>";
                            echo "<td>". $Res[$row]->order." </td>";
                            echo "<td>". $Res[$row]->product." </td>";
                            echo "<td>". $Res[$row]->name." </td>";
                            echo "<td>". $Res[$row]->price." </td>";
						

							echo "</tr>"; 
						
                        } //for	
                        
				
					echo '</table>'; 

//  echo "<hr>";

 ?>