// dist\js\vpiDB-search.js
$("body").on("click","#tblVPI",function(e){
    // console.log(e.target)
    console.log( e.target.closest('tr').childNodes[4].id);
});