function next()
{
	if (document.getElementById('ifrm1').contentDocument.getElementById('curr_page').innerHTML > 1)
	{document.getElementById('PreviousButton_new').disabled = false;
     document.getElementById('PreviousButton_new').className='button';
	 document.getElementById('PreviousButton_new').src = 'images/PreviousButton.png';
    }
	else if (document.getElementById('ifrm1').contentDocument.getElementById('curr_page').innerHTML == 1)	
	{
	 document.getElementById('PreviousButton_new').disabled = true;
     document.getElementById('PreviousButton_new').className='nobutton';
	 document.getElementById('PreviousButton_new').src = 'images/PreviousButtonNon.png';	
	}	
	if (document.getElementById('ifrm1').contentDocument.getElementById('curr_page').innerHTML >= (document.getElementById('ifrm1').contentDocument.getElementById('total').innerHTML))
	{
	 document.getElementById('NextButton_new').disabled = true;
     document.getElementById('NextButton_new').className='nobutton';
	 document.getElementById('NextButton_new').src = 'images/NextButtonNon.png';
	} 
    else if (document.getElementById('ifrm1').contentDocument.getElementById('curr_page').innerHTML < (document.getElementById('ifrm1').contentDocument.getElementById('total').innerHTML))
	{
	 document.getElementById('NextButton_new').disabled = false;
     document.getElementById('NextButton_new').className='button';
	 document.getElementById('NextButton_new').src = 'images/NextButton.png';
	} 	
	else if (document.getElementById('ifrm1').contentDocument.getElementById('curr_page').innerHTML < (document.getElementById('ifrm1').contentDocument.getElementById('total').innerHTML))
	{document.getElementById('NextButton_new').disabled = false;
     document.getElementById('NextButton_new').className='button';
	}
	
var $A= -1;
if (document.getElementById('ifrm1').contentDocument.getElementById('page').innerHTML == "+")
{
document.getElementById('hidl_num+').value++;
document.getElementById('hidl_num-').value++;
}
else if(document.getElementById('ifrm1').contentDocument.getElementById('page').innerHTML == "-")
{
document.getElementById('hidl_num+').value--;
document.getElementById('hidl_num-').value--;	
}

for (var i=0; i<8 ;i++)
{
$A++;	
document.getElementById('badge_'+$A+'_txt').innerHTML=
document.getElementById('ifrm1').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML;

if (document.getElementById('ifrm1').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "HOT")
{document.getElementById('badge_'+$A+'_txt').className="badge_hot";}
if (document.getElementById('ifrm1').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "NEW")
{document.getElementById('badge_'+$A+'_txt').className="badge_new";}
if (document.getElementById('ifrm1').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "SALE")
{document.getElementById('badge_'+$A+'_txt').className="badge_sale";}
if (document.getElementById('ifrm1').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "NONE")
{document.getElementById('badge_'+$A+'_txt').className="badge_none";}
	
document.getElementById('_'+$A+'_foto').innerHTML=
document.getElementById('ifrm1').contentDocument.getElementById('_'+$A+'_foto').innerHTML;	
	
document.getElementById('new_'+$A+'_title').innerHTML=
document.getElementById('ifrm1').contentDocument.getElementById('new_'+$A+'_title').innerHTML;	

document.getElementById('new_'+$A+'_old').innerHTML=
document.getElementById('ifrm1').contentDocument.getElementById('new_'+$A+'_old').innerHTML;	

document.getElementById('new_'+$A+'_val').innerHTML=
document.getElementById('ifrm1').contentDocument.getElementById('new_'+$A+'_val').innerHTML;

document.getElementById('_'+$A+'_img').innerHTML=
document.getElementById('ifrm1').contentDocument.getElementById('_'+$A+'_img').innerHTML;

document.getElementById('a_'+$A+'_path').href=
document.getElementById('ifrm1').contentDocument.getElementById('a_'+$A+'_path').href;

}
}
	
 function next2()
{
	if (document.getElementById('ifrm2').contentDocument.getElementById('curr_page').innerHTML > 1)
	{document.getElementById('2PreviousButton_new').disabled = false;
     document.getElementById('2PreviousButton_new').className='button';
	 document.getElementById('2PreviousButton_new').src = 'images/PreviousButton.png';
    }
	else if (document.getElementById('ifrm2').contentDocument.getElementById('curr_page').innerHTML == 1)	
	{
	 document.getElementById('2PreviousButton_new').disabled = true;
     document.getElementById('2PreviousButton_new').className='nobutton';
	 document.getElementById('2PreviousButton_new').src = 'images/PreviousButtonNon.png';	
	}	
	if (document.getElementById('ifrm2').contentDocument.getElementById('curr_page').innerHTML >= (document.getElementById('ifrm2').contentDocument.getElementById('total').innerHTML))
	{
	 document.getElementById('2NextButton_new').disabled = true;
     document.getElementById('2NextButton_new').className='nobutton';
	 document.getElementById('2NextButton_new').src = 'images/NextButtonNon.png';
	} 
    else if (document.getElementById('ifrm2').contentDocument.getElementById('curr_page').innerHTML < (document.getElementById('ifrm2').contentDocument.getElementById('total').innerHTML))
	{
	 document.getElementById('2NextButton_new').disabled = false;
     document.getElementById('2NextButton_new').className='button';
	 document.getElementById('2NextButton_new').src = 'images/NextButton.png';
	} 	
	else if (document.getElementById('ifrm2').contentDocument.getElementById('curr_page').innerHTML < (document.getElementById('ifrm2').contentDocument.getElementById('total').innerHTML))
	{document.getElementById('2NextButton_new').disabled = false;
     document.getElementById('2NextButton_new').className='button';
	}
	
var $A= 7;
if (document.getElementById('ifrm2').contentDocument.getElementById('page').innerHTML == "+")
{
document.getElementById('2hidl_num+').value++;
document.getElementById('2hidl_num-').value++;
}
else if(document.getElementById('ifrm2').contentDocument.getElementById('page').innerHTML == "-")
{
document.getElementById('2hidl_num+').value--;
document.getElementById('2hidl_num-').value--;	
}
//alert(document.getElementById('2hidl_num+').value);
//document.getElementById('5hidl_num').value=document.getElementById('2hidl_num+').value;
//alert(document.getElementById('5hidl_num').value);
for (var i=0; i<4 ;i++)
{
$A++;	
document.getElementById('badge_'+$A+'_txt').innerHTML=
document.getElementById('ifrm2').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML;

if (document.getElementById('ifrm2').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "HOT")
{document.getElementById('badge_'+$A+'_txt').className="badge_hot";}
if (document.getElementById('ifrm2').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "NEW")
{document.getElementById('badge_'+$A+'_txt').className="badge_new";}
if (document.getElementById('ifrm2').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "SALE")
{document.getElementById('badge_'+$A+'_txt').className="badge_sale";}
if (document.getElementById('ifrm2').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML == "NONE")
{document.getElementById('badge_'+$A+'_txt').className="badge_none";}
	
document.getElementById('_'+$A+'_foto').innerHTML=
document.getElementById('ifrm2').contentDocument.getElementById('_'+$A+'_foto').innerHTML;	
	
document.getElementById('new_'+$A+'_title').innerHTML=
document.getElementById('ifrm2').contentDocument.getElementById('new_'+$A+'_title').innerHTML;	

document.getElementById('new_'+$A+'_old').innerHTML=
document.getElementById('ifrm2').contentDocument.getElementById('new_'+$A+'_old').innerHTML;	

document.getElementById('new_'+$A+'_val').innerHTML=
document.getElementById('ifrm2').contentDocument.getElementById('new_'+$A+'_val').innerHTML;

document.getElementById('_'+$A+'_img').innerHTML=
document.getElementById('ifrm2').contentDocument.getElementById('_'+$A+'_img').innerHTML;

document.getElementById('a_'+$A+'_path').href=
document.getElementById('ifrm2').contentDocument.getElementById('a_'+$A+'_path').href;

}
}	

var t;
function up() {
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
  if(top > 0) {
    window.scrollBy(0,-100);
    t = setTimeout('up()',20);
  } else clearTimeout(t);
  return false;
}

////////////////////////////////////////////////////

/* onMouseOut="borderOut(this);"
onMouseOver="borderOver(this);" */
 function borderOver(element)
 {
	 if (element.style.border !== document.getElementById('ifrm1').style.border)
	 {
		 element.style.border='2px solid #dbdbdb';
		 //alert(element.id);
	 }
 }
 function borderOut(element)
 {  //element.style.border='border:1px solid rgb(9,9,9)';
	 if (element.style.border !== document.getElementById('ifrm1').style.border)
	 {
		 element.style.border='1px solid #dbdbdb';
		 //alert(element.id);
	 }
 }
 
  function borderClick(element)
   {
	    var $str=element.id;
	  var $s=$str.substr(15);
	 // alert($s);
	 //alert(element.style.getPropertyValue(element.style[2]))
	 //element.style.border='2px solid rgb(0,0,0)';
	// if (element.style.border !== document.getElementById('ifrm1').style.border)
		 if (element.style.border !== '2px solid rgb(0,0,0)')
	 {
		 //alert(document.getElementById('bb').value);
		 //alert(element.style.getPropertyValue(element.style('background'));//
		 window.document.getElementById('selected_product').style.background= 'url('+document.getElementById('bb_'+$s).value+')center no-repeat';
		 window.document.getElementById('selected_product').style.backgroundSize='contain';
		 
		 element.style.border='2px solid rgb(0,0,0)';
		// element.style.border='1px solid #cccccc;';
		 //'2px solid rgb(0,0,0)';
		 document.getElementById('bb_cart').value=document.getElementById('bb_'+$s).value;
		 
	 }
	 //element.style.border = document.getElementById('ifrm1').style.border;
	// var m=1;
	 for (var i=1; i<19 ;i++)
	 {  
      //alert(document.getElementById('product_detalis'+i));
		 if ($s != i)
		 {
			 if (document.getElementById('product_detalis'+i))
			 {
			document.getElementById('product_detalis'+i).style.border='1px solid rgb(219,219,219)'; 
			 }
			//alert(i);
		 }
		
	 }
	 //alert(m);


 }
 
////////////////////////////////////////////////////////////////////////	   
  var t;  
  //var leftt=0;
 function torightt() { 
 
 if (document.getElementById('RightButton').className=='button')
 {
 leftt =leftt+10; 
  if(leftt < 170) {
//alert(leftt);	  
  document.getElementById('container'+$setvar).scrollLeft =leftt;    
    t = setTimeout('torightt()',10);
  } else {clearTimeout(t);leftt=0;     
     document.getElementById('LeftButton').disabled = false;
     document.getElementById('LeftButton').className='button';
	 document.getElementById('LeftButton').style.background = 'url(images/arrowleft.png)'; 
	 document.getElementById('RightButton').disabled = true;
     document.getElementById('RightButton').className='nobutton';
	 document.getElementById('RightButton').style.background = 'url(images/arrowrightnon.png)';
  }
  }
     
 	 
 return false;
 }  
 
 var rightt=150;	   
 function toleftt() {
if (document.getElementById('LeftButton').className=='button')
 {	 
 rightt = rightt-10; 
  if(rightt >= 0) {  
  document.getElementById('container'+$setvar).scrollLeft =rightt;    
    t = setTimeout('toleftt()',10);
  } else {clearTimeout(t);rightt=150;
     document.getElementById('RightButton').disabled = false;
     document.getElementById('RightButton').className='button';
	 document.getElementById('RightButton').style.background = 'url(images/arrowright.png)';
	 document.getElementById('LeftButton').disabled = true;
     document.getElementById('LeftButton').className='nobutton';
	 document.getElementById('LeftButton').style.background = 'url(images/arrowleftnon.png)';
	 //document.getElementById('LeftButton').style.background = 'url(images/arrow_left.png)';
  }
  }
     
 
 return false;
 } 	   
function cart_add() 
{
//alert(document.getElementById(\'totall\').innerHTML);
//alert(document.getElementById('ifrm7').contentDocument.getElementById('totall').innerHTML)	
//document.getElementById('totall').innerHTML=document.getElementById('ifrm7').contentDocument.getElementById('totall').innerHTML;

document.getElementById('totall').innerHTML=number_format(document.getElementById('ifrm7').contentDocument.getElementById('totall').innerHTML, 0, ' ', ' ');

	
document.getElementById('count_piecel').innerHTML=document.getElementById('ifrm7').contentDocument.getElementById('count_piecel').innerHTML;
	
}
   
function Sel()
	{   
    var $val = document.getElementById('sel').value ;
	document.getElementById('variation').value=$val;
	//alert(document.getElementById('variation').value);
		if ($val == 1)
   {      borderClick(document.getElementById('product_detalis1'));
          $setvar=1;
	      document.getElementById('container1').style.display='block';
		  document.getElementById('container2').style.display='none';
		  document.getElementById('container3').style.display='none';
		  document.getElementById('container1').scrollLeft=0;
     document.getElementById('RightButton').disabled = false;
     document.getElementById('RightButton').className='button';
	 if (document.getElementById('arrow1').value==1)
	 {document.getElementById('RightButton').style.background = 'url(images/arrowright.png)';}
     else {document.getElementById('RightButton').style.background = 'url(images/arrowrightnon.png)';}
	 
	 
	 document.getElementById('LeftButton').disabled = true;
     document.getElementById('LeftButton').className='nobutton';
	 document.getElementById('LeftButton').style.background = 'url(images/arrowleftnon.png)';
   }
    else if ($val == 2)
	{ 
          borderClick(document.getElementById('product_detalis7'));
		  $setvar=2;
	      document.getElementById('container2').style.display='block';
		  document.getElementById('container1').style.display='none';
		  document.getElementById('container3').style.display='none';
		  document.getElementById('container2').scrollLeft=0;
     document.getElementById('RightButton').disabled = false;
     document.getElementById('RightButton').className='button';
	 if (document.getElementById('arrow2').value==0)
	 {document.getElementById('RightButton').style.background = 'url(images/arrowrightnon.png)';}
	 else {document.getElementById('RightButton').style.background = 'url(images/arrowright.png)';}
	 document.getElementById('LeftButton').disabled = true;
     document.getElementById('LeftButton').className='nobutton';
	 document.getElementById('LeftButton').style.background = 'url(images/arrowleftnon.png)';
	}
    else if ($val == 3)
	{     borderClick(document.getElementById('product_detalis13'));
		  $setvar=3;
	      document.getElementById('container3').style.display='block';
		  document.getElementById('container1').style.display='none';
		  document.getElementById('container2').style.display='none';
		  document.getElementById('container3').scrollLeft=0;
     document.getElementById('RightButton').disabled = false;
     document.getElementById('RightButton').className='button';
	 if (document.getElementById('arrow3').value==0)
	 {document.getElementById('RightButton').style.background = 'url(images/arrowrightnon.png)';}
	 else {document.getElementById('RightButton').style.background = 'url(images/arrowright.png)';}
	 
	 document.getElementById('LeftButton').disabled = true;
     document.getElementById('LeftButton').className='nobutton';
	 document.getElementById('LeftButton').style.background = 'url(images/arrowleftnon.png)';
	}
	//alert($val);
	} 
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


//////////////////////////////////////////////////////////////////// 