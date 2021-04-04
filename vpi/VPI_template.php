<?php
session_start();
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A Particul_furnitur_objAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/Moscow');

if (file_exists(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php')) {
    require_once(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php');// для сайта !!!!!!!
}
else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/DATA/TABLES/configDB.php');// для localhost !!!!!!!
}

// require_once(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php');// для сайта !!!!!!!
// require_once($_SERVER['DOCUMENT_ROOT'].'/DATA/TABLES/configDB.php');// для localhost !!!!!!!

$sess_id=session_id();
$hash=$_COOKIE["hash"];

$dbconn=dbconnect();
if (!mysqli_set_charset($dbconn, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($link));
    exit();
} else {
    //printf("Текущий набор символов: %s\n", mysqli_character_set_name($link));
}
/** PHPExcel_IOFactory */
$Result_user = mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_hash` LIKE '%".$hash."%'");
$row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
$user_sofia_id=$row_user['user_sofia_id'];

if(isset($_POST['ids']))//генерация xls
{
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
        require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
    }
    else {
        require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
    }

    // require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
   // require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
    $ids=$_POST['ids'];
    $data =  array();

    // $Result_user = mysqli_query($dbconn,"SELECT *  FROM `user` WHERE `sess_id` = '$sess_id'");//MySQL запрос
    // $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
    // $hash=$row_user['s_id'];

    

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
                $sql = "SELECT *  FROM `obj_furnitur_prop` WHERE `obj_id` = $furnitur_id";// из таблицы вся фурнитура
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
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        // $templatefile='VPI_template.xls';
        $templatefile='VPI_template_pz.xls';
        if (file_exists($_SERVER['DOCUMENT_ROOT'] ."/vpi/templates/".$templatefile)) {
            $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/vpi/templates/".$templatefile);// для сайта !!!!!!!
        }
        else {
            $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/".$templatefile);// для localhost !!!!!!!
        }
    

        // $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/vpi/templates/VPI_template.xls");// для сайта !!!!!!!
        // $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/VPI_template.xls");// для localhost !!!!!!!

        // echo date('H:i:s') , "Добавление новых данных в шаблон" , EOL;
        // $data = array();

        // $data = array(array('articul_furnitur_obj'	=> 'арт. 5000502-07-750',
        // 					'name_furnitur_obj_prop'		=> 'Конфирмат 7,0Х50', //наименование
        //                     'made_furnitur_obj'	=> 'МДМ-КОМПЛЕКТ', //поставщик
        //                     'unit_obj_prop' 	=> 'шт.', //ед.изм
        //                     'count' 	=> 100 //кол-во
        // 				   ),
        // 			  array('articul_furnitur_obj'	=> 'арт. 5000502-07-701',
        //                     'name_furnitur_obj_prop'		=> 'Эксцентрик 15 плита 16мм', //наименование
        //                     'made_furnitur_obj'	=> 'МДМ-КОМПЛЕКТ', //поставщик
        //                     'unit_obj_prop' 	=> 'шт.', //ед.изм
        //                     'count' 	=> 20 //кол-во
        // 				   ),
        // 			  array('articul_furnitur_obj'	=> 'арт. 5000502-04-107',
        //                     'name_furnitur_obj_prop'		=> 'MOVENTO BLUMOTION 40 КГ 400 ММ', //наименование
        //                     'made_furnitur_obj'	=> 'BLUM', //поставщик
        //                     'unit_obj_prop' 	=> 'комплект', //ед.изм
        //                     'count' 	=> 2 //кол-во
        // 				   )
        // 			 );

        $objPHPExcel->getActiveSheet()->setCellValue('D1', PHPExcel_Shared_Date::PHPToExcel(time()));

        // $baseRow = 4;
        $baseRow = 7;//VPI_template_pz.xls
        foreach($data as $r => $dataRow) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);

            if (file_exists($_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/'.$typeFurn.'tbs' . $dataRow['fname_img_furn'])) {
                $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/'.$typeFurn.'tbs' . $dataRow['fname_img_furn'];// для сайта !!!!!!!
            }
            else {
                $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/www/dist/filesdb/images/thumbs/'.$typeFurn.'tbs' . $dataRow['fname_img_furn'];// для localhost !!!!!!!
            }

            // $sheet->getColumnDimension('K')->setWidth(40); 
            // $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для сайта !!!!!!!
            // $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/www/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для localhost !!!!!!!

            // $objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $r+1)
            $objPHPExcel->getActiveSheet()
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
                                        // ->setCellValue('K'.$row, $imagePath);
            $objPHPExcel->getActiveSheet()->getRowDimension($row)->setRowHeight(170);
            if (file_exists($imagePath)) {
                // $logo = new PHPExcel_Worksheet_Drawing();
                // $logo->setPath($imagePath);
                // $logo->setCoordinates("K".$row);             
                // $logo->setOffsetX(0);
                // $logo->setOffsetY(0);    
                // $sheet->getRowDimension(2)->setRowHeight(190);
                // $logo->setWorksheet($sheet);
                // $objPHPExcel->getActiveSheet()->setCellValue('K'.$row, $imagePath);
                $objDrawing = new PHPExcel_Worksheet_Drawing();
                $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());                                          
                $objDrawing->setName('Paid');
                $objDrawing->setDescription('Paid');
                // $objDrawing->setPath('./images/paid.png');
                $objDrawing->setPath($imagePath);
                // $objDrawing->setCoordinates('K'.$row);
                $objDrawing->setCoordinates('M'.$row);
                $objDrawing->setOffsetX(10);
                $objDrawing->setOffsetY(10);
                // $objDrawing->setRotation(25);
                // $objDrawing->getShadow()->setVisible(true);
                // $objDrawing->getShadow()->setDirection(45);  
            } 
        }
        $objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);//удаление строки
        // // Always include the complete filter range!
        // // Excel does support setting only the caption
        // // row, but that's not a best practise...
        // $objPHPExcel->getActiveSheet()->setAutoFilter($objPHPExcel->getActiveSheet()->calculateWorksheetDimension());


        // echo date('H:i:s') , " Запись в формат Excel5 " , EOL;
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        // $objWriter->save(str_replace('.php', '.xls', __FILE__));
        // echo dirname(__FILE__)."\/vpi-".date('m-d-Y').".xls", EOL;
        $fname="ВПИ-".date('m-d-Y-H-i-s').".xls";

        if (file_exists($_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/'.$typeFurn.'tbs' . $dataRow['fname_img_furn'])) {
            $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!
        }
        else {
            $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
        }

        // $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!
        // $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
        echo "./vpi/".$fname;
        // echo date('H:i:s') , " Файл, записанный из " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;


        // Echo memory peak usage
        // echo date('H:i:s') , " Пиковое использование памяти: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

        // Echo done
        // echo date('H:i:s') , " Запись файла завершена" , EOL;
        // echo 'Файл был создан в дериктории ' , getcwd() , EOL;
        unset($data);
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
            echo    'vpi\VPI_template.php NO $sql- '.$sql .'Ошибка: '.mysqli_error($dbconn);                               
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
                            header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.$sql." -> ".mysqli_error($dbconn));
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
                            header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.$sql." -> ".mysqli_error($dbconn));
                            exit();
                        } 
    
}



mysqli_free_result($Result_user); 

mysqli_close($dbconn);

?>
