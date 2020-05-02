// dist\js\vpiDB-search.js

// $("body").on('mouseenter', 'table#tblVPI tr td:nth-child(5)', function(e) {
$("body").on('click', 'table#tblVPI tr td:nth-child(5):not(.edit),table#tblVPI tr td:nth-child(6):not(.edit)', function(e) {
    //do something
    var td =e.target;    
    // console.log( "handlerIn "+td.closest('tr').childNodes[4].id);
    $(td).addClass('edit');
    $(td).parent().addClass('sel2');
    td.insertAdjacentHTML("beforeEnd",
    '<div class="edit-controls"><button class="edit-ok">Поиск</button></div>'   
  );
});
$("body").on('mouseleave', 'table#tblVPI tr td:nth-child(5),table#tblVPI tr td:nth-child(6)', function(e) {
    //do something
    var td =e.target;
    // console.log( "handlerOut "+td.closest('tr').childNodes[4].id);
    $('.edit-controls').remove();
    $(td).removeClass('edit');
    $(td).parent().removeClass('sel2');
});
$("body").on('mouseenter', 'table#tblVPI tr td:nth-child(5),table#tblVPI tr td:nth-child(6)', function(e) {
removeSel2();
});

function removeSel2(){
   
   var wrapObj2 = document.querySelectorAll('.sel2');

    for(var i = 0;i<wrapObj2.length;i++){
      wrapObj2[i].classList.remove('sel2', 'edit');
    }
}