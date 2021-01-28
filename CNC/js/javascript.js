var $ = jQuery.noConflict();

$(document).ready(function() {
	// В dataTransfer помещаются изображения которые перетащили в область div
	jQuery.event.props.push('dataTransfer');
	
	// Максимальное количество загружаемых изображений за одни раз
	// var maxFiles = 1;
	
	// Оповещение по умолчанию
	// var errMessage = 0;
	
	// Кнопка выбора файлов
	var defaultUploadBtn = $('#uploadbtn');
	
	// Массив для всех изображений
	// var dataArray = [];
	
	// Область информер о загруженных изображениях - скрыта
	$('#uploaded-files').hide();
	
	// Метод при падении файла в зону загрузки
	$('#drop-files').on('drop', function(e) {	

		$('#file-name-holder').empty();
		// Передаем в files все полученные файлы
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
//  alert(data[0]);
			   //  data.forEach(function(msg) {
			   //      $('#file-name-holder').append(msg);                         
			   //  });
				$('#file-name-holder').append("Загружено "+(Object.keys(data).length-2)+' файлов<br>');
				printErr(data);			
				$('#dircnc').val(data[0]);
			}
		});

	});
	
	// При нажатии на кнопку выбора файлов
	defaultUploadBtn.on('change', loadingFiles);
	
	function loadingFiles() {
		$('#file-name-holder').empty();	
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
					$('#file-name-holder').append("Загружено "+(Object.keys(data).length-2)+' файлов<br>');
					printErr(data);
					$('#dircnc').val(data[0]);
				}
			});
		}
	}
		
	function printErr(data) {
		$('#tableoutput').empty();
		$('#err').remove();
		var lastKey = Object.keys(data).reverse()[0];					
		var lastValue = data[lastKey];
		
		if (typeof(lastValue) !== "undefined" && lastValue !== "" && lastValue !== null){
			$('#tableoutput').append("<tr><td><h2>Найдены ошибки в "+lastValue.length +" файлах!</h2></td></tr>")
			// console.log("Найдены ошибки в "+lastValue.length+ " файлах!");
			lastValue.forEach(function(item, i, arr) {	
				$('#tableoutput').append("<tr><td><h2>"+lastValue[i]['name']+"</h2><p>"
				+lastValue[i]['DL']+" x "+lastValue[i]['DH']+" x "+lastValue[i]['DS']+"<br>"
				+lastValue[i]['err']
				+"</p></td></tr>"
				)		
				// console.log("lastValue.name "+lastValue[i]['name']);//DL,DH,DS,err					
				// console.log("lastValue.DL "+lastValue[i]['DL']);
				// console.log("lastValue.DH "+lastValue[i]['DH']);
				// console.log("lastValue.DS "+lastValue[i]['DS']);
				// console.log("lastValue.err "+lastValue[i]['err']);
			});
		}else{
			// console.log("Ошибок нет!");
			$('#tableoutput').append("<tr><td><h2>Ошибок нет!</h2></td></tr>")
		}

	}
	
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
		$('#file-name-holder').empty();   
		// var dir= { del : $('#dircnc').val() };   
	   $.post('remove-directory.php', {del: $('#dircnc').val()}, function(data){
		   $('#file-name-holder').append(data+'<br>');
	   });
   
	});

	// $('#createzip').on('click', function() {
	// 	// var corrfolder= { createzip : $('#dircnc').val() }; 
	// 	$.post('createzip.php', { createzip : $('#dircnc').val() }, function(data){
	// 		 $('#file-name-holder').append(data+'<br>');
	// 	});
	// }
	// );


	// Перезагрузить текущую страницу, без использования кэша
	// document.location.reload(true);

});