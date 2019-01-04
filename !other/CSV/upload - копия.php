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
			echo '<table border="1" class="table table-striped table-responsive" ><tr>'; 
			if ($handle) {
				while (($buffer = fgets($handle, 4096)) !== false) {
					// echo $buffer . "<hr>";
					list($client,$address,$number_order,,,$complect,$product,$product2,,,,$def,,,,,,,,,,$floor,$room,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$end) = explode(';', $buffer);
					$data=array($client,$address,$number_order,$complect,$product,$product2,$def,$floor,$room);
	
					$num = count ($data); //полей в строке $row
					for ($c=0; $c < $num; $c++) { 
					// output data    
					// echo "<td style='white-space: nowrap;'>". $data[$c]." </td>"; 
					echo "<td>". $data[$c]." </td>"; 
					} 
					echo "</tr><tr>"; 
	
				
					// echo $client." | ".$address." | ".$number_order." | ".$complect." | ".$product." | ".$def." | ".$floor." | ".$room; // hello, world
					// echo "<hr>";
				}
				if (!feof($handle)) {
					echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
				}
				echo '</tr></table>'; 
				fclose($handle);
			}
			
			}
			else {
				// Показать сообщение об ошибке, если что-то пойдет не так.
				echo "Что-то пошло не так. Убедитесь, что файл не поврежден!";
			}

// mysqli_close($dbconn);
?>