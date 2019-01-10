//////// drop       

      
        var $ = jQuery.noConflict();

        // $(document).ready(function() {
        // В dataTransfer помещаются изображения которые перетащили в область div
        jQuery.event.props.push('dataTransfer');
        // alert();
        // Максимальное количество загружаемых изображений за одни раз
        var maxFiles = 1;
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
                    $('#drop-files').hide();
                    $('#uploaded-files').append(data);
                    $('#DelSubmit').show();
                    
                    // Формируем в виде списка все загруженные изображения
                    // data формируется в upload.php
                    // var dataSplit = data.split(':');
                    // if(dataSplit[1] == 'загружен успешно') {
                    //     $('#uploaded-files').append('<li><a href="images/'+dataSplit[0]+'">'+fileName+'</a> загружен успешно</li>');
                                    
                    // } else {
                    //     $('#uploaded-files').append('<li><a href="images/'+data+'. Имя файла: '+dataArray[index].name+'</li>');
                    // }
                    
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
            console.log('Файл-'+currfile);
            if (confirm("Удалить?")) {
                $('#uploaded-files').html('');
                $('#DelSubmit').hide();
                // room //Помещение
                // complect //Комплект изделий
                // product //Изделия
                  propdelete(room);
                  propdelete(complect);
                  propdelete(product);
                // // alert("Удаляем!");
                // // var productList = document.querySelectorAll('#tb-head div.row');
                // // console.log('productList: ', productList);
                // // for (i = 0; i < productList.length; i++) {
                // //     console.log('product: ', productList[i]);
                // //     }
                // // console.log('ID '+$('span[id="form-id"]').data('val'));
                // var sdata=$.trim($('span[id="form-id"]').data('val'));
                // // console.log(sdata);
                
                // var productList = $('span[id="name_'+sdata+'"]').parent().parent().parent();

                // // console.log('productList: ', productList);
                // for (i = 0; i < productList.length; i++) {
                //     console.log('product: ', productList[i]);
                // }                         
                
                // // $('span[id="name_'+sdata+'"]').parent().fadeOut("slow");
                // // console.log('span[id="name_'+sdata+'"]');
                // // console.log($('span[id="name_'+sdata+'"]').text());
                // var clickedID = $('input[id="id"]').val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
                // var DbNumberID = clickedID[1]; //и получаем номер из массива
                // var tbl = $('input[id="tbl"]').val();                        
                // var fieldid = $('input[id="fieldid"]').val(); 
                
                console.log('Удаляем-'+currfile+' ...');

                // $('#item_'+DbNumberID).fadeOut("slow");
                // $('#myModal').modal('hide');  
                // // return false;

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

    // $client,$address,$number_order,$product,$product2,$def,$room,$complect,$floor
var csvObject = {
    client: '',
    address: '',
    numberorder: '',
    product: [],
    product2: [],
    def: '',
    room: '',
    complect: '',
    floor: ''
    };
var room={}; //Помещение
var complect={}; //Комплект изделий
var product={}; //Изделия



function checkAddress(checkbox)
{
    var tr=$(checkbox).parent().parent().parent();
    var keyroom=tr.find("[id^='room_']").text();
    var keycomplect=tr.find("[id^='complect_']").text();
    var keyproduct=tr.find("[id^='product_']").text();
    var keyproduct2=tr.find("[id^='product2_']").text();
    if (checkbox.checked)
    {        
        // tr.css({"color":"green","font-weight":"700"}); // жирный шрифт 
        tr.css({"color":"green"});      
      
        if (keyroom in room) {room[keyroom]++;}else{room[keyroom]=1;}
        if (keycomplect in complect) {complect[keycomplect]++;}else{complect[keycomplect]=1;}
        
        if (keyproduct2==''){
         if (keyproduct in product) {product[keyproduct]++;}else{product[keyproduct]=1;}   
        }else{
            if (keyproduct2 in product) {product[keyproduct2]++;}else{product[keyproduct2]=1;}
        }
        // propalert(product) ;
        
       tr.find("[id^='product_']").text();
        //   propalert(room) ;  
          propoutput('#room_output',room);
          propoutput('#complect_output',complect);
          propoutput('#product_output',product);
        
    }else{
        
        // tr.css({"color":"black","font-weight":"400"}); // жирный шрифт 
        // tr.css({"color":"black"});
        if (room[keyroom]>1) {room[keyroom]--;}else{delete room[keyroom];tr.css({"color":"black"}); }
        if (complect[keycomplect]>1) {complect[keycomplect]--;}else{delete complect[keycomplect];tr.css({"color":"black"});}

        if (product[keyproduct]>1) {product[keyproduct]--;}else{delete product[keyproduct];tr.css({"color":"black"});}
        
        propoutput('#room_output',room);
        propoutput('#complect_output',complect);
        propoutput('#product_output',product);

    }
}//checkAddress

function propalert(obj){
    for (var prop in obj) {
        alert( prop +' : '+obj[prop]); // name, surname, age
      } 
}
function propoutput(id,obj){
    var str='';
    for (var prop in obj) {
        str=str+" "+prop+",";
      } 
      str=str.substring(0, str.length - 1);// удаление последнего символа
    $(id).text(str);
}


  function propdelete(obj){
    for (var prop in obj) {
        delete obj[prop]; 
      }
}

    $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        
    var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
    
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
           
        $('html, body #myModal ').animate({ scrollTop: $(scroll_el).offset().top }, 1000); // анимируем скроолинг к элементу scroll_el
       
        }
	    return false; // выключаем стандартное действие
    });
