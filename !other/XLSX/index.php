<?php
# подключаем библиотеку
// echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
require_once "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";

# Указываем путь до файла .xlsx
// $File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
$File = "$_SERVER[DOCUMENT_ROOT]/www/!other/CSV/$filename";
 
$Excel = PHPExcel_IOFactory::load($File);
 
# С какой строки начинаются данные
// '№'

$order=end(explode(" ", $Excel->getActiveSheet()->getCell('Document1')->getValue())); 
// $client= $Excel->getActiveSheet()->getCell('C1')->getValue(); 
$client= $Excel->getActiveSheet()->getCell('Customer')->getValue(); 
// $coord= $Excel->getActiveSheet()->getCell('Customer')->getCoordinate(); // координата ячейки 'C5'
$coordRow= $Excel->getActiveSheet()->getCell('NumStart')->getRow(); //номер строки '5'
// $coord= $Excel->getActiveSheet()->getCell('Customer')->getColumn(); //столбец 'C'
$Start = $coordRow-1;
$endRow= $Excel->getActiveSheet()->getCell('NumEnd')->getRow()-1; //номер строки '40'
if(!$endRow) {$endRow=1000;}// пустая ячейка
$Res = array();
for ($i= $Start; $i <= $endRow; $i++)
{

    
    $Row = new stdClass(); // пустой класс
    // $Row->id = $i;

    // if($Row->product == null) continue;// пустая ячейка
    $Row->client = $client;
	$Row->order = $order;	
    $Row->product = $Excel->getActiveSheet()->getCell('A'.$i )->getValue(); 
    // if($Row->product == $Excel->getActiveSheet()->getCell('A'.($i+1) )->getValue()) continue;// объединенная ячейка
    # Преобразовываем формат даты из MS в привычный
    // $Row->date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($oRow->date));
    $Row->name = $Excel->getActiveSheet()->getCell('B'.$i )->getValue(); 	
    $Row->price = $Excel->getActiveSheet()->getCell('O'.$i )->getValue(); 
 
    if($Row->product == null) continue;// пустая ячейка
		
    $Res[] = $Row;
}
	 
//  echo "<pre>";
// 	print_r($Res);
//  echo "</pre>";

 echo "<br>";
					echo '<table border="1" class="table table-striped table-responsive" >'; 			
		
						$num = count ($Res); //строк с шапкой
                        // echo 'num '. $num; 
                        
						for ($row=0; $row < $num; $row++) { 
							echo "<tr>"; 
							if($row==0){
                                echo "<td>Выбрать</td>";
                                echo "<td>Заказчик</td>";
                                echo "<td>Заказ</td>";
                                echo "<td>". $Res[$row]->product." </td>"; 
                                echo "<td>№2</td>";// для ручного копирования                       
                                echo "<td>". $Res[$row]->name." </td>";
                                echo "<td>". $Res[$row]->price." </td>";
                                
                            }else{
                                echo '<td> <div class="material-switch pull-right">
                                     <input id="someSwitchOptionSuccess'.$row.'" name="someSwitchOption001" type="checkbox" onclick="checkAddress(this)"/>
                                     <label for="someSwitchOptionSuccess'.$row.'" class="label-success"></label>
                                     </div></td>';
                                echo "<td>". $Res[$row]->client." </td>";
                                echo "<td>". $Res[$row]->order." </td>";                                
                                echo "<td>". $Res[$row]->product." </td>"; 
                                echo "<td>".$coord."</td>";// для ручного копирования                          
                                echo "<td>". $Res[$row]->name." </td>";
                                echo "<td>". str_replace(".", ",", $Res[$row]->price)." </td>";
                                
                               
                            }                           

                            
						

							echo "</tr>"; 
						
                        } //for	
                        
				
                    echo '</table>';
                    echo '<input type="hidden" id="currfile" value="'.$randomName.'" form="frm">' ;  

//  echo "<hr>";

 ?>