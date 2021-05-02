<?php
// ВЫЗОВ ИЗ CNC\js\javascript.js -> function checkSpecification(folder)
// CNC\check_specification_CSV.php

include_once dirname(__DIR__ ). '/Classes/Logger.php';
Logger::$PATH = dirname(__FILE__)."/LOGS";

$pathFile='uploads/'.$_POST['path'];

$arr = include "specificationCSV.php";

$arrAllCSV[] = $arr[0];// CSV file

$report="";
$option ="";

$arrCHPU[] = include "specificationCHPU.php";
// на странице сделать выпадающий список изделий заказа
// если изделий больше одного
// и по выбору изделия запускать проверку передавая ключ из массива всех изделий спецификации
//  Logger::getLogger('log_class_CNC')->log($arrAllCSV);
// Logger::getLogger('log_class_CNC')->log($arr[3]);

$dis="";
// if (count($arr[3])>1){
//     $dis="";
// }else{
//   $dis="disabled";  
// }

if (count($arrAllCSV[0])>0 && count($arrCHPU[0])>0){
    
    $report .= "<tr><td align='center'><b>". basename($arr[1]) ."</b></td></tr>" ;
    foreach ($arr[3] as $pr){
        $option .="<option>$pr";
    }    
// name='product' onChange='checkSpecification(".$_POST['path'].",selectedIndex);'
    $report .= "<tr>
                    <td align='center'>Заказ ".$arr[2]."/ Изделие                         
                        <select name='pr' id='pr' data-folder='".$_POST['path']."' ".$dis.">
                        ".$option."
                        </select>
                     </td>
                </tr>" ;
    $num=1;
    foreach ($arrCHPU[0] as $var2){
        $div_count= substr_count($var2['name'], '_');// количество "_"
        $find=false;
         $i=$_POST['sel'];
        // for($i=0;$i<count($arrAllCSV);$i++){
            foreach ($arrAllCSV[$i] as $str) {            
                //   Logger::getLogger('log_class_CNC')->log($str);
                if ($div_count==1){
                $var1=$str[2]."_".$str[3];  
                }elseif($div_count===0){
                    $var1=$str[3];  
                }
                $varSTR4=$str[4]." x ".$str[5]." x ".$str[6];
                $var3=$var2['DL'] ." x ".$var2['DH']." x ".$var2['DS'];

                // $order="( Заказ ".$str[0]."/".$str[1]." )";
                $order="";

                // Logger::getLogger('log_class_CNC')->log("var1=".$var1."  "."var2['name'] ".$var2['name']);

                if (strcasecmp($var1, $var2['name']) == 0) {
                
                    $report .= "<tr><td align='center'><span style='color:rgb(106 90 205)'><i>".$num.".</i></span> ".$var2['comment']." "."<b>". $var1 ."</b>" ;
                if (strcasecmp($var3, $varSTR4) == 0) {
                    $report .= "<span style='color:green'> - Размеры совпадают " . "</span>".$order." </td></tr>";
                }else{
                    $report .= "<span style='color:red'> - Размеры неверные " . "</span>".$order." </td></tr>";
                }
                $find=true;
                }
            }
            if (!$find && $var2['name'] !==""){ $report .= "<tr><td align='center'><span style='color:rgb(106 90 205)'><i>".$num.".</i></span> ".$var2['comment']." "."<b>"  . "<span style='color:blue'> - Нет в спецификации </span>".$order." </td></tr>";}
            $num++;   
        // } 
    }
}else{
    if (count($arrAllCSV[0])==0){
    $report .= "<tr><td  align='center'>Нет файла спецификации!</td></tr>";
    }
    if (count($arrCHPU[0])==0){
        $report .= "<tr><td  align='center'>Нет файлов для проверки!</td></tr>";
        }
}
// Logger::getLogger('log_class_CNC')->log("return CNC\check_specification_CSV.php ");
// Logger::getLogger('log_class_CNC')->log("***");
echo $report;
