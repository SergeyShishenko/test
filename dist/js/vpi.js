var ids_list = [];
$("body").on("click","#checkout ",function() {
    // alert("!!");
    
    // Показываем прогресс бар
    // $("#loading").show();
    // переменные для работы прогресс бара
    // var totalPercent = 100 / ids_list.length;
    // var x = 0
    var cart_list=$("[id^=\'vpi_id\']");

    cart_list.each(function( index ) {
        console.log( index + ": fid-" + $( this ).data('fid') );
        console.log( index + ": val-" + $( this ).val() );
        ids_list.push($( this ).data('fid'),$( this ).val())

      });

    //   return false;
   
    // ids_list.push('1,5');// ids_list.push('obj_furnitur_prop_id : 1, count : 5');
    // ids_list.push('2,15');// ids_list.push('obj_furnitur_prop_id : 2, count : 15');
    // ids_list.push('3,1');
    // $('#loading-content').html('Загружен '+ids_list[0].name);
    // Для каждого файла
    // $.each(ids_list, function(index, file) {	
        // загружаем страницу и передаем значения, используя HTTP POST запрос 
        // JSON.parse(numbers)
        $.post('vpi/VPI_template.php', {'ids[]': ids_list}, function(data) {
            // $.post('vpi/VPI_template.php', {'ids[]': JSON.stringify(ids_list)}, function(data) {
        
           
            // alert(data);
            console.log(data);
            // href="./vpi/vpi-12-10-2018-06-44-55.xls"
            $('#checkoutd').attr("href", data);
            $('#checkoutd').show();
        });
    // });
    // Показываем список загруженных файлов
    // $('#uploaded-files').show();
    ids_list.length = 0;
    return false;
});

$('body').on('click', 'td.remove img', function() {    
   
    $(this).parent().parent().remove();
   
    });

    $('#cart-total').on('click', function() {  
        // alert();  
        
   
         $('#header #cart .content').toggle();
       
        });

    $('#close').on('click', function() {  
        // alert();  
    
            $('#header #cart .content').toggle();
        
        });
     