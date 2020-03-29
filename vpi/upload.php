<?php
// vpi\upload.php
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

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
	// require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
	$site='';
}
else {
	// require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
	$site='/www';
}
// echo "site $site";
// exit();

if(isset($_POST["arr"]) )//генерация файла
{
	echo "localhost !!!!!!!";
			exit();
			require_once ($_SERVER['DOCUMENT_ROOT'] .$site.'/Classes/PHPExcel/IOFactory.php');

		$objReader = PHPExcel_IOFactory::createReader('Excel5');
		// echo var_dump($objReader);
		// 	exit();
		$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$site."/vpi/templates/PR_template.xls");// для localhost !!!!!!!
       
	//  echo "<pre>";
	//  echo print_r($_POST["arr"]);	 
    //  echo "</pre>";
	 exit();
	 foreach ($_POST["arr"] as $key=>$v1)
	   {
			echo '<hr>';
			echo "filename ".$key.".xlsx";
			$filename=$key.".xlsx";
			// echo "<br>";
			// echo $v1['id']." ";

				# Указываем путь до файла  .xlsx			
				$File = "$_SERVER[DOCUMENT_ROOT]$site/vpi/xlscsv/$filename";			
				$Excel = PHPExcel_IOFactory::load($File);			
				$order=end(explode(" ", $Excel->getActiveSheet()->getCell('Document1')->getValue())); 		
				$client= $Excel->getActiveSheet()->getCell('Customer')->getValue(); 		
				$coordRow= $Excel->getActiveSheet()->getCell('NumStart')->getRow(); //номер строки '5'
				try{
					// $s=1/0;
					$coordColSum= $Excel->getActiveSheet()->getCell('Sum')->getColumn(); //столбец 'A'
					
					
				}catch (Exception $e) {
					//Выводим сообщение об исключении.
					// echo $ex->getMessage();
					echo 'Поймали исключение<br />';
					echo 'Error :' . $e->getMessage() . '<br />';
					exit();
				}

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
				$objWriter->save($_SERVER['DOCUMENT_ROOT'] .$site."/vpi/".$fname);// для localhost !!!!!!!
				// if (file_exists($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/PR_template.xls")) {
					
				// 	$objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
					
				// 	// $fname=$_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname;
				// 	//скачивание файла					
				// 	// header('Location: $_SERVER["DOCUMENT_ROOT"] ."/www/vpi/downloadf.php"');
					
					
				// }
				// else {
				// 	$objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!

				// 	// $fname=$_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname;
				// 	//скачивание файла
				// 	// header('Location: $_SERVER["DOCUMENT_ROOT"] ."/vpi/downloadf.php"');

				// }

				echo "./vpi/".$fname;			
				unset($data);	
	
	exit();
}//isset($_POST["arr"]


if(isset($_POST["recordToDelete"]) )
{

	if (file_exists($_POST["recordToDelete"])) {
			if (unlink($_POST["recordToDelete"])){
				echo "Файл: ".$_POST["recordToDelete"]." удален!";
				
			}else{
				echo "Ошибка(recordToDelete)! Файл: ".$_POST["recordToDelete"]." не удален!";
			}
		}



	if(isset($_POST["arrcurrT"]) )
	{
		foreach($_POST["arrcurrT"] as $val) { 
			
			$get = explode('/', $val);
			unlink(end($get));

		echo "Удален файл: ".end($get)."\n";	 
		}
	}
	exit();
}

if(isset($_POST["selorder"]) )
{

	fileopenxlscsv($_POST["selorder"]);
	exit();
}

// Вытаскиваем необходимые данные
$name = $_POST['name'];

$file = $_POST['value'];
$type = $_POST['type'];//excel
$id  = $_POST['id'];
// $field  = $_POST['field'];
// echo "<pre>";
// 	print_r($file);
// 	echo "</pre>";	
// exit();
// Получаем расширение файла
$getMime = explode('.', $name);
$mime = end($getMime);

//  header('HTTP/1.1 400 Zapros dla dobavleniy! '.$mime);
        
// exit();
// if(isset($_POST["id"]) )//если через дроп-зону
// {
	// Выделим данные
	$data = explode(',', $file);

	// Декодируем данные, закодированные алгоритмом MIME base64
	$encodedData = str_replace(' ','+',$data[1]);
	$decodedData = base64_decode($encodedData);


if ($mime =="csv")
{
	$decodedData = iconv("WINDOWS-1251", "UTF-8", $decodedData);
	// 	echo "<pre>";
	// 	print_r($decodedData);
	// 	echo "</pre>";	
	// exit();
	// Вы можете использовать данное имя файла, или создать произвольное имя.
	// Мы будем создавать произвольное имя!
	$randomName = substr_replace(sha1(microtime(true)), '', 8).'.'.$mime;

	////////////////////////////проверка
	// $randomName='_2312.csv';
	///////////////////////////
		// загруженные файлы помещаются в эту папку
	switch ($type)
		{
			
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
				// $uploaddir = 'xlscsv/';
				$uploaddir = '';
				// $field="xls_obj";
				// $tbl="obj_download";
				break;
			// case "dwg":
			// 	$uploaddir = '../'.PATH__FILES.'dwg/';
			// 	$field="dwg_obj";
			// 	$tbl="obj_download";
			// 	break;
		}
			
		$filename=$uploaddir.$randomName;	

	// }
	// $uploaddir.$randomName
	/////////////////////////////////////////////////////////

	if(file_put_contents($filename, $decodedData))
	{
		
		fileopenxlscsv($filename);	


	}//if file_put_contents
	else {
		// Показать сообщение об ошибке, если что-то пойдет не так.
		echo "Что-то пошло не так. Убедитесь, что файл не поврежден!!!!!!";
	}
}//if csv
elseif ($mime =="xlsx")// XLSX
{
	switch ($type) {	
		case "excel":
			$uploaddir = 'xlscsv/';			
		break;		
	}

	$randomName = substr_replace(sha1(microtime(true)), '', 8).'.'.$mime;
	if(file_put_contents($uploaddir.$randomName, $decodedData)) {		
		$filename=$uploaddir.$randomName;

		// зарплата
		// require_once "$_SERVER[DOCUMENT_ROOT]$site/vpi/getxlsx.php"; 
		echo 'Файл не содержит спецификацию Базис-Мебельщика';	
		exit();
	
		}


	
}//elseif XLS
elseif ($mime =="xls")
{
	switch ($type) {	
		case "excel":
			// $uploaddir = 'xlscsv/';			
			$uploaddir = '';			
		break;		
	}

	$randomName = substr_replace(sha1(microtime(true)), '', 8).'.'.$mime;
	if(file_put_contents($uploaddir.$randomName, $decodedData)) {		
		$filename=$uploaddir.$randomName;
		$fileDrop=end(explode("/",$filename));
		
		
		// require_once "$_SERVER[DOCUMENT_ROOT]$site/vpi/getxlsx.php"; 
		
		// Базис-спецификация
		// require_once "$_SERVER[DOCUMENT_ROOT]$site/vpi/getxlsx-bazis-specification.php"; 
		require_once ($_SERVER[DOCUMENT_ROOT].$site."/vpi/getxlsx-bazis-specification4.php"); 
		exit();
		}


	
}//elseif XLS

////////////////////////

function unique_multidim_array($array, $key)
 { 
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



function fileopenxlscsv($filename)
{	
	if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
		// require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
		$site='';
	}
	else {
		// require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
		$site='/www';
	}
	$fileDrop=end(explode("/",$filename));
	if(isset($_POST["selorder"]) )
		{
			// $fileDrop=end(explode("/",$filename));
			// $filename=$_SERVER['DOCUMENT_ROOT'] .$site. $filename;
			$filename=$_SERVER['DOCUMENT_ROOT'] .$site. $filename;
			// $objWriter->save($_SERVER['DOCUMENT_ROOT'] .$site."/vpi/".$fname);// для localhost !!!!!!!
	// 			echo "filename $filename";
	// exit();
		}

	$handle = @fopen($filename, "r");			
	$data=array();

	
	
	$header=true; //заголовок 
	if ($handle) {
		while (($buffer = fgets($handle, 4096)) !== false) 
		{

			if(isset($_POST["selorder"]) )
			{
				$buffer = iconv("WINDOWS-1251", "UTF-8", $buffer);
			}
			// 
			$arraybuffer=explode(';', $buffer);

			//  echo "<pre>";		
			// print_r($arraybuffer);
			// // $key = array_search('Конструктор', $arraybuffer); // 
			// // echo "[".$key."] => ".$arraybuffer[$key];//<Конструктор >16
			// // echo "[".array_search('Конструктор', $arraybuffer)."] => ".$arraybuffer[array_search('Конструктор', $arraybuffer)];//<Конструктор >16
			// echo "</pre>";

			if ($header){
				// echo "<pre>";		
				// print_r($arraybuffer);
				// $key = array_search('Конструктор', $arraybuffer); // 
				// echo "[".$key."] => ".$arraybuffer[$key];//<Конструктор >16
				// // echo "[".array_search('Конструктор', $arraybuffer)."] => ".$arraybuffer[array_search('Конструктор', $arraybuffer)];//<Конструктор >16
				// echo "</pre>";

				$client_key = array_search('Заказчик', $arraybuffer);//Заказчик
				$agent_key = array_search('Предст.заказчика', $arraybuffer);//Предст.заказчика
				$address_key = array_search('Объект', $arraybuffer);//Объект
				$number_order_key = array_search('№ заказа', $arraybuffer);//№ заказа
				$number_complect_key = array_search('№ комплекта', $arraybuffer);//№ комплекта
				$complect_key = array_search('Наименование комплекта', $arraybuffer);//Наименование комплекта
				$product_key = array_search('№ изделия по приложению', $arraybuffer);//№ изделия по приложению
				$product2_key = array_search('№ изделия по повт.приложению', $arraybuffer);//№ изделия по повт.приложению
				$def_key = array_search('Наименование изделия', $arraybuffer);//Наименование изделия

				$check_val = array_search('Конструктор', $arraybuffer);//Конструктор
				if ($check_val !== false){
					$kbKD_key=$check_val;
				}else{
					$kbKD_key="Не назначен";
				}
			

				$check_val = array_search('Исполнитель Диз.проекта', $arraybuffer);//Исполнитель Диз.проекта				
				if ($check_val !== false){
					$kbDP_key=$check_val;
				}else{
					$kbDP_key="Не назначен";
				}


				$floor_key = array_search('Этаж', $arraybuffer);//Этаж
				$room_key = array_search('Помещение', $arraybuffer);//Помещение
				$unit_key = array_search('Ед-ца изм.', $arraybuffer);//Ед-ца изм.
				$count_key = array_search('Количество по дог-ру', $arraybuffer);//Количество по дог-ру
				$serialnum_key = array_search('Серийный №', $arraybuffer);//Серийный №
				$wood_key = array_search('Материал массив', $arraybuffer);//Материал массив
				$veneer_key= array_search('Материал шпон', $arraybuffer);//Материал шпон
				$pic_key = array_search('Рисунок', $arraybuffer);//Рисунок
				$numsample_key = array_search('Порядковый № образца цвета заказчика', $arraybuffer);//Порядковый № образца цвета заказчика
				$RPG_key = array_search('Руководитель группы', $arraybuffer);//Руководитель группы
				$VAP_key = array_search('Архитектор проекта', $arraybuffer);//Архитектор проекта
				
				// $end //Акт подписан
				$header=false;
			}
			// exit();
			$agent="н.д.";			
			// list($client,$address,$number_order, , ,$complect,$product,$product2, , , ,$def, , , , ,$kbKD,$kbDP, , , ,$floor,$room,$unit,$count,$serialnum,$wood,$veneer,$pic,$numsample,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$end) = explode(';', $buffer);
			// $kbKD="нет";
			$agent = $arraybuffer[$agent_key];//Предст.заказчика
			$address  = $arraybuffer[$address_key];//Объект
			$number_order = $arraybuffer[$number_order_key]; //№ заказа
			$number_complect = $arraybuffer[$number_complect_key]; //№ комплекта


			$complect = $arraybuffer[$complect_key]; //Наименование комплекта
			$product = $arraybuffer[$product_key]; //№ изделия по приложению
			$product2 = $arraybuffer[$product2_key]; //№ изделия по повт.приложению
			$def = $arraybuffer[$def_key]; //Наименование изделия
			$kbKD = $arraybuffer[$kbKD_key]; //Конструктор
			$kbDP = $arraybuffer[$kbDP_key]; //Исполнитель Диз.проекта
			$floor = $arraybuffer[$floor_key]; //Этаж
			$room = $arraybuffer[$room_key]; //Помещение
			$unit = $arraybuffer[$unit_key]; //Ед-ца изм.
			$count = $arraybuffer[$count_key]; //Количество по дог-ру
			$serialnum = $arraybuffer[$serialnum_key]; //Серийный №
			$wood = $arraybuffer[$wood_key]; //Материал массив
			$veneer = $arraybuffer[$veneer_key]; //Материал шпон
			$pic = $arraybuffer[$pic_key]; //Рисунок
			$numsample = $arraybuffer[$numsample_key]; //Порядковый № образца цвета заказчика
			$RPG = $arraybuffer[$RPG_key]; //Руководитель группы
			$VAP = $arraybuffer[$VAP_key]; //Архитектор проекта
			// $end //Акт подписан
			$client = $arraybuffer[$client_key]." проверка " . $kbKD;//Заказчик

			$complect = end(explode('/', $complect));
			$room = explode('/', $room)[0];
			
			//                           0        1        2             3        4              5      6         7    8      9      10        11     12    13      14       15     16    17    18   19   20     21
			array_push($data, array($client,$address,$number_order,$product,$product2,$number_complect,$complect,$def,$room,$floor,$unit,$count,$serialnum,$wood,$veneer,$numsample,$pic,$kbKD,$kbDP,$RPG,$VAP,$agent));
				
		}//while

		if (!feof($handle)) {echo "Ошибка: fgets() неожиданно потерпел неудачу\n";}
		
		fclose($handle);
	}
	else{
		echo 'Что-то пошло не так. Убедитесь, что файл не поврежден! $handle '.$filename;
		exit();
	}
	// проверка на соответствие START
		// $reference = array("Заказчик", "Объект", "№ заказа", "№ изделия по приложению", "№ изделия по повт.приложению", "Наименование изделия", "Помещение", "Наименование комплекта", "Этаж", "Ед-ца изм.", "Количество по дог-ру", "Серийный №", "Материал массив", "Материал шпон", "Порядковый № образца цвета заказчика", "Рисунок", "Конструктор", "Исполнитель Диз.проекта");
		// $result = array_diff($reference, $data[0]);
		// echo "<pre>";
		// print_r($data[0]);
		// echo "</pre>";	


		// if (count($result)>0)
		// { 
		// 	echo '<input type="hidden" id="currfile" value="'.$filename.'" form="frm">' ; 

		// 	// УДАЛЕНИЕ ФАЙЛА
		// 		unlink($filename); //удаление 


		// 		echo "Что-то пошло не так. Убедитесь, что файл не поврежден!!!";
		// 		exit();

		// }
	// проверка на соответствие END

	
	

	// создание таблицы begin
		$array=$data;
	// сохранение номеров комплектов
		$arrS_number_complect=array();
		for ($row=1; $row < count ($array); $row++) { 
			
			// echo "номер комплекта ".$array[$row][5]."<br>";
			if ($array[$row][5]==""){
				$array[$row][5]="--";
			}

			array_push($arrS_number_complect,$array[$row][5]);
		}
		$arr_number_complect = array_unique($arrS_number_complect);
		sort($arr_number_complect);

		// var_dump($arr_number_complect);

		// exit();

    //    // пастое значение
	//    $arr_number_complect = array_replace(
	// 	$arr_number_complect,
	// 		array_fill_keys(
	// 			array_keys(
	// 				preg_grep('/^$/', $arr_number_complect)
	// 			),
	// 			'-'
	// 		)
	// 	);
		
		// array_flip(array_flip($arr_number_complect));
		


		$exclude=array("0","1","2");// исключаемые индексы

		if (trim($data[1][21])=='н.д.' || $data[1][0]==$data[1][21] ){$agent_data ="";}else{$agent_data =$data[1][21];}
        
		echo "<div class='sticky row row-mod'>";
			echo "<div >";

				echo "<p id='client' class='changeclick'><b>Заказчик: </b>           <span id=\"client_output\"  class=\"val\">".$data[1][0]."</span> <input type='text' class='form-control' size='40' id='client-name' value=''></p>";

				echo "<p id='agent' class='changeclick'><b>Представитель: </b>       <span id=\"agent_output\"  class=\"val\">".$agent_data." </span> <input type='text' class='form-control' size='40' id='agent-name' value=''></p>";
				
				echo "<p id='address' class='changeclick'><b>Объект: </b>            <span id=\"address_output\"  class=\"val\">".$data[1][1]."</span> <input type='text' class='form-control' size='40' id='address-name' value=''></p>";
				if (array_sum(array_column($array, 4)) === 0){// echo "<h4>№ изделия по повт.приложению: ".$product2_sum."</h2>";						
					array_push($exclude,"4");
				}	
				if(count(unique_multidim_array($data,8))==2)
				{
					echo "<p id='floor' class=''><b>Этаж: </b>            <span id=\"floor_output\"  class=\"val\">".$data[1][8]."</span> <input type='text' class='form-control' size='40' id='floor-name' value=''></p>";array_push($exclude,"8");
				}
				else{
					echo "<p id='floor' class=''><b>Этаж: </b>            <span id=\"floor_output\"  class=\"val\"></span> <input type='text' class='form-control' size='40' id='floor-name' value=''></p>";	
				}
				echo "<p id='room' class=''><b>Помещение: </b>            <span id=\"room_output\"  class=\"val\"></span> <input type='text' class='form-control' size='40' id='room-name' value=''></p>";

				echo "<p id='complect' class='changeclick'><b>Комплект изделий: </b> <span id=\"complectUser_output\"  class=\"val\"></span><span id=\"coma\">&nbsp;</span><span id=\"complect_output\"></span> <input type='text' class='form-control' size='40' id='complectUser-name' value=''></p>";

				echo "<p id='order' class=''><b>№ заказа: </b>            <span id=\"order_output\"  class=\"val\">".$data[1][2]."</span> <input type='text' class='form-control' size='40' id='order-name' value=''></p>";

				echo "<p class='changeclick' ><b>Изделия: </b><span id=\"product_output\"  class=\"val\"></span> <input type='text' class='form-control' size='40' id='product-name' value=''></p>
				
				
				";

			echo "</div>";
			echo "<div >	
			
			<div class='btn-gen'>	

				<label class='checkbox'>
					<input type='checkbox' value='' id='checkvis' >
					Скрыть/показать все не выбранные
				</label>
				<a class='btnA '  href='#'  id='selall'>Добавить/снять все</a>
				<a class='btnA '  href='#'  id='sel'>Добавить выбранное</a>

					

		
				<a class='button-gen ' id='TKD' href='#'>
					<span class='submit-gen' >Титульный КД</span>				
					<span class='loading-gen'><i class='fa fa-spinner fa-pulse '></i></span>				
					<span class='check-gen' title='КД'><i>Скачать</i></span>
				</a>
			
				<a class='button-gen ' id='TDP' href='#' type='button'>
					<span class='submit-gen' >Титульный ДП</span>				
					<span class='loading-gen'><i class='fa fa-spinner fa-pulse '></i></span>				
					<span class='check-gen' title='ДП'><i>Скачать</i></span>
				</a>
			
			</div>
			";
			echo "</div>";
		echo "</div>";
		// echo "<br>";
		echo '<table border="1" class="table table-striped table-responsive zakaz" id="timeGrid">'; 			

			$num = count ($array); //строк с шапкой
			// echo "$num ". $num; 
			for ($row=0; $row < $num; $row++) { 
				$some=$array[$row][4];
				if ($some==""){$some=$array[$row][3];}
				$numcol = count ($array[$row]); //колонок 
				$check_vis='check-vis';
				$check_visS='check-visS';
				$sticky_table='';
				if ($row===0){$check_vis='';$sticky_table='sticky-table';$check_visS='';}
				echo '<tr class="'.$check_vis.' '.$check_visS.' table-head">'; 

				if ($row===0){ // шапка
					echo '<th  class="'.$sticky_table.' ">Выбрать</th>';
					// $numcol = count ($array[$row]); //колонок 
				for ($col=0; $col < $numcol; $col++) { 						
					if (false === array_search($col, $exclude)){
		

						switch ($col) {
							/////"head"    
								case "0":
									$id = 'client_'.$row.$col;												
									$thclass = 'client_th';	
									$vis = '';											
									break;
								case "1":
									$id = 'address_'.$row.$col;
									$thclass = 'address_th';
									$vis = '';
									break;
								case "2":
									$id = 'numberorder_'.$row.$col;
									$id = 'numberorder_th';
									$vis = '';
									break;
								case "3":
									$id = 'product_'.$row.$col;
									$thclass = 'product_th';
									$vis = '';
									break;
								case "4":
									$id = 'product2_'.$row.$col;
									$thclass = 'product2_th';
									$vis = '';
									break;
								case "5":
									$id = 'number_complect_'.$row.$col;
									$thclass = 'number_complect_th';
									$vis = '';
									break;
								case "6":
									$id = 'complect_'.$row.$col;
									$thclass = 'complect_th';
									$vis = '';
									break;
								case "7":
									$id = 'def_'.$row.$col;
									$thclass = 'def_th';
									$vis = '';
									break;
								case "8":
									$id = 'room_'.$row.$col;
									$thclass = 'room_th';
									$vis = '';
									break;
								
								case "9":
									$id = 'floor_'.$row.$col;
									$thclass = 'floor_th';
									$vis = '';
									break;
								case "10"://////////////$unit,$count,$serialnum,$wood,$veneer,$numsample,$pic,$kb
									$id = 'unit_'.$row.$col;												
									$thclass = 'unit_th';	
									$vis = 'hide-info';											
									break;
								case "11":
									$id = 'count_'.$row.$col;
									$thclass = 'count_th';
									$vis = 'hide-info';
									break;
								case "12":
									$id = 'serialnum_'.$row.$col;
									$id = 'serialnum_th';
									$vis = 'hide-info';
									break;
								case "13":
									$id = 'wood_'.$row.$col;
									$thclass = 'wood_th';
									$vis = 'hide-info';
									break;
								case "14":
									$id = 'veneer_'.$row.$col;
									$thclass = 'veneer_th';
									$vis = 'hide-info';
									break;
								case "15":
									$id = 'numsample_'.$row.$col;
									$thclass = 'numsample_th';
									$vis = 'hide-info';
									break;
								case "16":
									$id = 'pic_'.$row.$col;
									$thclass = 'pic_th';
									$vis = 'hide-info';
									break;
								case "17":
									$id = 'kbKD_'.$row.$col;
									$thclass = 'kbKD_th';
									$vis = 'hide-info';
									break;
								case "18":
									$id = 'kbDP_'.$row.$col;
									$thclass = 'kbDP_th';
									$vis = 'hide-info';
									break;
								case "19":
									$id = 'RPG_'.$row.$col;
									$thclass = 'RPG_th';
									$vis = 'hide-info';
									break;
								case "20":
									$id = 'VAP_'.$row.$col;
									$thclass = 'VAP_th';
									$vis = 'hide-info';
									break;
								case "21":
									$id = 'agent_'.$row.$col;
									$thclass = 'agent_th';
									$vis = 'hide-info';
									break;
							
							
						}

						if (stristr($id, 'number_complect_') !== FALSE){
							// <label><input type="checkbox" name="brands[]" value="1" checked>Google Inc.</label>
							echo '<th id="'.$id.'" class="'.$sticky_table.' '.$thclass.' '.$vis.'">'.$array[$row][$col].'
							
							<div class="checkselect">'							
							;
							// foreach ($arr as &$value) {
								
							// 	$value = $value * 2;
							// }
							// var_dump($arr_number_complect);

							$v=1;
							for ($r=0; $r < count ($arr_number_complect); $r++) { 
								echo '	<label><input type="checkbox" name="brands[]" value="'. $v .'" >'. $arr_number_complect[$r].'</label>';
								// echo '	<label><input type="checkbox" name="brands[]" value="'. $v .'" >'. count ($arr_number_complect).'</label>';
								$v++;
							}
							
									
									// <label><input type="checkbox" name="brands[]" value="2"  checked>Apple Inc.</label>
									// <label><input type="checkbox" name="brands[]" value="3">Microsoft</label>
									// <label><input type="checkbox" name="brands[]" value="4">AT&T</label>
									// <label><input type="checkbox" name="brands[]" value="5">Facebook</label>
									// <label><input type="checkbox" name="brands[]" value="6">Visa</label>
									// <label><input type="checkbox" name="brands[]" value="7">Amazon</label>
									// <label><input type="checkbox" name="brands[]" value="8">Verizon</label>
									// <label><input type="checkbox" name="brands[]" value="9">McDonalds</label>
							echo '	
								</div>
							</th>';
						}else{
							echo '<th id="'.$id.'" class="'.$sticky_table.' '.$thclass.' '.$vis.'">'.$array[$row][$col].'</th>';
						}

						
					}
					
				}//for

				}else{ // пункты ниже шапки
					echo '<td> <div class="material-switch pull-right">
						<input id="someSwitchOptionSuccess'.$some.'" name="someSwitchOption001" type="checkbox" onclick="checkAddress(this)"/>
						<label for="someSwitchOptionSuccess'.$some.'" class="label-success"></label>
						</div></td>';
						// $numcol = count ($array[$row]); //колонок 
						for ($col=0; $col < $numcol; $col++) { 						
							if (false === array_search($col, $exclude)){
		//                           0        1        2             3        4        5     6     7         8      9      10        11     12    13      14        15  16
		// array_push($data, array($client,$address,$number_order,$product,$product2,$def,$room,$complect,$floor,$unit,$count,$serialnum,$wood,$veneer,$numsample,$pic,$kb));
								switch ($col) {
									/////"head"    
										case "0":
											$id = 'client_'.$row.$col;	
											$vis = '';											
											break;
										case "1":
											$id = 'address_'.$row.$col;
											$vis = '';
											break;
										case "2":
											$id = 'numberorder_'.$row.$col;
											$vis = '';
											break;
										case "3":
											$id = 'product_'.$row.$col;
											$vis = '';
											break;
										case "4":
											$id = 'product2_'.$row.$col;
											$vis = '';
											break;
										case "5":
											$id = 'number_complect_'.$row.$col;
											$thclass = 'number_complect_th';
											$vis = '';
											break;
										case "6":
											$id = 'complect_'.$row.$col;
											$vis = '';
											break;
										case "7":
											$id = 'def_'.$some;
											$vis = '';
											break;
										case "8":
											$id = 'room_'.$row.$col;
											$vis = '';
											break;
									
										case "9":
											$id = 'floor_'.$row.$col;
											$vis = '';
											break;
										case "10"://////////////$unit,$count,$serialnum,$wood,$veneer,$numsample,$pic,$kb
											$id = 'unit_'.$row.$col;												
											$thclass = 'unit_th';	
											$vis = 'hide-info';											
											break;
										case "11":

										// присваивает: You should eat pizza, beer, and ice cream every day
											// $phrase  = "You should eat fruits, vegetables, and fiber every day.";
											// $phrase  = $array[$row][$col];
											$healthy = array("янв", "фев", "мар", "апр", "май", "июн", "июл", "авг", "сен", "окт", "ноя", "дек");
											$yummy   = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
											// $array[$row][$col] = str_replace(".",",",str_replace($healthy, $yummy, $array[$row][$col]));
											$array[$row][$col] = (string)str_replace($healthy, $yummy, $array[$row][$col]);
											$id = 'count_'.$row.$col;
											$thclass = 'count_th';
											$vis = 'hide-info';
											break;
										case "12":
											$id = 'serialnum_'.$row.$col;
											$id = 'serialnum_th';
											$vis = 'hide-info';
											break;
										case "13":
											$id = 'wood_'.$row.$col;
											$thclass = 'wood_th';
											$vis = 'hide-info';
											break;
										case "14":
											$id = 'veneer_'.$row.$col;
											$thclass = 'veneer_th';
											$vis = 'hide-info';
											break;
										case "15":
											$id = 'numsample_'.$row.$col;
											$thclass = 'numsample_th';
											$vis = 'hide-info';
											break;
										case "16":
											$id = 'pic_'.$row.$col;
											$thclass = 'pic_th';
											$vis = 'hide-info';
											break;
										case "17":
											$id = 'kbKD_'.$row.$col;
											$thclass = 'kbKD_th';
											$vis = 'hide-info';
											break;
										case "18":
											$id = 'kbDP_'.$row.$col;
											$thclass = 'kbDP_th';
											$vis = 'hide-info';
											break;
										case "19":
											$id = 'RPG_'.$row.$col;
											$thclass = 'RPG_th';
											$vis = 'hide-info';
											break;
										case "20":
											$id = 'VAP_'.$row.$col;
											$thclass = 'VAP_th';
											$vis = 'hide-info';
											break;
										case "21":
											$id = 'agent_'.$row.$col;
											$thclass = 'agent_th';
											$vis = 'hide-info';
											break;
										
								}
								$resarr=$array[$row][$col];
								// data-num="'.$id."__".$resarr.''.	if (stristr($id, 'number_complect_') !== FALSE){} . '
								if (stristr($id, 'number_complect_') !== FALSE){
									// $datanum ='data-num="number_complect__'.$resarr.' "';
									$datanum ='data-num="'.$resarr.'"';
								}else{
									$datanum ="";
								}
								echo '<td id="'.$id.'" class="'.$vis.'" '.$datanum.' >'.$resarr.'</td>';
							}//if
							
						}//for

						// var_dump($arr_number_complect);

					}		

				echo "</tr>"; 
			
			} //for	
	
		echo '</table>'; 
		// файл
		echo '<input type="hidden" id="currfile" value="'.$fileDrop.'" form="frm">' ; 
		echo "<script>
		$('.checkselect').checkselect();
		//  var arrch=['1','2'];
		//  inputClick(arrch);
		</script>" ; 

		// создание таблицы end

		// удаляем загруженный файл
		/////////////begin/////////////////
			// if(!isset($_POST["selorder"]) )
			// {
			
			// 	if (unlink($filename)){
			// 		// echo "Файл: ".$_POST["recordToDelete"]." удален!";
			// 	}else{
			// 		// echo "Ошибка! Файл: ".$_POST["recordToDelete"]." не удален!";
			// 	}	
			// }
		/////////////end//////////////////	

}


?>