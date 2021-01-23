$(document).ready(function() {
    
    var dropZone = $('#dropZone'),
        maxFileSize = 1000000; // максимальный размер фалйа - 1 мб.
    var res = $('response');
    var dataArrayTitle={};

    
    // Проверка поддержки браузером
    if (typeof(window.FileReader) == 'undefined') {
        dropZone.text('Не поддерживается браузером!');
        dropZone.addClass('error');
    }
    
    // Добавляем класс hover при наведении
    dropZone[0].ondragover = function() {
        dropZone.addClass('hover');
        return false;
    };
    
    // Убираем класс hover
    dropZone[0].ondragleave = function() {
        dropZone.removeClass('hover');
        return false;
    };
    
    // Обрабатываем событие Drop
    dropZone[0].ondrop = function(event) {
        event.preventDefault();
        dropZone.removeClass('hover');
        dropZone.addClass('drop');
        
         var file = event.dataTransfer.files[0];
        // var files = event.dataTransfer.files;

        // alert(file.name);
        
        // Проверяем размер файла
        if (file.size > maxFileSize) {
            dropZone.text('Файл слишком большой!');
            dropZone.addClass('error');
            return false;
        }
        // $.post('upload.php', files , function(data) {
        //      alert(data);
        //         });

        // // Создаем запрос
        var xhr = new XMLHttpRequest();
        xhr.upload.addEventListener('progress', uploadProgress, false);
        // xhr.onreadystatechange = stateChange;
        xhr.onreadystatechange = function() { // (3)
            if (xhr.readyState != 4) return;
          
            // res.text = 'Готово!';
          
            if (xhr.status != 200) {
              alert(xhr.status + ': ' + xhr.statusText);
            } else {
              alert(xhr.responseText);
            }
          
          }

        // xhr.open('POST', 'upload.php',true);
        // xhr.setRequestHeader('X-FILE-NAME', file.name);
        // xhr.send(file);
        // alert(xhr.responseText);
        xhr.open("POST", file.name, true);
            // Устанавливаем заголовки
            xhr.setRequestHeader("Content-Type", "multipart/form-data");
            xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
            xhr.setRequestHeader("X-File-Name", file.name);//application/octet-stream
            xhr.setRequestHeader("X-File-Size", file.size);
            xhr.setRequestHeader("X-File-Type", file.type);

            var formData = new FormData();
            formData.append(file.name, file);
            //xhr.send(formData);

            // Формируем тело запроса
            // var body = reader.result;
            if (xhr.sendAsBinary) {
                // только для firefox
                xhr.sendAsBinary(formData);
            } else {
                // chrome (так гласит спецификация W3C)
                xhr.send(formData);
            }
    

    };
    
    // Показываем процент загрузки
    function uploadProgress(event) {
        var percent = parseInt(event.loaded / event.total * 100);
        dropZone.text('Загрузка: ' + percent + '%');
    }
    
    // Пост обрабочик
    function stateChange(event) {
        if (event.target.readyState == 4) {
            if (event.target.status == 200) {
                dropZone.text('Загрузка успешно завершена!');
            } else {
                dropZone.text('Произошла ошибка!');
                dropZone.addClass('error');
            }
        }
    }
    
});