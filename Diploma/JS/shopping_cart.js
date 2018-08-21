function plus(element)
			 { //alert(element.id);
				 //alert(document.getElementById(element.id.slice(5)).innerHTML);
				 var $id=element.id.slice(10);
				//alert($id);
				//alert(document.getElementById('count_'+$id).innerHTML);
				document.getElementById('count_'+$id).innerHTML++;
				document.getElementById('case_'+$id).value=1;
				var text1 = document.getElementById('s_value_'+$id).innerHTML;
                var number = parseInt(text1.replace(/\s+/g, ''));
				var res = number*document.getElementById('count_'+$id).innerHTML;
				//alert(res);
				//alert(number_format(res, 0, ' ', ' '));
				//number_format(number, 2, ' ', ' ')
				document.getElementById('s_sum_'+$id).innerHTML=number_format(res, 0, ' ', ' ');
				//parseInt(document.getElementById('s_value_'+$id).innerHTML)+
				//parseInt(document.getElementById('s_value_'+$id).innerHTML);
				document.getElementById('shopping_cart_add_'+$id).submit();
				//parent.frames[0].location="about:blank";
			 }
function minus(element)
			 { //alert(element.id);
				 //alert(document.getElementById(element.id.slice(5)).innerHTML);
				 var $id=element.id.slice(11);
				//alert($id);
				//alert(document.getElementById('count_'+$id).innerHTML);
				if (document.getElementById('count_'+$id).innerHTML >1)
				{document.getElementById('count_'+$id).innerHTML--;
				document.getElementById('case_'+$id).value=0;
				var text1 = document.getElementById('s_value_'+$id).innerHTML;
                var number = parseInt(text1.replace(/\s+/g, ''));
				var res = number*document.getElementById('count_'+$id).innerHTML;
				//alert(res);
				//alert(number_format(res, 0, ' ', ' '));
				//number_format(number, 2, ' ', ' ')
				document.getElementById('s_sum_'+$id).innerHTML=number_format(res, 0, ' ', ' ');
				/* document.getElementById('s_sum_'+$id).innerHTML=
				document.getElementById('s_value_'+$id).innerHTML-
				document.getElementById('s_value_'+$id).innerHTML; */
				document.getElementById('shopping_cart_add_'+$id).submit();
			    }
				//parent.frames[0].location="about:blank";
			 }
function del(element)
			 { //alert(element.id);
				 //alert(document.getElementById(element.id.slice(5)).innerHTML);
				 var $id=element.id.slice(4);
				//alert($id);

				document.getElementById('shopping_cart_del_'+$id).submit();
			   // parent.frames[0].location="about:blank";
			 }
function cart_add2() 
{
//alert(document.getElementById(\'totall\').innerHTML);
//alert(document.getElementById('ifrm8').contentDocument.getElementById('count_piecel').innerHTML)
	
document.getElementById('totall').innerHTML=number_format(document.getElementById('ifrm8').contentDocument.getElementById('totall').innerHTML, 0, ' ', ' ');

	
document.getElementById('count_piecel').innerHTML=document.getElementById('ifrm8').contentDocument.getElementById('count_piecel').innerHTML;
document.getElementById('sum').innerHTML=
number_format(document.getElementById('ifrm8').contentDocument.getElementById('totall').innerHTML, 0, ' ', ' ');
var $i_num=document.getElementById('ifrm8').contentDocument.getElementById('num').innerHTML;


	//document.getElementById('s_sum_'+$i_num).innerHTML=
	//document.getElementById('count_'+$i_num).innerHTML*document.getElementById('s_value_'+$i_num).innerHTML;

	//parent.frames[0].location="about:blank";	
}			 
//display:none;
function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}
//  Пример 1: number_format(1234.56);
//  Результат: '1,235'
 
//  Пример 2: number_format(1234.56, 2, ',', ' ');
//  Результат: '1 234,56'
 
//  Пример 3: number_format(1234.5678, 2, '.', '');
//  Результат: '1234.57'
 
//  Пример 4: number_format(67, 2, ',', '.');
//  Результат: '67,00'
 
//  Пример 5: number_format(1000);
//  Результат: '1,000'
 
//  Пример 6: number_format(67.311, 2);
//  Результат: '67.31'
 
//  Пример 7: number_format(1000.55, 1);
//  Результат: '1,000.6'
 
//  Пример 8: number_format(67000, 5, ',', '.');
//  Результат: '67.000,00000'
 
//  Пример 9: number_format(0.9, 0);
//  Результат: '1'
 
//  Пример 10: number_format('1.20', 2);
//  Результат: '1.20'
 
//  Пример 11: number_format('1.20', 4);
//  Результат: '1.2000'
 
//  Пример 12: number_format('1.2000', 3);
//  Результат: '1.200'
 
//  Пример 13: number_format('1 000,50', 2, '.', ' ');
//  Результат: '100 050.00'
 
//  Пример 14: number_format(1e-8, 8, '.', '');
//  Результат: '0.00000001'
