var $ = jQuery.noConflict();

$(document).ready(function() {
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
	$('#drop-files').on('drop', function(e) {	
		// Передаем в files все полученные изображения
		var files = e.dataTransfer.files;

		var formData = new FormData();
		$.each(files,function(key, input){
			formData.append('file[]', input);
		});
 
		$.ajax({
			type: "POST",
			url: 'upload.php',
			cache: false,
			contentType: false,
			processData: false,
			data: formData,
			dataType : 'json',
			success: function(data){

			   //  data.forEach(function(msg) {
			   //      $('#file-name-holder').append(msg);                         
			   //  });
				$('#file-name-holder').append("Загружено "+(Object.keys(data).length-1)+' файлов<br>');
				var lastKey = Object.keys(data).sort().reverse()[0];
				var lastValue = data[lastKey];
			  
				$('#dircnc').val(lastValue);
			}
		});

	// // Для каждого файла
	// $.each(files, function(index, file) {
						
	// 	// console.log(index);
	// console.log(file.name);
	// 	var fileReader = new FileReader();
	// 		// Инициируем функцию FileReader
	// 		fileReader.onload = (function(file) {
				
	// 			return function(e) {
	// 				// Помещаем URI изображения в массив
					
	// 				dataArray.push({name : file.name, value : this.result});
	// 				// addImage((dataArray.length-1));
	// 			}; 
					
	// 		})(files[index]);
	// 	});
		
		
	// 		// Для каждого файла
	// 		$.each(dataArray, function(index, file) {	
	// 			// загружаем страницу и передаем значения, используя HTTP POST запрос 
	// 			$.post('upload.php', dataArray[index], function(data) {				
	// 				console.log(data);
	// 			});
	// 		});
		
	});
	
	// При нажатии на кнопку выбора файлов
	defaultUploadBtn.on('change', loadingFiles);
	
	function loadingFiles() {

		if (window.FormData === undefined){
			alert('В вашем браузере FormData не поддерживается')
		} else {
			var formData = new FormData();
			$.each($("#uploadbtn")[0].files,function(key, input){
				formData.append('file[]', input);
			});
	 
			$.ajax({
				type: "POST",
				url: 'upload.php',
				cache: false,
				contentType: false,
				processData: false,
				data: formData,
				dataType : 'json',
				success: function(data){
   
				   //  data.forEach(function(msg) {
				   //      $('#file-name-holder').append(msg);                         
				   //  });
					$('#file-name-holder').append("Загружено "+(Object.keys(data).length-1)+' файлов<br>');
					var lastKey = Object.keys(data).sort().reverse()[0];
					var lastValue = data[lastKey];
				  
					$('#dircnc').val(lastValue);
				}
			});
		}
	}
		
	// Процедура добавления эскизов на страницу

	
	// Функция удаления всех изображений

	
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

	

	
	
	
	// Простые стили для области перетаскивания
	$('#drop-files').on('dragenter', function() {
		$(this).css({'box-shadow' : 'inset 0px 0px 20px rgba(0, 0, 0, 0.1)', 'border' : '4px dashed #bb2b2b'});
		return false;
	});
	
	$('#drop-files').on('drop', function() {
		$(this).css({'box-shadow' : 'none', 'border' : '4px dashed rgba(0,0,0,0.2)'});
		return false;
	});

	


	//  var dircnc='72971716';

	$( "#delFolder" ).click(function(){    
		var dir= { del : $('#dircnc').val() };   
	   $.post('remove-directory.php', {del: $('#dircnc').val()}, function(data){
		   $('#file-name-holder').append(data+'<br>');
	   });
   
	});


	// Перезагрузить текущую страницу, без использования кэша
	// document.location.reload(true);

});