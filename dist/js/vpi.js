$("body").on("click","#checkout ",function() {
    // alert("!!");
    
    // Показываем прогресс бар
    // $("#loading").show();
    // переменные для работы прогресс бара
    // var totalPercent = 100 / dataArray.length;
    // var x = 0;
    
    // $('#loading-content').html('Загружен '+dataArray[0].name);
    // Для каждого файла
    // $.each(dataArray, function(index, file) {	
        // загружаем страницу и передаем значения, используя HTTP POST запрос 
        $.post('VPI_template.php', dataArray, function(data) {
        
           
            // alert(data);
            console.log(data);
        
        });
    // });
    // Показываем список загруженных файлов
    // $('#uploaded-files').show();
    return false;
});