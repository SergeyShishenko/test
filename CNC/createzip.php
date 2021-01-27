<?php
	$error = "";			//error holder
	if(isset($_POST['createzip'])){
		$post = $_POST;		
		$file_folder = "uploads/";	// folder to load files
		if(extension_loaded('zip')){	// Checking ZIP extension is available

			$arrfiles = glob("uploads/correct".$_POST['createzip']."/*");
			if(isset($arrfiles) and count($arrfiles) > 0){	// Checking files are selected
				$zip = new ZipArchive();			// Load zip library	
				$zip_name = time().".zip";	// Zip name
				// $error .= "zip_name ".$zip_name;		
				if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE){		// Opening zip file to load files
					$error .=  "* К сожалению создание ZIP не удалось в это время<br/>";
				}

				foreach($arrfiles as $file){
					$error .= $file_folder.$file." ";					
					$zip->addFile($file);			// Добавление файлов в архив zip
				}
				$zip->close();

				if(file_exists($zip_name)){
					// push to download the zip
					header('Content-type: application/zip');
					header('Content-Disposition: attachment; filename="'.$zip_name.'"');					
					readfile($zip_name);
					// remove zip file is exists in temp path
					// unlink($zip_name);
				}
				
			}else
				$error .= "* Пожалуйста, выберите файл для zip-архива <br/>";
		}else
			$error .= "* У вас нет расширения ZIP <br/>";
	}
	// Вывод сообщений о результате загрузки.
// header('Content-Type: application/json');
// // echo json_encode($zip_name, JSON_UNESCAPED_UNICODE);
// echo json_encode($error, JSON_UNESCAPED_UNICODE);
// // echo json_encode($arrfiles, JSON_UNESCAPED_UNICODE);
// exit();
?>
