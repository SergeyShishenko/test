// dist\js\vpiDB-search.js
// $("body").on('mouseenter', 'table#tblVPI tr td:nth-child(5)', function(e) {
$("body").on('click', 'table#tblVPI tr:not(.head-cm) td:nth-child(5):not(.edit),table#tblVPI tr:not(.head-cm) td:nth-child(6):not(.edit)', function(e) {    
    // $('.trsearch').remove();
    var td =e.target;    
    // console.log( "handlerIn "+td.closest('tr').childNodes[4].id);
    $(td).addClass('edit');
    $(td).parent().addClass('sel2');
    td.insertAdjacentHTML("beforeEnd",
    '<div class="edit-controls"><button class="edit-ok" onclick="addSearch(this)" data-val="'+$(td).text()+'">База данных</button></div>'   
  );
});
$("body").on('mouseleave', 'table#tblVPI tr td:nth-child(5),table#tblVPI tr td:nth-child(6)', function(e) {
    
    var td =e.target;
    // console.log( "handlerOut "+td.closest('tr').childNodes[4].id);
    $('.edit-controls').remove();
    $(td).removeClass('edit');
    $(td).parent().removeClass('sel2');
});
$("body").on('mouseenter', 'table#tblVPI tr td:nth-child(5),table#tblVPI tr td:nth-child(6)', function(e) {
removeSel2('sel2');
});

function removeSel2(sel){
   
   var wrapObj2 = document.querySelectorAll("."+sel);
// console.log(wrapObj2);
    for(var i = 0;i<wrapObj2.length;i++){
      wrapObj2[i].classList.remove(sel, 'edit');
    }
}
function addSearch(e){
    hideMenu();
  $('.trsearch').remove();
  removeSel2('sel3');
  $('#addingNewRow').hide(); 
  $(e).closest('tr').addClass('sel3');
  var inputVal=String($(e).data('val')).trim();
  $(e).closest('tr').after('<tr class="trsearch"><td colspan="11">'+
                                 '<div class="input-group add-search-Furn" style="margin-top: 10px;">'+
                                 '<span class="input-group-addon glyphicon glyphicon-search " aria-hidden="true"  style="top: 0px;"></span>'+
                                 '<input type="text" value="'+inputVal+'" name="add_search_Furn" class="form-control" placeholder="Наименование фурнитуры или артикул"  id="add_search_Furn">'+ 
                                 '<span class="input-group-addon" style="cursor:pointer;" onclick="trsearchRemove();removeSel2(\'sel3\');">X</span>'+        
                                 '</div><div  class="divtblsearch"><table class="zakaz table table-striped" id="tblsearch">'+
                                  $("#addingDB").html() +
                              '</table></div></td></td></tr>');
   
                              // $('#add_search_Furn').val($(e).data('val'));  
                              $.each($("#tblsearch tbody tr"), function() {
                                $(this).removeClass('pressedTime');
                                if($(this).text().toLowerCase().indexOf(inputVal.toLowerCase()) === -1)
                                $(this).hide();
                                else
                                $(this).show(); 
                                //    console.log(':visible ' +$(this).is(':visible'));               
                            });   
                            $("#tblsearch tbody tr:visible").first().addClass('pressedTime');                      
}


// поиск
// var $currentTr = $("#tblsearch tbody tr:visible.pressedTime");
// console.log('$currentTr.text() '+$($currentTr).html());
$("body").on('keyup',"#add_search_Furn",function(event){
    event.preventDefault();
    _this = this;
    // console.log(event.keyCode);
    // console.log('_this '+$(this).text());
    // alert();
    
    // console.log(event.keyCode);
    if(event.keyCode != 13){
        $.each($("#tblsearch tbody tr"), function() {
            $(this).removeClass('pressedTime');
            if($(this).text().toLowerCase().indexOf($(_this).val().trim().toLowerCase()) === -1 || $(_this).val().trim()=="" )
            $(this).hide();
            else
            $(this).show(); 
            //    console.log(':visible ' +$(this).is(':visible'));               
        });
    }else{
        // console.log('key Enter'); 
        // console.log($('.sel3').data('id'));
    }
    // console.log(':visible search ' + $("#tblsearch tbody tr:visible").length);
    // console.log($("#tblsearch tbody tr:visible").first().find("td:eq(1)").text());
    $("#tblsearch tbody tr:visible").first().addClass('pressedTime');
 
   
});


$("body").on("dblclick","#tblsearch tbody td",function(){
  
    // console.log('dblclick')
    // fnselcsv($(this).parent().find("td:eq(1)").text());
    var ch =document.getElementById($('.sel3').attr('id')); //  выбраная строка с id=tr2 в таблице id="tblVPI"
    var pr=$('.pressedTime').last(); // выбраная строка в таблице базы данных на странице id="tblsearch"
    chsel3(ch,pr);
    
});

$("body").on("click","#tblsearch tbody td",function(){

    // console.log('click')

    $.each($("#tblsearch tbody tr"), function() {
        $(this).removeClass('pressedTime');                   
    });
    
    $(this).parent().addClass('pressedTime');
  });

  function trsearchRemove(){
      $('.trsearch').remove();
      $('#addingNewRow').show(); 
  }
  function addingDB(){  
      
    $('#addingDB').empty();
    $.post('./vpi/adding_DB_to_page.php',  function(data) {
      
        $('#addingDB').append(data);
    }); 
    
}
  function addingNewRow(){  
    // console.log('===============');
    // var tbl =document.querySelectorAll('#tblVPI');
    hideMenu();
    var newId = createNewId();
   
    var trInnerstr = trInner(newId);
    $('#tblVPI tr:last').after(trInnerstr);
    redefiningContextMenu();   
    
    resetVpibazis();
    // return newId
}

function createNewId(){
    var table = document.getElementById('tblVPI');
    var rows = table.querySelectorAll('[id^=tr]');   
    var prefId="tr";
    var condition=false;//состояние
    var j=0;
    
    do {
        condition=false;
        j=j+1;
        var newId=prefId+j;       
        for (i = 0; i < rows.length; i++) {                 
            if (newId==rows[i].id){            
                condition=true;  
            }            
        }      
            
      } while (condition);
    condition=false;

     return newId
    
}

function chsel3(ch,pr,multiplier,number_in_set){

    // *** var ch =document.getElementById($('.sel3').attr('id'));   выбраная строка с id=tr2 в таблице id="tblVPI"
    // ** var pr=$('.pressedTime').last();  выбраная строка в таблице базы данных на странице id="tblsearch"
   //***  multiplier множитель */
   //**   number_in_set количество в комплекте */

   if (multiplier !== "non" && typeof(multiplier) !== "undefined" &&  multiplier !== "" &&  multiplier !== null){
    // multiplier=1;
    // number_in_set = parseInt(ch.childNodes[9].innerText, 10)
    ch.childNodes[9].innerText= number_in_set * multiplier;
       
   }
    
   
    ch.childNodes[4].innerText=pr.data('articul');             
    ch.childNodes[5].innerText=pr.data('name');
    ch.childNodes[6].innerText=pr.data('made');
    ch.childNodes[7].innerText=pr.data('color');
    ch.childNodes[8].innerText=pr.data('unit');
    // console.log(ch.childNodes[4].style.color);
    ch.childNodes[4].style.color = "green";
    ch.childNodes[4].dataset.src = pr.data('src'); 
    ch.childNodes[4].dataset.id = 'obj_'+pr.data('id'); 
    // количество 
    
   
    ch.childNodes[9].setAttribute('title', 'ID-'+pr.data('id')); 
}

function onlyNumberInt(){
    if (event.keyCode != 43 && event.keyCode < 48 || event.keyCode > 57)
    event.preventDefault();
}
var GlobalOrder;
var GlobalProduct;
function GlobalOrderProduct(){
    
    GlobalOrder=$('#tblVPI').find('tr:nth-child(2)').find('td:nth-child(1)').text();
    GlobalProduct=$('#tblVPI').find('tr:nth-child(2)').find('td:nth-child(2)').text();

    // console.log("Заказ "+GlobalOrder);
    // console.log("Изделие "+GlobalProduct);
}
 
