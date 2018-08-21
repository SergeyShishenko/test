function next()
{	
 //	var div = document.getElementById('visible');
//div.getElementsByTagName("span")[0].innerText=document.getElementById("ifrm1").contentDocument.getElementById("shows").innerText;
document.getElementById("visible").innerHTML="РџРћРљРђР—РђРќРћ "+
document.getElementById("ifrm1").contentDocument.getElementById("shows").innerHTML+" РР— "+
  document.getElementById("ifrm1").contentDocument.getElementById("bd_sizeof").innerHTML + " РўРћР’РђР РћР’";
 var $A= -1;
 
 var $id="page_"+document.getElementById('ifrm1').contentDocument.getElementById('page').innerHTML;
 document.getElementById($id).className='current_page';
 
 var $id="page_"+document.getElementById('it_was').value;
 document.getElementById($id).className="page_n";
 
  var $id="page2_"+document.getElementById('ifrm1').contentDocument.getElementById('page').innerHTML;
 document.getElementById($id).className='current_page';
 
  
 var $id="page2_"+document.getElementById('it_was').value;
 document.getElementById($id).className="page_n";
 //alert(document.getElementById('ifrm1').contentDocument.getElementById('shows').innerHTML);	
 document.getElementById('it_was').value=
		document.getElementById('ifrm1').contentDocument.getElementById('page').innerHTML; 
		
		
if (document.getElementById("ifrm1").contentDocument.getElementById("count").innerHTML <= 9)
{
	document.getElementById('line3-6_V').style.display='none';	
    document.getElementById('line2-6_V').style.display='none';
	document.getElementById('line1-6_V').style.display='none';		
	document.getElementById('line1-5_V').style.display='none';	
	document.getElementById('line1-4_V').style.display='none';	
	document.getElementById('line7_H').style.display='none';
    document.getElementById('line6_H').style.display='none';
    document.getElementById('line5_H').style.display='none';	
	document.getElementById('promo_baner_category').style.display='none';
    document.getElementById('header_promo').style.display='none';
    document.getElementById('specification_promo').style.display='none';
    document.getElementById('new_products').style.height=1129+'px';	
	document.getElementById('button_page2').style.top=1074+'px';
	document.getElementById('wrapper').style.height=1551+'px';
	document.getElementById('Bg').style.top=1457+'px';
}
else if (document.getElementById("ifrm1").contentDocument.getElementById("count").innerHTML <= 13)
{
	document.getElementById('line3-6_V').style.display='none';	
    document.getElementById('line2-6_V').style.display='none';
	document.getElementById('line1-6_V').style.display='none';		
	document.getElementById('line7_H').style.display='none';
    document.getElementById('new_products').style.height=1777+'px';	
	document.getElementById('button_page2').style.top=1722+'px';
	document.getElementById('wrapper').style.height=2199+'px';
	document.getElementById('Bg').style.top=2105+'px';
}
else
{
	document.getElementById('line3-6_V').style.display='block';	
    document.getElementById('line2-6_V').style.display='block';
	document.getElementById('line1-6_V').style.display='block';		
	document.getElementById('line1-5_V').style.display='block';	
	document.getElementById('line1-4_V').style.display='block';	
	document.getElementById('line7_H').style.display='block';
    document.getElementById('line6_H').style.display='block';
    document.getElementById('line5_H').style.display='block';	
	document.getElementById('promo_baner_category').style.display='block';
    document.getElementById('header_promo').style.display='block';
    document.getElementById('specification_promo').style.display='block';
    document.getElementById('new_products').style.height=2101+'px';	
	document.getElementById('button_page2').style.top=2046+'px';
	document.getElementById('wrapper').style.height=2523+'px';
	document.getElementById('Bg').style.top=2429+'px';	
}	

for (var i=0; i<17 ;i++)
	{
	$A++;
	if (document.getElementById('ifrm1').contentDocument.getElementById('_'+$A+'_foto').innerHTML=="")
	    {
			
		document.getElementById('badge_'+$A+'_txt').style.display='none';	
		document.getElementById('_'+$A+'_foto').style.display='none';
        document.getElementById('new_'+$A+'_foto').style.display='none';		
		document.getElementById('new_'+$A+'_title').style.display='none';	
		document.getElementById('new_'+$A+'_old').style.display='none';	
		document.getElementById('new_'+$A+'_val').style.display='none';	
		document.getElementById('_'+$A+'_img').style.display='none';	
		}
	else{
		document.getElementById('badge_'+$A+'_txt').style.display='block';	
		document.getElementById('_'+$A+'_foto').style.display='block';
        document.getElementById('new_'+$A+'_foto').style.display='block';		
		document.getElementById('new_'+$A+'_title').style.display='block';	
		document.getElementById('new_'+$A+'_old').style.display='block';	
		document.getElementById('new_'+$A+'_val').style.display='block';	
		document.getElementById('_'+$A+'_img').style.display='block';	
		
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
	
    //self.scrollTo(0, 0);
	
	up();
}
function curr_page()
{
	
var $curr_page =document.getElementById('it_was').value;
return $curr_page;
}

/* function up() {
	//alert();
  window.scrollBy(0,-20); // чем меньше значение (цифра -10), тем выше скорость перемещения
  if (window.pageYOffset > 0) {requestAnimationFrame(up);} // если значение прокрутки больше нуля, то функция повториться
} */
/* document.getElementById('up').addEventListener('click', function(e) {
   e.preventDefault();  // запрет перехода по ссылке, вместо него скрипт
   up();
}, false); */
var t;
function up() {
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
  if(top > 0) {
    window.scrollBy(0,-100);
    t = setTimeout('up()',20);
  } else clearTimeout(t);
  return false;
}