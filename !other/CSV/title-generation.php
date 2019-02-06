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

        $builder=$_POST['gen'];// TKD,TDP
        switch ($builder) {
            /////"head"    
                case "TKD":
                     $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$site."/dist/files/xls/shablon-kd.xlsx"); 
                     									
                    break;
                case "TDP":
                     $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$site."/dist/files/xls/shablon-alboma-dp.xlsx");
                   
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
            // builder КОНСТРУКТОР
        
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
            //     // foreach ($value as $key2 => $value2) {
            //     //     echo "{$key2} => {$value2} <br>";

            //     // }
            //     // echo " <hr>";
            //     // print_r($arr);
            // }
            // echo "</pre>";


            // первый лист
            $objPHPExcel->setActiveSheetIndex(0); 
            $coord= $objPHPExcel->getActiveSheet()->getCell('client')->getColumn().$objPHPExcel->getActiveSheet()->getCell('client')->getRow();
            $objPHPExcel->getActiveSheet()->setCellValue($coord, $_POST['client']);//Заказчик            
            // $objPHPExcel->getActiveSheet()->setCellValue('agent', $_POST['agent']);//Представитель            
            // $objPHPExcel->getActiveSheet()->setCellValue('address', $_POST['address']);//Объект            
            // $objPHPExcel->getActiveSheet()->setCellValue('floor', $_POST['floor']);//Этаж            
            // $objPHPExcel->getActiveSheet()->setCellValue('room', $_POST['room']);//Помещение            
            // $objPHPExcel->getActiveSheet()->setCellValue('complect', $_POST['complect']);//Комплект изделий 
            // $objPHPExcel->getActiveSheet()->setCellValue('order', $_POST['order']);//№ заказа
            // $objPHPExcel->getActiveSheet()->setCellValue('product', $_POST['product']);//Изделия              
            // $objPHPExcel->getActiveSheet()->setCellValue('builder', $builder);//Конструктор   

            // второй лист
            // $objPHPExcel->setActiveSheetIndex(1); 
            // $objPHPExcel->getActiveSheet()->setCellValue('A3', $_POST['order']);//Заказчик    

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            $fname=$_POST['order']."-".$_POST['gen']."-".date('m-d-Y-H-i-s').".xlsx";
            $objWriter->save($_SERVER['DOCUMENT_ROOT'] .$site."/vpi/".$fname);
            // if ($site) {
            //     $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!
            // }
            // else {
            //     $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
                
            // }

            echo '<a href="../../vpi/'.$fname.'"   type="button" download >'.$fname.'</a>';
            // echo "<a href=".$_SERVER['DOCUMENT_ROOT']."./www/vpi/".$fname."  type='button' download >$fname</a>";
            // echo "<br>./vpi/".$fname;

            
    }else{ echo "<br>Не найден!";}


   



exit();