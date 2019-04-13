<?php
// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);

// define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

// date_default_timezone_set('Europe/Moscow');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/Moscow');

    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
        require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
        $site='';
    }
    else {
        require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
        $site='/www';
    }


    



if (isset($_POST['order'])) {


        // генерация
            
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');

        $arr_product_def=$_POST['arr_product_def'];
        $first = current($arr_product_def);
        switch ($_POST['gen']) {// TKD,TDP	
            /////"head"    
                case "TKD":
                     $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$site."/dist/files/xls/shablon-kd.xlsx"); 
                     $builder=$first['kbKD'];								
                    break;
                case "TDP":
                     $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$site."/dist/files/xls/shablon-alboma-dp.xlsx");
                     $builder=$first['kbDP'];		
                break;
        }

        

            // $my_var = $_GET['var1'];
            $arr_product_def=$_POST['arr_product_def'];
            // echo "<pre>";
            // echo "Тип титульника:   ".$_POST['gen']."<br>";
            // echo "Заказчик:         ".$_POST['client']."<br>";
            // echo "Представитель:    ".$_POST['agent']."<br>";
            // echo "Объект:           ".$_POST['address']."<br>";
            // echo "Этаж:             ".$_POST['floor']."<br>";
            // echo "Помещение:        ".$_POST['room']."<br>";
            // echo "Комплект изделий: ".$_POST['complect']."<br>";
            // echo "№ заказа:         ".$_POST['order']."<br>";
            // echo "Изделия:          ".$_POST['product']."<hr>";
            
        
            //  echo var_dump($arr_product_def);	 
            //  echo print_r($arr_product_def);
            
            // foreach ($arr_product_def as $key => $value) {      
            //     echo "Изделие {$key} <br>";
            //     // echo "{$key} => {$value['def']} <br>";
            //     // echo "{$key} => {$value['unit']} <br>";
            //     // echo "{$key} => {$value['count']} <br>";
            //     // echo "{$key} => {$value['serialnum']} <br>";
            //     // echo "{$key} => {$value['wood']} <br>";
            //     // echo "{$key} => {$value['veneer']} <br>";
            //     // echo "{$key} => {$value['numsample']} <br>";
            //     // echo "{$key} => {$value['kbKD']} <br>";
            //     // echo "{$key} => {$value['kbDP']} <br>";
            //     foreach ($value as $key2 => $value2) {
            //         echo "{$key2} => {$value2} <br>";

            //     }
            //     // echo " <hr>";
            //     // print_r($arr);
            // }
            // echo "</pre>";


            // первый лист
            $objPHPExcel->setActiveSheetIndex(0); 
            $coord= $objPHPExcel->getActiveSheet()->getCell('client')->getColumn().$objPHPExcel->getActiveSheet()->getCell('client')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['client']);//Заказчик  

            $coord= $objPHPExcel->getActiveSheet()->getCell('agent')->getColumn().$objPHPExcel->getActiveSheet()->getCell('agent')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['agent']);//Представитель  

            $coord= $objPHPExcel->getActiveSheet()->getCell('address')->getColumn().$objPHPExcel->getActiveSheet()->getCell('address')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['address']);//Объект .   

            $coord= $objPHPExcel->getActiveSheet()->getCell('floor')->getColumn().$objPHPExcel->getActiveSheet()->getCell('floor')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['floor']);//Этаж     

            $coord= $objPHPExcel->getActiveSheet()->getCell('room')->getColumn().$objPHPExcel->getActiveSheet()->getCell('room')->getRow();            
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['room']);//Помещение    

            $coord= $objPHPExcel->getActiveSheet()->getCell('complect')->getColumn().$objPHPExcel->getActiveSheet()->getCell('complect')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['complect']);//Комплект изделий 

            $coord= $objPHPExcel->getActiveSheet()->getCell('order')->getColumn().$objPHPExcel->getActiveSheet()->getCell('order')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['order']);//№ заказа

            $coord= $objPHPExcel->getActiveSheet()->getCell('product')->getColumn().$objPHPExcel->getActiveSheet()->getCell('product')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, (string)$_POST['product']);//Изделия  

            $coord= $objPHPExcel->getActiveSheet()->getCell('builder')->getColumn().$objPHPExcel->getActiveSheet()->getCell('builder')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $builder);//Конструктор   


           if ( $_POST['gen']=='TKD') {
                // второй лист
                $objPHPExcel->setActiveSheetIndex(1); 

                $baseRow = 4;
                $i=0;
                foreach($arr_product_def as $r => $dataRow) {
                    $row = $baseRow + $i;
                    $objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);             
        
                    // $sheet->getColumnDimension('K')->setWidth(40); 
                    // $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для сайта !!!!!!!
                    // $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/www/dist/filesdb/images/thumbs/tbs' . $dataRow['fname_img_furn'];// для localhost !!!!!!!
        
                    // $objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $r+1)
                    $formula = $dataRow['count'];
                    // $formula = '=СУММ(A3,A4)';
                    $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $_POST['order'])//№ заказа
                                                ->setCellValue('B'.$row, $dataRow['product'])//№ изделия
                                                ->setCellValue('C'.$row, $dataRow['product2'])//№2 изделия
                                                ->setCellValue('D'.$row, $dataRow['def'])// наименование
                                                ->setCellValue('E'.$row, $dataRow['floor'])//этаж
                                                ->setCellValue('F'.$row, $dataRow['room'])//помещение
                                                ->setCellValue('G'.$row, $dataRow['unit'])//единицы
                                                //   ->setCellValue('H'.$row,"="."ТЕКСТ(".$dataRow['count'].";\"0,00\")")//количество
                                                ->setCellValue('H'.$row, $formula)//количество
                                                ->setCellValue('I'.$row, $dataRow['serialnum'])//серийный
                                                ->setCellValue('K'.$row, $dataRow['wood'])//массив
                                                ->setCellValue('L'.$row, $dataRow['veneer'])//шпон
                                                ->setCellValue('M'.$row, $dataRow['numsample']);//№ цвета
                                            
                    // $objPHPExcel->getActiveSheet()->getRowDimension($row)->setRowHeight(100);
                    $i++;
            
                }
                $objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);//удаление строки
                foreach($objPHPExcel->getActiveSheet()->getRowDimensions() as $rd) { $rd->setRowHeight(-1); } // изменить высоту всех строк в auto

                //----------------------------------

                $objPHPExcel->setActiveSheetIndex(0); // активация первого листа

            }//if 

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
           
            $prod = explode(",", (string)$_POST['product']);//массив из строки изделий

            if (count($prod)>3)
            { 
                $endgroupp=$prod[1];
                $first = $prod[0];
                $str=$prod[0];
                for($i = 1; $i < count($prod); $i++) { 
                    if($prod[$i] - $prod[$i-1] != 1) {
                        if($first != $endgroupp)
                            {             
                                if($first == ($endgroupp-1))

                                {$str = $str.",".$endgroupp;}

                                else if ($i!=1) {$str = $str."-".$endgroupp;}
                            } 

                       $first=$prod[$i];
                       $str=$str.",".$prod[$i];
                       
                   }
                      $endgroupp=$prod[$i];
               }
               
            //    if($first !=$endgroupp){$str=$str."-".$endgroupp;}
            if($first != $endgroupp)
            {             
                if($first == ($endgroupp-1))
                {$str = $str.",".$endgroupp;}
                else{$str = $str."-".$endgroupp;}
            } 

            }
            else{$str=(string)$_POST['product'];}



            $fname=$_POST['order']."_".$str."~".$_POST['gen']."-".date('m-d-Y-H-i-s').".xlsx";
            $objWriter->save($_SERVER['DOCUMENT_ROOT'] .$site."/vpi/".$fname);
            // if ($site) {
            //     $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!
            // }
            // else {
            //     $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
                
            // }

            // echo '<a href="../../vpi/'.$fname.'"   type="button" download >'.$fname.'</a>';
            echo $fname;
            // echo "<a href=".$_SERVER['DOCUMENT_ROOT']."./www/vpi/".$fname."  type='button' download >$fname</a>";
            // echo "<br>./vpi/".$fname;

            
    }else{ echo "<br>Не найден!";}


   



exit();