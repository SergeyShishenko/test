<?php
// !other\CNC\check_specification_CSV.php
$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {        
        if ($row > 1){
            echo "<br>Строка $row: -> ";
            $num = count($data);        
            // for ($c=0; $c < $num; $c++) {
            //     echo "_" . $data[$c] ;
            // } 
            echo  " (№ Заказ: ". $data[0].") " ;          
            echo  " (№ Изделие ". $data[1].") " ;          
            echo  " (№ СЕ/пСЕ ". $data[2] .") ";          
            echo  " (Деталь ". $data[3].") " ;          
            echo  " (Длина ". $data[4] .") ";          
            echo  " (Ширина ". str_replace(",", ".", $data[5]).") " ;          
            echo  " (Толщина ". $data[6] .") "; 
            if (str_replace(",", ".", $data[5]) == 1673.5) {
                echo  " (Равно ". $data[5] .") ";
            }         
       }
       $row++;
    }
    fclose($handle);
}
?>