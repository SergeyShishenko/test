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
if (document.getElementById('ifrm1').contentDocument.getElementById('pages').innerHTML == "+")
{
document.getElementById('hidl_num+').value++;
document.getElementById('hidl_num-').value++;
}
else if(document.getElementById('ifrm1').contentDocument.getElementById('pages').innerHTML == "-")
{
document.getElementById('hidl_num+').value--;
document.getElementById('hidl_num-').value--;	
}

for (var i=0; i<8 ;i++)
{
$A++;
//alert($A);	
//alert(document.getElementById('ifrm1').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML);
document.getElementById('badge_'+$A+'_txt').innerHTML=
document.getElementById('ifrm1').contentDocument.getElementById('badge_'+$A+'_txt').innerHTML;
//
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
//alert(document.getElementById('ifrm1').contentDocument.getElementById('_'+$A+'_foto').innerHTML);	
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
//alert(document.getElementById('ifrm1').contentDocument.getElementById('a_'+$A+'_path').href);
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
if (document.getElementById('ifrm2').contentDocument.getElementById('pages').innerHTML == "+")
{
document.getElementById('2hidl_num+').value++;
document.getElementById('2hidl_num-').value++;
}
else if(document.getElementById('ifrm2').contentDocument.getElementById('pages').innerHTML == "-")
{
document.getElementById('2hidl_num+').value--;
document.getElementById('2hidl_num-').value--;	
}
// заполнение пустых
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






    
//function up() {
    //alert();
 // window.scrollBy(0,-20); // чем меньше значение (цифра -10), тем выше скорость перемещения
 // if (window.pageYOffset > 0) {requestAnimationFrame(up);} // если значение прокрутки больше нуля, то функция повториться
//}
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
