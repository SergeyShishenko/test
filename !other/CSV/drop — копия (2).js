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
            $('#uploaded-holder').css({"display":"table-cell"});
            
            // Для каждого файла
            
            $.each(files, function(index, file) { 
                console.log(files[index].type);	
                console.log(files[index].name);	
                var clickedEXP = files[index].name.split("."); //Разбиваем строку (Split работает аналогично PHP explode)
                var EXP = clickedEXP[1]; //и получаем номер из массива
                console.log(EXP);
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
                        console.log(tmime);				 
                        
                    }
                    if(tmime==""){
                        // var clickedEXP = files[index].name.split("."); //Разбиваем строку (Split работает аналогично PHP explode)
                        // tmime = clickedEXP[1]; //и получаем номер из массива
                        // console.log(tmime);
                        }

                    $('#upload-button').css({'display' : 'block'});
                    // Проверяем количество загружаемых элементов
                    if((dataArray.length+files.length) <= maxFiles) {
                    	// показываем область с кнопками
                    	$('#upload-button').css({'display' : 'block'});
                    } 
                    else { alert('Вы не можете загружать больше '+maxFiles+' файла!'); return; }
                    
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
                                     if (EXP=="csv"){background='CSV.png';break;}
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
                $('#upload-button span').html("Был выбран " + dataArray[0].name);
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
        var objxlsx = [];
        var DbNumberID='';
        var arr_table=[];
        var arr_sOff=[];
        var arr_s=[];
        var arr_prev=[];
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
                
                    // var fileName = dataArray[index].name;
                    ++x;
                    // alert(data);
                    // console.log(x+" : "+data);
                    // Изменение бара загрузки
                    // $('#loading-bar .loading-color').css({'width' : totalPercent*(x)+'%'});
                    // // Если загрузка закончилась
                    // if(totalPercent*(x) == 100) {
                    //     // Загрузка завершена
                    //     $('#loading-content').html('Загрузка завершена!');
                        
                    //     // Вызываем функцию удаления всех изображений после задержки 1 секунда
                    //     // setTimeout(restartFiles, 1000);
                    //     restartFiles();
                    // // если еще продолжается загрузка	
                    // } else if(totalPercent*(x) < 100) {
                    //     // Какой файл загружается
                    //     $('#loading-content').html('Загружается '+fileName);
                    // }
                    restartFiles();
                    // $('#drop-files').hide();
                    $('#uploaded-files').append(data);
                    var clickedID = $("#currfile").val().split("."); //Разбиваем строку (Split работает аналогично PHP explode)
                    DbNumberID = clickedID[0]; //и получаем номер из массива
                    
                    objxlsx.push(DbNumberID);
                    // objxlsx[DbNumberID]=(new Objx(DbNumberID));
                    objxlsx[DbNumberID]=[];
                    $('#DelSubmit').show();
                    $('#CreateSubmit').show();
                     floor={}; //Этаж
                     room={}; //Помещение
                     complect={}; //Комплект изделий
                     product={}; //Изделия
                     
                   
                    // propalertObjx(objxlsx, DbNumberID,'name');
                    // propalertObjx(objxlsx, DbNumberID,'kd');

                   
                    // Формируем в виде списка все загруженные изображения
                    // data формируется в upload.php
                    // var dataSplit = data.split(':');
                    // if(dataSplit[1] == 'загружен успешно') {
                    //     $('#uploaded-files').append('<li><a href="images/'+dataSplit[0]+'">'+fileName+'</a> загружен успешно</li>');
                                    
                    // } else {
                    //     $('#uploaded-files').append('<li><a href="images/'+data+'. Имя файла: '+dataArray[index].name+'</li>');
                    // }
                    $("body #uploaded-files table.zakaz  tr:gt(0)").each(function (index, value) { 
            // console.log('tr '+ index );
            var c = $(this).find('td[id^="product"]').text();
            var c2 = $(this).find('td[id^="product2"]').text();
            if (c2==""){
                // console.log('tr' + index + ':' + c); 
                arr_table[index]=c;
            }
            else{
                // console.log('tr' + index + ':' + c2);
                arr_table[index]=c2;
            }
            
            });
                });
            });
            // Показываем список загруженных файлов
            $('#uploaded-files').show();

            
            return false;
        });
        
        // Простые стили для области перетаскивания
       
        $("body").on('dragenter',"#drop-files", function() {
            $(this).css({'box-shadow' : 'inset 0px 0px 20px rgba(0, 0, 0, 0.1)', 'border' : '4px dashed #bb2b2b'});
            return false;
        });
        
      
        $("body").on('drop',"#drop-files", function() {
            $(this).css({'box-shadow' : 'none', 'border' : '4px dashed rgba(0,0,0,0.2)'});
            return false;
        });


       
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

      

    /////// drop

     // при открытии модального окна
        $('#myModal').on('show.bs.modal', function (event) {
           
            // $('#loading1').css("display", "block");
                
            // // получить кнопку, которая его открыло
            // var button = $(event.relatedTarget);     
            // var content = button.data('content');
            // var tbl = button.data('tbl');
            // var field = button.data('field');
            // var fieldid = button.data('field-id'); 
            // var parent = button.data('parent');
            // var recipient_href = button.data('href');
            // var recipient_order = button.data('order');
            // var htmlid = button.data('htmlid');         
            // var id = button.data('id');
            // var action =  button.data('action'); 
            // $('input[id="action"]').val(action); // установка поля}       
            // var recipient_name =button.data('name'); // Извлечение информации из данных-* атрибутов

            // // if (typeof recipient_name == typeof undefined) {recipient_name="";}
            // if (typeof button.data('name') === typeof undefined) {recipient_name="";}
            // var im = button.attr('src');    
            // if (content.indexOf("ДОБАВИТЬ") !== -1)
            // {
            //     $("#ChangeSubmit").addClass('hidden');
            //     $("#DelSubmit").addClass('hidden');
            //     $("#AddSubmit").removeClass('hidden');
            //     action = "action"; 
            // }
            // else{$("#AddSubmit").addClass('hidden');$("#ChangeSubmit").removeClass('hidden');$("#DelSubmit").removeClass('hidden');}    
            // $(this).find('#myModalLabel').text(content);      
            //  if ( typeof(parent) != "undefined" && parent !== "")
            //  {
            //     // parent=' $$$'+ parent;
            //  }
            //  else{
            //     parent="";
            //  }

            //                 var clickedID = $("#id").val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
            //                 var DbNumberID = clickedID[1]; //и получаем номер из массива

            //                 var myData =    "content_txt="+ button.data('name') +"&"+
            //                                 "tbl="+tbl+"&"+
            //                                 "field="+field+"&"+
            //                                 "fieldid="+fieldid+"&"+
            //                                 "parent="+parent+"&"+
            //                                 "href="+recipient_href+"&"+
            //                                 "order="+recipient_order+"&"+
            //                                 "htmlid="+htmlid+"&"+
            //                                 "action="+action+"&"+
            //                                 "id="+ id;
            //                                 // "id="+ DbNumberID;
            //                 // "name=John&location=Boston"
            //                 jQuery.ajax({
            //                     type: "POST", // HTTP метод  POST или GET
            //                     url: "add-input.php", //url-адрес, по которому будет отправлен запрос
            //                     dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
            //                     data:myData, //данные, которые будут отправлены на сервер (post переменные)
            //                     success:function(response){
            //                         $('.list-tbl').html(response);
            //                         $('#loading1').css("display", "none");
            //                         $("#file-list").sortable();

            //                     // $("#"+$("#tbl").val()+"_"+ DbNumberID).text($("#recipient-name").val());
            //                     // $("#"+$("#tbl").val()+"_"+ DbNumberID).parent().data('name',$("#recipient-name").val());
            //                     //     // для img
            //                     // $("#image-"+ DbNumberID).find('img').data('name',$("#recipient-name").val());
            //                     // // для разделов
            //                     // $("#item_"+ DbNumberID).find("#"+$("#tbl").val()+"-"+ DbNumberID).data('name',$("#recipient-name").val());
            //                     // // $("#contentText").val(''); //очищаем текстовое поле после успешной вставки

            //                     },
            //                     error:function (xhr, ajaxOptions, thrownError){
            //                         alert(thrownError); //выводим ошибку
            //                     }
            //                 });
            // // заполнение модального окна

            // // $(this).find('.modal-body p').text(tbl+' . '+field+' . '+fieldid+' = '+id + parent); 
            // $(this).find('#tbl').val(tbl);
            // $(this).find('#field').val(field); 
            // $(this).find('#fieldid').val(fieldid); 
            // $(this).find('#id').val(id);  
            // $(this).find('#recipient-name').val(recipient_name); 
            // $(this).find('#recipient-href').val(recipient_href);
            // $(this).find('#recipient-order').val(recipient_order); 

            // $(this).find('#im').html('<img src="'+im+'" alt=" "class="center-block img-rounded img-thumbnail">'); 
        
        });

           //Удаляем запись 
           $("body").on("click", "#DelSubmit", function(e) {
                e.preventDefault();
                var currfile = $('#currfile').val(); 

            // alert(objxlsx[DbNumberID][1].product);

                // propdelete(objxlsx,DbNumberID);
                // return;

                console.log('Файл-'+currfile);
                
                if (confirm("Удалить?")) {
                    $('#uploaded-files').html('');
                    $('#DelSubmit').hide();
                    $('#CreateSubmit').hide();
                    // room //Помещение
                    // complect //Комплект изделий
                    // product //Изделия
                    propdelete(room);
                    propdelete(complect);
                    // propdelete(product);
                    // propdelete(objxlsx[DbNumberID][1].product);
                    keydelete(objxlsx[DbNumberID]);
                    propdelete(objxlsx[DbNumberID]);
                
                    console.log('Удаляем-'+currfile+' ...');

                    //выстраиваем  данные для POST
                    var myData =    "recordToDelete="+currfile;
                    jQuery.ajax({
                        type: "POST", // HTTP метод  POST или GET
                        url: "upload.php", //url-адрес, по которому будет отправлен запрос
                        dataType:"text", // Тип данных
                        data:myData, //post переменные
                        success:function(response){
                        // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                        console.log(response);
                        $('#drop-files').show();

                        },
                        error:function (xhr, ajaxOptions, thrownError){
                            //выводим ошибку
                            alert(thrownError);
                        }
                    });
                    // $('#myModal').modal('hide');
                    }// else {alert("Вы нажали кнопку отмена");}  
            });

              //Генерация xls
           $("body").on("click", "#CreateSubmit", function(e) {
            // e.preventDefault();

            // alert('length-'+objxlsx.length);
            // item – очередной элемент массива.
            // i– его номер.
            // objxlsx – массив, который перебирается.

            var data;                 
            data = {};
            // propalert(product);
            alert($('#client_output').text());
            alert($('#agent_output').text());
            alert($('#address_output').text());
            alert($('#floor_output').text());
            alert($('#room_output').text());
            alert($('#complect_output').text());
            alert($('#order_output').text());
            alert($('#product_output').text());
            objxlsx.forEach(function(item) {
                // var name =objxlsx[n];
                var f=item; // ключ 
                // propalert(objxlsx);
                    objxlsx[item].forEach(function(item, i) {
                        alert( f + ": "+i + "- "  + "{ kd=> "+item.kd + ", dp=> "+item.dp +" }" );
                        // data['arr[' + row+ '][name]'] = f;
                        data['arr[' + f + '][' + i + '][kd]']  = item.kd;
                        data['arr[' + f + '][' + i + '][dp]']  = item.dp;
                    });
                }); 
                
                
                jQuery.ajax({
                    type: "POST", // HTTP метод  POST или GET
                    url: "upload.php", //url-адрес, по которому будет отправлен запрос
                    dataType:"text", // Тип данных
                    data:data, //post переменные
                    success:function(response){
                    // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                    console.log(response);
                    $('#uploaded-files').append(response);

                    },
                    error:function (xhr, ajaxOptions, thrownError){
                        //выводим ошибку
                        alert(thrownError);
                    }
                });

          
        });

    // $client,$address,$number_order,$product,$product2,$def,$room,$complect,$floor
var excelObject = {
    id: '',
    client: '',
    address: '',
    numberorder: '',
    product: {},
    product2: [],
    def: '',
    room: {},
    complect: {},
    floor: {},
    kd: 0,
    dp: 0
    };
var floor={}; //Этаж
var room={}; //Помещение
var complect={}; //Комплект изделий
var product={}; //Изделия

function Objx(name) {
    this.name = name;
  }
Objx.prototype = excelObject;
  

function checkAddress(checkbox)
{
    // alert($(checkbox).attr('id'));
    var tr=$(checkbox).parent().parent().parent();
    var tblid = tr.parent().parent().attr('id');
    var typecheck =$(checkbox).attr('name');// kd,dp
    
    // alert($(checkbox).attr('name'));
    // alert(objxlsx[tblid].kd);
    var keyroom=tr.find("[id^='room_']").text();
    // alert(keyroom);
    var keycomplect=tr.find("[id^='complect_']").text();
    var keyproduct=tr.find("[id^='product_']").text();
    var keyproduct2=tr.find("[id^='product2_']").text();
    var keyfloor=tr.find("[id^='floor_']").text();
    // alert( "до "+floor[keyfloor]);
    // if(keyfloor==""){ 
    //     keyfloor=$('#floor_output').text();// проверка на существование 
        
    // floor[keyfloor]=0;
    //    alert( floor[keyfloor]);
       
    // }
    
    var keyproductApp=tr.find("[id^='productApp']").text();
    if(!!keyproductApp){ 
        if (!(keyproductApp in objxlsx[tblid])){objxlsx[tblid][keyproductApp]=new Objx(keyproductApp);}// проверка на существование строки в массиве
    }
    
    // alert(objxlsx[tblid][keyproductApp].name);
    if (checkbox.checked)
    {        
        // tr.css({"color":"green","font-weight":"700"}); // жирный шрифт 
        tr.css({"color":"green"});      
      
        if (keyroom in room) {room[keyroom]++;}else{room[keyroom]=1;}

        if (keyfloor !=""){
            if (keyfloor in floor) {floor[keyfloor]++;}else{floor[keyfloor]=1;}
            // if (keyproductApp in objxlsx[tblid][keyproductApp].product) {objxlsx[tblid][keyproductApp].product[keyproductApp]++;}else{objxlsx[tblid][keyproductApp].product[keyproductApp]=1;}  
        }
        // alert( "после "+floor[keyfloor]);

        if (keycomplect in complect) {complect[keycomplect]++;}else{complect[keycomplect]=1;}
        
        if (keyproduct2==''){
         if (keyproduct in product) {product[keyproduct]++;}else{product[keyproduct]=1;}   
        }else{
            if (keyproduct2 in product) {product[keyproduct2]++;}else{product[keyproduct2]=1;}
        }
        if(!!keyproductApp){ 
           if (keyproductApp in objxlsx[tblid][keyproductApp].product) {objxlsx[tblid][keyproductApp].product[keyproductApp]++;}else{objxlsx[tblid][keyproductApp].product[keyproductApp]=1;}  
           objxlsx[tblid][keyproductApp][typecheck]=1;
        }
         
        
        // установка типа клика
        // alert(typecheck);
        // if (typecheck =="kd"){objxlsx[tblid][keyproductApp].kd=1; }
        // else{objxlsx[tblid][keyproductApp].dp=1;}
        

        // alert('id : '+keyproductApp+' kd : '+ objxlsx[tblid][keyproductApp].kd +', dp : '+ objxlsx[tblid][keyproductApp].dp);
        

       tr.find("[id^='product_']").text();
        //   propalert(room) ;  
          propoutput('#room_output',room);
          if (keyfloor !=""){ propoutput('#floor_output',floor);}
          propoutput('#complect_output',complect);
          propoutput('#product_output',product);
          if(!!keyproductApp){ 
            propoutput('#productApp_output',objxlsx[tblid][keyproductApp].product);
          }
        
    }else{
        
        // tr.css({"color":"black","font-weight":"400"}); // жирный шрифт 
        // tr.css({"color":"black"});
        if (room[keyroom]>1) {room[keyroom]--;}else{delete room[keyroom];tr.css({"color":"black"}); }

        if ((keyfloor !="")){
            if (floor[keyfloor]>1) {floor[keyfloor]--;}else{delete floor[keyfloor];tr.css({"color":"black"}); }
        }
        

        if (complect[keycomplect]>1) {complect[keycomplect]--;}else{delete complect[keycomplect];tr.css({"color":"black"});}

        if (product[keyproduct]>1) {product[keyproduct]--;}else{delete product[keyproduct];tr.css({"color":"black"});}

        // if (keyproductApp in objxlsx[tblid].product) {objxlsx[tblid].product[keyproductApp]++;}else{objxlsx[tblid].product[keyproductApp]=1;} 
        if(!!keyproductApp){ 
            if (objxlsx[tblid][keyproductApp].product[keyproductApp]>1) {
                objxlsx[tblid][keyproductApp].product[keyproductApp]--;
                objxlsx[tblid][keyproductApp][typecheck]=0;
                propoutput('#productApp_output',objxlsx[tblid][keyproductApp].product);
            }else{
                delete objxlsx[tblid][keyproductApp].product[keyproductApp];
                // alert(keyproductApp);
                propoutput('#productApp_output',objxlsx[tblid][keyproductApp].product);
                // propdelete(objxlsx[DbNumberID][keyproductApp].product);
                delete objxlsx[tblid][keyproductApp];
                tr.css({"color":"black"});
            }
            // objxlsx[tblid][keyproductApp][typecheck]=0;
        }
        // установка типа клика
        
        // if (typecheck =="kd"){objxlsx[tblid][keyproductApp].kd=0; }
        // else{objxlsx[tblid][keyproductApp].dp=0;}
        // alert('kd : '+ objxlsx[tblid][keyproductApp].kd +', dp : '+ objxlsx[tblid][keyproductApp].dp);
        
        propoutput('#room_output',room);
        if (keyfloor !=""){ propoutput('#floor_output',floor);}
        propoutput('#complect_output',complect);
        propoutput('#product_output',product);
        // if(!!keyproductApp){ 
        //     propoutput('#productApp_output',objxlsx[tblid][keyproductApp].product);
        // }

    }
}//checkAddress

function propalert(obj){
    for (var prop in obj) {
        alert( prop +' : '+obj[prop]); // name, surname, age
      } 
}
function keydelete(obj){
    for (var prop in obj) {
        // alert( prop ); 
        propdelete(objxlsx[DbNumberID][prop].product);
      } 
}
function propalertObj(obj,name){
  
        alert( obj[name]); // name, surname, age
        
     
}
function propalertObjx(obj,name,key){
  
        alert( obj[name][key]); 
      
}
function propoutput(id,obj){
    var str='';
    for (var prop in obj) {
        // str=str+" "+prop+",";
        str=str+prop+",";
      } 
      str=str.substring(0, str.length - 1);// удаление последнего символа
    $(id).text(str);
}


  function propdelete(obj){
    for (var prop in obj) {
        delete obj[prop]; 
      }
}

function propdelete2(obj,name){

    // obj[name].forEach(function(item) {
    // // var name =objxlsx[n];
    // var f=item; // ключ 
    obj[name].forEach(function(item, i) {
            alert( i + "- "  + "{ kd=> "+item.kd + ", dp=> "+item.dp +" }" );
            // data['arr[' + row+ '][name]'] = f;
            // data['arr[' + f + '][' + i + '][kd]']  = item.kd;
            // data['arr[' + f + '][' + i + '][dp]']  = item.dp;
        });
    // }); 

}
    $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        
    var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
    
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
           
        $('html, body #myModal ').animate({ scrollTop: $(scroll_el).offset().top }, 1000); // анимируем скроолинг к элементу scroll_el
       
        }
	    return false; // выключаем стандартное действие
    });
    $("body").on("click",".changeclick",function() {       
            
              $(this).find('input').val($(this).find('span').text());
              $(this).find('input').css({"visibility":"visible"}).focus();
              console.log($(this).find('span').attr('id'));
              currentspan=$(this).find('span').attr('id');
              currentinput=$(this).find('input').attr('id');           
    
    });
    // $("body").on("focusout","#agent-name",function() {
    //     $('#agent-name').css({"visibility":"hidden"});
    //     $('#agent_output').text($(this).val());
    //   });
   
    $("body").on("keyup",".changeclick > input",function(event){
        if(event.keyCode == 13){
            event.preventDefault();
           // var button = $(event.relatedTarget);//
           console.log('keyCode 13 #'+currentinput);
           console.log($(this).val());
          
            $(this).css({"visibility":"hidden"});
            // $(this).parent().find('span').text($(this).val());// запись значения input
            // arr_coma($(this).val());
            // if  (currentinput=='product-name' && $('#'+currentinput).val()){arr_coma($('#'+currentinput).val());}
            if  (currentinput=='product-name'){arr_coma($('#'+currentinput).val());}
            else{ $(this).parent().find('span').text($(this).val());}
            currentinput='';
        }
    });
    // $('#uploaded-files').not('#product_name').click( function(){
    //     console.log($('#'+currentinput).css('visibility'));

    //     if ($('#'+currentinput).css('visibility')=="visible") {
    //         $('#'+currentinput).css({"visibility":"hidden"});
    //         // $('#'+currentspan).text($('#'+currentinput).val());// запись значения input
    //         console.log('#uploaded-files #'+currentinput);
    //         console.log('currentinput.val() '+$('#'+currentinput).val());
    //         // if  (currentinput=='product-name' && $('#'+currentinput).val()){arr_coma($('#'+currentinput).val());}
    //         if  (currentinput=='product-name'){arr_coma($('#'+currentinput).val());}
    //         else{ $('#'+currentspan).text($('#'+currentinput).val());}
    //         currentinput='';
           
    //     }
    // });
    
    function arr_coma(val){
        // 
        // $.each(files, function(index, file) { 
        //     console.log(files[index].type);	
        //     console.log(files[index].name);
        val=replaceAll(val, '.', ',');
         
        arr_s = val.split(","); //Разбиваем строку (Split работает аналогично PHP explode)
        arr_s=unique(arr_s);//Оставить уникальные элементы массива

        if (arr_s[arr_s.length - 1]=="." || arr_s[arr_s.length - 1]==","  ) // получить последний элемент
        {
            arr_s.pop();//удалить если  последняя , или .
        }
        // arroutput(arr_table);

        console.log('arr_prev.length'+ arr_prev.length );
 if (arr_prev.length>0){

       // выключючение предидущих checkbox
       arr_prev.forEach(function(item) {
            console.log('arr_sOff'+ item );

            // $('#someSwitchOptionSuccess'+item).removeAttr("checked");
            $('#someSwitchOptionSuccess'+item).trigger('click');

        });
}
         
console.log('arr_s.length'+ arr_s.length );
        // включение выбранных
        arr_s.forEach(function(item) {
            console.log('#someSwitchOptionSuccess'+ item );

            $('#someSwitchOptionSuccess'+item).trigger('click');
        });
        
        
        //  arr_sOff = array_diff(arr_s, arr_table);
        //   arrOff(arr_sOff);

      arr_prev=[];
      arr_prev=arr_s;
      arr_prev.forEach(function(item) {
        console.log('arr_preve'+ item );

        // $('#someSwitchOptionSuccess'+item).removeAttr("checked");
        // $('#someSwitchOptionSuccess'+item).trigger('click');

    });
       
// выключить не выбранные
        // function arrOff(arr){
        //     for (var key in arr) {
        //         alert( arr[key] ); // Яблоко, Апельсин, Груша
        //         // $('#someSwitchOptionSuccess'+arr[key]).removeAttr("checked");
        //       }
        //     }
        // arr_table
        // $("input:checkbox").removeAttr("checked");



        // $("table.zakaz  tr:gt(0)").each(function (index, value) { 
        //     // console.log('tr '+ index );
        //     console.log('tr' + index + ':' + $(this).find('td[id^="product2"]').text()); 
        //   });


        //  $('#someSwitchOptionSuccess'+ arr_s[0]).trigger('click');
        // $('span#product_output').text(val);// запись значения input
//  var obj =$('#someSwitchOptionSuccess1');
// 
        // checkAddress(obj);
        // checkAddress(obj);

// alert(val);
            // var arr_s = val.split(","); //Разбиваем строку (Split работает аналогично PHP explode)
            // $("#myCheckbox").attr("checked","checked");
            // $("input:checkbox").removeAttr("checked");
            // $("input[name=myCheckbox]").attr("checked","checked");
           
    }
    function escapeRegExp(str) {
        return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
    }
     
    function replaceAll(str, find, replace) {
        return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
    }     
       

    

    // $('.changeclick > input').focusin({a:12, b:"abc"}, function(eventObject){
    //     var externalData = "a=" + eventObject.data.a + ", b=" + eventObject.data.b;
    //     alert('Элемент с классом block получил фокус. '+
    //           'В обработчик этого события переданы данные: ' + externalData );
    //   });
    var currentinput='';
    var currentspan='';
    $("body").on("focusin",".changeclick > input",function(eventObject){
        // var externalData = "a=" + eventObject.data.a + ", b=" + eventObject.data.b;
        console.log($(eventObject.target).parent().find('span').attr('id'));
        currentspan=$(eventObject.target).parent().find('span').attr('id');
        currentinput=$(eventObject.target).parent().find('input').attr('id');
      });
    // $("body").on("focusin",".changeclick > input",function(){
    //     alert('Элемент foo получил фокус.');
    //   });
    var coma=false;
    $("body").on("keypress","#product-name",function(e) { 
        // console.log(coma);     
            if (e.keyCode < 44 || e.keyCode == 45|| e.keyCode == 47 || e.keyCode > 57 ) {       
                return false;        
            }
            else if(e.keyCode==44 || e.keyCode==46)
            {
                if(coma==true){return false;}
                else{coma=true;}
            }
            else {
                coma=false;
            }
      
        });
//Оставить уникальные элементы массива
        function unique(arr) {
            var obj = {};
          
            for (var i = 0; i < arr.length; i++) {
              var str = arr[i];
              obj[str] = true; // запомнить строку в виде свойства объекта
            }
          
            return Object.keys(obj); // или собрать ключи перебором для IE8-
          }
          //   alert( unique(strings) ); // кришна, харе, 8-()

        
          
        
        //   var arr1 =[1,2,3,4,33];//правильные значения
        //   var arr2 =[2,33,17];// проверка на правильность
        //   let intersection = arr1.filter(x => arr2.includes(x));
        //   alert( intersection);

        // Array.prototype.diff = function(a) {
        //     return this.filter(function(i) {return a.indexOf(i) < 0;});
        // };
       

        // let dif1 = arr1.diff( arr2 ); // проверка на остаток, не выбранные значения
        // alert( dif1);

        // $("table.zakaz tr:gt(0) ");
        // $("table.zakaz > tr").each(function (index, value) { 
        //     console.log('tr'+ index );
        //     // console.log('div' + index + ':' + $(this).find('td[id^="product2"]').text()); 
        //   });

        // var arr1 = [1, 2, 3, 4, 5, 6,10];
        // var arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];



// console.log(array_diff(arr1, arr2));


// var arr_new = [1,2,3,4,5,6,7,8,9],//новый проверяемый массив
//     arr_prev = [6,7,8,11,1],// были включены ранее
//     arr_diff=[];//Разница
//     // var tempDates = [1,2,3,4,5,6,7,8,9],
//     //  arrq= [6,7,8,11,1],
//     // cq=[];//Разница
 
// for (var i = 0; i < arr_new.length; i++) {
//   if (arr_prev.indexOf(arr_new[i]) === -1) {
//     arr_diff.push(arr_new[i]);
//   }
// }
 
// console.log(arr_diff);