<?php

 //подключаем конфигурационный файл
 define('__ROOT__', dirname(dirname(__FILE__))); 
 // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
 require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 

 $dbconn=dbconnect();
// echo  PATH__FILES ."!!!!!!!!!!!!!!";
// exit();
if ( !$dbconn ) {
    die(mysql_error());
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

// Вы можете использовать данное имя файла, или создать произвольное имя.
// Мы будем создавать произвольное имя!
$randomName = substr_replace(sha1(microtime(true)), '', 8).'.'.$mime;

// Создаем изображение на сервере
// switch ($mimeType) {	   
// 		case "img":
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
						$uploaddir = '../'.PATH__FILES.'xls/';
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
				if  ($type=="img"){
				 	include('classSimpleImage.php');
					// Следующий участок кода загрузит изображение image.jpg, 
					// изменить его ширину до 100 пикселей и высоту до 100 пикселей, 
					// а затем сохранит как image1.jpg. 
					$image = new SimpleImage();
					$image->load($uploaddir.$randomName);
					$image->resize(200, 200);
					$image->save($uploaddir.'thumbs/tbs'.$randomName);
				
				}

			// mysqli_query($dbconn, "UPDATE `obj_download` SET `xls_obj` = $randomName WHERE `obj`.`obj_id`=$id");
			$sql = "UPDATE `$tbl` SET `$field` = '$randomName' WHERE `obj_id`=$id";
			if(mysqli_query($dbconn,$sql))
        {        
            // $insert_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL 
          
    
        }else{//вывод ошибки 
            header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
            exit();
        }

			echo $randomName." ".$id;
			
			}
			else {
				// Показать сообщение об ошибке, если что-то пойдет не так.
				echo "Что-то пошло не так. Убедитесь, что файл не поврежден!";
			}
		// break;
		// case "pdf":
		// 	// загруженные файлы помещаются в эту папку
		// 	$uploaddir = 'pdf/';
		// 	if(file_put_contents($uploaddir.$randomName, $decodedData)) {
		// 		// Записываем данные изображения в БД
		// 		mysql_query ("INSERT INTO images (date,catalog,filename) VALUES (NOW(),'$uploaddir','$randomName')");
				
		// 	// echo $randomNameж
		// 	}
		// 	else {
		// 		// Показать сообщение об ошибке, если что-то пойдет не так.
		// 		echo "Что-то пошло не так. Убедитесь, что файл не поврежден!";
		// 	}
		// break;
// }

mysqli_close($dbconn);
unset($GLOBALS['dbconn']);

?>