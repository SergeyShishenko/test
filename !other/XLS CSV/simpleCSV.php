<?php
// !other\XLS\simpleCSV.php
$file = "test.csv";
header('Content-Type: text/html; charset=UTF-8');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename='.$file);
$content = "Col1,Col2,Col3\n";
// $content .= "Русский,test1,test3\n";
$content .= iconv("UTF-8", "windows-1251", "Русский,test1,test3\n");
$content .= "testtest,ttesttest2,testtest3\n";
echo $content;
?>