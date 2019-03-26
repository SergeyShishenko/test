
  // установить события перед вызовом bootstrap переключатель или они будут срабатывать после bootstrapswitch  события
  $("[name=\'checkbox\']").change(function() {
    if(!confirm("Do you wanna cancel me!")) {
        this.checked = true;
    }
});

// $("[id^=\'vpi_id\']").bootstrapNumber();
// $("[id^=\'add_vpi_count\']").bootstrapNumber();



var ids_list = [];// для генерации из корзины

$("body").on("click","#checkout",function() { //СГЕНЕРИРОВАТЬ ВЕДОМОСТЬ
  
    var cart_list=$("[id^=\'vpi_id\']");
    $('#checkoutd').hide();
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



var add_ids_list = []; // добавление в корзину
$("body").on("click","[id^=\'addvpi\']",function() {// alert('ВПИ');
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

     var cartcontent_vis = $('#header #cart .content').css('display');
  // загружаем страницу и передаем значения, используя HTTP POST запрос       
    $.post('vpi/VPI_template.php', {'addids[]': add_ids_list}, function(data) { 
    // console.log(data);
    $('#vpi').html(data);
    if (cartcontent_vis=="block"){$('#header #cart .content').show();}
    // $('#header #cart .content').show();

    // $("[id^=\'vpi_id\']").bootstrapNumber();
    $('#loading1').hide();      
    });

    add_ids_list.length = 0;
    return false;
    
});

$("body").on("click","[id^=\'each_addvpi\']",function() {// alert('ВПИ');

 // alert($('#add_vpi_count').data("objfurn"));
    $('#loading1').show();
    
    var count_all=0;
    var calcresult=$("#calcresult > tr:not(.dis) > td.animated");
    calcresult.each(function( index ) {// заполнение массива
    var add_vpi_count = $(this).parent().find('td.quantity > div > div > input');
    var count=add_vpi_count.val();
    if (count>0)
    { console.log( index + ": objFurnId " + $( this ).data('objfurnid') + '; Количество: ' +count  );  
      add_ids_list.push($( this ).data('objfurnid'),count);
      count_all=count_all+count;
    }
    
    });
//   return false;
    if(count_all>0)
        {var cartcontent_vis = $('#header #cart .content').css('display');
        // загружаем страницу и передаем значения, используя HTTP POST запрос       
        $.post('vpi/VPI_template.php', {'addids[]': add_ids_list}, function(data) { 
    
        $('#vpi').html(data);
        if (cartcontent_vis=="block"){$('#header #cart .content').show();}
        
        // $("[id^=\'vpi_id\']").bootstrapNumber();
        $('#loading1').hide();      
        }); 
        add_ids_list.length = 0;}

    return false;
    
});

// var clickedID = $("#id").val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
// var DbNumberID = clickedID[1]; //и получаем номер из массива


$('body').on('click', 'td.remove img', function() {   
    
    var clickedID = $(this).parent().parent().find('td.quantity > div > div > input').attr('id').split("-"); //Разбиваем строку (Split работает аналогично PHP explode)
    var DbNumberID = clickedID[1]; //и получаем номер из массива
    // alert(DbNumberID);
    // alert($('#cart-total').text());
    $('#checkoutd').hide();// скрыть кнопку скачать XLS
    $('#cart-total').text($('#cart-total').text()-1);
    if ($('#cart-total').text()=="0") {  
        // alert($('#cart-total').text());     
        $('#checkout').addClass('dis');
        // $('#checkoutd').addClass('dis');
        $('#cartempty').removeClass('dis');
        // checkoutd
    }else{
        $('#checkout').removeClass('dis');
        $('#cartempty').addClass('dis');
       
    }     
    
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
   // свернуть корзину
jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $('#header #cart .content'); // тут указываем ID элемента
        // если клик был не по нашему блоку
		if (!div.is(e.target)&& div.has(e.target).length === 0) { // и не по его дочерним элементам 
		    
            div.hide(); // скрываем его
        
             
            
		}
	});
});
// новый input счётчик
$(function() {
    $(".spinner").each(function(c, b) {
        $(b).on("click", ".btn-default", function() {
            var a = $(".form-c", b)[0];
            $(a).data('change','1');
            
            var s = 0;
            // console.log(parseInt(s));
            if ($(a).data('step')==""){s=1;}else{s = parseInt($(a).data('step'));}
            // alert(a.step);
            // console.log($(".btn-default", b).index(this));
            if($(".btn-default", b).index(this)>0)
            {a.value=parseInt(a.value) + s;
                console.log(a.value);
                
                // console.log('Элемент изменен!.');
            }
            else{a.value=parseInt(a.value) - s;
                console.log(a.value);
            }
            //  $(".btn-default", b).index(this) ? a.value++ : a.value-- ;
            // 0 > a.value && (a.value = 0)
            if (0 > a.value) a.value = 0;
        });
    });
});
  
$('body').on('change',"[id^=\'vpi_id-\']",function(){
    console.log('Элемент изменен.');
   $(this).data('change','1');
   // console.log($(this).data('change'));
   $('#checkoutd').hide();// скрыть кнопку скачать XLS
});