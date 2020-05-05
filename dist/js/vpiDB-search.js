// dist\js\vpiDB-search.js
// $("body").on('mouseenter', 'table#tblVPI tr td:nth-child(5)', function(e) {
$("body").on('click', 'table#tblVPI tr td:nth-child(5):not(.edit),table#tblVPI tr td:nth-child(6):not(.edit)', function(e) {    
    // $('.trsearch').remove();
    var td =e.target;    
    // console.log( "handlerIn "+td.closest('tr').childNodes[4].id);
    $(td).addClass('edit');
    $(td).parent().addClass('sel2');
    td.insertAdjacentHTML("beforeEnd",
    '<div class="edit-controls"><button class="edit-ok" onclick="addSearch(this)" data-val="'+$(td).text()+'">Поиск</button></div>'   
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
  $('.trsearch').remove();
  removeSel2('sel3');
  $(e).closest('tr').addClass('sel3');
  var inputVal=$(e).data('val').trim();
  $(e).closest('tr').after('<tr class="trsearch"><td colspan="11">'+
                                 '<div class="input-group add-search-Furn" style="margin-top: 10px;">'+
                                 '<span class="input-group-addon glyphicon glyphicon-search " aria-hidden="true"  style="top: 0px;"></span>'+
                                 '<input type="text" value="'+inputVal+'" name="add_search_Furn" class="form-control" placeholder="Наименование фурнитуры или артикул"  id="add_search_Furn">'+         
                                 '</div><div  class="divtblsearch"><table class=" table table-striped" id="tblsearch">'+
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
    
    console.log(event.keyCode);
    if(event.keyCode != 13){
        $.each($("#tblsearch tbody tr"), function() {
            $(this).removeClass('pressedTime');
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
            else
            $(this).show(); 
            //    console.log(':visible ' +$(this).is(':visible'));               
        });
    }
    // console.log(':visible search ' + $("#tblsearch tbody tr:visible").length);
    // console.log($("#tblsearch tbody tr:visible").first().find("td:eq(1)").text());
    $("#tblsearch tbody tr:visible").first().addClass('pressedTime');
 
   
});
// function searchChange(event){
//   event.preventDefault();
//   _this = this;
//   console.log(event.keyCode);
//   console.log('_this '+$(this).text());
//   // alert();
  
//   console.log(event.keyCode);
//   if(event.keyCode != 13){
//       $.each($("#tblsearch tbody tr"), function() {
//           $(this).removeClass('pressedTime');
//           if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
//           $(this).hide();
//           else
//           $(this).show(); 
//           //    console.log(':visible ' +$(this).is(':visible'));               
//       });
//   }
//   console.log(':visible search ' + $("#tblsearch tbody tr:visible").length);
//   console.log($("#tblsearch tbody tr:visible").first().find("td:eq(1)").text());
//   $("#tblsearch tbody tr:visible").first().addClass('pressedTime');

 
// };


$("#tblsearch tbody td").dblclick(function(){
    fnselcsv($(this).parent().find("td:eq(1)").text());
    
});
$("#tblsearch tbody td").click(function(){

    $.each($("#tblsearch tbody tr"), function() {
        $(this).removeClass('pressedTime');                   
    });
    
    $(this).parent().addClass('pressedTime');
  });