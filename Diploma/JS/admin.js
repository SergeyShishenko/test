
 function Over(element,$sub)
 {
	 if (element.id !== $sub)
	 {
		element.style.backgroundColor='#243342';
        element.style.color='#ffffff';		
		element.innerHTML=element.innerHTML.replace("_1.png","_2.png");
	 } 	 
 }
     function Out(element,$sub)
 {
	 if (element.id !== $sub)
	 {
		element.style.backgroundColor='#34495e';	
        element.style.color='#95a5a6';		
		element.innerHTML=element.innerHTML.replace("_2.png","_1.png");
	 } 	 
 }
      function borderclass($e)
 {
	 document.getElementById($e).className='sub_menu_current';
     document.getElementById($e).innerHTML=document.getElementById($e).innerHTML.replace("_1.png","_2.png");	 
 }
 var $nn=1;
 function addimg_n()// 
 {addimg($nn);}
 function addimg($n)// при загрузке во фрейм ifrm_1f
 {
	// alert($n);
	 //меняем картинку просмотра
document.getElementById('foto'+$n+'_product').src=
document.getElementById('ifrm_1f').contentDocument.getElementById('foto1').src;
//alert(document.getElementById('ifrm_1f').contentDocument.getElementById('fales_name1').innerHTML);
  // меняем значение f_1 для передачи 
document.add_foto_uploaded.f_1.value=document.getElementById('ifrm_1f').contentDocument.getElementById('fales_name1').innerHTML;
	//alert(document.add_foto_uploaded.f_1.value);
 }
 
function delfile(element)
{
	var $str=element.id;
    var $str=$str.substr(3);// №
	//alert($str);
	var src1=window.location.href;
	var n=src1.search(window.location.pathname);
	var src2=src1.slice(0,n)+"/images/not_loaded.png";
///	alert(src2);
	//alert(window.location.pathname);alert(window.location.href);
	//alert('formdelfile'+$str);
//    document.getElementById('foto'+$str+'_product').src=src2; 
    document.getElementById('foto'+$str+'_product').src="images/not_loaded.png"; 	
   document.getElementById('formdelfile'+$str).submit(); 
   document.getElementById('uv_'+$str).style.display='block';
   document.getElementById('cv_'+$str).style.display='none';
   document.getElementById('dv_'+$str).style.display='none';
   document.getElementById('ifrm_1f').contentDocument.getElementById('fales_name1').innerHTML="";
   document.getElementById('ifrm_1f').contentDocument.getElementById('foto1').src="";
 document.formdelfile.file_name.value=document.getElementById('ifrm_1f').contentDocument.getElementById('fales_name1').innerHTML; 

// parent.frames[1].location="about:blank";
 }
 
 function cancelgoods(element)
{
	var $str=element.id;
    var $str=$str.substr(9);// №
	//alert($str);
	 document.getElementById('namegoods_'+$str).style.display='none';
	//namegoods_
/* 	var src1=window.location.href;
	var n=src1.search(window.location.pathname);
	var src2=src1.slice(0,n)+"/images/not_loaded.png"; */
	//alert(src2);
	//alert(window.location.pathname);alert(window.location.href);
	//alert('formdelfile'+$str);
 /*    document.getElementById('foto'+$str+'_product').src=src2; 
	
   document.getElementById('formdelfile'+$str).submit(); 
   document.getElementById('uv_'+$str).style.display='block';
   document.getElementById('cv_'+$str).style.display='none';
   document.getElementById('dv_'+$str).style.display='none';
   document.getElementById('ifrm_1f').contentDocument.getElementById('fales_name1').innerHTML="";
   document.getElementById('ifrm_1f').contentDocument.getElementById('foto1').src="";
 document.formdelfile.file_name.value=document.getElementById('ifrm_1f').contentDocument.getElementById('fales_name1').innerHTML;  */

// parent.frames[1].location="about:blank";
 }
 
   function show(element){ //alert(element.id);
	   var $str=element.id;
	   var $str=$str.substr(9);
	   $nn=$str;
       document.getElementById('uv_'+$str).style.display='none';
	   document.getElementById('cv_'+$str).style.display='block';
	   document.getElementById('dv_'+$str).style.display='block';
       document.getElementById('setvar'+$str).value =$setvar;	   
	   }
	   
////////////////////////////////////////////////////////////////////////	   
  var t;  
  
 function toright() { 
 leftt =leftt+12; 
  if(leftt < 370) {  
  document.getElementById('container'+$setvar).scrollLeft =leftt;    
    t = setTimeout('toright()',10);
  } else {clearTimeout(t);leftt=0;}
     document.getElementById('PreviousButton').disabled = false;
     document.getElementById('PreviousButton').className='button';
	 document.getElementById('PreviousButton').src = 'images/PreviousButton.png';
	 document.getElementById('NextButton').disabled = true;
     document.getElementById('NextButton').className='nobutton';
	 document.getElementById('NextButton').src = 'images/NextButtonNon.png';
 return false;
 }   
 var rightt=382;	   
 function toleft() { 
 rightt = rightt-10; 
  if(rightt >= 0) {  
  document.getElementById('container'+$setvar).scrollLeft =rightt;    
    t = setTimeout('toleft()',10);
  } else {clearTimeout(t);rightt=382;}
     document.getElementById('NextButton').disabled = false;
     document.getElementById('NextButton').className='button';
	 document.getElementById('NextButton').src = 'images/NextButton.png';
	 document.getElementById('PreviousButton').disabled = true;
     document.getElementById('PreviousButton').className='nobutton';
	 document.getElementById('PreviousButton').src = 'images/PreviousButtonNon.png';
 return false;
 } 	   
	   
function setvar(element)
{ 
	  var $str=element.id;
	  $setvar=$str.substr(2);
	

    document.getElementById('setvar1').value =$setvar;
	document.getElementById('setvar2').value =$setvar;
	document.getElementById('setvar3').value =$setvar;
	document.getElementById('setvar4').value =$setvar;
	document.getElementById('setvar5').value =$setvar;
	document.getElementById('setvar6').value =$setvar;
	document.getElementById('setvar7').value =$setvar;
	document.getElementById('setvar8').value =$setvar;
	document.getElementById('setvar9').value =$setvar;
	document.getElementById('setvar10').value =$setvar;
	document.getElementById('setvar11').value =$setvar;
	document.getElementById('setvar12').value =$setvar;
	document.getElementById('setvar13').value =$setvar;
	document.getElementById('setvar14').value =$setvar;
	document.getElementById('setvar15').value =$setvar;
	document.getElementById('setvar16').value =$setvar;
	document.getElementById('setvar17').value =$setvar;
	document.getElementById('setvar18').value =$setvar;



	
	if ($setvar == 1)
   {
    
	      document.getElementById('container1').style.display='block';
		  document.getElementById('container2').style.display='none';
		  document.getElementById('container3').style.display='none';
		  document.getElementById('container1').scrollLeft=0;
     document.getElementById('NextButton').disabled = false;
     document.getElementById('NextButton').className='button';
	 document.getElementById('NextButton').src = 'images/NextButton.png';
	 document.getElementById('PreviousButton').disabled = true;
     document.getElementById('PreviousButton').className='nobutton';
	 document.getElementById('PreviousButton').src = 'images/PreviousButtonNon.png';
   }
    else if ($setvar == 2)
	{  
	      document.getElementById('container2').style.display='block';
		  document.getElementById('container1').style.display='none';
		  document.getElementById('container3').style.display='none';
		  document.getElementById('container2').scrollLeft=0;
     document.getElementById('NextButton').disabled = false;
     document.getElementById('NextButton').className='button';
	 document.getElementById('NextButton').src = 'images/NextButton.png';
	 document.getElementById('PreviousButton').disabled = true;
     document.getElementById('PreviousButton').className='nobutton';
	 document.getElementById('PreviousButton').src = 'images/PreviousButtonNon.png';
	}
    else if ($setvar == 3)
	{
	      document.getElementById('container3').style.display='block';
		  document.getElementById('container1').style.display='none';
		  document.getElementById('container2').style.display='none';
		  document.getElementById('container3').scrollLeft=0;
     document.getElementById('NextButton').disabled = false;
     document.getElementById('NextButton').className='button';
	 document.getElementById('NextButton').src = 'images/NextButton.png';
	 document.getElementById('PreviousButton').disabled = true;
     document.getElementById('PreviousButton').className='nobutton';
	 document.getElementById('PreviousButton').src = 'images/PreviousButtonNon.png';
	}
   
}	   

////////////////////////////////////////////////////////////////////
function Sel()
	{   
    var $val = document.getElementById('sel').value 
	
	alert($val)
	} 

	
function delvar(element)
{
	var $str=element.id;
	 var $var=$str.substr(2);
	  switch ($var) {
   case '1':
      var $in1=document.getElementById('foto1_product').src.indexOf("not_loaded");
      var $in2=document.getElementById('foto2_product').src.indexOf("not_loaded"); 
	  var $in3=document.getElementById('foto3_product').src.indexOf("not_loaded"); 
	  var $in4=document.getElementById('foto4_product').src.indexOf("not_loaded"); 
	  var $in5=document.getElementById('foto5_product').src.indexOf("not_loaded");
      var $in6=document.getElementById('foto6_product').src.indexOf("not_loaded");  	  
    
      if (($in1 == '-1')||($in2 == '-1')||($in3 == '-1')||($in4 == '-1')||($in5 == '-1')||($in6 == '-1'))
	  {
		  {alert('Remove image variations!') }
	  }
      else 	 {document.getElementById('var'+$var).style.display='none';
	  document.getElementById('inp_'+$var).value="";
	  var $s=Radio();
	  
	  setvar2($s);
	  if (Radio2()==1){setvar2(1)}
	  $s=$s-1;
	  document.getElementsByName('variation')[$s].checked=true;
	  if (Radio2()!==0)
	 { document.getElementById('addvar').style.display='block';}
	  }
      break
	  case '2':
	  var $in1=document.getElementById('foto7_product').src.indexOf("not_loaded");
      var $in2=document.getElementById('foto8_product').src.indexOf("not_loaded"); 
	  var $in3=document.getElementById('foto9_product').src.indexOf("not_loaded"); 
	  var $in4=document.getElementById('foto10_product').src.indexOf("not_loaded"); 
	  var $in5=document.getElementById('foto11_product').src.indexOf("not_loaded");
      var $in6=document.getElementById('foto12_product').src.indexOf("not_loaded");  	  
    
      if (($in1 == '-1')||($in2 == '-1')||($in3 == '-1')||($in4 == '-1')||($in5 == '-1')||($in6 == '-1'))
	  {
		  {
			alert('Remove image variations!');		  
		  }
	  }
      else 	 {document.getElementById('var'+$var).style.display='none';
	 document.getElementById('inp_'+$var).value="";
	  var $s=Radio();
	 
	  setvar2($s);
	  if (Radio2()==1){setvar2(1)}
	  $s=$s-1;
	  document.getElementsByName('variation')[$s].checked=true;
	  if (Radio2()!==0)
	 { document.getElementById('addvar').style.display='block';}
	  }
      break
	  case '3':
      var $in1=document.getElementById('foto13_product').src.indexOf("not_loaded");
      var $in2=document.getElementById('foto14_product').src.indexOf("not_loaded"); 
	  var $in3=document.getElementById('foto15_product').src.indexOf("not_loaded"); 
	  var $in4=document.getElementById('foto16_product').src.indexOf("not_loaded"); 
	  var $in5=document.getElementById('foto17_product').src.indexOf("not_loaded");
      var $in6=document.getElementById('foto18_product').src.indexOf("not_loaded");  	  
    
      if (($in1 == '-1')||($in2 == '-1')||($in3 == '-1')||($in4 == '-1')||($in5 == '-1')||($in6 == '-1'))
	  {
		  {alert('Remove image variations!') }
	  }
      else 	 {document.getElementById('var'+$var).style.display='none';
	  document.getElementById('inp_'+$var).value="";

	  var $s=Radio();
	
	  setvar2($s);
	  if (Radio2()==1){setvar2(1)}
	  $s=$s-1;
	  document.getElementsByName('variation')[$s].checked=true;
	  if (Radio2()!==0)
	 { document.getElementById('addvar').style.display='block';}
	  }
      break

	  }
}	
	
	function onclickRadio() {
  var variation = document.getElementsByName('variation');
  for (var i = 0; i < variation.length; i++) {
    if (variation[i].type === 'radio' && variation[i].checked) {
        rezultatRadio = variation[i].value;       
    }
  }
 
  return rezultatRadio
}
function Radio() {	
	var computedStyle1 = getComputedStyle(document.getElementById('var1'));
	var computedStyle2 = getComputedStyle(document.getElementById('var2'));
	var computedStyle3 = getComputedStyle(document.getElementById('var3'));
 if  (computedStyle1.display=='block')
 {rezultatRadio=1;}
 else if (computedStyle2.display=='block')
 {rezultatRadio=2;}
else if (computedStyle3.display=='block')
 {rezultatRadio=3;}
//alert(rezultatRadio);
return rezultatRadio
}	
function Radio2() {	
	var computedStyle1 = getComputedStyle(document.getElementById('var1'));
	var computedStyle2 = getComputedStyle(document.getElementById('var2'));
	var computedStyle3 = getComputedStyle(document.getElementById('var3'));
 if  (computedStyle1.display=='none')
 {rezultatRadio=1;}
 else if (computedStyle2.display=='none')
 {rezultatRadio=2;}
else if (computedStyle3.display=='none')
 {rezultatRadio=3;}
else{rezultatRadio=0;}
//alert(rezultatRadio);
return rezultatRadio
}
function GetCssStyle(e){
  if (e.currentStyle) return e.currentStyle;

    else if (window.getComputedStyle) return window.getComputedStyle(e,null);

}
	
function setvar2($setvar)
{ 

	
	if ($setvar == 1)
   {
    
	      document.getElementById('container1').style.display='block';
		  document.getElementById('container2').style.display='none';
		  document.getElementById('container3').style.display='none';
		  document.getElementById('container1').scrollLeft=0;
     document.getElementById('NextButton').disabled = false;
     document.getElementById('NextButton').className='button';
	 document.getElementById('NextButton').src = 'images/NextButton.png';
	 document.getElementById('PreviousButton').disabled = true;
     document.getElementById('PreviousButton').className='nobutton';
	 document.getElementById('PreviousButton').src = 'images/PreviousButtonNon.png';
   }
    else if ($setvar == 2)
	{  
	      document.getElementById('container2').style.display='block';
		  document.getElementById('container1').style.display='none';
		  document.getElementById('container3').style.display='none';
		  document.getElementById('container2').scrollLeft=0;
     document.getElementById('NextButton').disabled = false;
     document.getElementById('NextButton').className='button';
	 document.getElementById('NextButton').src = 'images/NextButton.png';
	 document.getElementById('PreviousButton').disabled = true;
     document.getElementById('PreviousButton').className='nobutton';
	 document.getElementById('PreviousButton').src = 'images/PreviousButtonNon.png';
	}
    else if ($setvar == 3)
	{
	      document.getElementById('container3').style.display='block';
		  document.getElementById('container1').style.display='none';
		  document.getElementById('container2').style.display='none';
		  document.getElementById('container3').scrollLeft=0;
     document.getElementById('NextButton').disabled = false;
     document.getElementById('NextButton').className='button';
	 document.getElementById('NextButton').src = 'images/NextButton.png';
	 document.getElementById('PreviousButton').disabled = true;
     document.getElementById('PreviousButton').className='nobutton';
	 document.getElementById('PreviousButton').src = 'images/PreviousButtonNon.png';
	}
   
}		
	
	
function	addvar1()
{    //alert(Radio2());
	document.getElementById('var'+Radio2()).style.display='block';
	//alert(Radio2());
	if (Radio2()==2)
	{ setvar2(1);document.getElementsByName('variation')[0].checked=true;}
	if (Radio2()==0)
	{ document.getElementById('addvar').style.display='none';}
}
/////	
	
function li_click(element)
	{
	var $str=element.id;
	var $var=$str.substr(3);
	//alert($var);
	var i=document.getElementById(element.id);
	//alert(document.getElementById(element.id).innerHTML);
	var a=document.getElementById('a1_'+$var).innerHTML;	
    var o1=document.getElementById('a1_'+$var);
    var sty1=o1.currentStyle || getComputedStyle (o1, '');
    var ac=sty1.color;
    //alert (sty.color);
    var sel=document.getElementById(element.id).innerHTML;
    var o2=document.getElementById(element.id);
    var sty2=o2.currentStyle || getComputedStyle (o2, '');
    var sty2c=sty2.color;
	var idorder=document.getElementById('st_'+$var).innerHTML;
	var currstatus=i.innerHTML;
	//alert (sty.color);
	document.getElementById('a1_'+$var).style.color=sty2c;
	document.getElementById('l0_'+$var).style.color=sty2c;
	//alert (sty1.color);
	i.style.color=ac;
	//alert($a);
	//alert($sel);
	document.getElementById('a1_'+$var).innerHTML=i.innerHTML;
	document.getElementById('satusform').value=i.innerHTML;
	document.getElementById('id_orderform').value=document.getElementById('st_'+$var).innerHTML;
	document.getElementById('l0_'+$var).innerHTML=i.innerHTML;
	document.getElementById(element.id).innerHTML=a;
	document.getElementById('ashow_'+$var).href='admin.php?sub=order&into=1&id_order='+idorder+'&status='+currstatus;
	//element.style.borderStyle='solid'; 
    document.getElementById('a1_'+$var).style.borderColor=sty2c; 
    //element.style.borderwidth='2px'; 
	
	document.getElementById('ststus_ch').submit(); 
	
	}	
	
	function cancel_click()
	{
	document.getElementById('chcolor').style.color='rgb(108,108,108)';	
    document.getElementById('chstatus').innerHTML=document.getElementById('statusform').value; 		
	//document.getElementById('chstatus').innerHTML="отмена";	
	
	
	
	}	
	
	
	
	
	
	
	
	
	
	
	
	
	