var $ = jQuery.noConflict();

$(document).ready(function() {
	// В dataTransfer помещаются изображения которые перетащили в область div
	jQuery.event.props.push('dataTransfer');
	
	// Максимальное количество загружаемых изображений за одни раз
	 var maxFiles = 256;
	
	// Оповещение по умолчанию
	// var errMessage = 0;
	
	// Кнопка выбора файлов
	var defaultUploadBtn = $('#uploadbtn');	
	
	// Область информер о загруженных изображениях - скрыта
	$('#uploaded-files').hide();
	
	// Метод при падении файла в зону загрузки
	$('#drop-files').on('drop', function(e) {	

		$('#file-name-holder').empty();
		// Передаем в files все полученные файлы
		var files = e.dataTransfer.files;
		loadingFilesAllMetod(files);
	});
	
	// При нажатии на кнопку выбора файлов
	defaultUploadBtn.on('change', loadingFiles);
	
	function loadingFiles() {
		$('#file-name-holder').empty();	
		// console.log($("#uploadbtn")[0].files);
		loadingFilesAllMetod($("#uploadbtn")[0].files);
	}

	function loadingFilesAllMetod(files){
		var dataArray = [];
		if (window.FormData === undefined){
			alert('В вашем браузере FormData не поддерживается')
		} else {
			var formData = new FormData();

			$.each(files,function(key, input){
				if (input.name.split(".").slice(-1)[0] =="CNC" || input.name.split(".").slice(-1)[0] =="cnc"){
				formData.append('file[]', input);
				dataArray.push({name : input.name});
				}
			});

			 console.log("dataArray.length "+dataArray.length);
			if(0 > dataArray.length <= maxFiles){	 
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
						$('#file-name-holder').append("Загружено "+(Object.keys(data).length-2)+' файлов<br>');// предпоследний массив 
						printErr(data);
						$('#dircnc').val(data[0]);// имя папки
					}
				});
			}else{
				$('#file-name-holder').append('Вы не можете загружать больше '+maxFiles+' файлов!<br>');
			}
		}

	}
	
	function printErr(data) {
		$('#tableoutput').empty();
		// $('#tableoutput tbody').children( 'tr:not(:first)' ).remove();// оставить первую строку	
		$('#err').remove();
		var lastKey = Object.keys(data).reverse()[0];// последний элемент с ошибками					
		var lastValue = data[lastKey];
		// console.log("Object.entries(data) "+Object.entries(data));//!!!
		// console.log("Object.values(data) "+Object.values(data));//!!!
		if (typeof(lastValue) !== "undefined" && lastValue !== "" && lastValue !== null){
			$('#tableoutput').append("<tr><td><h2>Найдены ошибки в "+lastValue.length +" файлах!</h2></td></tr>")
			//  console.log("Найдены ошибки в "+lastValue.length+ " файлах!");
			lastValue.forEach(function(item, i, arr) {	
				
                if (typeof(lastValue[i]['err']) !== "undefined" && lastValue[i]['err'] !== "" && lastValue[i]['err'] !== null){
					var msg = lastValue[i]['err'];
				} else if(typeof(lastValue[i]['warning']) !== "undefined" && lastValue[i]['warning'] !== "" && lastValue[i]['warning'] !== null){
					var msg = lastValue[i]['warning'];
				}
				
				$('#tableoutput').append("<tr><td><h2>"+lastValue[i]['name']+"</h2><p>"
				+lastValue[i]['DL']+" x "+lastValue[i]['DH']+" x "+lastValue[i]['DS']+"<br>"
				+msg
				+"</p></td></tr>"
				)			
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
		// var delfolder =  $('#dircnc').val();// from input
		var delfolder = "";// удалить всю папку uploads
	   $.post('remove-directory.php', {del: delfolder}, function(data){
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