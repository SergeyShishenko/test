<?php
// ВЫЗОВ ИЗ CNC\js\javascript.js -> function checkSpecification(folder)
// CNC\check_specification_CSV.php

include_once dirname(__DIR__ ). '/Classes/Logger.php';
Logger::$PATH = dirname(__FILE__)."/LOGS";

$pathFile='uploads/'.$_POST['path'];

$arr = include "specificationCSV.php";

$arrAllCSV[] = $arr[0];

$report="";

$arrCHPU[] = include "specificationCHPU.php";

if (count($arrAllCSV[0])>0 && count($arrCHPU[0])>0){
    
    $report .= "<tr><td align='center'><b>". basename($arr[1]) ."</b></td></tr>" ;
    foreach ($arrCHPU[0] as $var2){
        $div_count= substr_count($var2['name'], '_');// количество "_"
        $find=false;
        foreach ($arrAllCSV[0] as $str) { 

            // Logger::getLogger('log_class_CNC')->log("str ".$str);

            if ($div_count==1){
            $var1=$str[2]."_".$str[3];  
            }elseif($div_count===0){
                $var1=$str[3];  
            }
            $varSTR4=$str[4]." x ".$str[5]." x ".$str[6];
            $var3=$var2['DL'] ." x ".$var2['DH']." x ".$var2['DS'];

            // Logger::getLogger('log_class_CNC')->log("var1=".$var1."  "."var2['name'] ".$var2['name']);

            if (strcasecmp($var1, $var2['name']) == 0) {
             
                $report .= "<tr><td align='center'><b>". $var1 ."</b>" ;
            if (strcasecmp($var3, $varSTR4) == 0) {
                $report .= "<span style='color:green'> - Размеры совпадают" . "</span> </td></tr>";
            }else{
                $report .= "<span style='color:red'> - Размеры неверные" . "</span> </td></tr>";
            }
            $find=true;
            }
        }
        if (!$find){ $report .= "<tr><td align='center'><b>". $var2['name'] ."</b>"  . "<span style='color:blue'> - Нет в спецификации </span> </td></tr>";}
    }
}else{
    if (count($arrAllCSV[0])==0){
    $report .= "<tr><td  align='center'>Нет файла спецификации!</td></tr>";
    }
    if (count($arrCHPU[0])==0){
        $report .= "<tr><td  align='center'>Нет файлов для проверки!</td></tr>";
        }
}
Logger::getLogger('log_class_CNC')->log("return CNC\check_specification_CSV.php ");
echo $report;
