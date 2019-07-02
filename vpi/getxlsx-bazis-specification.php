<?php
// vpi\getxlsx-bazis-specification.php
// bazis-specification
# подключаем библиотеку
// echo "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";
require_once "$_SERVER[DOCUMENT_ROOT]/www/Classes/PHPExcel.php";

# Указываем путь до файла .xlsx
// $File = "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/prilozhenie-kb-k-dogovoru-2414-obitel.xlsx";
$File = "$_SERVER[DOCUMENT_ROOT]/www/vpi/$filename";
 
$Excel = PHPExcel_IOFactory::load($File);
//Далее формируем массив из всех листов Excel файла с помощью цикла:
$row_num=0;
$col_num=0;
Foreach($Excel ->getWorksheetIterator() as $worksheet) {
    $lists[] = $worksheet->toArray();
   }
  // Вывод сформированного массива в виде HTML таблиц(ы) :
   foreach($lists as $list){
    echo '<table border="1">';
    // Перебор строк
    foreach($list as $row){
      $row_num++;
      echo '<tr>';
      // Перебор столбцов
      foreach($row as $col){
        $col_num++;
        $pos_panel = strpos($col, "Спецификация на панели");
        $pos_furn = strpos($col, "Спецификация на крепеж");
        if ($pos_panel !== false) {

          

           echo '<td>'.$col.' ПАНЕЛИ START-'.($row_num-3).'</td>';
          // echo "Строка '$findme' не найдена в строке '$mystring'";
          
      } else if ($pos_furn !== false) { 
         echo '<td>'.$col.' ФУРНИТУРА START-'.($row_num-3).'</td>';
          // echo "Строка '$findme' найдена в строке '$mystring'";
          // echo " в позиции $pos";
         
      } else { 
        echo '<td>'.$col.'</td>';
      }
        
    }
    echo '</tr>';
    }
    echo '</table>';
    echo 'Всего '.$row_num.' строк';
   }//foreach($lists as $list)
 
// $order=end(explode(" ", $Excel->getActiveSheet()->getCell('Document1')->getValue())); 


// // $coordColSum= $Excel->getActiveSheet()->getCell('Sum')->getColumn(); //столбец 'A'

// try{
//     // $s=1/0;
//     $coordColSum= $Excel->getActiveSheet()->getCell('Sum')->getColumn(); //столбец 'A'
   
// }catch (Exception $e) {
//     //Выводим сообщение об исключении.
//     // echo $ex->getMessage();
//     // echo 'Поймали исключение<br />';
//     // echo 'Error :' . $e->getMessage() . '<br />';
//     $coordRowSum=$Excel->getActiveSheet()->getCell('Name')->getRow();    
//     // $coordColSum=$Excel->getActiveSheet()->getCell('Name')->getColumn();    
//     $datarow = $Excel->getActiveSheet()->rangeToArray('A'.$coordRowSum.':' . 'AA'.$coordRowSum); 
//     // echo "<pre>";
// 	// print_r($datarow[0]);
//     // echo "</pre>";
//     $key = array_search('Сумма', $datarow[0]);
//     $simbol = chr(65+$key);
//     // echo '$sum '.$simbol.$key;
//     $coordColSum= $Excel->getActiveSheet()->getCell($simbol.$key)->getColumn(); //столбец 'A'
//     // exit();
// }

// // если $order== "" искать вхождение в строке
// if(!$order) {// пустая ячейка

//     $orderRow=$Excel->getActiveSheet()->getCell('Document1')->getRow();    
//     $datarow = $Excel->getActiveSheet()->rangeToArray('A'.$orderRow.':' . $coordColSum.$orderRow);   
//     $datarow = array_filter($datarow[0]);    
//     $datarow = array_diff($datarow, array(' '));
//      $order=end(explode(" ",array_shift($datarow)));     
// //      echo "<pre>";
// // 	print_r($order);
// //  echo "</pre>";
// //  exit();
//     // 

// }


// // $client= $Excel->getActiveSheet()->getCell('C1')->getValue(); 
// $client= $Excel->getActiveSheet()->getCell('Customer')->getValue(); 
// // $coord= $Excel->getActiveSheet()->getCell('Customer')->getCoordinate(); // координата ячейки 'C5'
// $coordRow= $Excel->getActiveSheet()->getCell('NumStart')->getRow(); //номер строки '5'

// $coordColProduct= $Excel->getActiveSheet()->getCell('NumStart')->getColumn(); //столбец 'O'
// $coordColName= $Excel->getActiveSheet()->getCell('Name')->getColumn(); //столбец 'B'
// # С какой строки начинаются данные
// $Start = $coordRow-1;
// $endRow= $Excel->getActiveSheet()->getCell('NumEnd')->getRow()-1; //номер строки '40'
// if(!$endRow) {$endRow=1000;}// пустая ячейка
// $Res = array();
// for ($i= $Start; $i <= $endRow; $i++)
// {
    
//     $Row = new stdClass(); // пустой класс
//     // $Row->id = $i;
//     $Row->client = $client;
// 	$Row->order = $order;	
//     $Row->product = $Excel->getActiveSheet()->getCell($coordColProduct.$i )->getValue(); 
//     // if($Row->product == $Excel->getActiveSheet()->getCell('A'.($i+1) )->getValue()) continue;// объединенная ячейка
//     # Преобразовываем формат даты из MS в привычный
//     // $Row->date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($oRow->date));
//     $Row->name = $Excel->getActiveSheet()->getCell($coordColName.$i )->getValue(); 	
//     $Row->sum = $Excel->getActiveSheet()->getCell($coordColSum.$i )->getValue(); 
 
//     if($Row->product == null) continue;// пустая ячейка
		
//     $Res[] = $Row;
// }
	 
// //  echo "<pre>";
// // 	print_r($Res);
// //  echo "</pre>";
//  echo "<p><b>Изделия: </b><span id=\"productApp_output\"></span> </p>";
//  echo "<br>";
//  $idfile=current(explode(".", $randomName));
// 					echo '<table border="1" class="table table-striped table-responsive" id="'.$idfile.'">'; 			
		
// 						$num = count ($Res); //строк с шапкой
//                         // echo 'num '. $num; 
                        
// 						for ($row=0; $row < $num; $row++) { 
// 							echo "<tr>"; 
// 							if($row==0){
//                                 echo '<td class="text-success">КДП</td>';
//                                 echo '<td class="text-warning">ДП</td>';
//                                 echo "<td>Заказчик</td>";
//                                 echo "<td>Заказ</td>";
//                                 echo "<td>". $Res[$row]->product." </td>"; 
//                                 // echo "<td>№2</td>";// для ручного копирования                       
//                                 echo "<td>". $Res[$row]->name." </td>";
//                                 echo "<td>". $Res[$row]->sum." </td>";
                                
//                             }else{
//                                 echo '<td> <div class="material-switch pull-right">
//                                      <input id="kd'.$row.$idfile.'" name="kd"  type="checkbox" onclick="checkAddress(this)"/>
//                                      <label for="kd'.$row.$idfile.'" class="label-success"></label>
//                                      </div></td>';
//                                 echo '<td> <div class="material-switch pull-right">
//                                      <input id="dp'.$row.'" name="dp" type="checkbox" onclick="checkAddress(this)"/>
//                                      <label for="dp'.$row.'" class="label-warning"></label>
//                                      </div></td>';
//                                 echo "<td>". $Res[$row]->client." </td>";
//                                 echo "<td>". $Res[$row]->order." </td>";                                
//                                 echo '<td id="productApp'.$row.'">'. $Res[$row]->product. '</td>'; 
//                                 // echo "<td>".$coord."</td>";// для ручного копирования                          
//                                 echo "<td>". $Res[$row]->name." </td>";
//                                 echo "<td>". str_replace(".", ",", $Res[$row]->sum)." </td>";
                                
                               
//                             }                           

                            
						

// 							echo "</tr>"; 
						
//                         } //for	
                        
				
//                     echo '</table>';
//                     echo '<input type="hidden" id="currfile" value="'.$randomName.'" form="frm">' ;  

// //  echo "<hr>";

 ?>