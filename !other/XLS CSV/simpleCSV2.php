<?php
// !other\XLS CSV\simpleCSV2.php

$list = array (
    array(''),
    // array('aaa;bbb;ccc;dddd;'),
    array('aaaeefrfgrgrgrg', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('aaa','bbb')
);
// $list = array('aaa;', 'bbb;', 'ccc;', 'dddd;');
    
   


$fp = fopen('file.xlsx', 'a');
fseek($fp, 1);
// $n=0;
// foreach ($list as $fields) {
//     if ($n>0){
//        fputcsv($fp, $fields,";"); 
//     }else{
//         fgetcsv($fp, 1000, ";");
//     }
    
//     $n++;
// }
foreach ($list as $fields) {
    
       fputcsv($fp, $fields,";");      
}



fclose($fp);
?>