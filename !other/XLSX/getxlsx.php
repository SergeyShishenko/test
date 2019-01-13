<?php
# подключаем библиотеку
// echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
require_once "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";

# Указываем путь до файла .xlsx
// $File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
$File = "$_SERVER[DOCUMENT_ROOT]/www/!other/CSV/$filename";
 
$Excel = PHPExcel_IOFactory::load($File);
 
$order=end(explode(" ", $Excel->getActiveSheet()->getCell('Document1')->getValue())); 
// $client= $Excel->getActiveSheet()->getCell('C1')->getValue(); 
$client= $Excel->getActiveSheet()->getCell('Customer')->getValue(); 
// $coord= $Excel->getActiveSheet()->getCell('Customer')->getCoordinate(); // координата ячейки 'C5'
$coordRow= $Excel->getActiveSheet()->getCell('NumStart')->getRow(); //номер строки '5'
$coordColSum= $Excel->getActiveSheet()->getCell('Sum')->getColumn(); //столбец 'A'
$coordColProduct= $Excel->getActiveSheet()->getCell('NumStart')->getColumn(); //столбец 'O'
$coordColName= $Excel->getActiveSheet()->getCell('Name')->getColumn(); //столбец 'B'
# С какой строки начинаются данные
$Start = $coordRow-1;
$endRow= $Excel->getActiveSheet()->getCell('NumEnd')->getRow()-1; //номер строки '40'
if(!$endRow) {$endRow=1000;}// пустая ячейка
$Res = array();
for ($i= $Start; $i <= $endRow; $i++)
{
    
    $Row = new stdClass(); // пустой класс
    // $Row->id = $i;
    $Row->client = $client;
	$Row->order = $order;	
    $Row->product = $Excel->getActiveSheet()->getCell($coordColProduct.$i )->getValue(); 
    // if($Row->product == $Excel->getActiveSheet()->getCell('A'.($i+1) )->getValue()) continue;// объединенная ячейка
    # Преобразовываем формат даты из MS в привычный
    // $Row->date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($oRow->date));
    $Row->name = $Excel->getActiveSheet()->getCell($coordColName.$i )->getValue(); 	
    $Row->sum = $Excel->getActiveSheet()->getCell($coordColSum.$i )->getValue(); 
 
    if($Row->product == null) continue;// пустая ячейка
		
    $Res[] = $Row;
}
	 
//  echo "<pre>";
// 	print_r($Res);
//  echo "</pre>";
 echo "<p><b>Изделия: </b><span id=\"productApp_output\"></span> </p>";
 echo "<br>";
 $idfile=current(explode(".", $randomName));
					echo '<table border="1" class="table table-striped table-responsive" id="'.$idfile.'">'; 			
		
						$num = count ($Res); //строк с шапкой
                        // echo 'num '. $num; 
                        
						for ($row=0; $row < $num; $row++) { 
							echo "<tr>"; 
							if($row==0){
                                echo '<td class="text-success">КДП</td>';
                                echo '<td class="text-warning">ДП</td>';
                                echo "<td>Заказчик</td>";
                                echo "<td>Заказ</td>";
                                echo "<td>". $Res[$row]->product." </td>"; 
                                echo "<td>№2</td>";// для ручного копирования                       
                                echo "<td>". $Res[$row]->name." </td>";
                                echo "<td>". $Res[$row]->sum." </td>";
                                
                            }else{
                                echo '<td> <div class="material-switch pull-right">
                                     <input id="kd'.$row.$idfile.'" name="kd"  type="checkbox" onclick="checkAddress(this)"/>
                                     <label for="kd'.$row.$idfile.'" class="label-success"></label>
                                     </div></td>';
                                echo '<td> <div class="material-switch pull-right">
                                     <input id="dp'.$row.'" name="dp" type="checkbox" onclick="checkAddress(this)"/>
                                     <label for="dp'.$row.'" class="label-warning"></label>
                                     </div></td>';
                                echo "<td>". $Res[$row]->client." </td>";
                                echo "<td>". $Res[$row]->order." </td>";                                
                                echo '<td id="productApp'.$row.'">'. $Res[$row]->product. '</td>'; 
                                echo "<td>".$coord."</td>";// для ручного копирования                          
                                echo "<td>". $Res[$row]->name." </td>";
                                echo "<td>". str_replace(".", ",", $Res[$row]->sum)." </td>";
                                
                               
                            }                           

                            
						

							echo "</tr>"; 
						
                        } //for	
                        
				
                    echo '</table>';
                    echo '<input type="hidden" id="currfile" value="'.$randomName.'" form="frm">' ;  

//  echo "<hr>";

 ?>