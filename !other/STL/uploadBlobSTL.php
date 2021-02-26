<?php
 
// Название <input type="file">
$input_name = 'file';
 
// Разрешенные расширения файлов.
$allow = array();


 
// Запрещенные расширения файлов.
$deny = array(
	'phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp', 
	'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html', 
	'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe'
);
 
// Директория куда будут загружаться файлы.
// уникальное имя папки
$rand_folder=rand();
// $rand_folder=1;

// $path = __DIR__ . '/uploads/'.$rand_folder.'/';

// mkdir($path, 0777, true);				


$data = array();
 
if (!isset($_FILES[$input_name])) {
	$error = 'Файлы не загружены.';
	$data[] = 'Файлы не загружены.';
} else {
	// Преобразуем массив $_FILES в удобный вид для перебора в foreach.
	$files = array();
	$diff = count($_FILES[$input_name]) - count($_FILES[$input_name], COUNT_RECURSIVE);
	if ($diff == 0) {
		$files = array($_FILES[$input_name]);
	} else {
		foreach($_FILES[$input_name] as $k => $l) {
			foreach($l as $i => $v) {
				$files[$i][$k] = $v;
			}
		}		
	}	
 
	foreach ($files as $file) {
		$error = $success = '';
 
		// Проверим на ошибки загрузки.
		if (!empty($file['error']) || empty($file['tmp_name'])) {
			$error = 'Не удалось загрузить файл.';
		} elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) {
			$error = 'Не удалось загрузить файл.';
		} else {
			// Оставляем в имени файла только буквы, цифры и некоторые символы.
			$pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
			$name = mb_eregi_replace($pattern, '-', $file['name']);
			$name = mb_ereg_replace('[-]+', '-', $name);
			$parts = pathinfo($name);
			
			// if (empty($name) || empty($parts['extension'])) {
			// 	$error = 'Недопустимый тип файла (1)';
			// } else
			// if (strtolower($parts['extension'])!='stl') {
			// 	$error = 'Недопустимый тип файла (2)';
			// } else
			if (!empty($allow) && !in_array(strtolower($parts['extension']), $allow)) {
				$error = 'Недопустимый тип файла (3)';
			} elseif (!empty($deny) && in_array(strtolower($parts['extension']), $deny)) {
				$error = 'Недопустимый тип файла (4)';
			} else {
				// Перемещаем файл в директорию.
			
				$success = 'Кусок «' . $name . '» успешно прочитан: '. $_POST['fname']." (".$file['size']." байт)";

				// if (move_uploaded_file($file['tmp_name'], $path . $name)) {
				// 	// Далее можно сохранить название файла в БД и т.п.
				// 	$success = 'Файл «' . $name . '» успешно загружен.';
				// } else {
				// 	$error = 'Не удалось загрузить файл.';
				// }
			}
		}
		
		if (!empty($success)) {
			$data[] = $success ;  
		}
		if (!empty($error)) {
			$data[] = $error ;  
		}
	}
	$data["sessId"] = $rand_folder;
	// $data[] = $path;
}
 // ждать 2 секунды
// usleep(2000000);

// usleep(1000);

// // Вывод сообщений о результате загрузки.
// net::ERR_CONNECTION_RESET ОШИБКА!
header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
// exit();
?>

