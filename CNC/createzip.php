<?php
	$error = "";			//error holder
	if(isset($_POST['folder'])){
		$post = $_POST;		
		$file_folder = "uploads/";	// folder to load files
		if(extension_loaded('zip')){	// Checking ZIP extension is available		
			$arrfiles = glob("uploads/correct".$post['folder']."/*");
			if(isset($arrfiles) and count($arrfiles) > 0){	// Checking files are selected
				$zip = new ZipArchive();			// Load zip library	
				$zip_name = time().".zip";	// Zip name				
				if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE){		// Opening zip file to load files
					$error .=  "* К сожалению создание ZIP в это время невозможно<br/>";
				}

				foreach($arrfiles as $file){
					// $error .= $file_folder.$file." ";					
					$zip->addFile($file,basename($file, ".cnc"));			// Добавление файлов в архив zip
				}
				$zip->close();				

				if(file_exists($zip_name)){
					// push to download the zip
					header('Content-type: application/zip');
					header('Content-Disposition: attachment; filename="'.$zip_name.'"');					
					readfile($zip_name);
					// remove zip file is exists in temp path
					unlink($zip_name);					
				}
				
			}else
				$error .= "* Пожалуйста, загрузите файлы для проверки <br>";
		}else
			$error .= "* У вас нет расширения ZIP <br/>";			
	}
	?>