<pre>
<?php
// !other\CNC\check_specification_CSV.php
$row = 1;
// $arrstr[];
// $arrAllCSV[];
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {  // строка  до 1000 символов    
        if ($row > 1){
            // echo "<br>Строка $row: -> ";
            // $num = count($data);        
            // for ($c=0; $c < $num; $c++) {
            //     echo "_" . $data[$c] ;
            // } 
            // $result = preg_replace('/[^ a-zа-я\d.]/ui', '', $string );
            $data[0]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[0])));// № Заказа
            $data[1]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[1])));// № Изделия
            $data[2]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[2])));// № СЕ/пСЕ
            $data[3]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[3])));// № Детали
            $data[4]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[4])));// № Детали
            $data[5]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[5])));// № Детали
            $data[6]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[6])));// № Детали
            // echo  " (№ Заказа: ". $order.") " ;          
            // echo  " (№ Изделия: ". $product.") " ;          
            // echo  " (№ СЕ/пСЕ: ". $SE .") ";          
            // echo  " (№ Детали: ". $numpart.") " ;          
            // echo  " (Длина: ". $DL .") ";          
            // echo  " (Ширина: ". $DH.") " ;          
            // echo  " (Толщина: ". $DS .") "; 
            // if (preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[5]))) == 1673.5) {
            //     echo  " (Равно ". $data[5] .") ";
            // }
            $arrAllCSV[]=$data;         
       }
       $row++;
    }
    fclose($handle);
    var_dump($arrAllCSV);
}
?>
</pre>