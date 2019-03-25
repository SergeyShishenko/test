<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
<?php } ?>
</div><!--/fluid-row-->
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>  
                
        </div> 

    <hr>
 <!-- .modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                     <form id="frm">
                        <!-- <p>Here settings can be configured...</p> -->
                        <input type="hidden" id="tbl" value="">
                        <input type="hidden" id="field" value="">
                        <input type="hidden" id="fieldid" value="">
                        <input type="hidden" id="id" value="">
                        <input type="hidden" id="action" value="">                        
                        <div class="form-group ">                        
                            <ul class="list-tbl">        
                            </ul>
                            <div id="loading1" class="center">Загрузка...<div class="center"></div></div>                
                        </div>                          
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <a href="#openModal">Открыть модальное окно</a> -->
                    <!-- class="close" data-dismiss="modal" -->
                    <a href="#" class="btn btn-danger"   id="DelSubmit">Удалить</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Закрыть</a>
                    <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="ChangeSubmit">Сохранить изменения</a> -->
                    <a href="#" class="btn btn-primary " data-dismiss="modal" id="AddSubmit">Добавить</a>

                </div>
            </div>
        </div>
    </div>
 <!-- /.modal -->

<!-- modal2 -->
 <div id="openModal" class="modalDialog">

    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Модальное окно</h2>
        
    </div>

</div>
<!-- /modal2 -->

    <footer class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 copyright">
            <!-- <label>Добавить раздел</label> -->
            <input type="text" value="" name="add_section" class="text" size="100" placeholder="Наименование раздела" id="contentText" >                   
            <!-- <input type="submit" value="Добавить раздел" name="write" class="button" id="FormSubmit0"> -->
            <button type="submit" class="button animated tada" id="FormSubmit" >Добавить раздел  <span class="glyphicon glyphicon-plus-sign"></span>   </button>
        </div>
        <hr><hr>
        <div class="col-md-9 col-sm-9 col-xs-12 copyright">
           
            <input type="text" value="Саморез 3,0x12 PZ для дерева, полная резьба, потай, оцинкованный" name="add_Furn" class="text add" size="100" placeholder="Наименование фурнитуры" id="Furn" >
            <input type="text" value="Б/А" name="add_Art" class="text add" size="100" placeholder="Артикул" id="Art" >
            <input type="text" value="tbssamorez-polnaya-rezba.png" name="add_NameFile" class="text add" size="100" placeholder="Имя файла" id="NameFile" >
            <input type="text" value="3" name="add_grupp_id" class="text add" size="100" placeholder="grupp_id" id="grupp_id" >
            <input type="text" value="Стройдвор" name="add_Bild" class="text add" size="100" placeholder="Производитель" id="Bild" >
            <input type="text" value="Оцинкованный" name="add_Colour" class="text add" size="100" placeholder="Цвет" id="Colour" >
            <input type="text" value="шт." name="add_Unit" class="text add" size="100" placeholder="Ед.измерения" id="Unit" >
            <button type="submit" class="button animated tada" id="AddFurnSubmit" >Добавить новую фурнитуру<span class="glyphicon glyphicon-plus-sign"></span></button>
        </div>
        <!-- <div id='outputting'></div> -->
        <div class="col-md-12 col-sm-12 col-xs-12 " id='outputID'>ID -</div>
        <hr><hr>
        <div class="col-md-12 col-sm-12 col-xs-12 " style="float:right;">
        <p class="col-md-12 col-sm-12 col-xs-12 powered-by ">&copy; <a href="#" >Сергей Шишенко</a> <?php echo date('Y') ?></p>
        </div>
    </footer>
<?php } ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="bower_components/colorbox/jquery.colorbox.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/jquery.uploadify-3.1.min.js"></script>
<script src="js/charisma.js"></script>
<script>
    // var $ = jQuery.noConflict();
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

               // Добавляем новую фурнитуру по шаблону, когда произошел клик по кнопке
                $("#AddFurnSubmit").click(function (e) {
                    // alert('AddFurnSubmit');
                    
                    e.preventDefault();
                     //simple validation
                    if($("#Furn").val()===""){ alert("Введите Наименование фурнитуры!"); return false;}
                    if($("#Art").val()===""){ alert("Введите Артикул!"); return false;}
                    if($("#NameFile").val()===""){ alert("Введите Имя файла!"); return false;}
                    if($("#grupp_id").val()===""){ alert("Введите номер группы!"); return false;}
                    if($("#Bild").val()===""){ alert("Введите Производитель!"); return false;}
                    if($("#Colour").val()===""){ alert("Введите Цвет!"); return false;}
                    if($("#Unit").val()===""){ alert("Введите Ед.измерения!"); return false;}
                    // return false;
                    //post variables
                    // var myData = "content_Furn="+ $("#Furn").val(); 
                    var myData = "content_Furn="+ $("#Furn").val() +"&"+
                                 "content_Art="+ $("#Art").val() +"&"+
                                 "content_NameFile="+ $("#NameFile").val() +"&"+
                                 "content_grupp_id="+ $("#grupp_id").val() +"&"+
                                 "content_Bild="+ $("#Bild").val() +"&"+
                                 "content_Colour="+ $("#Colour").val() +"&"+
                                 "content_Unit="+ $("#Unit").val();
                                
                    jQuery.ajax({
                        type: "POST", // HTTP метод  POST или GET
                        url: "response.php", //url-адрес, по которому будет отправлен запрос
                        dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
                        data:myData, //данные, которые будут отправлены на сервер (post переменные)
                        success:function(response){
                        $("#outputID").text(response);
                        // $("#Furn").val(''); //очищаем текстовое поле после успешной вставки
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
                        // console.log(sdata);
                        
                        var productList = $('span[id="name_'+sdata+'"]').parent().parent().parent();

                        // console.log('productList: ', productList);
                        for (i = 0; i < productList.length; i++) {
                            console.log('product: ', productList[i]);
                        }                         
                        
                        // $('span[id="name_'+sdata+'"]').parent().fadeOut("slow");
                        // console.log('span[id="name_'+sdata+'"]');
                        // console.log($('span[id="name_'+sdata+'"]').text());
                        var clickedID = $('input[id="id"]').val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
                        var DbNumberID = clickedID[1]; //и получаем номер из массива
                        var tbl = $('input[id="tbl"]').val();                        
                        var fieldid = $('input[id="fieldid"]').val(); 
                        // console.log('tbl-'+tbl);

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
                    // console.log($('img', this).data('parent'));
                    var parent = $('img', this).data('parent');             
                    var id = $('img', this).data('id'); 
                    var content = $('img', this).data('content');
                    var name = $('img', this).data('name');
                    var htmlid = $('img', this).data('htmlid'); 
                    // console.log($('img', this).data('htmlid'));                  
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

            $('#myModal').on('hidden.bs.modal', function (event) 
            {
                $('.list-tbl').html("");
            });

        // при открытии модального окна
        $('#myModal').on('show.bs.modal', function (event) {
            
        $('#loading1').css("display", "block");
            
        // получить кнопку, которая его открыло
        var button = $(event.relatedTarget);     
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
        var recipient_name =button.data('name') // Извлечение информации из данных-* атрибутов

        // if (typeof recipient_name == typeof undefined) {recipient_name="";}
        if (typeof button.data('name') === typeof undefined) {recipient_name="";}; 
        var im = button.attr('src');    
        if (content.indexOf("ДОБАВИТЬ") !== -1)
        {
            $("#ChangeSubmit").addClass('hidden');
            $("#DelSubmit").addClass('hidden');
            $("#AddSubmit").removeClass('hidden');
            action = "action"; 
        }
        else{$("#AddSubmit").addClass('hidden');$("#ChangeSubmit").removeClass('hidden');$("#DelSubmit").removeClass('hidden');}    
        $(this).find('#myModalLabel').text(content);      
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
                                $("#file-list").sortable();

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

 
  // Обновляем запись, когда произошел клик по кнопке refresh
  var obj = null;
  $("body").on( "click","button.btn.button31.btn-warning" , function (e) {

    e.preventDefault();
    obj = this; 
    var recipient = $(obj).parent().parent().find($("[id*='recipient']")); // значение    
    var parent =$('span[id="form-parent"]').data('val');
    var val = recipient.val();    
    val = $.trim(val);

    if(val==="") //simple validation
    {
        alert("Введите наименование!");
        return false;
    }  
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



    //////// drop
        var $ = jQuery.noConflict();

        // $(document).ready(function() {
        // В dataTransfer помещаются изображения которые перетащили в область div
        jQuery.event.props.push('dataTransfer');
        // alert();
        // Максимальное количество загружаемых изображений за одни раз
        var maxFiles = 100;
        // var countDOCFiles = 0;
        // var countPDFFiles = 0;
        // var countXLSFiles = 0;
        
        // Оповещение по умолчанию
        // var errMessage = 0;
        
        // Кнопка выбора файлов
        var defaultUploadBtn = $('#uploadbtn');
        
        // Массив для всех изображений
        var dataArray = [];
        
        // Область информер о загруженных изображениях - скрыта
        $('#uploaded-files').hide();
        
        // Метод при падении файла в зону загрузки
        $("body").on('drop',"#drop-files", function(e) {	
            // Передаем в files все полученные изображения
            var files = e.dataTransfer.files;
            // Проверяем на максимальное количество файлов
            if (files.length <= maxFiles) {
                // Передаем массив с файлами в функцию загрузки на предпросмотр
                loadInView(files);
            } else {
                alert('Вы не можете загружать больше '+maxFiles+' файлов!'); 
                files.length = 0; return;
            }
        //    $(function() {$("#dropped-files div[id^='img']").sortable();}); 
        $("#dropped-files").sortable({ cancel: '.note' });
        });

        
        var ext="";
        // var background="";	

        // Функция загрузки изображений на предросмотр
        function loadInView(files) {
            // Показываем обасть предпросмотра
            $('#uploaded-holder').show();
            
            // Для каждого файла
            
            $.each(files, function(index, file) { 
                // console.log(files[index].type);	
                // console.log(files[index].name);	
                var clickedEXP = files[index].name.split("."); //Разбиваем строку (Split работает аналогично PHP explode)
                var EXP = clickedEXP[1]; //и получаем номер из массива
                // console.log(EXP);
            var tmime="";		
                    if (files[index].type.match('image.*')) {
                        if(files[index].type.match('dwg.*')) {						
                            tmime="dwg";
                            // console.log(tmime);	                       
                        }else{tmime="img";
                        // console.log(tmime);	
                        }
                    }else if(files[index].type.match('pdf.*')) {
                        // alert("PDF"); 
                        tmime="pdf";
                        // console.log(tmime);									
                        
                    }else if(files[index].type.match('word.*')) {
                        // alert("word");
                        tmime="word";
                        // console.log(tmime);
                        // countDOCFiles++;				
                    }else if((files[index].type.match('sheet.*')) || (files[index].type.match('excel.*'))) {
                        // alert("excel");
                        tmime="excel";	
                        // console.log(tmime);				 
                        
                    }
                    if(tmime==""){
                        var clickedEXP = files[index].name.split("."); //Разбиваем строку (Split работает аналогично PHP explode)
                        tmime = clickedEXP[1]; //и получаем номер из массива
                        // console.log(tmime);
                        }

                    $('#upload-button').css({'display' : 'block'});
                    // Проверяем количество загружаемых элементов
                    // if((dataArray.length+files.length) <= maxFiles) {
                    // 	// показываем область с кнопками
                    // 	$('#upload-button').css({'display' : 'block'});
                    // } 
                    // else { alert('Вы не можете загружать больше '+maxFiles+' изображений!'); return; }
                    
                    // Создаем новый экземпляра FileReader
                    var fileReader = new FileReader();
                    // Инициируем функцию FileReader
                
                    fileReader.onload = (function(file) {
                        
                        return function(e) {
                            // Помещаем URI изображения в массив
                            switch (tmime) {                                
                                case "img":
                                    background=this.result;
                                    break;
                                case "pdf":
                                    background='typePDF.png';
                                    break;
                                case "word":
                                    background='typeDOC.png';
                                    break;
                                case "excel":
                                    background='typeXLS.png';
                                    break;
                                case "dwg":
                                    background='typeDWG.png';
                                    break;
                            }
                            // alert(tmime);
                            
                     
                            dataArray.push({name : file.name, value : this.result, bground : background, type : tmime, id : $("#id").val().split("_")[1]});
                            addImage((dataArray.length-1));
                            // tmime="";
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
                $('#upload-button span').html("Был выбран 1 файл");
            } else {
                $('#upload-button span').html(dataArray.length+" файлов были выбраны");
            }
            // Цикл для каждого элемента массива
            for (i = start; i < end; i++) {
                // размещаем загруженные изображения
                // alert(dataArray[i].name);
                // string.indexOf(substring) !== -1;
                if($('#dropped-files > .image').length <= maxFiles) { 
                    $('#dropped-files').append('<div id="img-'+i+'" class="image" style="background: url('+dataArray[i].bground+'); background-size: cover;"> <a href="#" id="drop-'+i+'" class="drop-button">Удалить файл</a></div>'); 
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
            $('#uploaded-holder').hide();
        
            // Очищаем массив
            dataArray.length = 0;
            
            return false;
        }
        
        // Удаление только выбранного изображения 
        $("body").on("click","#dropped-files a[id^='drop']", function() {
            // получаем название id
            var elid = $(this).attr('id');
            // создаем массив для разделенных строк
            var temp = [];
            // делим строку id на 2 части
            temp = elid.split('-');
            // получаем значение после тире тоесть индекс изображения в массиве
            dataArray.splice(temp[1],1);
            // Удаляем старые эскизы
            $('#dropped-files > .image').remove();
            // Обновляем эскизи в соответсвии с обновленным массивом
            addImage(-1);		
        });
        
        // Удалить все изображения кнопка 
        // $('#dropped-files #upload-button .delete').click(restartFiles);
        $("body").on("click","#dropped-files #upload-button .delete", restartFiles);

        // Удаление только ТЕКУЩЕГО выбранного изображения 
		$("body").on("click",".del", function() {
			// alert('!');
			// получаем название id
			  $(this).parent().remove();
			// создаем массив для разделенных строк
			// var temp = [];
			// // делим строку id на 2 части
			// temp = elid.split('-');
			// // получаем значение после тире тоесть индекс изображения в массиве
			// dataArray.splice(temp[1],1);
			// // Удаляем старые эскизы
			// $('#dropped-files > .image').remove();
			// // Обновляем эскизи в соответсвии с обновленным массивом
			// addImage(-1);		
		});
	
        

        $("body").on("click","#upload-button .count",function() {
            console.log("==============");
            $( "#dropped-files  > .image" ).each(function( index ) {
            console.log( index + ": " + $( this ).attr('id') );
            });
            });


        // Загрузка изображений на сервер
        // $('#upload-button .upload').click(function() {
        $("body").on("click","#upload-button .upload",function() {
            // alert("!!");
            
            // Показываем прогресс бар
            $("#loading").show();
            // переменные для работы прогресс бара
            var totalPercent = 100 / dataArray.length;
            var x = 0;
            
            $('#loading-content').html('Загружен '+dataArray[0].name);
            // var dataplas=[];
            // Для каждого файла
            $.each(dataArray, function(index, file) {	

                // загружаем страницу и передаем значения, используя HTTP POST запрос 
                //  dataplas= $.merge( {tbl : "obj", field : "name_obj"}, dataArray[index]);
                $.post('upload.php', dataArray[index] , function(data) {
                
                    var fileName = dataArray[index].name;
                    ++x;
                    // alert(data);
                    console.log(x+" : "+data);
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
        // $('#drop-files').on('dragenter', function() {
        $("body").on('dragenter',"#drop-files", function() {
            $(this).css({'box-shadow' : 'inset 0px 0px 20px rgba(0, 0, 0, 0.1)', 'border' : '4px dashed #bb2b2b'});
            return false;
        });
        
        // $('#drop-files').on('drop', function() {
        $("body").on('drop',"#drop-files", function() {
            $(this).css({'box-shadow' : 'none', 'border' : '4px dashed rgba(0,0,0,0.2)'});
            return false;
        });


        // $("#files-show").on("click", function() {
        $("body").on('click"',"#files-show", function() {
            $("#dropped-files div[id^='img']").each(function(i,elem) {
                alert(i + ': ' + $(elem).attr('id'));
                // if ($(this).hasClass("stop")) {
                // 	alert("Остановлено на " + i + "-м пункте списка.");
                // 	return false;
                // } else {
                // 	alert(i + ': ' + $(elem).text());
                // }
            });
        });

        // });

    /////// drop
</script>
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/jquery.uploadify-3.1.min.js"></script>
<script src="js/charisma.js"></script> -->
</body>
</html>
