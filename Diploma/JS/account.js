   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
     // $('#date').mask('99/99/9999');
      $('#phone').mask('+7 999 999-99-99');
     // $('#phoneext').mask("(999) 999-9999? x99999");
      //$("#tin").mask("99-9999999");
     // $("#ssn").mask("999-99-9999");
     // $("#product").mask("a*-999-a999");
    //  $("#eyescript").mask("~9.99 ~9.99 999");
   });
var t;
function up() {
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
  if(top > 0) {
    window.scrollBy(0,-100);
    t = setTimeout('up()',20);
  } else clearTimeout(t);
  return false;
}