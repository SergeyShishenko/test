<?php

 //подключаем конфигурационный файл
 define('__ROOT__', dirname(dirname(__FILE__))); 
 // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
 require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 

//  $dbconn=dbconnect();
// echo  PATH__FILES ."!!!!!!!!!!!!!!";
// exit();

// Вытаскиваем необходимые данные
$file = $_POST['value'];
$name = $_POST['name'];
$type = $_POST['type'];


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
						break;
					case "word":
						$uploaddir = '../'.PATH__FILES.'doc/';
						break;
					case "excel":
						$uploaddir = '../'.PATH__FILES.'xls/';
						break;
					case "dwg":
						$uploaddir = '../'.PATH__FILES.'dwg/';
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

			// echo $type ;
			
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



?>