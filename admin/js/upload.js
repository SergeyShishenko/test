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
			alert('Вы не можете загружать больше '+maxFiles+' изображений!'); 
			files.length = 0; return;
		}
	});
	
	// // При нажатии на кнопку выбора файлов
	// defaultUploadBtn.on('change', function() {
   	// 	// Заполняем массив выбранными изображениями
   	// 	var files = $(this)[0].files;
   	// 	// Проверяем на максимальное количество файлов
	// 	if (files.length <= maxFiles ) {
	// 		// Передаем массив с файлами в функцию загрузки на предпросмотр
	// 		loadInView(files);
	// 		// Очищаем инпут файл путем сброса формы
    //         $('#frm').each(function(){
	//         	    this.reset();
	// 		});
	// 	} else {
	// 		alert('Вы не можете загружать больше 1 файла PDF,DOC,XLS !'); 
	// 		files.length = 0;
	// 	}
	// });
	var tmime="";
// var background="";	
	// Функция загрузки изображений на предросмотр
	function loadInView(files) {
		// Показываем обасть предпросмотра
		$('#uploaded-holder').show();
		
		// Для каждого файла
		
		$.each(files, function(index, file) {
		 tmime="";

			// $('input[type=file]').live('change',function(){
				var ext=files[index].type;
				// alert(ext);
				if (ext.match('image.*')) {
                    if(ext.match('dwg.*')) {						
                        tmime="dwg";	                       
                   }else{tmime="img";}
				}else if(ext.match('pdf.*')) {
					// alert("PDF"); 
					tmime="pdf";									
					 
				}else if(ext.match('word.*')) {
					// alert("word");
					tmime="word";
					// countDOCFiles++;
				}else if(ext.match('dwg.*')) {
					// alert("excel");
					 tmime="dwg";					 
					//  countFiles++;
				}else if((ext.match('sheet.*')) || (ext.match('excel.*'))) {
					// alert("excel");
					 tmime="excel";					 
					//  countFiles++;
				}

				// || countPDFFiles==1 || countDOCFiles==1 || countXLSFiles==1
				
			// });
						
			// // Несколько оповещений при попытке загрузить не изображение
			// if (!files[index].type.match('image.*')) {
				
			// 	if(errMessage == 0) {
			// 		$('#drop-files p').html('Эй! только изображения!');
			// 		++errMessage
			// 	}
			// 	else if(errMessage == 1) {
			// 		$('#drop-files p').html('Стоп! Загружаются только изображения!');
			// 		++errMessage
			// 	}
			// 	else if(errMessage == 2) {
			// 		$('#drop-files p').html("Не умеешь читать? Только изображения!");
			// 		++errMessage
			// 	}
			// 	else if(errMessage == 3) {
			// 		$('#drop-files p').html("Хорошо! Продолжай в том же духе");
			// 		errMessage = 0;
			// 	}
			// 	return false;
			// }			
			
			// Проверяем количество загружаемых элементов
			if((dataArray.length+files.length) <= maxFiles) {
				// показываем область с кнопками
				$('#upload-button').css({'display' : 'block'});
			} 
			else { alert('Вы не можете загружать больше '+maxFiles+' изображений!'); return; }
			
			// Создаем новый экземпляра FileReader
			var fileReader = new FileReader();
                // Инициируем функцию FileReader
                // alert('!!!');
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


						
						// if (mime=="img"){
						// 	background=this.result;
						// }else{}
						// alert(file.name);
						dataArray.push({name : file.name, value : this.result, bground :background});
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
				$('#dropped-files').append('<div id="img-'+i+'" class="image ui-state-error" style="background: url('+dataArray[i].bground+'); background-size: cover;"> <a href="#" id="drop-'+i+'" class="drop-button">Удалить изображение</a></div>'); 
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
		// Для каждого файла
		$.each(dataArray, function(index, file) {	
			// загружаем страницу и передаем значения, используя HTTP POST запрос 
			$.post('upload.php', dataArray[index], function(data) {
			
				var fileName = dataArray[index].name;
				++x;
				alert(data);
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