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
    $Result = mysqli_query($dbconn,"SELECT head_id,name_head,data_href_head,number_in_order_head FROM head");

    // получаем все записи из таблицы head
    while($row = mysqli_fetch_array($Result))
    {


        echo '
    
        <div class="box col-md-12" id="head_'.$row["head_id"].'">
            <div class="box-inner">
                <div class="box-header well">
                    <h2 ><i class="glyphicon glyphicon-th"></i> <span id="id_'.$row["head_id"].'">'.$row["name_head"].'</span></h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default" 
                            data-content="РЕДАКТИРОВАТЬ"
                            data-name="'.$row["name_head"].'"
                            data-toggle="modal"
                            data-target="#myModal" 
                            title="РЕДАКТИРОВАТЬ" 
                            data-tbl="head"
                            data-field="name_head"
                            data-field-id="head_id"
                            data-id="'.$row["head_id"].'"
                            >
                            <i class="glyphicon glyphicon-edit"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>  
                        <!-- <a href="#" class="btn btn-close btn-round btn-default" title="ДОБАВИТЬ РАЗДЕЛ"><i class="glyphicon glyphicon-plus-sign"></i></a> -->
                    </div>
                </div>
        ';

            // //MySQL запрос
            $Result = mysqli_query($dbconn,"SELECT category_id,name_category,data_href_category,head_id,number_in_order_category FROM category");
                // получаем все записи из таблицы category
            while($row = mysqli_fetch_array($Result))
            {
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
                                                data-name="'.$row["name_category"].'"
                                                data-toggle="modal"
                                                data-target="#myModal" 
                                                title="ДОБАВИТЬ КАТЕГОРИЮ"
                                                data-tbl="category"
                                                data-field="name_category"
                                                data-field-id="category_id"
                                                data-id="'.$row["category_id"].'"
                                                >
                                                <i class="glyphicon glyphicon-plus-sign"></i>
                                            </a>
                                        </div>
                                        <div class="panel panel-transparent ">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab-fillup'.$row["category_id"].'"
                                                    data-tbl="category"
                                                    data-field="name_category"
                                                    data-field-id="category_id"
                                                    data-id="'.$row["category_id"].'"
                                                    ><span  id="id_'.$row["category_id"].'">'.$row["name_category"].'</span></a>
                                                </li>                                                
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-fillup11">
                                                    <div class="row column-seperation panelTab">
                                                        <div class="col-md-12">
                                                            <div class="panel-body no-padding">
                                                                <div class="row">
                                                                    <div class="box-icon ">
                                                                        <a href="#" class="btn btn-setting btn-round btn-default "
                                                                        data-content="ДОБАВИТЬ ГРУППУ"
                                                                        data-toggle="modal"
                                                                        data-target="#myModal" 
                                                                        title="ДОБАВИТЬ ГРУППУ">
                                                                        <i class="glyphicon glyphicon-plus-sign"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-12 ">

                                                                        <div class="panel panel-transparent ">

                                                                            <ul class="nav nav-tabs nav-tabs-simple nav-tabs-left bg-white"
                                                                                id="tab-3">
                                                                                <li class="active">
                                                                                    <a data-toggle="tab" href="#tab3hellowWorld22"
                                                                                    data-tbl="grupp"
                                                                                    data-field="name_grupp"
                                                                                    data-field-id="grupp_id"
                                                                                    data-id="22"
                                                                                    ><span>Группа 1</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a data-toggle="tab" href="#tab3FollowUs22"><span>Группа 2</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a data-toggle="tab" href="#tab3Inspire32"><span>Группа 3</span></a>
                                                                                </li>

                                                                            </ul>
                                                                            <div class="tab-content bg-white">
                                                                                <div class="tab-pane" id="tab3hellowWorld22">
                                                                                    <div class="row column-seperation">
                                                                                        <div class="col-md-6">
                                                                                            <h3>
                                                                                                <span class="semi-bold">Sometimes
                                                                                                </span>Small things in life
                                                                                                means the most
                                                                                            </h3>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <h3 class="semi-bold">
                                                                                                great tabs
                                                                                            </h3>
                                                                                            <p>Native boostrap tabs
                                                                                                customized to Pages look
                                                                                                and feel, simply changing
                                                                                                class name you can change
                                                                                                color as well as its
                                                                                                animations</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane active" id="tab3FollowUs22">
                                                                                    <h3>
                                                                                        Nothing is 
                                                                                        
                                                                                    </h3>
                                                                                    <p>
                                                                                        A style represents visual
                                                                                        customizations on top of a layout.
                                                                                        By editing a style, you can use
                                                                                        Squarespaces visual interface to
                                                                                        customize your...
                                                                                    </p>
                                                                                    <br>
                                                                                    <p class="pull-right">
                                                                                        <button class="btn btn-default btn-cons"
                                                                                            type="button">White</button>
                                                                                        <button class="btn btn-success btn-cons"
                                                                                            type="button">Success</button>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="tab-pane" id="tab3Inspire32">
                                                                                    <div class="box-content pane">

                                                                                        <ul class="thumbnails gallery">';

                                                                                            for ($i = 1; $i <= 24; $i++) { 

                                                                                        echo'  <li id="image-'. $i.'"
                                                                                                    class="thumbnail">
                                                                                                    <p class="">Конструкции width: 100px;</p>
                                                                                                    <a style="background:url(https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/'. $i.'.jpg)"
                                                                                                        title="Sample Image '. $i.'"
                                                                                                        href="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/'. $i.'.jpg"><img
                                                                                                            class="grayscale"
                                                                                                            src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/'. $i.'.jpg"
                                                                                                            alt="Sample Image '. $i.'"></a>
                                                                                                </li>
                                                                                        ';

                                                                                            } 
                                                                                            echo'     
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-fillup21">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h3>“ Nothing is
                                                                </h3>
                                                            <p>A style represents visual customizations on top of a layout.
                                                                By editing a style, you can use Squarespaces visual
                                                                interface to customize your...</p>
                                                            <br>
                                                            <p class="pull-right">
                                                                <button type="button" class="btn btn-default btn-cons">White</button>
                                                                <button type="button" class="btn btn-success btn-cons">Success</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-fillup31">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h3>Follow us &amp; get updated!</h3>
                                                            <p>Instantly connect to whats most important to you. Follow
                                                                your friends, experts, favorite celebrities, and breaking
                                                                news.</p>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END PANEL -->

                    </div>
                </div>
                ';

            }//while
                    
                   
        echo '
            </div>
        </div>
    
        ';
    }//while

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
            // Добавляем новую запись, когда произошел клик по кнопке
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
                    var myData = "content_txt="+ $("#recipient-name").val() +"&"+
                                 "tbl="+ $("#tbl").val() +"&"+
                                 "field="+ $("#field").val() +"&"+
                                 "fieldid="+ $("#fieldid").val() +"&"+
                                 "id="+ $("#id").val();
                    // "name=John&location=Boston"
                    jQuery.ajax({
                        type: "POST", // HTTP метод  POST или GET
                        url: "change.php", //url-адрес, по которому будет отправлен запрос
                        dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
                        data:myData, //данные, которые будут отправлены на сервер (post переменные)
                        success:function(response){
                        $("#id_"+$("#id").val()).text($("#recipient-name").val());
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


            $("body").on( "click","#responds .btn-minimize",function (e) {
                // e.preventDefault();
                var $target = $(this).parent().parent().next('.box-content');
                if ($target.is(':visible')) $('i', $(this)).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                else                       $('i', $(this)).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                $target.slideToggle();
            });
                    


        $("body").on( "mouseenter","ul.thumbnails.gallery li.thumbnail",function () {
            console.log("over");
            $('img', this).fadeToggle(1000);
            $(this).find('.gallery-controls').remove();
            $(this).append('<div class="well gallery-controls">' +
                '<p><a href="#" class="gallery-edit btn"  title="РЕДАКТИРОВАТЬ"><i class="glyphicon glyphicon-edit" ></i></a> <a href="#" class="gallery-add btn" title="ДОБАВИТЬ ЭЛЕМЕНТ"><i class="glyphicon glyphicon-plus-sign"></i></a></p>' +
                '</div>');
            $(this).find('.gallery-controls').stop().animate({'margin-top': '-1'}, 400);
        });
        $("body").on( "mouseleave","ul.thumbnails.gallery li.thumbnail",function () {
            console.log("out");
            $('img', this).fadeToggle(1000);
            $(this).find('.gallery-controls').stop().animate({'margin-top': '-30'}, 200, function () {
                $(this).remove();
            });
        });



        $("body").on( "mouseenter","ul.nav-tabs li",function () { 
            //  alert($(this).text());     
            var name = $(this).find('a > span').text();
            var tbl = $(this).find('a').data('tbl');
            var field = $(this).find('a').data('field');
            var fieldid = $(this).find('a').data('field-id'); 
            var id = $(this).find('a').data('id');  
            $(this).append('<div class=" tab-controls"><p><a href="#" class="gallery-edit btn " title="РЕДАКТИРОВАТЬ!" data-content="РЕДАКТИРОВАТЬ" data-name="' + name + '"  data-toggle="modal" data-target="#myModal" data-tbl="' + tbl + '" data-field="' + field + '" data-field-id="' + fieldid + '" data-id="' + id + '"><i class="glyphicon glyphicon-edit"></i></a></p></div>' );
            $(this).find('.tab-controls').stop().animate({'margin-top': '-15'}, 400);
        });
        $("body").on( "mouseleave","ul.nav-tabs li",function () {
            // $('a', this).fadeToggle(1000);
            $(this).find('.tab-controls').stop().animate({'margin-top': '0'}, 200, function () {  $(this).remove();   });
        });


                        
                //gallery edit
            $("body").on( "click","ul.thumbnails.gallery li.thumbnail a.gallery-edit" , function (e) {
            e.preventDefault();
            //get image id
            // alert("click");
            alert('редактировать ' + $(this).parents('.thumbnail').attr('id'));
            }); 

            // gallery-add
            $("body").on( "click","ul.thumbnails.gallery li.thumbnail a.gallery-add" , function (e) {
            e.preventDefault();
            //get image id
            // alert("click");
            alert('добавить к ' + $(this).parents('.thumbnail').attr('id'));
            }); 

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
        var id = button.data('id');  
        var recipient =  " " + String.fromCharCode(171) + button.data('name') + String.fromCharCode(187) // Извлечение информации из данных-* атрибутов

        if (typeof recipient === typeof undefined) {recipient="";}
        // var im = button.data('im'); 
        var im = button.attr('src');
        // вывести эту информацию в элемент, имеющий id="content"
        // $("body").css("overflow-y", "scroll");
        // html {   overflow-y: scroll;   }
        // $(this).css("margin-right", "-20px");
        $(this).find('#myModalLabel').text(content +  recipient); 
        recipient = recipient.replace(String.fromCharCode(171), '');// удаление ковычек
        recipient = recipient.replace(String.fromCharCode(187), '');// удаление ковычек
        $(this).find('.modal-body p').text(tbl+' . '+field+' . '+fieldid+' = '+id); 
        $(this).find('#tbl').val(tbl);
        $(this).find('#field').val(field); 
        $(this).find('#fieldid').val(fieldid); 
        $(this).find('#id').val(id);  
        $(this).find('#recipient-name').val(recipient); 

        $(this).find('#im').html('<img src="'+im+'" alt=" "class="center-block img-rounded img-thumbnail">'); 
        // $(this).find('#im').html('<img src="'+im+'" alt=" "class="img-fluid center-block img-rounded img-thumbnail">'); 
        // $(this).find('#im-download').html('<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <a href="'+im+'" type="button" class="btn btn-primary"download="'+im+'" >Сохранить картинку</a>'); 
        // <a href="img.jpg" type="button" class="btn btn-primary"download="img.jpg" id="im-download">Сохранить картинку</a>
        });



    });//ready
</script>

<?php require('footer.php'); ?>
