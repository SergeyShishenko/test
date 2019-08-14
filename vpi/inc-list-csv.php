    <?php
    // vpi\inc-list-csv.php   

    $dbconn=dbconnect();
   if (!mysqli_set_charset( $dbconn, 'utf8' )) {
    echo "Ошибка: не удается установить кодировку.\n";
    exit;
}
    echo '
    <div id="table-saved-files" class="row">
    
        <div class="form-group">
            <input type="text" class="form-control pull-right" style="width:20%" id="search_order" placeholder="Поиск по таблице" autocomplete="off">
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
    $Result_co = mysqli_query($dbconn,"SELECT current_orders.client_current_orders, current_orders.number_orders, group_leader.name_group_leader FROM current_orders LEFT JOIN group_leader ON current_orders.group_leader_id = group_leader.group_leader_id ORDER BY current_orders.number_orders ASC");
    
   
    // mysqli_query($dbconn,$sql);
    if(!$Result_co){  echo mysqli_error($dbconn);exit();}//вывод ошибки         

    while($row_co = mysqli_fetch_array($Result_co))
    {   
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

