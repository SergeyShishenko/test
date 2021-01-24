<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файлов на сервер</title>
</head>
<body>
<input type="file" multiple id="uploadbtn">
 
 <div id="result">
     <!-- Результат из upload.php -->
 </div>
 <input type="text" id="dircnc"><br>
 <button type="button" id="delFolder">Удалить папку</button>
  
 <script src="js/jquery.min.js"></script>
 <script>
 $("#uploadbtn").change(function(){
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
                //      $('#result').append(msg);                         
                //  });
                 $('#result').append("Загружено "+(Object.keys(data).length-1)+' файлов<br>');
                 var lastKey = Object.keys(data).sort().reverse()[0];
                 var lastValue = data[lastKey];
               
                 $('#dircnc').val(lastValue);
             }
         });
     }
 });
 
//  var dircnc='72971716';

 $( "#delFolder" ).click(function(){    
     var dir= { del : $('#dircnc').val() };   
    $.post('remove-directory.php', {del: $('#dircnc').val()}, function(data){
	    $('#result').append(data+'<br>');
    });

 });



 </script>
    
</body>
</html>