    <?php
    // vpi\inc-list-csv.php

    

    //подключаем конфигурационный файл
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    // echo __ROOT__;
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
    // require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 
    // echo dirname(__ROOT__).'/DATA/TABLES/configDB.php';
    $dbconn=dbconnect();
    echo '
    <div id="table-saved-files" class="row">
    
        <div class="form-group">
            <input type="text" class="form-control pull-right" style="width:20%" id="search_order" placeholder="Поиск по таблице">
        </div>
        <br>
        <table class="table table-striped" id="order_table" cellspacing="0" >
            <thead>
                <tr role="row">
                    <th>Заказчик</th>                            
                    <th>Номер заказа</th>							
                    <th>Руководитель группы</th>                                               
                </tr>
            </thead>
            <tbody>
            ';

    // //MySQL запрос
    $Result_co = mysqli_query($dbconn,"SELECT `current_orders.client_current_orders`, `current_orders.number_orders`, `group_leader.name_group_leader` FROM `current_orders` LEFT JOIN `group_leader` ON `current_orders.group_leader_id` = `group_leader.group_leader_id` ORDER BY `current_orders`.`number_orders` ASC");
    
   
    // mysqli_query($dbconn,$sql);
    if($Result_co)
                { 
                    echo '$Result_co';
                 }
                else{//вывод ошибки                                        
                    header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '" -> ".mysqli_error($dbconn));
                    exit();
                } 


    while($row_co = mysqli_fetch_array($Result_co))
    {        
//  echo ' <div class="box col-md-12" id="item_'.$row_co["head_id"].'"><!--Раздел--> 
//             <div class="box-inner">
//                 <div class="box-header well">
//                     <h2 ><i class="glyphicon glyphicon-th"></i> <span id="name_head_'.$row_co["client_current_orders"].'">'.$row_co["name_head"].'</span></h2>
//                     <div class="box-icon">
//                         <a href="javascript:void(0)" class="btn btn-setting btn-round btn-default" 
//                             id="head-'.$row_co["head_id"].'"
//                             data-content="РЕДАКТИРОВАТЬ РАЗДЕЛ"
//                             data-name="'.$row_co["name_head"].'"
//                             data-href="'.$row_co["data_href_head"].'"
//                             data-order="'.$row_co["number_in_order_head"].'"
//                             data-toggle="modal"
//                             data-target="#myModal" 
//                             title="РЕДАКТИРОВАТЬ РАЗДЕЛ" 
//                             data-tbl="head"
//                             data-field="name_head"
//                             data-field-id="head_id"
//                             data-action="change"
//                             data-id="head_'.$row_co["head_id"].'"
//                             >
//                             <i class="glyphicon glyphicon-edit"></i></a>
//                         <a href="javascript:void(0)" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>                         
//                     </div>
//                 </div>
//              ';



        echo ' 
            <tr>
                <td>'.$row_co["client_current_orders"].'</td>                                                
                <td>'.$row_co["number_orders"].'</td>
                <td>'.$row_co["name_group_leader"].'</td>
            </tr>
     
            ';

  

      
    }//while
              echo '        
        </tbody>
    </table>

</div>
';

    mysqli_free_result($Result_co);
    //Закрывает соединение с сервером MySQL
    mysqli_close($dbconn);


  
    ?>

