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


<!-- ПРОБА -->
<article id="responds">
    <?php
    //подключаем конфигурационный файл
    define('__ROOT__', dirname(dirname(__FILE__))); 
    require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

    $dbconn=dbconnect();

    // //MySQL запрос
    $Result_head = mysqli_query($dbconn,"SELECT * FROM head");

    // получаем все записи из таблицы head
    while($row_head = mysqli_fetch_array($Result_head))
    {


        echo '
    
        <div class="box col-md-12" id="item_'.$row_head["head_id"].'">
            <div class="box-inner">
                <div class="box-header well">
                    <h2 ><i class="glyphicon glyphicon-th"></i> <span id="head_'.$row_head["head_id"].'">'.$row_head["name_head"].'</span></h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default" 
                            id="head-'.$row_head["head_id"].'"
                            data-content="РЕДАКТИРОВАТЬ"
                            data-name="'.$row_head["name_head"].'"
                            data-href="'.$row_head["data_href_head"].'"
                            data-order="'.$row_head["number_in_order_head"].'"
                            data-toggle="modal"
                            data-target="#myModal" 
                            title="РЕДАКТИРОВАТЬ" 
                            data-tbl="head"
                            data-field="name_head"
                            data-field-id="head_id"
                            data-id="head_'.$row_head["head_id"].'"
                            >
                            <i class="glyphicon glyphicon-edit"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>  
                        <!-- <a href="#" class="btn btn-close btn-round btn-default" title="ДОБАВИТЬ РАЗДЕЛ"><i class="glyphicon glyphicon-plus-sign"></i></a> -->
                    </div>
                </div>
             ';
             $head_id=$row_head["head_id"];
             $active="active";
                // //MySQL запрос
               if($Result_category = mysqli_query($dbconn,"SELECT *  FROM category WHERE head_id = $head_id"))
               {
                        // получаем все записи из таблицы category
                    
                        
                    //   echo $q ;       
                    echo '
                       
                        <div  class="box-content">
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
                                                        data-tbl="category"
                                                        data-field="name_category"
                                                        data-field-id="category_id"
                                                        data-id="category_'.$row_category["category_id"].'"
                                                        >
                                                        <i class="glyphicon glyphicon-plus-sign"></i>
                                                    </a>
                                                </div>
                                                <div class="panel panel-transparent ">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                                    ';
                                                    while($row_category = mysqli_fetch_array($Result_category))
                                                    {
                                                        echo ' 
                                                        <li class="'.$active.'">
                                                            <a data-toggle="tab" href="#tab-fillup'.$row_category["category_id"].'"
                                                            data-tbl="category"                                                            
                                                            data-name="'.$row_category["name_category"].'"
                                                            data-href="'.$row_category["data_href_category"].'"
                                                            data-order="'.$row_category["number_in_order_category"].'"
                                                            data-field="name_category"
                                                            data-field-id="category_id"
                                                            data-parent="head_id-'.$head_id.'"
                                                            data-id="category_'.$row_category["category_id"].'"
                                                            ><span  id="category_'.$row_category["category_id"].'">'.$row_category["name_category"].'</span></a>
                                                        </li> 
                                                        ';
                                                        $active="";
                                                  
                                                    }//while
                        mysqli_free_result($Result_category);        
                    }   
                                                
                                        echo '       
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                         ';
                                            $active="active";
                                            // //MySQL запрос
                                           if($Result_category = mysqli_query($dbconn,"SELECT *  FROM category WHERE head_id = $head_id"))
                                           {
                                                // получаем все записи из таблицы category
                                                while($row_category = mysqli_fetch_array($Result_category))
                                                {
                                                        
                                                    $category_id=$row_category["category_id"];       
                                                    echo '

                                                    <div class="tab-pane '.$active.'" id="tab-fillup'.$row_category["category_id"].'">
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
                                                                            title="ДОБАВИТЬ ГРУППУ">
                                                                            <i class="glyphicon glyphicon-plus-sign"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-12 ">

                                                                            <div class="panel panel-transparent ">

                                                                                <ul class="nav nav-tabs nav-tabs-simple nav-tabs-left bg-white"
                                                                                    id="tab-'.$head_id.'">

                                                                                    ';
                                                                                    $active="active";
                                                                                    // //MySQL запрос
                                                                                   if($Result_grupp = mysqli_query($dbconn,"SELECT *  FROM grupp WHERE category_id = $category_id"))
                                                                                   {
                                                                                        // получаем все записи из таблицы grupp
                                                                                        while($row_grupp = mysqli_fetch_array($Result_grupp))
                                                                                        {
                                                                                                
                                                                                            $name_grupp=mb_strtoupper($row_grupp["name_grupp"], 'UTF-8');     
                                                                                            echo '

                                                                                    <li class="'.$active.'">
                                                                                        <a data-toggle="tab" href="#tabobj'.$row_grupp["grupp_id"].'"
                                                                                        data-tbl="grupp"
                                                                                        data-name="'.$row_grupp["name_grupp"].'"
                                                                                        data-html-id="'.$row_grupp["html_id"].'"
                                                                                        data-category_id="'.$row_grupp["category_id"].'"
                                                                                        data-order="'.$row_grupp["number_in_order_grupp"].'"
                                                                                        data-field="name_grupp"
                                                                                        data-field-id="grupp_id"
                                                                                        data-parent="category_id-'.$category_id.'"
                                                                                        data-id="grupp_'.$row_grupp["grupp_id"].'"
                                                                                        ><span id="grupp_'.$row_grupp["grupp_id"].'">'.$name_grupp.'</span></a>
                                                                                    </li>


                                                                                    ';
                                                                                    $active="";
                                                                            
                                                                                }//while
                                                                                mysqli_free_result($Result_grupp);        
                                                                            } 
                                                                            echo ' 
                                                                                    

                                                                                </ul>

                                                                                <div class="tab-content bg-white">

                                                                                ';
                                                                                $active="active";
                                                                                // //MySQL запрос
                                                                               if($Result_grupp = mysqli_query($dbconn,"SELECT *  FROM grupp WHERE category_id = $category_id"))
                                                                               {
                                                                                    // получаем все записи из таблицы grupp
                                                                                    while($row_grupp = mysqli_fetch_array($Result_grupp))
                                                                                    {
                                                                                            
                                                                                        // $name_grupp=mb_strtoupper($row_grupp["name_grupp"], 'UTF-8');     
                                                                                        echo '
                                                                                    
                                                                                        <div class="tab-pane '.$active.'" id="tabobj'.$row_grupp["grupp_id"].'">
                                                                                            <div class="box-content pane">

                                                                                                <ul class="thumbnails gallery">
                                                                                                ';


                                                                                               
                                                                                                $grupp_id= $row_grupp["grupp_id"];
                                                                                                // $thumbs="/";
                                                                                                // $active="active";
                                                                                                // //MySQL запрос
                                                                                               if($Result_obj = mysqli_query($dbconn,"SELECT *  FROM obj WHERE grupp_id = $grupp_id"))
                                                                                               {
                                                                                                    // получаем все записи из таблицы grupp
                                                                                                    while($row_obj = mysqli_fetch_array($Result_obj))
                                                                                                    {
                                                                                                            
                                                                                                        // $name_grupp=mb_strtoupper($row_grupp["name_grupp"], 'UTF-8');     
                                                                                                       
                                                                                                        

                                                                                                    // for ($i = 1; $i <= 24; $i++) { 
                                                                                                    $i =$row_obj["obj_id"];
                                                                                                echo'  <li id="image-'. $i.'"class="thumbnail" data-name="'.$row_obj["name_obj"].'">
                                                                                                            <p class="" id="obj_'.$row_obj["grupp_id"].'">'. $row_obj["name_obj"].'</p>
                                                                                                            <a style="background:url('. substr($row_obj["path_img_obj"],1)."thumbs/".$row_obj["fname_img_obj"].')"
                                                                                                                title="'. $row_obj["img_alt_obj"].'"
                                                                                                                href="'. substr($row_obj["path_img_obj"],1).$row_obj["fname_img_obj"].'"
                                                                                                                
                                                                                                                >
                                                                                                                <img
                                                                                                                    class="grayscale"
                                                                                                                    src="'. substr($row_obj["path_img_obj"],1)."thumbs/". $row_obj["fname_img_obj"].'"
                                                                                                                    alt="'. $row_obj["img_alt_obj"].'"
                                                                                                                    data-parent="grupp_id-'.$grupp_id.'"
                                                                                                                    data-id="obj_'.$i.'"
                                                                                                                    data-content="РЕДАКТИРОВАТЬ"
                                                                                                                    data-name="'.$row_obj["name_obj"].'"
                                                                                                                >
                                                                                                            </a>
                                                                                                        </li>
                                                                                                        

                                                                                                        
                                                                                                    ';
                                                                                                    // $active="";
                                                                                            
                                                                                                }//while
                                                                                                mysqli_free_result($Result_obj);        
                                                                                            } 
                                                                                            echo ' 

                                                                                                </ul>
                                                                                            </div><!--box-content-->
                                                                                        </div> <!--tab-pane-->
                                                                                            ';

                                                                                                // } 
                                                                                             
                                                                                                $active="";
                                                                                        
                                                                                            }//while
                                                                                            mysqli_free_result($Result_grupp);        
                                                                                        } 
                                                                                        echo ' 
                                                                                                
                                                                                            

                                                                                     
                                                                                    

                                                                                </div><!--tab-content-->
                                                                                
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
                                            } 
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


                //Удаляем запись при клике по крестику
                // $("body").on("click", "#responds .del_button", function(e) {
                //     e.preventDefault();
                //     var clickedID = this.id.split("-"); //Разбиваем строку (Split работает аналогично PHP explode)
                //     var DbNumberID = clickedID[1]; //и получаем номер из массива
                //     var myData = 'recordToDelete='+ DbNumberID; //выстраиваем  данные для POST

                //     jQuery.ajax({
                //         type: "POST", // HTTP метод  POST или GET
                //         url: "response.php", //url-адрес, по которому будет отправлен запрос
                //         dataType:"text", // Тип данных
                //         data:myData, //post переменные
                //         success:function(response){
                //         // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                //         $('#item_'+DbNumberID).fadeOut("slow");
                //         },
                //         error:function (xhr, ajaxOptions, thrownError){
                //             //выводим ошибку
                //             alert(thrownError);
                //         }
                //     });
                // });


            $("body").on( "click"," .btn-minimize",function (e) {
                // e.preventDefault();
                var $target = $(this).parent().parent().next('.box-content');
                if ($target.is(':visible')) $('i', $(this)).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                else                       $('i', $(this)).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                $target.slideToggle();
            });
                    

       // для объекта
        $("body").on( "mouseenter","ul.thumbnails.gallery li.thumbnail",function () {
            console.log("over obj img");
            $('img', this).fadeToggle(1000);
            $(this).find('.gallery-controls').remove();
            console.log($('img', this).data('parent'));
            var parent = $('img', this).data('parent');             
            var id = $('img', this).data('id'); 
            var content = $('img', this).data('content');
            var name = $('img', this).data('name');
            console.log($('img', this).data('id'));
            // var tbl = $('img', this).data('tbl');
            // var field = $('img', this).data('field');
            // var fieldid = $('img', this).data('field-id');

            $(this).append('<div class="well gallery-controls">'+
                                '<p>' +
                                    '<a href="#"'+
                                    ' class="gallery-edit btn"'+
                                    ' title="РЕДАКТИРОВАТЬ"' +
                                    ' data-toggle="modal"'+
                                    ' data-target="#myModal" '+
                                    ' data-parent="' + parent +'"'+
                                    ' data-id="'+ id +'"'+
                                    ' data-tbl="obj"'+
                                    ' data-field="name_obj"'+
                                    ' data-content="'+ content +'"'+
                                    ' data-name="'+ name +'"'+
                                    ' data-field-id="obj_id">'+
                                    '<i class="glyphicon glyphicon-edit" ></i>'+
                                    '</a> <a href="#" class="gallery-add btn" title="ДОБАВИТЬ ЭЛЕМЕНТ" data-toggle="modal" data-target="#myModal" >'+
                                    '<i class="glyphicon glyphicon-plus-sign"></i>'+
                                    '</a>'+
                                '</p>'+
                             '</div>');
            $(this).find('.gallery-controls').stop().animate({'margin-top': '-1'}, 400);
        });
        $("body").on( "mouseleave","ul.thumbnails.gallery li.thumbnail",function () {
            console.log("out obj img");
            $('img', this).fadeToggle(1000);
            $(this).find('.gallery-controls').stop().animate({'margin-top': '-30'}, 200, function () {
                $(this).remove();
            });
        });


       // для вкладок TAB
        $("body").on( "mouseenter","ul.nav-tabs li",function () { 
            //  alert($(this).text()); 
            console.log("over вкладка tab");    
            var name = $(this).find('a > span').text();
            var tbl = $(this).find('a').data('tbl');
            var field = $(this).find('a').data('field');
            var fieldid = $(this).find('a').data('field-id'); 
            var parent = $(this).find('a').data('parent'); 
            var id = $(this).find('a').data('id'); 
            var href = $(this).find('a').data('href'); 
            var order = $(this).find('a').data('order');
            var htmlid = $(this).find('a').data('html-id');  
            $(this).append(
                '<div class=" tab-controls">'+
                '<p>'+
                '<a href="#" class="gallery-edit btn " title="РЕДАКТИРОВАТЬ!"'+ 
                'data-content="РЕДАКТИРОВАТЬ"'+ 
                'data-name="' + name + '" ' +
                'data-toggle="modal" '+
                'data-target="#myModal" '+
                'data-tbl="' + tbl + '" '+
                'data-field="' + field + '" '+
                'data-parent="' + parent +'"' +
                'data-field-id="' + fieldid + '"' +
                'data-href="' + href + '"' +
                'data-order="' + order + '"' +
                'data-html-id="' + htmlid + '"' +
                'data-id="' + id + ' "  >'+
                '<i class="glyphicon glyphicon-edit"></i></a></p></div>' );
            $(this).find('.tab-controls').stop().animate({'margin-top': '-15'}, 400);
        });
        $("body").on( "mouseleave","ul.nav-tabs li",function () {
            console.log("out вкладка tab");
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

            // // gallery-add
            // $("body").on( "click","ul.thumbnails.gallery li.thumbnail a.gallery-add" , function (e) {
            // e.preventDefault();
            // //get image id
            // // alert("click");
            // alert('добавить к ' + $(this).parents('.thumbnail').attr('id'));
            // }); 

            //  $("body").on( "click","#responds .btn-setting",function (e) {
            //     e.preventDefault();
            //     $('#myModal').modal('show');
            // });
            
            //gallery img click
            $("body").on( "click","ul.thumbnails.gallery li.thumbnail img" , function (e) {
            e.preventDefault();
            //get image id
            // alert("click");
            alert('Картинка ' + $(this).parents('.thumbnail').attr('id'));
            }); 


            //gallery ADD ПОКА УДАЛЯЕТ
            $('.thumbnails').on('click', '.gallery-add', function (e) {
                e.preventDefault();
                //get image id
                //alert($(this).parents('.thumbnail').attr('id'));
                // $(this).parents('.thumbnail').fadeOut();
            });

        // при открытии модального окна
        $('#myModal').on('show.bs.modal', function (event) {

        // получить кнопку, которая его открыло
        var button = $(event.relatedTarget); 
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
        var htmlid = button.data('html-id');         
        var id = button.data('id');  
        var recipient_name =  " " + String.fromCharCode(171) + button.data('name') + String.fromCharCode(187) // Извлечение информации из данных-* атрибутов

        if (typeof recipient_name === typeof undefined) {recipient_name="";}
        // var im = button.data('im'); 
        var im = button.attr('src');
        // вывести эту информацию в элемент, имеющий id="content"
        // $("body").css("overflow-y", "scroll");
        // html {   overflow-y: scroll;   }
        // $(this).css("margin-right", "-20px");

        if (content.indexOf("ДОБАВИТЬ") !== -1){$("#ChangeSubmit").addClass('hidden');$("#AddSubmit").removeClass('hidden');}
        else{$("#AddSubmit").addClass('hidden');$("#ChangeSubmit").removeClass('hidden');}
        $(this).find('#myModalLabel').text(content +  recipient_name); 
        recipient_name = recipient_name.replace(String.fromCharCode(171), '');// удаление ковычек
        recipient_name = recipient_name.replace(String.fromCharCode(187), '');// удаление ковычек
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
                                        "tbl="+ tbl +"&"+
                                        "field="+ field +"&"+
                                        "fieldid="+ fieldid +"&"+
                                        "parent="+ parent+"&"+
                                        "href="+ recipient_href+"&"+
                                        "order="+ recipient_order+"&"+
                                        "htmlid="+ htmlid+"&"+
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



    });//ready

    

 

var obj = null;
     $("body").on( "focus","button.button31" , function (e) {
            e.preventDefault();
            obj = this;
            // alert("click");
            setTimeout(
                function() { $(obj).blur() }, 2000
                );
                $(this).removeClass('btn-warning');    
     }); 

$("body").on( "change","input.form-control" , function (e) {
    e.preventDefault();
                // alert('btn-warning');
                $(this).parent().find('.input-group-btn > button.button31').addClass('btn-warning');
            
            }); 

  $("body").on( "click","button.btn.btn-primary.button33" , function (e) {
    e.preventDefault();
    // alert($(this).parents('.obj_alias').attr('class'));
                $(this).parents('.obj_alias').append('<div class="row">'+
                                '<div class="input-group col-md-12">'+
                                    '<div class="input-group "> ' +                     
                                        '<span class="input-group-addon"></span>'+
                                        '<input type="text" class="form-control" id="recipient-obj_alias " value="KRYWORD" required>'+
                                        '<span class="input-group-btn">'+
                                            '<button type="button" class="btn btn-default button31 "><i class="glyphicon glyphicon-refresh"></i></button>'+
                                            '<button type="button" class="btn btn-danger button32"><i class="glyphicon glyphicon-trash icon-white"></i></button>'+
                                            '<button type="button" class="btn btn-primary button33"><i class="glyphicon glyphicon-plus-sign icon-white"></i></button>'+                                          
                                        '</span>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                            );
            
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
