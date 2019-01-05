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
$decodedData = iconv("WINDOWS-1251", "UTF-8", $decodedData);
// Вы можете использовать данное имя файла, или создать произвольное имя.
// Мы будем создавать произвольное имя!
$randomName = substr_replace(sha1(microtime(true)), '', 8).'.'.$mime;
// $randomName='_2312.csv';

// function compare ($v1, $v2) {
//     /* Сравниваем значение по ключу date_reg */
//     if ($v1[8] == $v2[8]) return 0;
//     return ($v1[8] < $v2[8])? -1: 1;
//   }

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
				/////"head"    
					case "img":
						$uploaddir = '../'.PATH__FILES.'images/';
						
						break;
					case "pdf":
						$uploaddir = '../'.PATH__FILES.'pdf/';
						$field="pdf_obj";
						$tbl="obj_download";
						break;
					case "word":
						$uploaddir = '../'.PATH__FILES.'doc/';
						$field="doc_obj";
						$tbl="obj_download";
						break;
					case "excel":
						$uploaddir = 'xlscsv/';
						$field="xls_obj";
						$tbl="obj_download";
						break;
					case "dwg":
						$uploaddir = '../'.PATH__FILES.'dwg/';
						$field="dwg_obj";
						$tbl="obj_download";
						break;
			}
			
			if(file_put_contents($uploaddir.$randomName, $decodedData)) {
					// Записываем данные изображения в БД
					// mysql_query ("INSERT INTO images (date,catalog,filename) VALUES (NOW(),'$uploaddir','$randomName')");
					// if  ($type=="img"){
					//  	include('classSimpleImage.php');
					// 	// Следующий участок кода загрузит изображение image.jpg, 
					// 	// изменить его ширину до 100 пикселей и высоту до 100 пикселей, 
					// 	// а затем сохранит как image1.jpg. 
					// 	$image = new SimpleImage();
					// 	$image->load($uploaddir.$randomName);
					// 	$image->resize(200, 200);
					// 	$image->save($uploaddir.'thumbs/tbs'.$randomName);
					
					// }

			
				// $sql = "UPDATE `$tbl` SET `$field` = '$randomName' WHERE `obj_id`=$id";
				// if(mysqli_query($dbconn,$sql))
				// 	{        
					
					
				
				// 	}else{//вывод ошибки 
				// 		header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
				// 		exit();
				// 	}

				// echo $randomName." ".$id;
				$filename=$uploaddir.$randomName;
				$handle = @fopen($filename, "r");			
				$data=array();
				if ($handle) {
					while (($buffer = fgets($handle, 4096)) !== false) {
						// echo $buffer . "<hr>";
						list($client,$address,$number_order,,,$complect,$product,$product2,,,,$def,,,,,,,,,,$floor,$room,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$end) = explode(';', $buffer);
					
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
					echo "<h4>Заказчик: ".$data[1][0]."</h2>";
					echo "<h4>Объект: ".$data[1][1]."</h2>";
					echo "<h4>№ заказа: ".$data[1][2]."</h2>";

					// $product2_sum = array_sum(array_column($array, 4));
					if (array_sum(array_column($array, 4)) === 0){
						// echo "<h4>№ изделия по повт.приложению: ".$product2_sum."</h2>";
						array_push($exclude,"4");
					}
					

					if(count(unique_multidim_array($data,8))==2){echo "<h4>Этаж: ".$data[1][8]."</h2>";array_push($exclude,"8"); }
					// $array = unique_multidim_array($data,8);// проверка на один этаж
					// echo'<pre>';					
					// echo "<h4>array_keys : ".print_r($array)."</h2>";					
					// echo'</pre>';


					// <div class="material-switch pull-right">
					// <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
					// <label for="someSwitchOptionSuccess" class="label-success"></label>
					// </div>

				
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
									<input id="someSwitchOptionSuccess'.$row.'" name="someSwitchOption001" type="checkbox"/>
									<label for="someSwitchOptionSuccess'.$row.'" class="label-success"></label>
									</div></td>';
								}

							$numcol = count ($array[$row]); //колонок 
							for ($col=0; $col < $numcol; $col++) { 

								
							
								if (false === array_search($col, $exclude)){
									echo "<td>". $array[$row][$col]." </td>";
								}
								
							}

							echo "</tr>"; 
						
						} //for	
				
					echo '</table>'; 
					echo $filename; 
				// создание таблицы end

			}//if file_put_contents
			else {
				// Показать сообщение об ошибке, если что-то пойдет не так.
				echo "Что-то пошло не так. Убедитесь, что файл не поврежден!";
			}

// mysqli_close($dbconn);
?>