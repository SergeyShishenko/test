<?php
// session_start();
// Titul_template.php
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

    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
        require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');// для сайта !!!!!!!
    }
    else {
        require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');// localhost !!!!!!!
    }


    // генерация
       
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
      
        if (file_exists($_SERVER['DOCUMENT_ROOT'] ."/dist/files/xls/shablon-kd.xlsx")) {
            $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/dist/files/xls/shablon-kd.xlsx");// для сайта !!!!!!!
        }
        else {
            $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] ."/www/dist/files/xls/shablon-kd.xlsx");// для localhost !!!!!!!
        }   


      
            $objPHPExcel->setActiveSheetIndex(0); 
            $objPHPExcel->getActiveSheet()->setCellValue('N12', 'Пупкин');
            $objPHPExcel->setActiveSheetIndex(1); 
            $objPHPExcel->getActiveSheet()->setCellValue('A3', '2312');
      
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
       
        $fname="titul-".date('m-d-Y-H-i-s').".xlsx";

        if (file_exists($_SERVER['DOCUMENT_ROOT'] ."/dist/files/xls/shablon-kd.xlsx")) {
            $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/vpi/".$fname);// для сайта !!!!!!!
        }
        else {
            $objWriter->save($_SERVER['DOCUMENT_ROOT'] ."/www/vpi/".$fname);// для localhost !!!!!!!
        }

        echo '<a href="../../vpi/'.$fname.'"   type="button" download >'.$fname.'</a>';
        // echo "<a href=".$_SERVER['DOCUMENT_ROOT']."./www/vpi/".$fname."  type='button' download >$fname</a>";
        // echo "<br>./vpi/".$fname;


?>
