<?php
// !other\creatHTMLtable.php
$arr =    [
                ["Толщина ДСП (A), мм",//Sf
                 "L, мм",//Lm
                 "I, мм",//Im
                 "D, мм",//Dm
                 "Артикул",//Ar
                ],
                [  // массив данных 
                   [ "Sf" => "0.jpg",
                    "Lm" => "http://vk.com/id0",
                    "Im" => "Жекі",
                    "Dm" => "Жекі",
                    "Ar" => "Жекі"
                     ]                   
                ]              
             ];
  ?>
<table border="1">                        
    <tbody> 
        <tr>  
    <?php foreach($arr[0] as $key=>$val) {  ?>    
            <th><?= $val?></th>     
 <?php }?> 
        </tr>
         
<?php foreach($arr[1] as $key=>$val) {  ?> 
        <tr>  
        <?php foreach($val as $a) {  ?> 
            <td><?= $a?></td>           
         <?php }?> 
        </tr> 
     
 <?php }?> 
    </tbody>
</table>  
 