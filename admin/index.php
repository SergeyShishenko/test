<?php require('header.php'); ?>
<!-- <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div> -->
<article id="responds">
    <?php
    //подключаем конфигурационный файл
    define('__ROOT__', dirname(dirname(__FILE__))); 
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
    require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 
    // echo dirname(__ROOT__).'/DATA/TABLES/configDB.php';
    $dbconn=dbconnect();
    // //MySQL запрос
    $Result_head = mysqli_query($dbconn,"SELECT * FROM head ORDER BY `head`.`number_in_order_head` ASC");
    // получаем все записи из таблицы head
    while($row_head = mysqli_fetch_array($Result_head))
    {        
 echo ' <div class="box col-md-12" id="item_'.$row_head["head_id"].'"><!--Раздел--> 
            <div class="box-inner">
                <div class="box-header well">
                    <h2 ><i class="glyphicon glyphicon-th"></i> <span id="name_head_'.$row_head["head_id"].'">'.$row_head["name_head"].'</span></h2>
                    <div class="box-icon">
                        <a href="javascript:void(0)" class="btn btn-setting btn-round btn-default" 
                            id="head-'.$row_head["head_id"].'"
                            data-content="РЕДАКТИРОВАТЬ РАЗДЕЛ"
                            data-name="'.$row_head["name_head"].'"
                            data-href="'.$row_head["data_href_head"].'"
                            data-order="'.$row_head["number_in_order_head"].'"
                            data-toggle="modal"
                            data-target="#myModal" 
                            title="РЕДАКТИРОВАТЬ РАЗДЕЛ" 
                            data-tbl="head"
                            data-field="name_head"
                            data-field-id="head_id"
                            data-action="change"
                            data-id="head_'.$row_head["head_id"].'"
                            >
                            <i class="glyphicon glyphicon-edit"></i></a>
                        <a href="javascript:void(0)" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>                         
                    </div>
                </div>
             ';
        $head_id=$row_head["head_id"];
        $active="active";
        // //MySQL запрос
        if($Result_category = mysqli_query($dbconn,"SELECT *  FROM category WHERE head_id = $head_id  ORDER BY `category`.`number_in_order_category` ASC"))
        {
                // получаем все записи из таблицы category                      
            echo '<div  class="box-content">
                    <div>
                        <!-- START PANEL -->
                        <div class="panel panel-transparent">  
                            <div class="panel-body no-padding">                      
                                <div class="row">                                                     
                                    <div class="col-sm-12">                                   
                                        <div class="box-icon">
                                            <a href="#" class="btn btn-setting btn-round btn-default"
                                                data-content="ДОБАВИТЬ КАТЕГОРИЮ"
                                                data-name="'.$row_category["name_category"].'"
                                                data-href="'.$row_category["data_href_category"].'"
                                                data-order="'.$row_category["number_in_order_category"].'"
                                                data-parent="head_id-'.$head_id.'"
                                                data-toggle="modal"
                                                data-target="#myModal" 
                                                title="ДОБАВИТЬ КАТЕГОРИЮ"
                                                data-title="КАТЕГОРИЮ"
                                                data-tbl="category"
                                                data-field="name_category"
                                                data-field-id="category_id"
                                                data-action="action"
                                                data-id="category_'.$row_category["category_id"].'"
                                                >
                                                <i class="glyphicon glyphicon-plus-sign"></i>
                                            </a>
                                        </div>
                                        <div class="panel panel-transparent ">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx" id="parent-item_'.$head_id.'"><!--Категории--> 
                                            ';
                                            while($row_category = mysqli_fetch_array($Result_category))
                                            {
                                                echo ' 
                                                <li class="'.$active.'">
                                                    <a data-toggle="tab" href="#tab-fillup'.$row_category["category_id"].'"
                                                    data-tbl="category"
                                                    data-title="КАТЕГОРИЮ"                                                             
                                                    data-name="'.$row_category["name_category"].'"
                                                    data-href="'.$row_category["data_href_category"].'"
                                                    data-order="'.$row_category["number_in_order_category"].'"
                                                    data-field="name_category"
                                                    data-field-id="category_id"
                                                    data-parent="head_id-'.$head_id.'"
                                                    data-id="category_'.$row_category["category_id"].'"
                                                    ><span  id="name_category_'.$row_category["category_id"].'">'.$row_category["name_category"].'</span></a>
                                                </li> 
                                                ';
                                                $active="";                                            
                                            }//while
            mysqli_free_result($Result_category);        
        }//if                                 
                                     echo '</ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                         ';
                                        $active="active";
                                        // //MySQL запрос
                                        if($Result_category = mysqli_query($dbconn,"SELECT *  FROM category WHERE head_id = $head_id  ORDER BY `category`.`number_in_order_category` ASC"))
                                        {
                                             // получаем все записи из таблицы category
                                            while($row_category = mysqli_fetch_array($Result_category))
                                            {
                                               $category_id=$row_category["category_id"];
                                               echo '<div class="tab-pane '.$active.'" id="tab-fillup'.$row_category["category_id"].'">
                                                        <div class="row column-seperation panelTab">
                                                            <div class="col-md-12">
                                                                <div class="panel-body no-padding">
                                                                    <div class="row">
                                                                        <div class="box-icon ">
                                                                            <a href="#" class="btn btn-setting btn-round btn-default "
                                                                            data-content="ДОБАВИТЬ ГРУППУ"
                                                                            data-parent="category_id-'.$category_id.'"
                                                                            data-toggle="modal"
                                                                            data-target="#myModal" 
                                                                            title="ДОБАВИТЬ ГРУППУ"
                                                                            data-tbl="grupp"
                                                                            data-field="name_grupp"
                                                                            data-field-id="grupp_id"
                                                                            data-action="action"
                                                                            data-id="grupp_'.$row_category["grupp_id"].'"
                                                                            >
                                                                            <i class="glyphicon glyphicon-plus-sign"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-12 ">
                                                                            <div class="panel panel-transparent ">
                                                                                <ul class="nav nav-tabs nav-tabs-simple nav-tabs-left bg-white" id="tab-parent-category_'.$category_id.'"><!--Группы--> '; 
                                                                                    $active="active";
                                                                                    // //MySQL запрос
                                                                                   if($Result_grupp = mysqli_query($dbconn,"SELECT *  FROM grupp WHERE category_id = $category_id  ORDER BY `grupp`.`number_in_order_grupp` ASC"))
                                                                                   {
                                                                                        // получаем все записи из таблицы grupp
                                                                                        while($row_grupp = mysqli_fetch_array($Result_grupp))
                                                                                        {                                                                                                
                                                                                            $name_grupp=mb_strtoupper($row_grupp["name_grupp"], 'UTF-8');
                                                                              echo '<li class="'.$active.'">
                                                                                        <a data-toggle="tab" href="#tabobj'.$row_grupp["grupp_id"].'"
                                                                                        data-tbl="grupp"
                                                                                        data-title="ГРУППУ"
                                                                                        data-name="'.$row_grupp["name_grupp"].'"
                                                                                        data-htmlid="'.$row_grupp["html_id"].'"
                                                                                        data-category_id="'.$row_grupp["category_id"].'"
                                                                                        data-order="'.$row_grupp["number_in_order_grupp"].'"
                                                                                        data-field="name_grupp"
                                                                                        data-field-id="grupp_id"
                                                                                        data-parent="category_id-'.$category_id.'"
                                                                                        data-id="grupp_'.$row_grupp["grupp_id"].'"
                                                                                        ><span id="name_grupp_'.$row_grupp["grupp_id"].'">'.$name_grupp.'</span></a>
                                                                                    </li>
                                                                                    ';
                                                                                    $active="";
                                                                            
                                                                                }//while
                                                                                mysqli_free_result($Result_grupp);        
                                                                            } 
                                                                            
                                                                         echo '</ul>
                                                                                <div class="tab-content bg-white">
                                                                                ';
                                                                                $active="active";
                                                                                // //MySQL запрос
                                                                               if($Result_grupp = mysqli_query($dbconn,"SELECT *  FROM grupp WHERE category_id = $category_id  ORDER BY `grupp`.`number_in_order_grupp` ASC"))
                                                                               {
                                                                                    // получаем все записи из таблицы grupp
                                                                                    while($row_grupp = mysqli_fetch_array($Result_grupp))
                                                                                    {   
                                                                                        echo '                                                                                    
                                                                                        <div class="tab-pane '.$active.'" id="tabobj'.$row_grupp["grupp_id"].'">
                                                                                            <div class="box-content pane">
                                                                                                <ul class="thumbnails gallery" id="obj-parent-grupp_'.$row_grupp["grupp_id"].'"><!--Объекты-->';                                                                                                 
                                                                                                 $grupp_id= $row_grupp["grupp_id"];
                                                                                                // $thumbs="/";
                                                                                                // $active="active";
                                                                                                // //MySQL запрос
                                                                                            if($Result_obj = mysqli_query($dbconn,"SELECT *  FROM obj WHERE grupp_id = $grupp_id  ORDER BY `obj`.`number_in_order_obj` ASC"))
                                                                                            {
                                                                                                // получаем все записи из таблицы grupp
                                                                                                while($row_obj = mysqli_fetch_array($Result_obj))
                                                                                                {                                                                                                      
                                                                                                    $i =$row_obj["obj_id"];
                                                                                                    echo'<li id="image-'. $i.'" class="thumbnail" data-name="'.$row_obj["name_obj"].'">
                                                                                                            <p class="" id="name_obj_'.$row_obj["obj_id"].'">'. $row_obj["name_obj"].'</p>
                                                                                                            <a style="background:url(../'.PATH__FILES.'images/thumbs/tbs'.$row_obj["fname_img_obj"].');"
                                                                                                                title="'.$row_obj["name_obj"].'"
                                                                                                                href="../'.PATH__FILES.'images/'.$row_obj["fname_img_obj"].'"                                                                                                                
                                                                                                                >
                                                                                                                <img
                                                                                                                    class="grayscale"
                                                                                                                    src="../'.PATH__FILES.'images/thumbs/tbs'.$row_obj["fname_img_obj"].'"
                                                                                                                    alt="'.$row_obj["name_obj"].'"
                                                                                                                    data-parent="grupp_id-'.$grupp_id.'"
                                                                                                                    data-id="obj_'.$i.'"
                                                                                                                    data-content="РЕДАКТИРОВАТЬ ОБЪЕКТ"
                                                                                                                    data-name="'.$row_obj["name_obj"].'"
                                                                                                                    data-htmlid="'.$row_obj["html_id"].'"
                                                                                                                    data-action="change"
                                                                                                                >
                                                                                                            </a>
                                                                                                        </li>';
                                                                                                    // $active="";                                                                                            
                                                                                                }//while
                                                                                                mysqli_free_result($Result_obj);        
                                                                                            }                                                                                              
                                                                                          echo '</ul>
                                                                                            </div><!--box-content-->
                                                                                        </div> <!--tab-pane-->';                                                                                            
                                                                                                $active="";                                                                                        
                                                                                            }//while
                                                                                            mysqli_free_result($Result_grupp);        
                                                                                        }                                                                                         
                                                                          echo '</div><!--tab-content-->                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                 

                                                    ';
                                                    $active="";
                                            
                                            }//while
                                            mysqli_free_result($Result_category);        
                                        } //if $Result_category Tab panes
                                            echo ' 
                                            </div> <!--tab-content-->
                                        </div>
                                    </div>                                        
                                </div> <!--row-->                                
                            </div>
                        </div>
                        <!-- END PANEL -->
                    </div>
                </div>                  
            </div>
        </div>
    
        ';
    }//while
    mysqli_free_result($Result_head);
    //Закрывает соединение с сервером MySQL
    mysqli_close($dbconn);
    ?>

</article>


<?php require('footer.php'); ?>
