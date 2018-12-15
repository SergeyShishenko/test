
  // установить события перед вызовом bootstrap переключатель или они будут срабатывать после bootstrapswitch  события
  $("[name=\'checkbox\']").change(function() {
    if(!confirm("Do you wanna cancel me!")) {
        this.checked = true;
    }
});

$("[id^=\'vpi_id\']").bootstrapNumber();
$("[id^=\'add_vpi_count\']").bootstrapNumber();

var ids_list = [];// для генерации из корзины

$("body").on("click","#checkout",function() { //СГЕНЕРИРОВАТЬ ВЕДОМОСТЬ
  
    var cart_list=$("[id^=\'vpi_id\']");
    $('#loading1').show();
    cart_list.each(function( index ) {// заполнение массива
        // console.log( index + ": fid-" + $( this ).data('fid') );
        // console.log( index + ": val-" + $( this ).val() );
        // console.log( index + ": change-" + $( this ).data('change') );
        if ($( this ).data('change')=="1"){
            
            $.post('vpi/VPI_template.php', {'change': '1','fid': $( this ).data('fid'),'val': $( this ).val()}, function(data) { 
                console.log(data);
                $( this ).data('change','0');
           
            });

        }
        
        ids_list.push($( this ).data('fid'),$( this ).val());
      });

    // ids_list.push('1,5');// ids_list.push('obj_furnitur_prop_id : 1, count : 5');
    // ids_list.push('2,15');// ids_list.push('obj_furnitur_prop_id : 2, count : 15'); 
    
    // загружаем страницу и передаем значения, используя HTTP POST запрос       
        $.post('vpi/VPI_template.php', {'ids[]': ids_list}, function(data) { 
            console.log(data);
            // href="./vpi/vpi-12-10-2018-06-44-55.xls"
            $('#checkoutd').attr("href", data);
            $('#checkoutd').show();
            $('#loading1').hide();
        });
 
    ids_list.length = 0;
    return false;
});

  // установим обработчик события focusout, элементу с идентификатором foo
  $('body').on('change',"[id^=\'vpi_id\']",function(){
    // console.log('Элемент изменен.');
    $(this).data('change','1');
    // console.log($(this).data('change'));
    $('#checkoutd').hide();// скрыть кнопку скачать XLS
});

var add_ids_list = []; // добавление в корзину

$("body").on("click","#add_vpi",function() {// alert('ВПИ');

// calcresult






    // alert($('#add_vpi_count').data("objfurn"));
    $('#loading1').show();
    var add_vpi_count = $(this).parent().parent().find('th.quantity > div > div > input');
    var count=add_vpi_count.val();

    var calcresult=$("#calcresult > tr:not(.dis) > td.animated");
    calcresult.each(function( index ) {// заполнение массива
    console.log( index + ": objFurnId " + $( this ).data('objfurnid') + '; Количество: ' +count  );  
    add_ids_list.push($( this ).data('objfurnid'),count);
    });
//   return false;
    // var addvpiid=add_vpi_count.data('objfurn');
    // alert(addvpiid);
    // if(addvpiid.toString().indexOf("-")+1 == 0)
    // {
    // // alert('один элемент');
    // console.log('Индекс: 0; Значение: ' + addvpiid.toString() + '; Количество: ' +count  );
    // add_ids_list.push(addvpiid,count);
    // }
    // else{
    //     // alert('несколько элементов');
    // var clickedID=addvpiid.split("-");
    // // alert(clickedID[0]+'-'+clickedID[1]+'->'+count);
    // $.each(clickedID,function(index,value){ // заполнение массива
    
       
    //     console.log('Индекс: ' + index.toString() + '; Значение: ' + value.toString() + '; Количество: ' +count  );
    //     add_ids_list.push(value,count);
    // });
    // }
    
  // загружаем страницу и передаем значения, используя HTTP POST запрос       
    $.post('vpi/VPI_template.php', {'addids[]': add_ids_list}, function(data) { 
    // console.log(data);
    $('#vpi').html(data);
    $('#header #cart .content').show();
    $("[id^=\'vpi_id\']").bootstrapNumber();
    $('#loading1').hide();      
    });

    add_ids_list.length = 0;
    return false;
    
});

// var clickedID = $("#id").val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
// var DbNumberID = clickedID[1]; //и получаем номер из массива


$('body').on('click', 'td.remove img', function() {   
    
    var clickedID = $(this).parent().parent().find('td.quantity > div > div > input').attr('id').split("-"); //Разбиваем строку (Split работает аналогично PHP explode)
    var DbNumberID = clickedID[1]; //и получаем номер из массива
    // alert(DbNumberID);
    // alert($('#cart-total').text());
    $('#cart-total').text($('#cart-total').text()-1);
    
    $('#loading1').show();
    $.post('vpi/VPI_template.php', {'del': DbNumberID}, function(data) { 
    console.log(data);
    $('#loading1').hide();
    });

    $(this).parent().parent().remove();
    
   
    });

    $('body').on('click','#cart-total', function() {  
        // alert();  
        
   
         $('#header #cart .content').toggle();
       
        });

        $('body').on('click','#close', function() {  
        // alert();  
    
            $('#header #cart .content').toggle();
        
        });
   