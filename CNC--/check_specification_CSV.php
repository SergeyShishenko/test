<?php
// !other\CNC\check_specification_CSV.php

// $pathFile='files/1';

$pathFile='uploads/'.$_POST['path'];
// $pathFile='files/2578_4_numpart';
$arr = include "specificationCSV.php";
$arrAllCSV[] = $arr[0];
// echo count($arrAllCSV[0])."<br>";
// var_dump($arrAllCSV);
$report="";
// $report=var_dump($arr);
$arrCHPU[] = include "specificationCHPU.php";
if (count($arrAllCSV[0])>0 && count($arrCHPU[0])>0){
    
    
    
    $report .= "<tr><td align='center'><b>". basename($arr[1]) . "</b></td></tr>" ;
    foreach ($arrCHPU[0] as $var2){
        $div_count= substr_count($var2['name'], '_');// количество "_"
        $find=false;
        foreach ($arrAllCSV[0] as $str) {  
            if ($div_count==1){
            $var1=$str[2]."_".$str[3];  
            }elseif($div_count===0){
                $var1=$str[3];  
            }
            $varSTR4=$str[4]." x ".$str[5]." x ".$str[6];
            $var3=$var2['DL'] ." x ".$var2['DH']." x ".$var2['DS'];
            
            if (strcasecmp($var1, $var2['name']) == 0) {
                // $report .= "<tr><td align='center'>". $var1 . "ok! ". $var3. ' AND '.$varSTR4;
                $report .= "<tr><td align='center'><b>". $var1 ."</b>" ;
            if (strcasecmp($var3, $varSTR4) == 0) {
                $report .= "<span style='color:green'> - Размеры совпадают" . "</span> </td></tr>";
            }else{
                $report .= "<span style='color:red'> - ".$var3." Размеры неверные" . "</span> </td></tr>";
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
// echo '<tr><td>'.$report.'</td></tr>';


  echo $report;
//echo json_encode($arrAllCSV[0], JSON_UNESCAPED_UNICODE);

