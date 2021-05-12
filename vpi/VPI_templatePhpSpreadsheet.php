<?php
// vpi\VPI_templatePhpSpreadsheet.php
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing as drawing; // Instead PHPExcel_Worksheet_Drawing
session_start();


// exit();
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/Moscow');

if (file_exists(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php')) {
    require_once(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php');// для сайта !!!!!!!    
    $site = $_SERVER['DOCUMENT_ROOT'] ."/"; 
}
else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/DATA/TABLES/configDB.php');// для localhost !!!!!!!
    $site = $_SERVER['DOCUMENT_ROOT'] ."/www/";
}

// require_once(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php');// для сайта !!!!!!!
// require_once($_SERVER['DOCUMENT_ROOT'].'/DATA/TABLES/configDB.php');// для localhost !!!!!!!

$sess_id=session_id();
// $hash=$_COOKIE["hash"];


$dbconn=dbconnect();
$hash=mysqli_real_escape_string($dbconn, $_COOKIE['hash']);

if (!mysqli_set_charset($dbconn, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($link));
    exit();
} else {
    //printf("Текущий набор символов: %s\n", mysqli_character_set_name($link));
}

$Result_user = mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_hash` = '$hash'");
$row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
$user_sofia_id=$row_user['user_sofia_id'];

if(isset($_POST['ids']))//генерация xls
{  
    require $site . 'vendor/phpoffice/phpspreadsheet/samples/HeaderVPI.php';
    $ids=$_POST['ids'];


    $data =  array();
  // выбираем все записи текущей сессии
    $sql = "SELECT *  FROM `user_vpi` WHERE vpi_hash_id = '$hash'";
    $User_vpi_Result=mysqli_query($dbconn,$sql);

    if($User_vpi_Result)
    {  
        while ($rowsUser_vpi = mysqli_fetch_array($User_vpi_Result))// заполнение массива пока есть записи текущей сессии
            {     
                $furnitur_id=$rowsUser_vpi['obj_id'];


                $Result_obj = mysqli_query($dbconn,"SELECT *  FROM `obj` WHERE `obj_id` = '$furnitur_id'");//MySQL запрос
                $row_obj = mysqli_fetch_array($Result_obj);//получаем все записи из таблицы               
                if(isset($row_obj["path_img_obj"]))//тип(директория) фурнитуры в папках thumbs,pagevpi,carousel
                {$typeFurn=$row_obj["path_img_obj"]."/";}
                else{$typeFurn='';}
                mysqli_free_result($Result_obj); 

                $furnitur_count=$rowsUser_vpi['count_obj'];
                // $sql = "SELECT *  FROM `obj_furnitur_prop` WHERE `obj_id` = $furnitur_id";// из таблицы вся фурнитура
                $sql = "SELECT *  FROM `obj_furnitur_prop` WHERE `obj_id` = '$furnitur_id'";// из таблицы вся фурнитура
                $Result=mysqli_query($dbconn,$sql); 
                $rows = mysqli_fetch_array($Result); 
                array_push($data,
                    array('articul_furnitur_obj'=> $rows['articul_furnitur_obj'],
                          'name_furnitur_obj_prop'=>$rows['name_furnitur_obj_prop'],
                          'made_furnitur_obj'=>$rows['made_furnitur_obj'],
                          'color_obj_prop'=>$rows['color_obj_prop'],
                          'unit_obj_prop'=>$rows['unit_obj_prop'],
                          'count'=>$furnitur_count,
                          'fname_img_furn'=>$rows['fname_img_furn']
                        )  
                );
                  
            }
    }else{//вывод ошибки 
            header('HTTP/1.1 500 Looks like mysql error, could not insert record5!'.$sql." -> ".mysqli_error($dbconn));
            exit();
    }

    // генерация
        // echo date('H:i:s') , " Загрузка из шаблона Excel5" , EOL;

        // $helper->log('Load from Xls template');
        $reader = IOFactory::createReader('Xls');
        // echo __DIR__ . '/../templates/30template.xls';
        // $templatefile='VPI_template.xls';
        $templatefile='VPI_template_pz.xls';
        $spreadsheet = $reader->load($site . 'vpi/templates/' . $templatefile);



        // $baseRow = 4;
        $baseRow = 9;//VPI_template_pz.xls
        foreach($data as $r => $dataRow) {
            $row = $baseRow + $r;
            // $spreadsheet->getActiveSheet()->insertNewRowBefore($row,1);

            // if (file_exists($_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/'.$typeFurn.'tbs' . $dataRow['fname_img_furn'])) {
            //     $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/'.$typeFurn.'tbs' . $dataRow['fname_img_furn'];// для сайта !!!!!!!
            // }
            // else {
            //     $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/www/dist/filesdb/images/thumbs/'.$typeFurn.'tbs' . $dataRow['fname_img_furn'];// для localhost !!!!!!!
            // }

            if (file_exists($_SERVER['DOCUMENT_ROOT'] .'/www/'. $dataRow['fname_img_furn'])) {
                $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/www/'. $dataRow['fname_img_furn'];// для localhost !!!!!!!
            }
            else {
                
                $imagePath = $_SERVER['DOCUMENT_ROOT'] . str_replace("\\", "/", ltrim($dataRow['fname_img_furn'],"."));// для сайта !!!!!!!
            }






            // $sheet->getColumnDimension('K')->setWidth(40); 
            // $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для сайта !!!!!!!
            // $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/www/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для localhost !!!!!!!

            // $spreadsheet->getActiveSheet()->setCellValue('D'.$row, $r+1)
            $spreadsheet->getActiveSheet()
            // ->setCellValue('E'.$row, $dataRow['articul_furnitur_obj'])
            //                             ->setCellValue('F'.$row, $dataRow['name_furnitur_obj_prop'])
            //                             ->setCellValue('G'.$row, $dataRow['made_furnitur_obj'])
            //                             ->setCellValue('H'.$row, $dataRow['color_obj_prop'])
            //                             ->setCellValue('I'.$row, $dataRow['unit_obj_prop'])
            //                             // ->setCellValue('L'.$row, $imagePath)
            //                             ->setCellValue('J'.$row, $dataRow['count']);
            ->setCellValue('A'.$row, "")
            ->setCellValue('B'.$row, "")
            ->setCellValue('C'.$row, "")
            ->setCellValue('D'.$row, "")
            ->setCellValue('G'.$row, $dataRow['articul_furnitur_obj'])
            ->setCellValue('H'.$row, $dataRow['name_furnitur_obj_prop'])
            ->setCellValue('I'.$row, $dataRow['made_furnitur_obj'])
            ->setCellValue('J'.$row, $dataRow['color_obj_prop'])
            ->setCellValue('K'.$row, $dataRow['unit_obj_prop'])
            ->setCellValue('L'.$row, $dataRow['count']);
                                        
            $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(170);
            if (file_exists($imagePath)) {
                // $logo = new PHPExcel_Worksheet_Drawing();
                // $logo->setPath($imagePath);
                // $logo->setCoordinates("K".$row);             
                // $logo->setOffsetX(0);
                // $logo->setOffsetY(0);    
                // $sheet->getRowDimension(2)->setRowHeight(190);
                // $logo->setWorksheet($sheet);
                // $spreadsheet->getActiveSheet()->setCellValue('K'.$row, $imagePath);
                $objDrawing = new drawing();
                $objDrawing->setWorksheet($spreadsheet->getActiveSheet());                                          
                $objDrawing->setName('Paid');
                $objDrawing->setDescription('Paid');
                // $objDrawing->setPath('./images/paid.png');
                $objDrawing->setPath($imagePath);
                // $objDrawing->setCoordinates('K'.$row);
                $objDrawing->setCoordinates('M'.$row);
                $objDrawing->setOffsetX(10);
                $objDrawing->setOffsetY(10);
                $objDrawing->setHeight(200);
                // $objDrawing->setRotation(25);
                // $objDrawing->getShadow()->setVisible(true);
                // $objDrawing->getShadow()->setDirection(45);  
            } 
        }
        $spreadsheet->getActiveSheet()->removeRow($baseRow-1,1);//удаление строки      
        $spreadsheet->getActiveSheet()->freezePane('A8');
        // // Always include the complete filter range!
        // // Excel does support setting only the caption
        // // row, but that's not a best practise...
        // $spreadsheet->getActiveSheet()->setAutoFilter($spreadsheet->getActiveSheet()->calculateWorksheetDimension());


        // echo date('H:i:s') , " Запись в формат Excel5 " , EOL;
        // $objWriter = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel5');
        // $objWriter->save(str_replace('.php', '.xls', __FILE__));
        // echo dirname(__FILE__)."\/vpi-".date('m-d-Y').".xls", EOL;
        $fname=" ВПИ-".date('m-d-Y-H-i-s').".xls";
        

        


        $helper->write($spreadsheet, $fname);
        // echo 'sys_get_temp_dir() '.sys_get_temp_dir();
        $path = sys_get_temp_dir().'/phpspreadsheet/';
        // $fnameX=$path . $fname.".xlsx";
        rename($path . $fname, __DIR__ ."/WRITE/". $fname);
        rename($path . $fname."x", __DIR__ ."/WRITE/". $fname."x");
        // удалить xlsx... 
        $un=  __DIR__ ."/WRITE/". $fname."x" ;   
        unlink($un);


        // $arr_output["output"]=__DIR__ ."/WRITE/". $fname;
        // echo __DIR__ ."/WRITE/". $fname;

        echo "vpi/WRITE/". $fname;
        // echo $un;
        // echo "<br>";
        

        // $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        // $writer->save(__DIR__ ."/WRITE/". $fname);

        // echo json_encode($arr_output);
      
        unset($data);
        // unset($arr_output);
    // генерация
}
elseif (isset($_POST['addids'])) {
    
    $addids=$_POST['addids'];   
    // $adddata = array();
    $count=count($addids);
    // $Result_user = mysqli_query($dbconn,"SELECT *  FROM `user` WHERE `sess_id` = '$sess_id'");//MySQL запрос
    // $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
    // $hash=$row_user['s_id'];
    // echo "<pre>";
    // echo $hash.'<br>';
    // echo $count.'<br>';
    // echo print_r($addids);
    // echo "</pre>";
    // exit();

    for($i=0;$i<$count;$i=$i+2) 
    { 
        // $obj_furnitur = explode(",", $ids[$i]);
        $furnitur_id = $addids[$i];
        $furnitur_count = $addids[$i+1];

       

       
        $sql = "INSERT INTO `user_vpi` (`vpi_id`, vpi_hash_id, `obj_id`, `count_obj`) VALUES (NULL, '$hash', $furnitur_id, '$furnitur_count')";
        // echo    'vpi\VPI_template.php $sql- '.$sql; 
        //  echo   $i.'<br>'. $sql.'<br>'; 
        // exit(); 

        if(mysqli_query($dbconn,$sql))
        {                    
           
            // echo print_r($addids);
            
            
        }else{//вывод ошибки     
            // echo    'vpi\VPI_template.php NO $sql- '.$sql .'Ошибка: '.mysqli_error($dbconn);                               
            // header('HTTP/1.1 500 Looks like mysql error, could not insert record2! '.$_POST["addids"]." ---".$sql." -> ".mysqli_error($dbconn));
            exit();
        } 
    } //for

    // exit();
    $res   = mysqli_query($dbconn,"SELECT COUNT(vpi_hash_id) AS count FROM `user_vpi`WHERE vpi_hash_id = '$hash' "); 
    $data = mysqli_fetch_assoc($res);  

    // echo $data['count'];

    require('cart.php');
   

}elseif (isset($_POST['change']))
{
    
    // обновление количества 
    $count_obj=$_POST['val'];
    $vpi_id=$_POST['fid'];
    $sql = "UPDATE `user_vpi` SET `count_obj`='$count_obj' WHERE `vpi_id` = '$vpi_id'";
            // mysqli_query($dbconn,$sql);
            if(mysqli_query($dbconn,$sql))
                        { 
                            echo "обновленно ".$_POST['fid']."=>".$_POST['val'];
                         }
                        else{//вывод ошибки                                        
                            header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.mysqli_error($dbconn));
                            exit();
                        } 
    
}elseif (isset($_POST['del']))
{
    
    // обновление количества 
    // $count_obj=$_POST['val'];
    $vpi_id=$_POST['del'];
    $sql = "DELETE FROM `user_vpi` WHERE `user_vpi`.`vpi_id` = $vpi_id";
            // mysqli_query($dbconn,$sql);
            if(mysqli_query($dbconn,$sql))
                        { 
                            echo "Запись удалена ID-".$_POST['del'];
                         }
                        else{//вывод ошибки                                        
                            header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.mysqli_error($dbconn));
                            exit();
                        } 
    
}



mysqli_free_result($Result_user); 

mysqli_close($dbconn);
unset($GLOBALS['dbconn']);

?>
