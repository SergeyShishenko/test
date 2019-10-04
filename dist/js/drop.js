//////// drop 

// http://xozblog.ru/2012/10/html5-uploader/
      
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
        var cnc=false;
        // Оповещение по умолчанию
        var errMessage = 0;

        
          
        // Кнопка выбора файлов
        var defaultUploadBtn = $('#uploadbtn');
        
        // Массив для всех изображений
        var dataArray = [];
        
        // Область информер о загруженных изображениях - скрыта
        $('#uploaded-files').hide();

        function readFile(object) {
            // var file = object.files[0];
            var file = object;
            var reader = new FileReader();
            reader.onload = function() {
            //   document.getElementById('out').innerHTML = reader.result;
            var cont_detail=1;// количество деталей по умолчанию
            var text =reader.result;
            if(text.indexOf('$=')>0)
            {cont_detail=text.slice( text.indexOf('$=')+2, text.indexOf('::SIDE='));} 
            if(!cont_detail){cont_detail=1}
            text=text.slice( text.indexOf('DL=')+3, text.indexOf('OFFS'));
            text=text.replace(" DH="," x ");
            text=text.replace(" DS="," x ");
            var repeatCount=40;
            
            var namef =file.name.slice(0,-4);
            // alert(namef.length);
             namef =namef+'...'.repeat(repeatCount-namef.length);
              $('#out_CNC').append('<p style="width:700px;">'+namef+'<span style="float:right;">'+text+' - '+cont_detail+' шт.</span></p>');
              
            }
            reader.readAsText(file);
          }
        
          function sortFiles() {
            //   alert();
            $('#out_CNC > p').sort(function(a, b) {
                // console.log('a '+a.innerHTML);	
                // console.log('b '+b.innerHTML);
              var $a = a.innerHTML,
                $b = b.innerHTML;
                // console.log('$a '+$a);	
                // console.log('$b '+$b);	
              return $a.localeCompare($b);
            }).appendTo('#out_CNC');
          }

        // Метод при падении файла в зону загрузки
        $("body").on('drop',"#drop-files", function(e) {	
            // Передаем в files все полученные изображения
            var files = e.dataTransfer.files;
            //alert(files[0].name);
            // Проверяем на максимальное количество файлов
           // alert(files[0].name.split(".").slice(-1)[0]);
            if (files[0].name.split(".").slice(-1)[0] =="CNC"){
                maxFiles=100; cnc=true;              
            }
            else{cnc=false;}

            if (files.length <= maxFiles) {
                // Передаем массив с файлами в функцию загрузки на предпросмотр
                loadInView(files);
            } else {
                alert('Вы не можете загружать больше '+maxFiles+' файла!'); 
                files.length = 0; return;
            }
       
        // $("#dropped-files").sortable({ cancel: '.note' });
        // $('#upload-button .upload').trigger('click');
        });
       // При нажатии на кнопку выбора файлов
   defaultUploadBtn.on('change', function() {
    // Заполняем массив выбранными изображениями
    var files = $(this)[0].files;
    // Проверяем на максимальное количество файлов
 if (  files.length <= maxFiles) {
    // Передаем массив с файлами в функцию загрузки на предпросмотр
    loadInView(files);
         // Очищаем инпут файл путем сброса формы
         // Или вот так $("#uploadbtn").replaceWith( $("#uploadbtn").val('').clone( true ) );
         $('#frm').each(function(){
           this.reset();
         });

 } else {
    alert('Вы не можете загружать больше '+maxFiles+' файла!'); 
    files.length = 0;
 }
});
        
        var ext="";
         var background;	

        // Функция загрузки изображений на предросмотр
        function loadInView(files) {
            // Показываем обасть предпросмотра
            // $('#uploaded-holder').css({"display":"table-cell"});
            
            // Для каждого файла
            
            $.each(files, function(index, file) { 
                //  console.log(files[index].type);	
                //  console.log(files[index].name);	



                var clickedEXP = files[index].name.split("."); //Разбиваем строку (Split работает аналогично PHP explode)
                var EXP = clickedEXP.slice(-1)[0]; //и получаем номер из массива
               // console.log(clickedEXP.slice(-1)[0]);
                console.log(EXP);
                // console.log(files[0].result);
                if (cnc){ readFile(file);}
                 
               // console.log("type "+files[index].type);
            var tmime="";	
            
            
	// Несколько оповещений при попытке загрузить не изображение
    // if (EXP!="csv") {
				
    //     if(errMessage == 0) {
    //         $('#drop-files p').html('Эй! только файлы формата CSV !');
    //         ++errMessage;
    //     }
    //     else if(errMessage == 1) {
    //         $('#drop-files p').html('Стоп! Загружаются только файлы с расширением .CSV !');
    //         ++errMessage;
    //     }
    //     else if(errMessage == 2) {
    //         $('#drop-files p').html("Не умеешь читать? Только файлы CSV !");
    //         ++errMessage;
    //     }
    //     else if(errMessage == 3) {
    //         $('#drop-files p').html("Хорошо! Продолжай в том же духе");
    //         errMessage = 0;
    //     }
    //     return false;
    // }

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
                                    background='./dist/css/typePDF.png';
                                    break;
                                case "word":
                                    background='./dist/css/typeDOC.png';
                                    break;
                                case "excel":
                                     if (EXP=="csv"){background='./dist/css/CSV.png';break;}
                                    background='./dist/css/typeXLS.png';
                                    break;

                                case "dwg":
                                    background='./dist/css/typeDWG.png';
                                    break;
                            }
                            // alert(tmime);
                            
                    //  if(background)
                    //        { dataArray.push({name : file.name, value : this.result, bground : background, type : tmime, id : $("#id").val().split("_")[1]});}
                           dataArray.push({name : file.name, value : this.result, bground : background, type : tmime, id : $("#id").val().split("_")[1]});
                            addImage((dataArray.length-1));
                            // tmime="";
                        }; 
                            
                    })(files[index]);
                // Производим чтение картинки по URI
                fileReader.readAsDataURL(file);
                
                
            });
            // $("#loading").show();
            // переменные для работы прогресс бара
          
            
           
            // $('#upload-button .upload').trigger('click');
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
            console.log('Загружен '+dataArray[0].name);
            // fupload(dataArray);
            $('#upload-button .upload').trigger('click');
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
        // var arr_sOff=[];
        var arr_s=[];
        var arr_prev=[];
        var product_def={};
        
        var currentinput='';
        var currentspan='';

        $("body").on("click","#upload-button .upload",function() {
            // alert("!!");
            
            // Показываем прогресс бар
            $("#loading").show();
            // переменные для работы прогресс бара
            var totalPercent = 100 / dataArray.length;
            // var x = 0;
            
            $('#loading-content').html('Загружен '+dataArray[0].name);
            // var dataplas=[];
            // Для каждого файла
            fupload(dataArray);

       

            // Показываем список загруженных файлов
            $('#uploaded-files').show();

            
            return false;
        });

        function fupload(dataArray){
            // var x = 0;

            $.each(dataArray, function(index, file) {	

                // загружаем страницу и передаем значения, используя HTTP POST запрос 
                //  dataplas= $.merge( {tbl : "obj", field : "name_obj"}, dataArray[index]);
                $.post('./vpi/upload.php', dataArray[index] , function(data) {
                
                
                    // ++x;
                 
                    restartFiles();
                    $('#drop-files').hide();
                    $('#table-saved-files').hide();
                    $.each($("#order_table tbody tr"), function() {
                        $(this).removeClass('pressedTime');                   
                    });
                    $('#uploaded-files').append(data);
                if($("#currfile").val()){var clickedID = $("#currfile").val().split("."); 
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
                     arr_s=[];
                     arr_table=[];
                     arr_prev=[];
                }
                    
                    
                     
                 
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

        }
        
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
               // alert(i + ': ' + $(elem).attr('id'));
                // if ($(this).hasClass("stop")) {
                // 	alert("Остановлено на " + i + "-м пункте списка.");
                // 	return false;
                // } else {
                // 	alert(i + ': ' + $(elem).text());
                // }
            });
        });

      

    /////// drop



           //Удаляем запись 
           $("body").on("click", "#DelSubmit", function(e) {
                e.preventDefault();
                var currfile = $('#currfile').val();                 
// alert('#DelSubmit');
            // alert(objxlsx[DbNumberID][1].product);

                // propdelete(objxlsx,DbNumberID);
                // return;
             var arrcurrT=[];
                console.log('Файл-'+currfile);
                
                if (confirm("Очистить?")) {
            $("a.finished-gen").each(function(index)
            {
                // console.log('href '+$(this).attr('href'));+
                arrcurrT.push($(this).attr('href'));

            });

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
                    product_def={};
                    console.log('Удаляем-'+currfile+' ...');

                    //выстраиваем  данные для POST
                    // var myData =    "recordToDelete=xlscsv/"+currfile;
                    // alert(currfile );
                    var myData =  {
                                     recordToDelete : "xlscsv/"+currfile,
                                     arrcurrT : arrcurrT
                                    };
                    jQuery.ajax({
                        type: "POST", // HTTP метод  POST или GET
                        url: "./vpi/upload.php", //url-адрес, по которому будет отправлен запрос
                        dataType:"text", // Тип данных
                        data:myData, //post переменные
                        success:function(response){
                        // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                        console.log(response);
                        $('#drop-files').show();
                        $('#table-saved-files').show();
                        $("#order_table tbody tr:visible").first().addClass('pressedTime');
                        $('#search_order').focus();
                        // setTimeout(function () {                            
                        //     // $("#order_table tbody tr:visible").first().addClass('pressedTime');
                        //     $('#search_order').focus();
                        //     }, 500);

                        },
                        error:function (xhr, ajaxOptions, thrownError){
                            //выводим ошибку
                            console.log(thrownError);
                        }
                    });
                    // $('#GENModal').modal('hide');
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
            // alert($('#client_output').text());
            // alert($('#agent_output').text());
            // alert($('#address_output').text());
            // alert($('#floor_output').text());
            // alert($('#room_output').text());
            // alert($('#complect_output').text());
            // alert($('#order_output').text());
            // alert($('#product_output').text());
            objxlsx.forEach(function(item) {
                // var name =objxlsx[n];
                var f=item; // ключ 
                // propalert(objxlsx);
                    objxlsx[item].forEach(function(item, i) {
                        // alert( f + ": "+i + "- "  + "{ kd=> "+item.kd + ", dp=> "+item.dp +" }" );
                        // data['arr[' + row+ '][name]'] = f;
                        data['arr[' + f + '][' + i + '][kd]']  = item.kd;
                        data['arr[' + f + '][' + i + '][dp]']  = item.dp;
                    });
                }); 
                
                
                jQuery.ajax({
                    type: "POST", // HTTP метод  POST или GET
                    url: "./vpi/upload.php", //url-адрес, по которому будет отправлен запрос
                    dataType:"text", // Тип данных
                    data:data, //post переменные
                    success:function(response){
                    // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                    console.log(response);
                    $('#uploaded-files').append(response);

                    },
                    error:function (xhr, ajaxOptions, thrownError){
                        //выводим ошибку
                        console.log(thrownError);
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
  
$(window).bind('beforeunload',function(e){

// return 'are you sure you want to leave?';
    //save info somewhere
    // e.preventDefault();
    
   console.log($('#currfile').val());
   
//    return false;
   
    
    delfiles();
    // return "Данные не сохранены. Точно перейти? "+ $('#currfile').val();
    
    
  
   

});
// window.onbeforeunload = function(e) {
//     // e.preventDefault();
//     // alert("thrownError");
//     // return false;
//     // var myData =  {
//     //     recordToDelete : "xlscsv/"+$('#currfile').val(),
//     //     arrcurrT : arrcurrT
//     //    };
//     //     jQuery.ajax({
//     //     type: "POST", // HTTP метод  POST или GET
//     //     url: "./vpi/upload.php", //url-адрес, по которому будет отправлен запрос
//     //     dataType:"text", // Тип данных
//     //     data:myData, //post переменные
//     //     success:function(response){
//     //     // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
//     //     console.log(response);
        

//     //     },
//     //     error:function (xhr, ajaxOptions, thrownError){
//     //     //выводим ошибку
//     //     alert(thrownError);
//     //     }
//     //     });
     
//   };

function delfiles()
{
    var arrcurrT=[];
    $('a.finished-gen').each(function( index ) {
        // console.log( index + ": " + $( this ).text() );
        arrcurrT.push($(this).attr('href'));
        $(this).attr('href', '#');
        $(this).removeAttr("download");
        $( this ).removeClass( "finished-gen" );
        
       
    });
    // alert(arrcurrT.length);
    if (arrcurrT.length>0){
    var myData =  {
        recordToDelete : "xlscsv/"+currfile,
        arrcurrT : arrcurrT
       };
        jQuery.ajax({
        type: "POST", // HTTP метод  POST или GET
        url: "./vpi/upload.php", //url-адрес, по которому будет отправлен запрос
        dataType:"text", // Тип данных
        data:myData, //post переменные
        success:function(response){
        // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
        console.log(response);
        

        },
        error:function (xhr, ajaxOptions, thrownError){
        //выводим ошибку
        console.log(thrownError);
        }
        });
    }


    var myData2 =  {
        recordToDelete : "xlscsv/"+$('#currfile').val(),
        arrcurrT : arrcurrT
       };
        jQuery.ajax({
        type: "POST", // HTTP метод  POST или GET
        url: "./vpi/upload.php", //url-адрес, по которому будет отправлен запрос
        dataType:"text", // Тип данных
        data:myData2, //post переменные
        success:function(response){
        // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
        console.log(response);
         console.log("Перезагрузка...");
        

        },
        error:function (xhr, ajaxOptions, thrownError){
        //выводим ошибку
        console.log(thrownError);
        }
        });
}

function checkAddress(checkbox,s)
{
     var arrcurrT=[];
    $('a.finished-gen').each(function( index ) {
        // console.log( index + ": " + $( this ).text() );
        arrcurrT.push($(this).attr('href'));
        $(this).attr('href', '#');
        $(this).removeAttr("download");
        $( this ).removeClass( "finished-gen" );
        
       
    });
    var myData =  {
        recordToDelete : "xlscsv/"+currfile,
        arrcurrT : arrcurrT
       };
        jQuery.ajax({
        type: "POST", // HTTP метод  POST или GET
        url: "./vpi/upload.php", //url-адрес, по которому будет отправлен запрос
        dataType:"text", // Тип данных
        data:myData, //post переменные
        success:function(response){
        // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
        console.log(response);
        

        },
        error:function (xhr, ajaxOptions, thrownError){
        //выводим ошибку
        console.log(thrownError);
        }
        });

    // alert($(checkbox).attr('id'));

    if(s===1){$(checkbox).prop('checked', true);checkbox.checked=true;}
    if(s===2){$(checkbox).prop('checked', false);checkbox.checked=false;}
    // if(s===3){$(checkbox).prop('checked', true);checkbox.checked=true;}
    // 
    // alert($(checkbox).parent().parent().parent().attr('class'));
    $(checkbox).parent().parent().parent().removeClass('pressedTime');
    // alert($(checkbox).parent().parent().parent().attr('class'));


    var tr=$(checkbox).parent().parent().parent();
    var tblid = tr.parent().parent().attr('id');
    var typecheck =$(checkbox).attr('name');// kd,dp
    
    // alert($(checkbox).attr('name'));
    // alert(objxlsx[tblid].kd);
    var keyroom=tr.find("[id^='room_']").text();
    var roomTD=keyroom;
    if (roomTD==''){roomTD=$('#room_output').text();}

    
    // alert(keyroom);
    var keycomplect=tr.find("[id^='complect_']").text();
    var keyproduct=tr.find("[id^='product_']").text();
    var keyproduct2=tr.find("[id^='product2_']").text();
    var productTD=keyproduct;
    var product2TD=keyproduct2;
    var def=tr.find("[id^='def']").text();
    var unit=tr.find("[id^='unit']").text();
    var count=tr.find("[id^='count']").text();
    var serialnum=tr.find("[id^='serialnum']").text();
    var wood=tr.find("[id^='wood']").text();
    var veneer=tr.find("[id^='veneer']").text();
    
    var numsample=tr.find("[id^='numsample']").text();
    var kbKD=tr.find("[id^='kbKD']").text();
    var kbDP=tr.find("[id^='kbDP']").text();
    var RPG=tr.find("[id^='RPG']").text();
    var VAP=tr.find("[id^='VAP']").text();
    if (keyproduct2!=''){keyproduct=keyproduct2;}

    var keyfloor=tr.find("[id^='floor_']").text();
    var floorTD=keyfloor;
    if (floorTD==''){floorTD=$('#floor_output').text();}
    // if (keyfloor ==""){keyfloor=$('floor_output').val();}
    // var floor=keyfloor;
    // if (floor==''){floor=keyproduct2;}
    
    var keyproductApp=tr.find("[id^='productApp']").text();
    if(!!keyproductApp){ 
        if (!(keyproductApp in objxlsx[tblid])){objxlsx[tblid][keyproductApp]=new Objx(keyproductApp);}// проверка на существование строки в массиве
    }
    
    // alert(objxlsx[tblid][keyproductApp].name);
    if (checkbox.checked)
    {        
        // tr.css({"color":"green","font-weight":"700"}); // жирный шрифт 
        tr.css({"color":"green"}); 
        tr.removeClass('check-vis');  
        tr.show();   
      
        if (keyroom in room) {room[keyroom]++;}else{room[keyroom]=1;}

        if (keyfloor !=""){
            if (keyfloor in floor) {floor[keyfloor]++;}else{floor[keyfloor]=1;}
        }
      
        if (keycomplect in complect) {complect[keycomplect]++;}else{complect[keycomplect]=1;}

      
         if (keyproduct in product) {product[keyproduct]++;
        }else{product[keyproduct]=1;
            product_def[keyproduct]={'def':def,
                                    'unit':unit,
                                    'floor':floorTD,
                                    // 'product':keyproduct,
                                    'product':productTD,
                                    'product2':product2TD,
                                    'room':roomTD,
                                    'count':count,
                                    'serialnum':serialnum,
                                    'wood':wood,
                                    'veneer':veneer,
                                    'numsample':numsample,
                                    'kbKD':kbKD,
                                    'RPG':RPG,
                                    'VAP':VAP,
                                    'kbDP':kbDP};//добавление информации ++
        }   
        

        if(!!keyproductApp){
           if (keyproductApp in objxlsx[tblid][keyproductApp].product) {objxlsx[tblid][keyproductApp].product[keyproductApp]++;}else{objxlsx[tblid][keyproductApp].product[keyproductApp]=1;}  
           objxlsx[tblid][keyproductApp][typecheck]=1;
        }
         
        

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
            tr.css({"color":"black"});
       
            if ($('input#checkvis').is(':checked')){tr.hide();}
               

            if (room[keyroom]>1) {room[keyroom]--;}else{delete room[keyroom];
                // tr.css({"color":"black"});
                tr.addClass('check-vis');
                // tr.hide();
             }

            if ((keyfloor !="")){ if (floor[keyfloor]>1) {floor[keyfloor]--;}else{delete floor[keyfloor];
                // tr.css({"color":"black"});
                tr.addClass('check-vis');
                // tr.hide();
             } }
        

            if (complect[keycomplect]>1) {complect[keycomplect]--;}else{delete complect[keycomplect];
                tr.css({"color":"black"});
                tr.addClass('check-vis');
                // tr.hide();
            }

            if (product[keyproduct]>1) {product[keyproduct]--;}else{delete product[keyproduct];
                delete product_def[keyproduct];//удаление информации
                // tr.css({"color":"black"});
                tr.addClass('check-vis');
                // tr.hide();
            }

       
            if(!!keyproductApp){ 
                if (objxlsx[tblid][keyproductApp].product[keyproductApp]>1) {
                    objxlsx[tblid][keyproductApp].product[keyproductApp]--;
                    objxlsx[tblid][keyproductApp][typecheck]=0;
                    propoutput('#productApp_output',objxlsx[tblid][keyproductApp].product);
                }else{
                    delete objxlsx[tblid][keyproductApp].product[keyproductApp];
                  
                    propoutput('#productApp_output',objxlsx[tblid][keyproductApp].product);
                 
                    delete objxlsx[tblid][keyproductApp];
                    // tr.css({"color":"black"});
                }
                
            }         
            
           
            
            propoutput('#room_output',room);
            if (keyfloor !=""){ propoutput('#floor_output',floor);}
            propoutput('#complect_output',complect);
            propoutput('#product_output',product);
         
         }
}//checkAddress

function propalert(obj){
    for (var prop in obj) {
        console.log( prop +' : '+obj[prop]); // name, surname, age
      } 
}
function propalert2(obj){
    for (var prop in obj) {
        // alert( prop +' : '+obj[prop]); // name, surname, age
        for (var prop2 in prop) {
            console.log( prop2 +' : '+prop[prop2].def); // name, surname, age
          }
      } 
}
function keydelete(obj){
    for (var prop in obj) {
        // alert( prop ); 
        propdelete(objxlsx[DbNumberID][prop].product);
      } 
}
function propalertObj(obj,name){
  
    console.log( obj[name]); // name, surname, age
        
     
}
function propalertObjx(obj,name,key){
  
    console.log( obj[name][key]); 
      
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
        console.log( i + "- "  + "{ kd=> "+item.kd + ", dp=> "+item.dp +" }" );
            // data['arr[' + row+ '][name]'] = f;
            // data['arr[' + f + '][' + i + '][kd]']  = item.kd;
            // data['arr[' + f + '][' + i + '][dp]']  = item.dp;
        });
    // }); 

}
    $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        
    var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
    
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
           
        $('html, body #GENModal ').animate({ scrollTop: $(scroll_el).offset().top }, 1000); // анимируем скроолинг к элементу scroll_el
       
        }
	    return false; // выключаем стандартное действие
    });
    $("body").on("click",".changeclick",function() {       
        // console.log('focus '+$(this).find('input').is(":focus"));
        if (!$(this).find('input').is(":focus")){
            // alert('Not focused');
       

              $(this).find('input').val($(this).find('span.val').text());
              $(this).find('input').css({"visibility":"visible"}).focus();
            //   $(this).find('input').css({"visibility":"visible"});
              
              currentspan=$(this).find('span').attr('id');
              currentinput=$(this).find('input').attr('id');           
            // console.log('click '+currentspan);
            // console.log('focus '+$(this).find('input').is(":focus"));
            //   console.log(currentinput);
            //   console.log('------------');
         }     
    });
   
   
    $("body").on("keyup",".changeclick > input",function(event){
        if(event.keyCode == 13){
            event.preventDefault();
        
           console.log('keyCode 13 #'+currentinput);
           console.log('val '+$(this).val());
          
            $(this).css({"visibility":"hidden"});
           
            if  (currentinput=='product-name')
            {
                arr_coma($('#'+currentinput).val());
                // выключючение предидущих checkbox
                inputClick(arr_prev);
                // включение выбранных
                inputClick(arr_s);
                arr_prev=[];
                arr_prev=arr_s;
            }
            else {
                 $(this).parent().find('span.val').text($(this).val());
                }
            currentinput='';
        }
    });



    $("body").on("focusin",".changeclick > input",function(eventObject){
        // var externalData = "a=" + eventObject.data.a + ", b=" + eventObject.data.b;
        // console.log('focusin '+$(eventObject.target).val());

        arr_coma($(eventObject.target).val());
                //  inputClick(arr_prev);
                // включение выбранных
                // inputClick(arr_s);
                arr_prev=[];
                arr_prev=arr_s;
        currentspan=$(eventObject.target).parent().find('span').attr('id');
        currentinput=$(eventObject.target).parent().find('input').attr('id');
      });
 
    
    function arr_coma(val){
     
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

        // console.log('arr_prev.length'+ arr_prev.length );
        

        // // выключючение предидущих checkbox
        // inputClick(arr_prev);
        // // включение выбранных
        // inputClick(arr_s);
                
        // console.log('arr_s.length'+ arr_s.length );
        // console.log('arr_prev.length'+ arr_prev.length );
            

            // arr_prev=[];
            // arr_prev=arr_s;

            arr_prev.forEach(function(item) {
                // console.log('arr_prev'+ item );

            });    
           
    }

    function escapeRegExp(str) {
        return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
    }
     
    function replaceAll(str, find, replace) {
        return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
    }     
       

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
         
function inputClick(arr){
    arr.forEach(function(item) {
        var i=item;
        console.log('ON#someSwitchOptionSuccess'+ i );

        $('#someSwitchOptionSuccess'+i).trigger('click');
    });
}
shortcut.add("Alt+X",function() {
    // alert("#product_output");
    $("#product_output").trigger('click');
});

$('tr.check-vis').each(function(){
    $(this).show();
});

$("body").on('click','input#checkvis', function() {
    console.log($(this).is(':checked'));
    if ($(this).is(':checked')){
        checkvisH();
    } else {
        checkvisS();
    }
});
function checkvisH()
{
    $('.check-vis').each(function(){
            $(this).hide();
            // console.log('Hide');
        });
}
function checkvisS()
{
    $('.check-visS').each(function(){
            $(this).show();
            // console.log('show');
        });
}

$("body").on('click','.btn', function() {
    var $this = $(this);
//   $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 2000);
});



$("body").on('click','.button-gen:not(".finished-gen")', function() {

    
// принудительный ввод значений input
 $("input[id$='-name']").each(function( index, value ) {
    if ($(this).css("visibility")=='visible'){

        // alert( index + ": " + $(this).val() +" => "+ $(this).css("visibility"));
        $(this).css({"visibility":"hidden"});

        if  ($(this).attr('id')=='product-name')
        {
            arr_coma($('#'+currentinput).val());
            // выключючение предидущих checkbox
            inputClick(arr_prev);
            // включение выбранных
            inputClick(arr_s);
            arr_prev=[];
            arr_prev=arr_s;
        }
        else {
             $(this).parent().find('span.val').text($(this).val());
            }

    }
        
      });
     
     if($('#product_output').text()==""){alert('Ничего не выбрано! '+$('#product_output').text()); return;}
    $( this ).toggleClass( "active-gen" );
    
});

dataArrayTitle={};

// после генерации
    $("body").on('transitionend','.button-gen', function(eventObject) {
        //  alert($(eventObject.target).attr('id'));
        var titul='КД';
        switch ($(eventObject.target).attr('id')) {                                
            case "TKD":
                titul='КД';
                break;
            case "TDP":
                 titul='ДП';
                break;
        }
        
        dataArrayTitle=
            {
                client : $('#client_output').text(),
                agent : $('#agent_output').text(),
                address : $('#address_output').text(),
                floor : $('#floor_output').text(),
                room : $('#room_output').text(),
                complect : $('#complectUser_output').text()+$('#complect_output').text(),
                order : $('#order_output').text(),
                product : $('#product_output').text(),
                gen : $(eventObject.target).attr('id'),// TKD,TDP
                arr_product_def : product_def

            };   
      
        $.post('./vpi/title-generation.php', dataArrayTitle , function(data) {              
    
            // $('#uploaded-files').append(data);
            $(eventObject.target).attr('href', './vpi/'+data);
            var desc = data.split("~");
            // $(eventObject.target).attr('download', $('#order_output').text()+'-Комплект '+titul+'.xlsx');
            $(eventObject.target).attr('download', desc[0]+'_Комплект_'+titul+'.xlsx');
            

        });  
    
        $( this ).toggleClass( "active-gen" );
    });

    $("body").on('transitionend','.button-gen', function() {
        $( this ).addClass( "finished-gen" );
    });
// после генерации end   







$( "body" ).keyup(function( event ){ 

// event.preventDefault(); 
   
        // 
        // console.log(event.keyCode);
        if(event.keyCode == 13){
            // alert();
            console.log( $("#order_table tbody tr").is(".pressedTime"));
        if ($("#order_table tbody tr").is(".pressedTime"))
            {
                
                // alert( $("#order_table tbody tr.pressedTime").find("td:eq(1)").text());
                fnselcsv($("#order_table tbody tr.pressedTime").find("td:eq(1)").text());
            }

            }
    if(event.keyCode == 40){
    // event.preventDefault();
    console.log('вниз');
    // console.log($("#order_table tbody tr:visible").length);
    // console.log($("#order_table tbody tr.pressedTime:visible").index());
    $('#search_order').blur();

    $currentTr = $("#order_table tbody tr:visible.pressedTime");  
    $($currentTr).removeClass('pressedTime');  
    // console.log('$currentTr.length '+$($currentTr).next().length);    
    // console.log('next() '+$($currentTr).next().is(':visible'));
    while ($($currentTr).next().is(':hidden')) {
        $currentTr = $($currentTr).next();  
      }

     if($($currentTr).next().length>0 && $($currentTr).next().is(':visible'))
      {
        $currentTr = $($currentTr).next();  
      }else{$currentTr = $("#order_table tbody tr:visible").first();  }
    
    $($currentTr).addClass('pressedTime');

   

    }
    if(event.keyCode == 38){
        // event.preventDefault();
        console.log('вверх');

        $currentTr = $("#order_table tbody tr:visible.pressedTime");  
        $($currentTr).removeClass('pressedTime'); 
    //     console.log('$currentTr.length '+$($currentTr).prev().length);    
    // console.log('prev() '+$($currentTr).prev().is(':visible'));
        
        while ($($currentTr).prev().is(':hidden')) {
            $currentTr = $($currentTr).prev();  
          }
        
        if($($currentTr).prev().length>0 && $($currentTr).prev().is(':visible'))
        {
            $currentTr = $($currentTr).prev();
        }else{$currentTr = $("#order_table tbody tr:visible").last();  }
        


        $($currentTr).addClass('pressedTime');
        }
 
  });

  // при открытии модального окна
$('#GENModal').on('show.bs.modal', function () {  
  
    //    $('input#search_order').trigger('focus');
    // $('input#search_order').focus();
    $.each($("#order_table tbody tr"), function() {
        $(this).removeClass('pressedTime');                   
    });
    setTimeout(function () {
         $('#search_order').focus();
         $("#order_table tbody tr:visible").first().addClass('pressedTime');
         $currentTr = $("#order_table tbody tr:visible.pressedTime");
         }, 500);
         
        //  console.log('$currentTr.text() '+$currentTr.length);
});
var $currentTr = $("#order_table tbody tr:visible.pressedTime");
// console.log('$currentTr.text() '+$($currentTr).html());
$("#search_order").keyup(function(event){
    event.preventDefault();
    _this = this;
    // console.log(event.keyCode);
    // console.log('_this '+$(this).text());
    // alert();
    
    console.log(event.keyCode);
    if(event.keyCode != 13){
        $.each($("#order_table tbody tr"), function() {
            $(this).removeClass('pressedTime');
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
            else
            $(this).show(); 
            //    console.log(':visible ' +$(this).is(':visible'));               
        });
    }
    console.log(':visible ' + $("#order_table tbody tr:visible").length);
    console.log($("#order_table tbody tr:visible").first().find("td:eq(1)").text());
    $("#order_table tbody tr:visible").first().addClass('pressedTime');
 
   
});


$("#order_table tbody td").dblclick(function(){
    fnselcsv($(this).parent().find("td:eq(1)").text());
    
});
$("#order_table tbody td").click(function(){

    $.each($("#order_table tbody tr"), function() {
        $(this).removeClass('pressedTime');                   
    });
    
    $(this).parent().addClass('pressedTime');
  });
  
  function fnselcsv(f){
    // $(this).parent().find("td:eq(1)");
    // alert($(this).parent().find("td:eq(1)").text());
    // dataArray.push({name : file.name, value : this.result, bground : background, type : tmime, id : $("#id").val().split("_")[1]});
    // dataArray.push({selorder : $(this).parent().find("td:eq(1)").text()+".csv",type : "excel"});
    $.post('./vpi/upload.php', {selorder : "/vpi/xlscsv/"+f+".csv"} , function(data)
    {
                
                
        // ++x;
     
        // restartFiles();
        $('#drop-files').hide();
        $('#table-saved-files').hide();
        $.each($("#order_table tbody tr"), function() {
            $(this).removeClass('pressedTime');                   
        });
        // alert(data);
        $('#uploaded-files').append(data);
        $('#uploaded-files').show();



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
         arr_s=[];
         arr_table=[];
         arr_prev=[];
         
     
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
    });//$.post

}
// 
function PrintElem(elem)
    {
        sortFiles();
       Popup($(elem).html());
    }
 
    function Popup(data)
    {
        var mywindow = window.open('', 'Печать CNC', 'height=500,width=600');
        mywindow.document.write('<html><head><title>Печать CNC</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
 
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10
 
        mywindow.print();
        mywindow.close();
 
        return true;
    }
    function Reset(elem)
    {
         $(elem).empty();
        $('#DelSubmit').show();
        // $('#CreateSubmit').show();
        $('#drop-files').show();
    }
    

 