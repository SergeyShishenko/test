<?php

  $sess_id=session_id();


  $result = mysqli_query($dbconn,"SELECT * FROM `user` WHERE `sess_id` LIKE '%".$sess_id."%'");
  if (mysqli_num_rows($result) > 0) {//есть
   
   $result = mysqli_query($dbconn,"UPDATE `user` SET `date_start` = CURRENT_TIMESTAMP WHERE `sess_id` LIKE '%".$sess_id."%'");
  }
  else{
    $result = mysqli_query($dbconn,"INSERT INTO `user` (`s_id`, `sess_id`, `date_start`) VALUES (NULL, '$sess_id', CURRENT_TIMESTAMP)");
    
  }


    $Result_user = mysqli_query($dbconn,"SELECT *  FROM `user` WHERE `sess_id` = '$sess_id'");//MySQL запрос
    $row_user = mysqli_fetch_array($Result_user);//получаем все записи из таблицы
    $s_id=$row_user['s_id'];

    $res   = mysqli_query($dbconn,"SELECT COUNT(s_id) AS count FROM `user_vpi`WHERE `s_id` = $s_id "); 
    $data = mysqli_fetch_assoc($res); 
    // echo session_id();
    // echo "data[count] " .$data['count']; 


    $Result_vpi = mysqli_query($dbconn,"SELECT * FROM `user_vpi` WHERE `s_id` = $s_id ");        

    // <!-- КОРЗИНА -->               
    // <div id="vpi"  >
    echo'  
         
                
                            <div id="header" style="padding-top: 0">
                                <div class="top-nav-bg abs col-xs-20">
                                    <div style="display:inline-block">
                                        
                                        <div id="cart" >
                                            <div class="heading"><a href="" class=""></a>
                                                <a><span id="cart-total" class="cart-full">'.$data["count"].'</span></a>
                                            </div>
                                            <div  class="content" style="overflow: hidden;">
                                                <div class="mini-cart-info">
                                                    <table class="table table-striped">
                                                    <tbody id="cart-list">
                        ';
// получаем все записи из таблицы user_vpi
  while($row_vpi = mysqli_fetch_array($Result_vpi))
  {  
    $furn_id=$row_vpi['obj_id'];

    $Result_obj = mysqli_query($dbconn,"SELECT *  FROM `obj` WHERE `obj_id` = '$furn_id'");//MySQL запрос
    $row_obj = mysqli_fetch_array($Result_obj);//получаем все записи из таблицы               
    if(isset($row_obj["path_img_obj"]))//тип(директория) фурнитуры в папках thumbs,pagevpi,carousel
    {$typeFurn=$row_obj["path_img_obj"]."/";}
    else{$typeFurn='';}

    $Result_furniture = mysqli_query($dbconn,"SELECT * FROM `obj_furnitur_prop` WHERE `obj_id` = $furn_id "); 
    $furniture = mysqli_fetch_assoc($Result_furniture); 
  echo'   
                                                        
                                                            <tr>
                                                                <td class="image">
                                                                    <img src="./dist/filesdb/images/thumbs/'.$typeFurn.'tbs'.$furniture["fname_img_furn"].'" alt="'.$furniture["name_furnitur_obj_prop"].'"  title="'.$furniture["name_furnitur_obj_prop"].'">
                                                                </td>
                                                                <td class="articul">'.$furniture['articul_furnitur_obj'].'</td>
                                                                <td class="name" ><p>'.$furniture['def_obj_prop'].'</p></td>
                                                               
                                                                <td class="quantity"> 
                                                                    <div class="input-group spinner vpicart"> 	
                                                                        <div class="input-group-btn-vertical">                                                                        
                                                                            <button class="btn btn-default vpicartMinus" type="button">&ndash;</button>
                                                                            <input id="vpi_id-'.$row_vpi['vpi_id'].'" data-fid="'.$row_vpi['vpi_id'].'" data-change="0" class="form-control  form-c" type="text" value="'.$row_vpi['count_obj'].'"  >
                                                                            <button class="btn btn-default vpicartPlas" type="button">+</button>
                                                                        </div>
                                                                    </div> 
                                                                </td> 

                                                                <td class="unit">'.$furniture['unit_obj_prop'].' </td>
                                                                <td class="remove">
                                                                    <img src="./dist/css/remove-small.png" alt="Удалить" title="Удалить"
                                                                        >
                                                                </td>
                                                            </tr>
    ';       
    }//while
    mysqli_free_result($Result_vpi);
    // mysqli_free_result($Result_obj);
    //Закрывает соединение с сервером MySQL
    // mysqli_close($dbconn); 
    if ($data["count"]==0) {$dis="dis";$cartempty="";}else{$dis="";$cartempty="dis";}       
    
    echo'  
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="cartempty" class="'.$cartempty.'" style="text-align: center;"><p>КОРЗИНА ПУСТА</p></div>

                                                <div class="checkout ">
                                                    <!-- <a href="" id="checkout" class="button">Скачать ведомость</a>-->
                                                    <div id="loading1" ></div>  
                                                    <a href="./vpi/vpi-12-14-2018-00-00-00.xls" type="button" id="checkoutd" class="btn btn-info im-download" download title="Скачать" style="display: none;"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> XLS</a>
                                                    <button id="checkout" class="btn btn-info '.$dis.'">СГЕНЕРИРОВАТЬ ВЕДОМОСТЬ</button>
                                                    
                                                     <!-- <button id="close" class="btn btn-info ">ЗАКРЫТЬ</button>-->
                                                   
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>

                 
    ';
    // </div>                                 
    // <!-- КОРЗИНА -->

?>

