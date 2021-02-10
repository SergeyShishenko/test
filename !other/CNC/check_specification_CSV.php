<?php
// !other\CNC\check_specification_CSV.php
$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {        
        if ($row > 1){
            echo "<p> Строка $row: <br /></p>\n";
            $num = count($data);        
            for ($c=0; $c < $num; $c++) {
                echo $data[$c] . "<br />\n";
            }            
       }
       $row++;
    }
    fclose($handle);
}
?>