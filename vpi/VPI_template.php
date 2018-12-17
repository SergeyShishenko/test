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


// require_once(dirname($_SERVER['DOCUMENT_ROOT']).'/DATA/TABLES/configDB.php');// для сайта !!!!!!!
require_once($_SERVER['DOCUMENT_ROOT'].'/DATA/TABLES/configDB.php');// для localhost !!!!!!!
$sess_id=session_id();
$dbconn=dbconnect();
if (!mysqli_set_charset($dbconn, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($link));
    exit();
} else {
    //printf("Текущий набор символов: %s\n", mysqli_character_set_name($link));
}
/** PHPExcel_IOFactory */
$Result_user = mysqli_query($dbconn,"SELECT *  FROM `user` WHERE `sess_id` = '$sess_id'");//MySQL запрос
$row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
$s_id=$row_user['s_id'];

if(isset($_POST['ids']))//генерация xls
{
    // require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
    $ids=$_POST['ids'];
    $data =  array();
    // $Result_user = mysqli_query($dbconn,"SELECT *  FROM `user` WHERE `sess_id` = '$sess_id'");//MySQL запрос
    // $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
    // $s_id=$row_user['s_id'];

  // выбираем все записи текущей сессии
    $sql = "SELECT *  FROM `user_vpi` WHERE `s_id` = $s_id";
    $User_vpi_Result=mysqli_query($dbconn,$sql);

    if($User_vpi_Result)
    {  
        while ($rowsUser_vpi = mysqli_fetch_array($User_vpi_Result))// заполнение массива пока есть записи текущей сессии
            {     
                $furnitur_id=$rowsUser_vpi['obj_furnitur_prop_id'];
                $furnitur_count=$rowsUser_vpi['count_obj'];
                $sql = "SELECT *  FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = $furnitur_id";// из таблицы вся фурнитура
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
        // $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/vpi/templates/VPI_template.xls");// для сайта !!!!!!!
        $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/templates/VPI_template.xls");// для localhost !!!!!!!

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

        $baseRow = 4;
        foreach($data as $r => $dataRow) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);

            // $sheet->getColumnDimension('K')->setWidth(40); 
            // $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для сайта !!!!!!!
            $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/www/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для localhost !!!!!!!

            // $objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $r+1)
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $dataRow['articul_furnitur_obj'])
                                        ->setCellValue('F'.$row, $dataRow['name_furnitur_obj_prop'])
                                        ->setCellValue('G'.$row, $dataRow['made_furnitur_obj'])
                                        ->setCellValue('H'.$row, $dataRow['color_obj_prop'])
                                        ->setCellValue('I'.$row, $dataRow['unit_obj_prop'])
                                        ->setCellValue('J'.$row, $dataRow['count']);
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
                $objDrawing->setCoordinates('K'.$row);
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
        $fname="vpi-".date('m-d-Y-H-i-s').".xls";

        // $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!
        $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
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
    
    // $Result_user = mysqli_query($dbconn,"SELECT *  FROM `user` WHERE `sess_id` = '$sess_id'");//MySQL запрос
    // $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
    // $s_id=$row_user['s_id'];
    
    for($i=0;$i<=count($addids)/2;$i=$i+2) 
    { 
        // $obj_furnitur = explode(",", $ids[$i]);
        $furnitur_id = $addids[$i];
        $furnitur_count = $addids[$i+1];

       

        // INSERT INTO `user_vpi` (`vpi_id`, `s_id`, `obj_furnitur_prop_id`, `count_obj`) VALUES (NULL, '1', '1', '5');
        $sql = "INSERT INTO `user_vpi` (`vpi_id`, `s_id`, `obj_furnitur_prop_id`, `count_obj`) VALUES (NULL, '$s_id', '$furnitur_id', '$furnitur_count')";

        if(mysqli_query($dbconn,$sql))
        {                    
           
            // echo print_r($addids);
            
            
        }else{//вывод ошибки                                        
            header('HTTP/1.1 500 Looks like mysql error, could not insert record2! '.$_POST["parent"]." ---".$sql." -> ".mysqli_error($dbconn));
            exit();
        } 
    } //for
    
    $res   = mysqli_query($dbconn,"SELECT COUNT(s_id) AS count FROM `user_vpi`WHERE `s_id` = $s_id "); 
    $data = mysqli_fetch_assoc($res);  

    // echo $data['count'];

    require('cart.php');
   

}elseif (isset($_POST['change']))
{
    
    // обновление количества 
    $count_obj=$_POST['val'];
    $vpi_id=$_POST['fid'];
    $sql = "UPDATE `user_vpi` SET `count_obj`='$count_obj' WHERE `vpi_id` = $vpi_id";
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
                            echo "Запись удалена ".$_POST['del'];
                         }
                        else{//вывод ошибки                                        
                            header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.$sql." -> ".mysqli_error($dbconn));
                            exit();
                        } 
    
}



mysqli_free_result($Result_user); 
mysqli_close($dbconn);

?>
