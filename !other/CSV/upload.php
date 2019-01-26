<?php

//  //подключаем конфигурационный файл
//  define('__ROOT__', dirname(dirname(__FILE__))); 
//  // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
//  require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 

//  $dbconn=dbconnect();
// // echo  PATH__FILES ."!!!!!!!!!!!!!!";
// // exit();
// if ( !$dbconn ) {
//     die(mysql_error());
// }

if(isset($_POST["arr"]) )//генерация файла
{
	echo "localhost !!!!!!!";
			exit();
	 if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php')) 
	 	{
			
			
			require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
		}
		else {
			require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
		}

		$objReader = PHPExcel_IOFactory::createReader('Excel5');
		// echo var_dump($objReader);
		// 	exit();

        if (file_exists($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/PR_template.xls")) {
			// echo "<br> Найден ".$_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/PR_template.xls";
			// exit();
			
			$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/PR_template.xls");// для localhost !!!!!!!
			
        }
        else {
			// echo "<br> Не найден -".dirname(__FILE__)."\\PR_template.xls" ;
			// exit();
			$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/vpi/templates/PR_template.xls");// для сайта !!!!!!!
        }
		// $objPHPExcel->getActiveSheet()->setCellValue('D1', PHPExcel_Shared_Date::PHPToExcel(time()));
	 echo "<pre>";
	 echo print_f($_POST["arr"]);	 
     echo "</pre>";
	 exit();
	 foreach ($_POST["arr"] as $key=>$v1)
	  {
		echo '<hr>';
		echo "filename ".$key.".xlsx";
		$filename=$key.".xlsx";
		// echo "<br>";
		// echo $v1['id']." ";

			# Указываем путь до файла  .xlsx			
			$File = "$_SERVER[DOCUMENT_ROOT]/www/!other/CSV/xlscsv/$filename";			
			$Excel = PHPExcel_IOFactory::load($File);			
			$order=end(explode(" ", $Excel->getActiveSheet()->getCell('Document1')->getValue())); 		
			$client= $Excel->getActiveSheet()->getCell('Customer')->getValue(); 		
			$coordRow= $Excel->getActiveSheet()->getCell('NumStart')->getRow(); //номер строки '5'
			$coordColSum= $Excel->getActiveSheet()->getCell('Sum')->getColumn(); //столбец 'A'
			$coordColProduct= $Excel->getActiveSheet()->getCell('NumStart')->getColumn(); //столбец 'O'
			$coordColName= $Excel->getActiveSheet()->getCell('Name')->getColumn(); //столбец 'B'
			# С какой строки начинаются данные
			$Start = $coordRow-1;
			$endRow= $Excel->getActiveSheet()->getCell('NumEnd')->getRow()-1; //номер строки '40'
			if(!$endRow) {$endRow=1000;}// пустая ячейка
			$Res = array();


$i=0;
		foreach ($v1 as  $v=>$v2) {
			echo "row:".$v;			
			echo ' {kd-'.$v2['kd']." ";
			echo ' dp-'.$v2['dp']."}";
			echo "<br>";

			$baseRow = 3;
			$row = ($i)+$baseRow;
			$objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);

			

			// $sheet->getColumnDimension('K')->setWidth(40); 
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, 'Шишенко')
										->setCellValue('B'.$row, $client)									
										->setCellValue('C'.$row, $order)									
										->setCellValue('D'.$row, $v)									
										->setCellValue('F'.$row, $Excel->getActiveSheet()->getCell($coordColName.($v+1+$Start) )->getValue() )	
										->setCellValue('G'.$row, $Excel->getActiveSheet()->getCell($coordColSum.($v+1+$Start) )->getValue() )	
										->setCellValue('H'.$row, 0.0135 )	
										->setCellValue('I'.$row, $v2['dp'] )	
										->setCellValue('J'.$row, '=(G'.$row.'*H'.$row.')*I'.$row )
										->setCellValue('K'.$row, 0.0135  )	
										->setCellValue('L'.$row, $v2['kd'] )	
										->setCellValue('M'.$row, '=(G'.$row.'*K'.$row.')*L'.$row );	
										$i++;	
			$objPHPExcel->getActiveSheet()->getRowDimension($row)->setRowHeight(-1);							
									
		}
		

	  }//foreach $_POST["arr"]



				$objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);//удаление строки
			
				// $objPHPExcel->getActiveSheet()->setAutoFilter($objPHPExcel->getActiveSheet()->calculateWorksheetDimension());
				
				$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
				
				$fname="price-".date('m-d-Y-H-i-s').".xls";

				if (file_exists($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/PR_template.xls")) {
					
					$objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
					// $fname=$_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname;
					//скачивание файла					
					// header('Location: $_SERVER["DOCUMENT_ROOT"] ."/www/vpi/downloadf.php"');
					
					
				}
				else {
					$objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!

					// $fname=$_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname;
					//скачивание файла
					// header('Location: $_SERVER["DOCUMENT_ROOT"] ."/vpi/downloadf.php"');

				}

				echo "./vpi/".$fname;			
				unset($data);	


				
				

		
	
	exit();
}//isset($_POST["arr"]


if(isset($_POST["recordToDelete"]) )
{
	if (unlink("xlscsv/".$_POST["recordToDelete"])){
		echo "Файл: ".$_POST["recordToDelete"]." удален!";
	}else{echo "Ошибка! Файл: ".$_POST["recordToDelete"]." не удален!";}
	exit();
}


// Вытаскиваем необходимые данные
$file = $_POST['value'];
$name = $_POST['name'];
$type = $_POST['type'];
$id  = $_POST['id'];
// $field  = $_POST['field'];


// Получаем расширение файла
$getMime = explode('.', $name);
$mime = end($getMime);

//  header('HTTP/1.1 400 Zapros dla dobavleniy! '.$mime);
        
// exit();

// Выделим данные
$data = explode(',', $file);

// Декодируем данные, закодированные алгоритмом MIME base64
$encodedData = str_replace(' ','+',$data[1]);
$decodedData = base64_decode($encodedData);

if ($mime =="csv"){
	$decodedData = iconv("WINDOWS-1251", "UTF-8", $decodedData);
// Вы можете использовать данное имя файла, или создать произвольное имя.
// Мы будем создавать произвольное имя!
$randomName = substr_replace(sha1(microtime(true)), '', 8).'.'.$mime;
// $randomName='_2312.csv';


function unique_multidim_array($array, $key) { 
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    	} 
    return $temp_array; 
	} 
	// загруженные файлы помещаются в эту папку
	switch ($type) {
		 
			// case "img":
			// 	$uploaddir = '../'.PATH__FILES.'images/';
				
			// 	break;
			// case "pdf":
			// 	$uploaddir = '../'.PATH__FILES.'pdf/';
			// 	$field="pdf_obj";
			// 	$tbl="obj_download";
			// 	break;
			// case "word":
			// 	$uploaddir = '../'.PATH__FILES.'doc/';
			// 	$field="doc_obj";
			// 	$tbl="obj_download";
			// 	break;
			case "excel":
				$uploaddir = 'xlscsv/';
				// $field="xls_obj";
				// $tbl="obj_download";
				break;
			// case "dwg":
			// 	$uploaddir = '../'.PATH__FILES.'dwg/';
			// 	$field="dwg_obj";
			// 	$tbl="obj_download";
			// 	break;
	}
			
	if(file_put_contents($uploaddir.$randomName, $decodedData)) {
		
		$filename=$uploaddir.$randomName;
		$handle = @fopen($filename, "r");			
		$data=array();
		if ($handle) {
			while (($buffer = fgets($handle, 4096)) !== false) {
				// echo $buffer . "<hr>";
				list($client,$address,$number_order,,,$complect,$product,$product2,,,,$def,,,,,,,,,,$floor,$room,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$end) = explode(';', $buffer);
				$complect = end(explode('/', $complect));
				$room = explode('/', $room)[0];
				
			//                           0        1        2             3        4        5     6     7        8
				array_push($data, array($client,$address,$number_order,$product,$product2,$def,$room,$complect,$floor));					
				
			}//while
			if (!feof($handle)) {
				echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
			}
			
			fclose($handle);
		}
		// создание таблицы begin
			$array=$data;
			$exclude=array("0","1","2");// исключаемые индексы
			echo "<p><b>Заказчик: </b><span id=\"client_output\">".$data[1][0]."<span></p>";
			echo "<p id='agent' class='changeclick'><b>Представитель: </b><span id=\"agent_output\"></span> <input type='text' class='form-control'  id='agent-name' value='' required></p>";
			
			echo "<p><b>Объект: </b><span id=\"address_output\">".$data[1][1]."<span></p>";
			if (array_sum(array_column($array, 4)) === 0){// echo "<h4>№ изделия по повт.приложению: ".$product2_sum."</h2>";						
				array_push($exclude,"4");
			}	
			if(count(unique_multidim_array($data,8))==2)
			{
				echo "<p><b>Этаж: </b><span id=\"floor_output\">".$data[1][8]."</span></p>";array_push($exclude,"8");
			}
			else{
				echo "<p><b>Этаж: </b><span id=\"floor_output\"></span></p>";	
			}
			echo "<p><b>Помещение: </b><span id=\"room_output\"></span> </p>";
			echo "<p><b>Комплект изделий:</b><span id=\"complect_output\"></span> </p>";
			echo "<p><b>№ заказа: </b><span id=\"order_output\">".$data[1][2]."</span></p>";
			echo "<p  class='changeclick'><b>Изделия: </b><span id=\"product_output\"></span> <input type='text' class='form-control'  id='product-name' value='' required></p>";
			echo "<br>";
			echo '<table border="1" class="table table-striped table-responsive" >'; 			

				$num = count ($array); //строк с шапкой
				// echo "$num ". $num; 
				for ($row=0; $row < $num; $row++) { 
					echo "<tr>"; 
					if ($row===0){
						echo "<td>Выбрать</td>";
					}else{
						echo '<td> <div class="material-switch pull-right">
							<input id="someSwitchOptionSuccess'.$row.'" name="someSwitchOption001" type="checkbox" onclick="checkAddress(this)"/>
							<label for="someSwitchOptionSuccess'.$row.'" class="label-success"></label>
							</div></td>';
						}

					$numcol = count ($array[$row]); //колонок 
					for ($col=0; $col < $numcol; $col++) { 

						
					
						if (false === array_search($col, $exclude)){
							// $client,$address,$number_order,$product,$product2,$def,$room,$complect,$floor
							switch ($col) {
								/////"head"    
									case "0":
										$id = 'client_'.$row.$col;												
										break;
									case "1":
										$id = 'address_'.$row.$col;
										break;
									case "2":
										$id = 'numberorder_'.$row.$col;
										break;
									case "3":
										$id = 'product_'.$row.$col;
										break;
									case "4":
										$id = 'product2_'.$row.$col;
										break;
									case "5":
										$id = 'def_'.$row.$col;
										break;
									case "6":
										$id = 'room_'.$row.$col;
										break;
									case "7":
										$id = 'complect_'.$row.$col;
										break;
									case "8":
										$id = 'floor_'.$row.$col;
										break;
							}
							echo '<td id="'.$id.'">'.$array[$row][$col].'</td>';
						}
						
					}

					echo "</tr>"; 
				
				} //for	
		
			echo '</table>'; 
			echo '<input type="hidden" id="currfile" value="'.$randomName.'" form="frm">' ; 
		// создание таблицы end

	}//if file_put_contents
	else {
		// Показать сообщение об ошибке, если что-то пойдет не так.
		echo "Что-то пошло не так. Убедитесь, что файл не поврежден!";
	}
}//if csv
elseif ($mime =="xlsx"){
	switch ($type) {	
		case "excel":
			$uploaddir = 'xlscsv/';			
		break;		
	}

	$randomName = substr_replace(sha1(microtime(true)), '', 8).'.'.$mime;
	if(file_put_contents($uploaddir.$randomName, $decodedData)) {		
		$filename=$uploaddir.$randomName;
		require_once "$_SERVER[DOCUMENT_ROOT]/www/!other/XLSX/getxlsx.php"; 
		}
	// echo "Файл XLSX!";
}//elseif





?>