<?php
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

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 

$dbconn=dbconnect();
/** PHPExcel_IOFactory */
require_once dirname(dirname(__FILE__)) . '/Classes/PHPExcel/IOFactory.php';
$ids=$_POST['ids'];

// $obj_furnitur = explode(",", $ids[1]);
// $furnitur_id = $obj_furnitur[0];
// $furnitur_count = $obj_furnitur[1];
// echo $furnitur_id." : ".$furnitur_count;
echo var_dump($ids);
exit();
$data = array();

for($i=0;$i<count($ids);$i++) 
{ 
    $obj_furnitur = explode(",", $ids[$i]);
    $furnitur_id = $obj_furnitur[0];
    $furnitur_count = $obj_furnitur[1];

    $sql = "SELECT *  FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = $furnitur_id";
    $Result=mysqli_query($dbconn,$sql);
    
    if($Result)
    {  
        while ($rows = mysqli_fetch_array($Result))
             {                
                $data[]=array('articul_furnitur_obj'=> $rows['articul_furnitur_obj'],
                                        'name_furnitur_obj_prop'=>$rows['name_furnitur_obj_prop'],
                                        'made_furnitur_obj'=>$rows['made_furnitur_obj'],
                                        'color_obj_prop'=>$rows['color_obj_prop'],                                        
                                        'unit_obj_prop'=>$rows['unit_obj_prop'],
                                        'count'=>$furnitur_count
                                        ) ;  
                // array_push($stack, "apple", "raspberry");             
             }
    }else{//вывод ошибки 
            header('HTTP/1.1 500 Looks like mysql error, could not insert record5!'.$sql." -> ".mysqli_error($dbconn));
            exit();
        }
    




} 



echo date('H:i:s') , " Загрузка из шаблона Excel5" , EOL;
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load("templates/VPI_template.xls");




echo date('H:i:s') , "Добавление новых данных в шаблон" , EOL;
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

	// $objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $r+1)
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $dataRow['articul_furnitur_obj'])
	                              ->setCellValue('F'.$row, $dataRow['name_furnitur_obj_prop'])
                                  ->setCellValue('G'.$row, $dataRow['made_furnitur_obj'])
                                  ->setCellValue('H'.$row, $dataRow['color_obj_prop'])
                                  ->setCellValue('I'.$row, $dataRow['unit_obj_prop'])
                                  ->setCellValue('J'.$row, $dataRow['count']);
   
                                  


	                            //   ->setCellValue('E'.$row, '=C'.$row.'*D'.$row);
}
$objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);//удаление строки
// // Always include the complete filter range!
// // Excel does support setting only the caption
// // row, but that's not a best practise...
// $objPHPExcel->getActiveSheet()->setAutoFilter($objPHPExcel->getActiveSheet()->calculateWorksheetDimension());


echo date('H:i:s') , " Запись в формат Excel5 " , EOL;
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
// $objWriter->save(str_replace('.php', '.xls', __FILE__));
echo dirname(__FILE__)."\/vpi-".date('m-d-Y').".xls", EOL;

$objWriter->save(dirname(__FILE__)."\/vpi-".date('m-d-Y-H-i-s').".xls");
echo date('H:i:s') , " Файл, записанный из " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;


// Echo memory peak usage
echo date('H:i:s') , " Пиковое использование памяти: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Запись файла завершена" , EOL;
echo 'Файл был создан в дериктории ' , getcwd() , EOL;
?>
