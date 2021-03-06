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

			$('#tableoutput').empty();
			$('#tableoutput').append("<tr><td><div id='loading1' ></div></td></tr>");
			// var flagCSV=false; // нет CSV
			$.each(files,function(key, input){
				var exp = input.name.split(".").slice(-1)[0].toUpperCase();
				console.log(exp);
				if (exp =="CNC" ||	exp =="CSV" ||	exp =="XLS" ||	exp =="XLSX" ){
				formData.append('file[]', input);
				dataArray.push({name : input.name});
				}
				// if (exp =="CSV" ){
				// 	// formData.append('dircnc', $('#dircnc').val());	
				// 	// console.log("*****");
				// 	flagCSV=true;
					
				// }

			});


			// ЗАМЕНА CSV НА НОВЫЙ ФАЙЛ при генерации в экселе и при загрузке на сервер

			 console.log("dataArray.length "+dataArray.length);
			if(dataArray.length > 0 && dataArray.length <= maxFiles){				
				// if(!flagCSV){$('#dircnc').val("");}// если нет CSV
				formData.append('dircnc', $('#dircnc').val());
				$('#report').empty(); 	
				$.ajax({
					type: "POST",
					url: 'upload.php',
					cache: false,
					contentType: false,
					processData: false,
					data: formData,
					dataType : 'json',
					success: function(data){
	
						$('#file-name-holder').append("Загружено "+(Object.keys(data).length-2)+' файлов<br>');// предпоследний массив 
						printErr(data);
						$('#dircnc').val(data[0]);// имя папки
						// console.log("data[0] "+data[0]);
						checkSpecification(data[0]);
					}
				});
			}else if (dataArray.length > maxFiles){
				$('#file-name-holder').append('Вы не можете загружать больше '+maxFiles+' файлов!<br>');
			}else{
				$('#file-name-holder').append('Не верный тип файла!<br>');
			}
		}

	}
	
	function printErr(data) {
		$('#tableoutput').empty();
		// $('#tableoutput tbody').children( 'tr:not(:first)' ).remove();// оставить первую строку	
		$('#err').remove();
		var lastKey = Object.keys(data).reverse()[0];// последний элемент с ошибками					
		var lastValue = data[lastKey];
		// console.log("Object.keys(data) "+Object.keys(data));
		// console.log("Object.entries(data) "+Object.entries(data));//!!!
		// console.log("Object.values(data) "+Object.values(data));//!!!
		
		if (typeof(lastValue) !== "undefined" && lastValue !== "" && lastValue !== null){
			// $('#tableoutput').append("<tr><td><h2>Найдены ошибки в "+lastValue.length +" файлах!</h2></td></tr>")
			//  console.log("Найдены ошибки в "+lastValue.length+ " файлах!");
			var me=0;
			var mw=0;
			lastValue.forEach(function(item, i, arr) {	
				var msgerr="";
				var msgwarning="";
				
                if (typeof(lastValue[i]['err']) !== "undefined" && lastValue[i]['err'] !== "" && lastValue[i]['err'] !== null){
					msgerr = lastValue[i]['err'];
					me++;
				} 
				if(typeof(lastValue[i]['warning']) !== "undefined" && lastValue[i]['warning'] !== "" && lastValue[i]['warning'] !== null){
					msgwarning = lastValue[i]['warning'];
					// console.log("Найдены warning в " + lastValue[i]['warning']);
					mw++;
					// console.log("mw++ " + mw++);
					
				}
				
				$('#tableoutput').append("<tr><td><h2>"+lastValue[i]['name']+"</h2><p>"
				+lastValue[i]['DL']+" x "+lastValue[i]['DH']+" x "+lastValue[i]['DS']+"<br>"
				+msgerr
				+msgwarning
				+"</p></td></tr>"
				)			
			});
			// $('#tableoutput tbody tr:first td h2').val("warning "+me);

			// .prepend
			$('#tableoutput').prepend('<tr><td><h2 style="margin:0;">Найдены ошибки в '+ num_word(me,arrvariant)+',</h2><h2 style="margin:0;">предупреждения в '+num_word(mw,arrvariant)+'</h2></td></tr>');
			// $('#tableoutput td').eq(0).html('<h2 style="margin:0;">Найдены ошибоки в '+ num_word(me,arrvariant)+',</h2><h2 style="margin:0;">предупреждения в '+num_word(mw,arrvariant)+'</h2>');
		
			//  console.log("warning "+mw); 
			//  console.log("err "+me);

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
		$('#dircnc').val("");
	   $.post('remove-directory.php', {del: delfolder}, function(data){
		   $('#file-name-holder').append(data+'<br>');
	   });
   
	});
	$( "#clear" ).click(function(){ 
		var delfolder =  $('#dircnc').val();// from input
		if (delfolder !==""){
			$('#file-name-holder').empty();  
			$('#tableoutput').empty(); 
			$('#report').empty(); 
			$('#err').remove();
			
			// var delfolder = "";// удалить всю папку uploads
			$('#dircnc').val("");
			$.post('remove-directory.php', {del: delfolder}, function(data){
				$('#file-name-holder').append(data+'<br>');
			});
			document.location.reload();
		}
   
	});

	

// Скролл верх и вниз
	$(function(){
		$('#scroll_top').click(function(){
			$('html, body').animate({scrollTop: 0}, 600);//600
			return false;
		});
		
		$('#scroll_bottom').click(function(){
			$('html, body').animate({scrollTop: $(document).height() - $(window).height()}, 600);//600
			return false;
		});
	});


// проверка спецификации
	function checkSpecification(folder,sel=0) {	
 console.log("checkSpecification( "+folder+", sel="+sel+" )");
		var formData = new FormData();
		formData.append('path',folder );//folder = '2578_4_SE'
		formData.append('sel',sel );//ключ заказа
		// alert(formData.get('path'));
		$.ajax({
			type: "POST",
			url: 'check_specification_CSV.php',
			cache: false,
			contentType: false,
			processData: false,
			data: formData,
			// dataType : 'json',
			dataType : 'text',
			success: function(data){
				$('#report').empty(); 
			   //  data.forEach(function(msg) {
			   //      $('#file-name-holder').append(msg);                         
			   //  });
			//    alert(data);
				$('#report').append(data);
			
			}
		});

	}

	// $('#file-name-holder').onChange='checkSpecification(".$_POST['path'].",selectedIndex);'"

	$("body").on("change","#pr", function() {
		checkSpecification($("#pr").data("folder"),this.selectedIndex)
	});
	// $('#pr').change(checkSpecification($("#pr").data("folder"),this.selectedIndex));
	// Перезагрузить текущую страницу, без использования кэша
	// document.location.reload();

});