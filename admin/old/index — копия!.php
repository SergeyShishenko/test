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
    require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

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
                                                                                                            <p class="" id="name_obj_'.$row_obj["grupp_id"].'">'. $row_obj["name_obj"].'</p>
                                                                                                            <a style="background:url('. substr($row_obj["path_img_obj"],1)."thumbs/".$row_obj["fname_img_obj"].');"
                                                                                                                title="'.$row_obj["name_obj"].'"
                                                                                                                href="'. substr($row_obj["path_img_obj"],1).$row_obj["fname_img_obj"].'"                                                                                                                
                                                                                                                >
                                                                                                                <img
                                                                                                                    class="grayscale"
                                                                                                                    src="'. substr($row_obj["path_img_obj"],1)."thumbs/". $row_obj["fname_img_obj"].'"
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

<!-- <script>
       $('ul.nav-tabs li').hover(function () {
        // $('a', this).fadeToggle(1000);
        // $(this).find('.gallery-controls').remove();
        var name = $(this).find('a > span').text();
        $(this).append('<div class=" tab-controls">' + '<p><a href="#" class="gallery-edit btn " title="РЕДАКТИРОВАТЬ!" data-content="РЕДАКТИРОВАТЬ" data-name="' + name + '" data-toggle="modal" data-target="#myModal" ><i class="glyphicon glyphicon-edit"></i></a></p>' +  '</div>');
        $(this).find('.tab-controls').stop().animate({'margin-top': '-15'}, 400);
    }, function () {
        // $('a', this).fadeToggle(1000);
        $(this).find('.tab-controls').stop().animate({'margin-top': '0'}, 200, function () {  $(this).remove();   });
    });

    
</script> -->

<script>
    var $ = jQuery.noConflict();
   $(document).ready(function() {
            // Добавляем НОВЫЙ РАЗДЕЛ, когда произошел клик по кнопке
                $("#FormSubmit").click(function (e) {
                    e.preventDefault();
                    if($("#contentText").val()==="") //simple validation
                    {
                        alert("Введите наименование!");
                        return false;
                    }
                    var myData = "content_txt="+ $("#contentText").val(); //post variables
                    jQuery.ajax({
                        type: "POST", // HTTP метод  POST или GET
                        url: "response.php", //url-адрес, по которому будет отправлен запрос
                        dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
                        data:myData, //данные, которые будут отправлены на сервер (post переменные)
                        success:function(response){
                        $("#responds").append(response);
                        $("#contentText").val(''); //очищаем текстовое поле после успешной вставки
                        },
                        error:function (xhr, ajaxOptions, thrownError){
                            alert(thrownError); //выводим ошибку
                        }
                    });
                });

                // Обновляем запись, когда произошел клик по кнопке
                $("#ChangeSubmit").click(function (e) {
                    e.preventDefault();
                    if($("#recipient-name").val()==="") //simple validation
                    {
                        alert("Введите наименование!");
                        return false;
                    }
                        //post variables
                    var clickedID = $("#id").val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
                    var DbNumberID = clickedID[1]; //и получаем номер из массива
                    var myData = "content_txt="+ $("#recipient-name").val() +"&"+
                                 "tbl="+ $("#tbl").val() +"&"+
                                 "field="+ $("#field").val() +"&"+
                                 "fieldid="+ $("#fieldid").val() +"&"+
                                 "id="+ DbNumberID;
                        // "name=John&location=Boston"
                        jQuery.ajax({
                            type: "POST", // HTTP метод  POST или GET
                            url: "change.php", //url-адрес, по которому будет отправлен запрос
                            dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
                            data:myData, //данные, которые будут отправлены на сервер (post переменные)
                            success:function(response){
                            $("#"+$("#tbl").val()+"_"+ DbNumberID).text($("#recipient-name").val());
                            $("#"+$("#tbl").val()+"_"+ DbNumberID).parent().data('name',$("#recipient-name").val());
                                // для img
                            $("#image-"+ DbNumberID).find('img').data('name',$("#recipient-name").val());
                            // для разделов
                            $("#item_"+ DbNumberID).find("#"+$("#tbl").val()+"-"+ DbNumberID).data('name',$("#recipient-name").val());
                            // $("#contentText").val(''); //очищаем текстовое поле после успешной вставки
                            },
                            error:function (xhr, ajaxOptions, thrownError){
                                alert(thrownError); //выводим ошибку
                            }
                        });
                 });

                //Удаляем запись 
                $("body").on("click", "#DelSubmit", function(e) {
                    e.preventDefault();
                    if (confirm("Удалить?")) {
                        // alert("Удаляем!");
                        // var productList = document.querySelectorAll('#tb-head div.row');
                        // console.log('productList: ', productList);
                        // for (i = 0; i < productList.length; i++) {
                        //     console.log('product: ', productList[i]);
                        //     }
                        // console.log('ID '+$('span[id="form-id"]').data('val'));
                        var sdata=$.trim($('span[id="form-id"]').data('val'));
                        console.log(sdata);
                        
                        var productList = $('span[id="name_'+sdata+'"]').parent().parent().parent();

                        console.log('productList: ', productList);
                        for (i = 0; i < productList.length; i++) {
                            console.log('product: ', productList[i]);
                            }
                           
                        
                        // $('span[id="name_'+sdata+'"]').parent().fadeOut("slow");
                        console.log('span[id="name_'+sdata+'"]');
                        console.log($('span[id="name_'+sdata+'"]').text());
                      
                        


                        var clickedID = $('input[id="id"]').val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
                        var DbNumberID = clickedID[1]; //и получаем номер из массива
                        var tbl = $('input[id="tbl"]').val();                        
                        var fieldid = $('input[id="fieldid"]').val(); 
                        console.log('tbl-'+tbl);

                        $('#item_'+DbNumberID).fadeOut("slow");
                        $('#myModal').modal('hide');  
                        // return false;

                        //выстраиваем  данные для POST
                        var myData =    "recordToDelete="+DbNumberID+"&"+
                                        "tbl="+tbl+"&"+                                        
                                        "fieldid="+fieldid;
                        jQuery.ajax({
                            type: "POST", // HTTP метод  POST или GET
                            url: "response-del.php", //url-адрес, по которому будет отправлен запрос
                            dataType:"text", // Тип данных
                            data:myData, //post переменные
                            success:function(response){
                            // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                            switch (tbl) {                                
                                case "obj":
                                    $('#image-'+DbNumberID).fadeOut("slow");
                                    break;
                                case "category":
                                    $('span[id="name_'+sdata+'"]').parent().fadeOut("slow");
                                    break;
                                case "grupp":
                                    $('span[id="name_'+sdata+'"]').parent().fadeOut("slow");
                                    break;
                                case "head":
                                    $('#item_'+DbNumberID).fadeOut("slow");
                                    break;
                            }

                            },
                            error:function (xhr, ajaxOptions, thrownError){
                                //выводим ошибку
                                alert(thrownError);
                            }
                        });
                        // $('#myModal').modal('hide');
                    }// else {alert("Вы нажали кнопку отмена");}  
                });


                $("body").on( "click"," .btn-minimize.btn-round",function (e) {
                    // e.preventDefault();
                    var $target = $(this).parent().parent().next('.box-content');
                    if ($target.is(':visible')) $('i', $(this)).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                    else                       $('i', $(this)).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                    $target.slideToggle();
                });
                $("body").on( "click",".btn-minimize.button34",function (e) {
                    // e.preventDefault();
                    var $target = $(this).parent().next('.box-content');
                    if ($target.is(':visible')) $('i', $(this)).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                    else                       $('i', $(this)).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                    $target.slideToggle();
                });
                        

                // для объекта
                $("body").on( "mouseenter","ul.thumbnails.gallery li.thumbnail",function () {
                    // console.log("over obj img");
                    $('img', this).fadeToggle(1000);
                    $(this).find('.gallery-controls').remove();
                    console.log($('img', this).data('parent'));
                    var parent = $('img', this).data('parent');             
                    var id = $('img', this).data('id'); 
                    var content = $('img', this).data('content');
                    var name = $('img', this).data('name');
                    var htmlid = $('img', this).data('htmlid'); 
                    console.log($('img', this).data('htmlid'));
                    // var tbl = $('img', this).data('tbl');
                    // var field = $('img', this).data('field');
                    // var fieldid = $('img', this).data('field-id');

                    $(this).append('<div class="well gallery-controls">'+
                                        '<p>' +
                                            '<a href="#"'+
                                            ' class="gallery-edit btn"'+
                                            ' title="РЕДАКТИРОВАТЬ ОБЪЕКТ"' +

                                            ' data-toggle="modal"'+
                                            ' data-target="#myModal" '+
                                            ' data-parent="' + parent +'"'+
                                            ' data-id="'+ id +'"'+
                                            ' data-tbl="obj"'+
                                            ' data-field="name_obj"'+
                                            ' data-content="'+ content +'"'+
                                            ' data-name="'+ name +'"'+
                                            ' data-htmlid="'+ htmlid +'"' +
                                            'data-action="change"'+
                                            ' data-field-id="obj_id">'+                                    
                                            '<i class="glyphicon glyphicon-edit" ></i>'+                                    
                                        '</p>'+
                                    '</div>');
                    $(this).find('.gallery-controls').stop().animate({'margin-top': '-1'}, 400);
                });
                $("body").on( "mouseleave","ul.thumbnails.gallery li.thumbnail",function () {
                    // console.log("out obj img");
                    $('img', this).fadeToggle(1000);
                    $(this).find('.gallery-controls').stop().animate({'margin-top': '-30'}, 200, function () {
                        $(this).remove();
                    });
                });


                // для вкладок TAB
                $("body").on( "mouseenter","ul.nav-tabs li",function () { 
                    //  alert($(this).text()); 
                    // console.log("over вкладка tab");    
                    var name = $(this).find('a > span').text();
                    var tbl = $(this).find('a').data('tbl');
                    var field = $(this).find('a').data('field');
                    var fieldid = $(this).find('a').data('field-id'); 
                    var parent = $(this).find('a').data('parent'); 
                    var id = $(this).find('a').data('id'); 
                    var href = $(this).find('a').data('href'); 
                    var order = $(this).find('a').data('order');
                    var htmlid = $(this).find('a').data('htmlid'); 
                    var title = $(this).find('a').data('title'); 
                    var add = "";
                    if (tbl=='grupp')
                    {
                        var clickedID = id.split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
                        var DbNumberID = clickedID[1]; //и получаем номер из массива
                    add = '</a> <a href="#" class="gallery-add btn" data-content="ДОБАВИТЬ ОБЪЕКТ" title="ДОБАВИТЬ ОБЪЕКТ"'+
                            'data-toggle="modal" data-target="#myModal"'+
                            'data-tbl="obj" '+
                            'data-field="name_obj" '+
                            'data-parent="grupp_id-' + DbNumberID +'"' +
                            'data-field-id="obj_id"' +
                            'data-href=""' +
                            'data-order=""' +
                            'data-htmlid=""'+
                            'data-action="action"'+
                            'data-id="obj_"  '+
                            ' style="border:none;">'+
                            '<i class="glyphicon glyphicon-plus-sign"></i></a>'; 
                    }
                    
                    
                    $(this).append(
                        '<div class=" tab-controls" >'+
                        '<p>'+
                        '<a href="#" class="gallery-edit btn " title="РЕДАКТИРОВАТЬ ' + title + '"' + 
                        'data-content="РЕДАКТИРОВАТЬ ' + title + '"' + 
                        'data-name="' + name + '" ' +
                        'data-toggle="modal" '+
                        'data-target="#myModal" '+
                        'data-tbl="' + tbl + '" '+
                        'data-field="' + field + '" '+
                        'data-parent="' + parent +'"' +
                        'data-field-id="' + fieldid + '"' +
                        'data-href="' + href + '"' +
                        'data-order="' + order + '"' +
                        'data-htmlid="' + htmlid + '"'+
                        'data-action="change"'+
                        'data-id="' + id + ' " style="border:none;" >'+
                        '<i class="glyphicon glyphicon-edit" ></i>'+
                        add +
                        '</p>'+
                        '</div>');
                    $(this).find('.tab-controls').stop().animate({'margin-top': '-15'}, 400);
                });
                
                $("body").on( "mouseleave","ul.nav-tabs li",function () {
                    // console.log("out вкладка tab");
                    // $('a', this).fadeToggle(1000);
                    $(this).find('.tab-controls').stop().animate({'margin-top': '0'}, 200, function () {  $(this).remove();   });
                });


                        
                //gallery edit
            // $("body").on( "click","ul.thumbnails.gallery li.thumbnail a.gallery-edit" , function (e) {
            // e.preventDefault();
            // //get image id
            // // alert("click");
            // alert('редактировать ' + $(this).parents('.thumbnail').attr('id'));
            // }); 

            // gallery-add
            // $("body").on( "click","ul.thumbnails.gallery li.thumbnail a.gallery-add" , function (e) {
            // // e.preventDefault();
            // //get image id
            // // alert("click");
            // alert('добавить к ' + $(this).parents('.thumbnail').attr('id'));
            // }); 

            //  $("body").on( "click",".gallery-add",function (e) {
            //     e.preventDefault();
            //     $('#myModal').modal('show');
            // });
            
            //gallery img click
            // $("body").on( "click","ul.thumbnails.gallery li.thumbnail img" , function (e) {
            // e.preventDefault();
            // //get image id
            // // alert("click");
            // alert('Картинка ' + $(this).parents('.thumbnail').attr('id'));
            // }); 


            //gallery ADD ПОКА УДАЛЯЕТ
            // $('.thumbnails').on('click', '.gallery-add', function (e) {
            //     e.preventDefault();
            //     //get image id
            //     //alert($(this).parents('.thumbnail').attr('id'));
            //     // $(this).parents('.thumbnail').fadeOut();
            // });

            $('#myModal').on('hidden.bs.modal', function (event) 
            {
                $('.list-tbl').html("");
            });

        // при открытии модального окна
        $('#myModal').on('show.bs.modal', function (event) {
            
        $('#loading1').css("display", "block");
            
        // получить кнопку, которая его открыло
        var button = $(event.relatedTarget); 
        // alert(button.data('content'));
        // извлечь информацию из атрибута data-content
        // var content = button.data('content'); 
        // alert(button.data('content'));
        var content = button.data('content');
        var tbl = button.data('tbl');
        var field = button.data('field');
        var fieldid = button.data('field-id'); 
        var parent = button.data('parent');
        var recipient_href = button.data('href');
        var recipient_order = button.data('order');
        var htmlid = button.data('htmlid');         
        var id = button.data('id');
        var action =  button.data('action'); 
        $('input[id="action"]').val(action); // установка поля} 
        // var recipient_name =  " " + String.fromCharCode(171) + button.data('name') + String.fromCharCode(187) // Извлечение информации из данных-* атрибутов
        var recipient_name =button.data('name') // Извлечение информации из данных-* атрибутов

        // if (typeof recipient_name == typeof undefined) {recipient_name="";}
        if (typeof button.data('name') === typeof undefined) {recipient_name="";}


        // var im = button.data('im'); 
        var im = button.attr('src');
        // вывести эту информацию в элемент, имеющий id="content"
        // $("body").css("overflow-y", "scroll");
        // html {   overflow-y: scroll;   }
        // $(this).css("margin-right", "-20px");

        if (content.indexOf("ДОБАВИТЬ") !== -1)
        {
            $("#ChangeSubmit").addClass('hidden');
            $("#DelSubmit").addClass('hidden');
            $("#AddSubmit").removeClass('hidden');
            action = "action"; 
        }
        else{$("#AddSubmit").addClass('hidden');$("#ChangeSubmit").removeClass('hidden');$("#DelSubmit").removeClass('hidden');}
        // $(this).find('#myModalLabel').text(content +  recipient_name); 
        $(this).find('#myModalLabel').text(content); 
        // recipient_name = recipient_name.replace(String.fromCharCode(171), '');// удаление ковычек
        // recipient_name = recipient_name.replace(String.fromCharCode(187), '');// удаление ковычек
        // data
        
         if ( typeof(parent) != "undefined" && parent !== "")
         {
            // parent=' $$$'+ parent;
         }
         else{
            parent="";
         }

                        var clickedID = $("#id").val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
                        var DbNumberID = clickedID[1]; //и получаем номер из массива

                        var myData =    "content_txt="+ button.data('name') +"&"+
                                        "tbl="+tbl+"&"+
                                        "field="+field+"&"+
                                        "fieldid="+fieldid+"&"+
                                        "parent="+parent+"&"+
                                        "href="+recipient_href+"&"+
                                        "order="+recipient_order+"&"+
                                        "htmlid="+htmlid+"&"+
                                        "action="+action+"&"+
                                        "id="+ id;
                                        // "id="+ DbNumberID;
                        // "name=John&location=Boston"
                        jQuery.ajax({
                            type: "POST", // HTTP метод  POST или GET
                            url: "add-input.php", //url-адрес, по которому будет отправлен запрос
                            dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
                            data:myData, //данные, которые будут отправлены на сервер (post переменные)
                            success:function(response){

                                $('.list-tbl').html(response);
                                $('#loading1').css("display", "none");

                            // $("#"+$("#tbl").val()+"_"+ DbNumberID).text($("#recipient-name").val());
                            // $("#"+$("#tbl").val()+"_"+ DbNumberID).parent().data('name',$("#recipient-name").val());
                            //     // для img
                            // $("#image-"+ DbNumberID).find('img').data('name',$("#recipient-name").val());
                            // // для разделов
                            // $("#item_"+ DbNumberID).find("#"+$("#tbl").val()+"-"+ DbNumberID).data('name',$("#recipient-name").val());
                            // // $("#contentText").val(''); //очищаем текстовое поле после успешной вставки

                            },
                            error:function (xhr, ajaxOptions, thrownError){
                                alert(thrownError); //выводим ошибку
                            }
                        });
        // заполнение модального окна

        // $(this).find('.modal-body p').text(tbl+' . '+field+' . '+fieldid+' = '+id + parent); 
        $(this).find('#tbl').val(tbl);
        $(this).find('#field').val(field); 
        $(this).find('#fieldid').val(fieldid); 
        $(this).find('#id').val(id);  
        $(this).find('#recipient-name').val(recipient_name); 
        $(this).find('#recipient-href').val(recipient_href);
        $(this).find('#recipient-order').val(recipient_order); 

        $(this).find('#im').html('<img src="'+im+'" alt=" "class="center-block img-rounded img-thumbnail">'); 
        });

// $('#item_3  a.btn-minimize').trigger('click');// генерация клика




// drag and drop

	// В dataTransfer помещаются изображения которые перетащили в область div
	jQuery.event.props.push('dataTransfer');
	
	// Максимальное количество загружаемых изображений за одни раз
	var maxFiles = 1;
	
	// Оповещение по умолчанию
	var errMessage = 0;
	
	// Кнопка выбора файлов
	var defaultUploadBtn = $('#uploadbtn');
	
	// Массив для всех изображений
	var dataArray = [];
	
	// Область информер о загруженных изображениях - скрыта
	$('#uploaded-files').hide();
	
    // Метод при падении файла в зону загрузки
    
	$("body").on('drop','#drop-files', function(e) {	
		// Передаем в files все полученные изображения
		var files = e.dataTransfer.files;
		// Проверяем на максимальное количество файлов
		if (files.length <= maxFiles) {
			// Передаем массив с файлами в функцию загрузки на предпросмотр
			loadInView(files);
		} else {
			alert('Вы не можете загружать больше '+maxFiles+' изображений!'); 
			files.length = 0; return;
		}
	});
	
    // При нажатии на кнопку выбора файлов
    
    // $("body").on('change',defaultUploadBtn, function() {
        $("body").on('change','#uploadbtn', function() {
   		// Заполняем массив выбранными изображениями
   		var files = $(this)[0].files;
   		// Проверяем на максимальное количество файлов
		if (files.length <= maxFiles) {
			// Передаем массив с файлами в функцию загрузки на предпросмотр
			loadInView(files);
			// Очищаем инпут файл путем сброса формы
            $('#frm').each(function(){
	        	    this.reset();
			});
		} else {
			alert('Вы не можете загружать больше '+maxFiles+' изображений!'); 
			files.length = 0;
		}
	});
	
	// Функция загрузки изображений на предросмотр
	function loadInView(files) {
		// Показываем обасть предпросмотра
		$('#uploaded-holder').show();
		
		// Для каждого файла
		$.each(files, function(index, file) {
            console.log(files[index].type);	
			// Несколько оповещений при попытке загрузить не изображение
			if (!files[index].type.match('image.*')) {
				
				if(errMessage == 0) {
					$('#drop-files p').html('Эй! только изображения!');
					++errMessage;
				}
				else if(errMessage == 1) {
					$('#drop-files p').html('Стоп! Загружаются только изображения!');
					++errMessage;
				}
				else if(errMessage == 2) {
					$('#drop-files p').html("Не умеешь читать? Только изображения!");
					++errMessage;
				}
				else if(errMessage == 3) {
					$('#drop-files p').html("Хорошо! Продолжай в том же духе");
					errMessage = 0;
				}
				return false;
			}
			
			// Проверяем количество загружаемых элементов
			if((dataArray.length+files.length) <= maxFiles) {
				// показываем область с кнопками
				$('#upload-button').css({'display' : 'block'});
			} 
			else { alert('Вы не можете загружать больше '+maxFiles+' изображений!'); return; }
			
			// Создаем новый экземпляра FileReader
			var fileReader = new FileReader();
				// Инициируем функцию FileReader
				fileReader.onload = (function(file) {
					
					return function(e) {
						// Помещаем URI изображения в массив
						dataArray.push({name : file.name, value : this.result});
						addImage((dataArray.length-1));
					}; 
						
				})(files[index]);
			// Производим чтение картинки по URI
			fileReader.readAsDataURL(file);
		});
		return false;
	}
		
	// Процедура добавления эскизов на страницу
	function addImage(ind) {
		// Если индекс отрицательный значит выводим весь массив изображений
		if (ind < 0 ) { 
		start = 0; end = dataArray.length; 
		} else {
		// иначе только определенное изображение 
		start = ind; end = ind+1; } 
		// Оповещения о загруженных файлах
		if(dataArray.length == 0) {
			// Если пустой массив скрываем кнопки и всю область
			$('#upload-button').hide();
			$('#uploaded-holder').hide();
		} else if (dataArray.length == 1) {
            // $('#upload-button span').html("Был выбран 1 файл: "+dataArray[start].name);
            $('#upload-button span').html(dataArray[start].name);
		} else {
			$('#upload-button span').html(dataArray.length+" файлов были выбраны");
		}
		// Цикл для каждого элемента массива
		for (i = start; i < end; i++) {
			// размещаем загруженные изображения
			if($('#dropped-files > .image').length <= maxFiles) { 
				// $('#drop-files').append('<div id="img-'+i+'" class="image" style="background: url('+dataArray[i].value+'); background-size: cover;width: 100px; height: 100px;"></div>'); 
                $('#drop-files').append('<div id="img-'+i+'" class="image" style="background: url('+dataArray[i].value+'); background-size: cover;width: 100px; height: 100px; position: relative;"> <a href="#" id="drop-'+i+'" class="drop-button">Удалить изображение</a></div>'); 
                $('#drop-files p').hide();
			}
		}
		return false;
	}
	
	// Функция удаления всех изображений
	function restartFiles() {
	
		// Установим бар загрузки в значение по умолчанию
		$('#loading-bar .loading-color').css({'width' : '0%'});
		$('#loading').css({'display' : 'none'});
		$('#loading-content').html(' ');
		
		// Удаляем все изображения на странице и скрываем кнопки
		$('#upload-button').hide();
        $('#dropped-files > .image').remove();
        $('#drop-files > .image').remove();
        $('#uploaded-holder').hide();
        $('#drop-files p').show();
	
		// Очищаем массив
		dataArray.length = 0;
		
		return false;
	}
	
	// // Удаление только выбранного изображения 
	// $("#dropped-files").on("click","a[id^='drop']", function() {
	// 	// получаем название id
 	// 	var elid = $(this).attr('id');
	// 	// создаем массив для разделенных строк
	// 	// var temp = new Array();
	// 	var temp = [];
	// 	// делим строку id на 2 части
	// 	temp = elid.split('-');
	// 	// получаем значение после тире тоесть индекс изображения в массиве
	// 	dataArray.splice(temp[1],1);
	// 	// Удаляем старые эскизы
	// 	$('#dropped-files > .image').remove();
	// 	// Обновляем эскизи в соответсвии с обновленным массивом
	// 	addImage(-1);		
	// });

    // Удаление только выбранного изображения 
   
	$("body").on("click","#drop-files a[id^='drop']", function() {
		// получаем название id
 		var elid = $(this).attr('id');
		// создаем массив для разделенных строк
		// var temp = new Array();
		var temp = [];
		// делим строку id на 2 части
		temp = elid.split('-');
		// получаем значение после тире тоесть индекс изображения в массиве
		dataArray.splice(temp[1],1);
		// Удаляем старые эскизы
		$('#drop-files > .image').remove();
		// Обновляем эскизи в соответсвии с обновленным массивом
		addImage(-1);		
	});
	
	// Удалить все изображения кнопка 
    // $('#dropped-files #upload-button .delete').click(restartFiles);
    $("body").on("click","#dropped-files #upload-button .delete", restartFiles);
	
    // Загрузка изображений на сервер
    
    
	$("body").on("click","#upload-button .upload",function() {
		
		// Показываем прогресс бар
		$("#loading").show();
		// переменные для работы прогресс бара
		var totalPercent = 100 / dataArray.length;
		var x = 0;
		
		$('#loading-content').html('Загружен '+dataArray[0].name);
		// Для каждого файла
		$.each(dataArray, function(index, file) {	
			// загружаем страницу и передаем значения, используя HTTP POST запрос 
			$.post('upload.php', dataArray[index], function(data) {
			
				var fileName = dataArray[index].name;
				++x;
				
				// Изменение бара загрузки
				$('#loading-bar .loading-color').css({'width' : totalPercent*(x)+'%'});
				// Если загрузка закончилась
				if(totalPercent*(x) == 100) {
					// Загрузка завершена
					$('#loading-content').html('Загрузка завершена!');
					
					// Вызываем функцию удаления всех изображений после задержки 1 секунда
					setTimeout(restartFiles, 1000);
				// если еще продолжается загрузка	
				} else if(totalPercent*(x) < 100) {
					// Какой файл загружается
					$('#loading-content').html('Загружается '+fileName);
				}
				
				// Формируем в виде списка все загруженные изображения
				// data формируется в upload.php
				var dataSplit = data.split(':');
				if(dataSplit[1] == 'загружен успешно') {
					$('#uploaded-files').append('<li><a href="images/'+dataSplit[0]+'">'+fileName+'</a> загружен успешно</li>');
								
				} else {
					$('#uploaded-files').append('<li><a href="images/'+data+'. Имя файла: '+dataArray[index].name+'</li>');
				}
				
			});
		});
		// Показываем список загруженных файлов
		$('#uploaded-files').show();
		return false;
	});
	
    // Простые стили для области перетаскивания
    // $("body").on( "click"," .btn-minimize.btn-round",
	$("body").on('dragenter','#drop-files', function() {
		
		$(this).css({'box-shadow' : 'inset 0px 0px 20px rgba(0, 0, 0, 0.1)', 'border' : '4px dashed #bb2b2b'});
		return false;
	});
	
	$("body").on('drop','#drop-files', function() {
		
		$(this).css({'box-shadow' : 'none', 'border' : '4px dashed rgba(0,0,0,0.2)'});
		return false;
	});

	$("button[name='del1']").click(function() {
		// alert('Удаление!');

		$.post('del.php', 'file_name=ebc2f79289ce.jpg', function(data) {
				// $('.result').html(data);
				// alert('Удаление завершено!.');
				$("button[name='del1']").text(data);
			});


	});

// drag and drop

        $("body").on('click','#checkbox', function(){
            if ($(this).is(':checked')){
                $('.yri').show(100);
                $('.noyri').hide(100);
            } else {
                $('.yri').hide(100);
                $('.noyri').show(100);
            }
        }); 

        // if ($('#checkbox').is(':checked')){
        //         alert('Включен');
        //     } else {
        //         alert('Выключен');
        //     }


    });//ready

    

 

// var obj = null;
//      $("body").on( "focus","button.button31" , function (e) {
//             e.preventDefault();
//             obj = this;
//             // alert("click");
//             setTimeout(
//                 function() { $(obj).blur() }, 2000
//                 );
//                 $(this).removeClass('btn-warning');    
//      }); 

  // Обновляем запись, когда произошел клик по кнопке refresh
  var obj = null;
  $("body").on( "click","button.btn.button31.btn-warning" , function (e) {

    e.preventDefault();
    obj = this;
    // $(this).removeClass('btn-warning');
    // alert($(this).attr('class'));
    // alert($(obj).data('field'));
    var recipient = $(obj).parent().parent().find($("[id*='recipient']")); // значение
    // var parent = $('#myModal').find('#form-parent').val(); // значение
    var parent =$('span[id="form-parent"]').data('val');
    var val = recipient.val();
    // var datafieid =$(obj).data('field')).val();
    val = $.trim(val);

    if(val==="") //simple validation
    {
        alert("Введите наименование!");
        return false;
    }
    // else{alert($(this).parent().parent().find($("[id*='recipient']")).val());}
        //post variables
        // alert($(obj).data('fie'));
        if ( typeof($(obj).data('fieldid')) !== "undefined" && $(obj).data('fieldid') !== "")
         {
            $('input[id="fieldid"]').val($(obj).data('fieldid')).val(); // установка поля
         }
         if ( typeof($(obj).data('id')) !== "undefined" && $(obj).data('id') !== "")
         {
            $('input[id="id"]').val($(obj).data('id')).val(); // установка поля
         }
         if ( typeof($(obj).data('action')) !== "undefined" && $(obj).data('action') !== "")
         {
            $('input[id="action"]').val($(obj).data('action')).val(); // установка поля
         }
        
        $('input[id="field"]').val($(obj).data('field')).val(); // установка поля
        $('input[id="tbl"]').val($(obj).data('tbl')).val(); // установка поля
    var clickedID = $("#id").val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
    var DbNumberID = clickedID[1]; //и получаем номер из массива

    var myData = "content_txt="+ recipient.val() +"&"+
                "tbl="+ $("#tbl").val() +"&"+
                "field="+ $("#field").val() +"&"+
                "fieldid="+ $("#fieldid").val() +"&"+
                "action="+ $("#action").val() +"&"+
                "parent="+ parent +"&"+
                "id="+ DbNumberID;
        // "name=John&location=Boston"
        jQuery.ajax({
            type: "POST", // HTTP метод  POST или GET
            url: "change.php", //url-адрес, по которому будет отправлен запрос
            dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
            data:myData, //данные, которые будут отправлены на сервер (post переменные)
            success:function(response){
                // alert($("#"+$("#tbl").val()).text() + DbNumberID + " "+ recipient.val());
            $("#"+$("#field").val()+"_"+ DbNumberID).text(recipient.val());
            $('input[id="id"]').val(response);
            $('input[id="action"]').val("change");
            // alert('$insert_id='+response);
            // $("#"+$("#tbl").val()+"_"+ DbNumberID).parent().data('name',recipient.val());
                // для img
            // $("#image-"+ DbNumberID).find('img').data('name',recipient.val());
            // // для разделов
            // $("#item_"+ DbNumberID).find("#"+$("#tbl").val()+"-"+ DbNumberID).data('name',recipient.val());
            // // $("#contentText").val(''); //очищаем текстовое поле после успешной вставки
            // alert(obj.attr('class')+' NEW '+recipient.val());
            $(obj).blur();
            $(obj).removeClass('btn-warning');
            },
            error:function (xhr, ajaxOptions, thrownError){
                alert(thrownError); //выводим ошибку
            }
        });
    });





// $("body").on("click",'.dismiss', function() {
//     $('.list-tbl').html("");
//     // $('#loading').css("display", "block");
// })




$("body").on( "change",".form-control" , function (e) {
    e.preventDefault();
                // alert('btn-warning');
                $(this).parent().find('.input-group-btn > button.button31').addClass('btn-warning');            
            }); 

  $("body").on( "click","button.btn.btn-primary.button33" , function (e) {
    e.preventDefault();
    // alert($(this).parent().parent().parent().parent().parent().attr('class'));
    // alert($(this).parent().parent().parent().parent().parent().hasClass('obj_in_addition'));
      if ($(this).parent().parent().parent().parent().parent().hasClass('obj_in_addition'))
        {$(this).parent().parent().parent().parent().parent().append('<div class="row">'+
            '<div class="input-group col-md-12">'+
                                '<div class="input-group ">' +                      
                                    '<span class="input-group-addon">fname_img_obj_in_addition</span>'+
                                    '<input type="text" class="form-control" id="recipient-url_video_obj_prop" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>'+
                                    '<span class="input-group-btn">'+
                                            '<button type="button" data-tbl="obj_in_addition"  data-field ="fname_img_obj_in_addition"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                            '<button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>'+
                                            '<button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>'+  
                                            '<button type="button" class="btn btn-minimize btn-default button34"><i class="glyphicon glyphicon-chevron-down"></i></button>'+                                                                                    
                                    '</span>'+
                                '</div>'+
                                '<div class="box-content">'+
                                    '<div class="row">'+
                                        '<div class="input-group col-md-12">'+
                                            '<div class="input-group ">'+                      
                                                '<span class="input-group-addon">html_in_addition_id</span>'+
                                                '<input type="text" class="form-control" id="recipient-html_in_addition_id" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>'+
                                                '<span class="input-group-btn">'+
                                                    '<button type="button" data-tbl="obj_in_addition" data-field ="html_in_addition_id"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                                '</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="input-group col-md-12">'+
                                            '<div class="input-group ">'+                       
                                                '<span class="input-group-addon">path_img_obj_in_addition</span>'+
                                                '<input type="text" class="form-control" id="recipient-path_img_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>'+
                                                '<span class="input-group-btn">'+
                                                    '<button type="button" data-tbl="obj_in_addition" data-field ="path_img_obj_in_addition"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                                '</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="input-group col-md-12">'+
                                            '<div class="input-group "> '+                      
                                                '<span class="input-group-addon">data_href_img_obj_in_addition</span>'+
                                                '<input type="text" class="form-control" id="recipient-data_href_img_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>'+
                                                '<span class="input-group-btn">'+
                                                    '<button type="button" data-tbl="obj_in_addition" data-field ="data_href_img_obj_in_addition"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                                '</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="input-group col-md-12">'+
                                            '<div class="input-group ">'+                       
                                                '<span class="input-group-addon">fname_img_smoll_obj_in_addition</span>'+
                                                '<input type="text" class="form-control" id="recipient-fname_img_smoll_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>'+
                                                '<span class="input-group-btn">'+
                                                    '<button type="button" data-tbl="obj_in_addition" data-field ="fname_img_smoll_obj_in_addition"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                                '</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="input-group col-md-12">'+
                                            '<div class="input-group ">' +                      
                                                '<span class="input-group-addon">data_href_img_smoll_obj_in_addition</span>'+
                                                '<input type="text" class="form-control" id="recipient-data_href_img_smoll_obj_in_addition" value="./dist/files/pdf/shablon-alboma-obrazcov.DWG" required>'+
                                                '<span class="input-group-btn">'+
                                                    '<button type="button" data-tbl="obj_in_addition" data-field ="data_href_img_smoll_obj_in_addition"   class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                                '</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="input-group col-md-12">'+
                                            '<div class="input-group ">'+                       
                                                '<span class="input-group-addon">img_def</span>'+
                                                '<textarea class="form-control"  name="text"></textarea>'+
                                                '<span class="input-group-btn">'+
                                                    '<button type="button" data-tbl="obj_in_addition" data-field ="img_def"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                                '</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+                                     
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
        }
        // obj_alias
        else {$(this).parent().parent().parent().parent().parent().append('<div class="row">'+
                        '<div class="input-group col-md-12">'+
                            '<div class="input-group "> ' +                     
                                '<span class="input-group-addon"></span>'+
                                '<input type="text" class="form-control" id="recipient-obj_alias " value="KRYWORD" required>'+
                                '<span class="input-group-btn">'+
                                    '<button type="button"  data-tbl="obj_alias"  data-field ="keywords_alias"  class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                    '<button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>'+
                                    '<button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>'+                                          
                                '</span>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                    );
                }
            
    });
            
    
            
    $("body").on( "click","button.btn.btn-danger.button32" , function (e) {
    e.preventDefault();
    //get image id
    // alert($(this).parent().parent().parent().parent().hasClass('row1'));
    $(this).parent().parent().parent().parent().not('.row1').fadeOut();
    if ($(this).parent().parent().parent().parent().hasClass('row1')) {
        $(this).parents('.input-group').find('input').val('');
        $(this).parents('.input-group-btn').find('.button31').addClass('btn-warning');
    }
    
});


</script>

<?php require('footer.php'); ?>
