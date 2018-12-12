
  // установить события перед вызовом bootstrap переключатель или они будут срабатывать после bootstrapswitch  события
  $("[name=\'checkbox\']").change(function() {
    if(!confirm("Do you wanna cancel me!")) {
        this.checked = true;
    }
});

$("[id^=\'vpi_id\']").bootstrapNumber();
$("#add_vpi_count").bootstrapNumber();
var ids_list = [];
$("body").on("click","#checkout",function() {
  
    var cart_list=$("[id^=\'vpi_id\']");

    cart_list.each(function( index ) {
        console.log( index + ": fid-" + $( this ).data('fid') );
        console.log( index + ": val-" + $( this ).val() );
        ids_list.push($( this ).data('fid'),$( this ).val())
      });

    // ids_list.push('1,5');// ids_list.push('obj_furnitur_prop_id : 1, count : 5');
    // ids_list.push('2,15');// ids_list.push('obj_furnitur_prop_id : 2, count : 15');    
  
        // загружаем страницу и передаем значения, используя HTTP POST запрос       
        $.post('vpi/VPI_template.php', {'ids[]': ids_list}, function(data) { 
            console.log(data);
            // href="./vpi/vpi-12-10-2018-06-44-55.xls"
            $('#checkoutd').attr("href", data);
            $('#checkoutd').show();
        });
 
    ids_list.length = 0;
    return false;
});

$("body").on("click","#add_vpi",function() {// alert('ВПИ');
// alert($('#add_vpi_count').data("objfurn"));
var count=$('#add_vpi_count').val();
var addvpiid=$('#add_vpi_count').data("objfurn");
if(addvpiid.toString().indexOf("-")+1 == 0)
{
// alert('один элемент');
console.log('Индекс: 0; Значение: ' + addvpiid.toString() + '; Количество: ' +count  );
}
else{
    // alert('несколько элементов');
var clickedID=addvpiid.split("-");
// alert(clickedID[0]+'-'+clickedID[1]+'->'+count);
$.each(clickedID,function(index,value){
 
    // действия, которые будут выполняться для каждого элемента массива
    // index - это текущий индекс элемента массива (число)
    // value - это значение текущего элемента массива
    
    //выведем индекс и значение массива в консоль
    console.log('Индекс: ' + index.toString() + '; Значение: ' + value.toString() + '; Количество: ' +count  );
  });
}


    
});

// var clickedID = $("#id").val().split("_"); //Разбиваем строку (Split работает аналогично PHP explode)
// var DbNumberID = clickedID[1]; //и получаем номер из массива


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
     