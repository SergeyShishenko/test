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
//   Logger::getLogger('log_class_CNC')->log($arrAllCSV);
//   Logger::getLogger('log_class_CNC')->log($arr[3]);
//Logger::getLogger('log_class_CNC')->log($arrCHPU[0]);

$dis="";
// if (count($arr[3])>1){
//     $dis="";
// }else{
//   $dis="disabled";  
// }

if (count($arrAllCSV[0])>0 && count($arrCHPU[0])>0){
    
    $report .= "<tr><td align='center' colspan='2'><b>". basename($arr[1],".csv") ."</b></td></tr>" ;

    // foreach ($arr[3] as $pr){
    //     $option .="<option >$pr";
    // } 
    // selected 
    for($j=0;$j<count($arr[3]);$j++) {
        if($j==$_POST['sel']){
            $sd="selected";
        }else{
            $sd="";
        }
        $option .="<option $sd>".$arr[3][$j];
    } 
// name='product' onChange='checkSpecification(".$_POST['path'].",selectedIndex);'
    $report .= "<tr>
                    <td align='center' colspan='2'>Заказ <b>".$arr[2]."</b> / Изделие                         
                        <select name='pr' id='pr' data-folder='".$_POST['path']."' ".$dis.">
                        ".$option."
                        </select>
                     </td>
                </tr>" ;
    $num=1;
    foreach ($arrCHPU[0] as $cnc){
        $div_count= substr_count($cnc['name'], '_');// количество "_"
        $find=false;
         $i=$_POST['sel'];
        
            foreach ($arrAllCSV[0][$i] as $str) {            
                //   Logger::getLogger('log_class_CNC')->log($str);
                if ($div_count==1){
                $csv=$str[2]."_".$str[3];  
                }elseif($div_count===0){
                    $csv=$str[3];  
                }
                $csv4=$str[4]." x ".$str[5]." x ".$str[6];
                $cnc4=$cnc['DL'] ." x ".$cnc['DH']." x ".$cnc['DS'];
                $note=$str[7];
                $note=mb_convert_case($note, MB_CASE_LOWER, "UTF-8");
                $note=mb_convert_encoding($note, "UTF-8");
               
                 $order="";
                // $order="( Заказ ".$str[0]."/".$str[1]." )";

                // Logger::getLogger('log_class_CNC')->log("var1=".$csv."  "."var2['name'] ".$cnc['name']);
                $reportCHPU="<tr><td align='right'><span style='color:rgb(106 90 205)'><i>".$cnc['fname'].".</i></span> ".$cnc['comment']." (".$cnc4.") "."<b><i>поз. </i>".$cnc['name']."</b></td>" ;
                if (strcasecmp($csv, $cnc['name']) == 0) {
                
                    // $report .= "<tr><td align='center'><span style='color:rgb(106 90 205)'><i>".$num.".</i></span> ".$cnc['comment']." "."<b>". $csv ."</b>" ;

                    // $report .= "<tr><td align='center'><span style='color:rgb(106 90 205)'><i>".$cnc['fname'].".</i></span> ".$cnc['comment']." "."<b>". $csv ."</b>" ;

                    $report .= $reportCHPU;
                    if (strcasecmp($cnc4, $csv4) == 0) {
                    $report .= "<td align='left'><span style='color:green'> - Размеры совпадают " . "</span>".$order." </td></tr>";
                    // break ;
                    }else{
                         $report .= "<td align='left'><span style='color:red'> - Размеры неверные </span><b><i>поз. </i>".$str[2]."_".$str[3]."</b>" . " (".$csv4.") ".$note." </td></tr>";
                    // 

                    }
                $find=true;
                // break ;
                }
            }//foreach ($arrAllCSV[0][$i] as $str)

            if (!$find && $cnc['name'] !==""){ 
                // ДОБАВИТЬ ИМЯ CNC $cnc['name']
                // .$num.".</i></span> ".$cnc['comment']." "."<b>".$cnc['name'] ."</b>"  
                $report .= $reportCHPU 
                . "<td align='left'><span style='color:blue'> - Нет в спецификации </span>".$order." </td></tr>";
                
                
                // break ;
            }
            $num++;   
       
    }//foreach ($arrCHPU[0] as $cnc){
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
