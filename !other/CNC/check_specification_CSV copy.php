<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVG</title>
    <link rel="shortcut icon" href="working.bmp" type="image/x-icon">    

</head>
<body>
<pre>
<?php

// !other\CNC\check_specification_CSV.php

// $pathFile='files/1';
$pathFile='files/2578_4_SE';
// $pathFile='files/2578_4_numpart';
$arrAllCSV[] = include "specificationCSV.php";
// echo count($arrAllCSV[0])."<br>";
// var_dump($arrAllCSV)
$report="";
if (count($arrAllCSV[0])>0){
    $arrCHPU[] = include "specificationCHPU.php";

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
                $report .= "$var1 ok! ". $var3. ' AND '.$varSTR4;
            if (strcasecmp($var3, $varSTR4) == 0) {
                $report .= "<span style='color:green'> - Размеры совпадают" . "</span> <br>";
            }else{
                $report .= "<span style='color:red'> - Размеры неверные" . "</span> <br>";
            }
            $find=true;
            }
        }
        if (!$find){ $report .= $var2['name'] . "<span style='color:blue'> нет в спецификации </span> <br>";}
    }
}else{
    $report .= "Нет файла спецификации!";
}
echo $report;
?>
</pre>
</body>
</html>