window.onresize = function(){
  getPositionSearch();
  nvfn();
  
};
var mainpage=51;




function browser1()
{
var a;
if (navigator.userAgent.search(/Safari/) > 0) {a = 'Safari';}
if (navigator.userAgent.search(/Firefox/) > 0) {a = 'MozillaFirefox';}
if (navigator.userAgent.search(/MSIE/) > 0 || navigator.userAgent.search(/NET CLR /) > 0) {a = 'Internet Explorer';}
if (navigator.userAgent.search(/Chrome/) > 0) {a = 'Google Chrome';}
if (navigator.userAgent.search(/YaBrowser/) > 0) {a = 'Яндекс браузер';}
if (navigator.userAgent.search(/OPR/) > 0) {a = 'Opera';}
if (navigator.userAgent.search(/Konqueror/) > 0) {a = 'Konqueror';}
if (navigator.userAgent.search(/Iceweasel/) > 0) {a = 'Debian Iceweasel';}
if (navigator.userAgent.search(/SeaMonkey/) > 0) {a = 'SeaMonkey';}
if (navigator.userAgent.search(/Edge/) > 0) {a = 'Microsoft Edge';}
// alert(a); // В переменной a будет название браузера
console.log(a);
}



function browser2()
{
var BrowserDetect = { 
init: function () { 
this.browser = this.searchString(this.dataBrowser) || "An unknown browser"; 
this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "an unknown version"; 
this.OS = this.searchString(this.dataOS) || "an unknown OS"; 
}, 
searchString: function (data) { 
for (var i=0;i<data.length;i++) { 
var dataString = data[i].string; 
var dataProp = data[i].prop; 
this.versionSearchString = data[i].versionSearch || data[i].identity; 
if (dataString) { 
if (dataString.indexOf(data[i].subString) != -1) 
return data[i].identity; 
} 
else if (dataProp) 
return data[i].identity; 
} 
}, 
searchVersion: function (dataString) { 
var index = dataString.indexOf(this.versionSearchString); 
if (index == -1) return; 
return parseFloat(dataString.substring(index+this.versionSearchString.length+1)); 
}, 
dataBrowser: [ 
{ 
string: navigator.userAgent, 
subString: "YaBrowser", 
identity: "YaBrowser", 
//   identity: "OPR", 
versionSearch: "YaBrowser" 
}, 
{ 
string: navigator.userAgent, 
subString: "Chrome", 
identity: "Chrome" 
}, 
{ string: navigator.userAgent, 
subString: "OmniWeb", 
versionSearch: "OmniWeb/", 
identity: "OmniWeb" 
}, 
{ 
string: navigator.vendor, 
subString: "Apple", 
identity: "Safari", 
versionSearch: "Version" 
}, 
{ 
string: navigator.userAgent, 
//   identity: "Opera", 
identity: "OPR", 
versionSearch: "Version" 
}, 

{ 
string: navigator.vendor, 
subString: "iCab", 
identity: "iCab" 
}, 
{ 
string: navigator.vendor, 
subString: "KDE", 
identity: "Konqueror" 
}, 
{ 
string: navigator.userAgent, 
subString: "Firefox", 
identity: "Firefox" 
}, 
{ 
string: navigator.vendor, 
subString: "Camino", 
identity: "Camino" 
}, 
{  
/* For Newer Netscapes (6+) */ 
string: navigator.userAgent, 
subString: "Netscape", 
identity: "Netscape" 
}, 
{ 
string: navigator.userAgent, 
subString: "MSIE", 
identity: "Internet Explorer", 
versionSearch: "MSIE" 
}, 
{ 
string: navigator.userAgent, 
subString: "Gecko", 
identity: "Mozilla", 
versionSearch: "rv" 
}, 
{  
/* For Older Netscapes (4-) */ 
string: navigator.userAgent, 
subString: "Mozilla", 
identity: "Netscape", 
versionSearch: "Mozilla" 
} 
], 

dataOS : [ 
{ 
string: navigator.platform, 
subString: "Win", 
identity: "Windows" 
}, 
{ 
string: navigator.platform, 
subString: "Mac", 
identity: "Mac" 
}, 
{ 
string: navigator.userAgent, 
subString: "iPhone", 
identity: "iPhone/iPod" 
}, 
{ 
string: navigator.platform, 
subString: "Linux", 
identity: "Linux" 
} 
] 

}; 
BrowserDetect.init(); 

console.log(BrowserDetect.browser+"/"+BrowserDetect.version); 
// console.log(BrowserDetect.version); 
// console.log(BrowserDetect.OS);
// console.log('opera -> '+window.opera);
}

browser1();
browser2();
BrowserDetect={};
// var uAgent = navigator.userAgent || '';

// var browser = {
// 	version : (uAgent.match( /.+(?:me|ox|on|rv|it|era|ie)[\/: ]([\d.]+)/ ) || [0,'0'])[1],
// 	opera : /OPR/i.test(uAgent),
// 	msie : (/msie/i.test(uAgent) && !/opera/i.test(uAgent)),
// 	msie6 : (/msie 6/i.test(uAgent) && !/opera/i.test(uAgent)),
// 	msie7 : (/msie 7/i.test(uAgent) && !/opera/i.test(uAgent)),
// 	msie8 : (/msie 8/i.test(uAgent) && !/opera/i.test(uAgent)),
// 	msie9 : (/msie 9/i.test(uAgent) && !/opera/i.test(uAgent)),
// 	msie10 : (/msie 10/i.test(uAgent) && !/opera/i.test(uAgent)),
// 	mozilla : /firefox/i.test(uAgent),
// 	chrome : /chrome/i.test(uAgent),
// 	safari : (!(/chrome/i.test(uAgent)) && /webkit|safari|khtml/i.test(uAgent)),
// 	iphone : /iphone/i.test(uAgent),
// 	ipod : /ipod/i.test(uAgent),
// 	iphone4 : /iphone.*OS 4/i.test(uAgent),
// 	ipod4 : /ipod.*OS 4/i.test(uAgent),
// 	ipad : /ipad/i.test(uAgent),
// 	ios : /ipad|ipod|iphone/i.test(uAgent),
// 	android : /android/i.test(uAgent),
// 	bada : /bada/i.test(uAgent),
// 	mobile : /iphone|ipod|ipad|opera mini|opera mobi|iemobile/i.test(uAgent),
// 	msie_mobile : /iemobile/i.test(uAgent),
// 	safari_mobile : /iphone|ipod|ipad/i.test(uAgent),
// 	opera_mobile : /opera mini|opera mobi/i.test(uAgent),
// 	opera_mini : /opera mini/i.test(uAgent),
// 	mac : /mac/i.test(uAgent),
// 	webkit : /webkit/i.test(uAgent),
// 	android_version: parseFloat(uAgent.slice(uAgent.indexOf("Android")+8)) || 0
// };
// console.log("browser " + browser.opera);
// console.log("Вы используете браузер " + navigator.appName);
var xa = navigator.userAgent;
console.log("Вы используете браузер " + xa);
// console.log("Вы используете браузер2 " + navigator.getUserMedia);
// console.log("Вы используете браузер3 " + navigator.webkitGetUserMedia);
// console.log("Вы используете браузер4 " + navigator.mozGetUserMedia);
// console.log("Вы используете браузер5 " + navigator.msGetUserMedia);

           
// console.log("Версия " + navigator.appVersion);
function getWH()
{  
 var w = window.innerWidth || window.outerWidth || document.documentElement.clientWidth || document.body.clientWidth;
 
 var h = window.innerHeight  || outerHeight  || document.documentElement.clientHeight  || document.body.clientHeight;

 console.log ("w"+window.outerWidth );// текущая ширина экрана 
console.log ("h"+window.outerHeight );// текущая ширина экрана 

// var x = document.getElementById("body");
// x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";
// console.log("Ширина внутреннего окна браузера: " + w + ", height: " + h + ".");
}


function getPositionSearch()
{    
 // console.log('Ширина экрана '+ document.documentElement.clientWidth);
 // console.log('Высота экрана '+ document.documentElement.clientHeight);
 getWH();

 var w = getClientWidth();// текущая ширина экрана 
 if (w>991)
 {$("#navsub.bs-sidebar").removeClass('click-lef-tmenu');}

 var zbz = $('.zbz-input-clearable').css('width').replace("px", ""); //ширина input     
 switch (true) { // Постоянное значение true вместо w
     // case w >= 0 && w <= 3:
     // case w >= 0 && w <= 992:
     //     mainpage= 15 - zbz;
     //     break;
     case w >= 0 && w <= 1920:
         // mainpage= 15 - zbz;
         mainpage=-10;
         break;
         case w > 1920:
         // mainpage= 15 - zbz;
         mainpage= -10 ;
         break;
     default:
         mainpage=51;
 }
     

 // console.log('mainpage '+ mainpage);        
 // var c= $('div.container').css('width');
 var pos = $( '#main-page' ).position().left;
 var c= $('#main-page').css('width');
 // console.log('position '+pos);
 // console.log('width '+c);
 // console.log('текущая ширина экрана '+ w);
 // console.log('zbz '+ zbz);
     c = c.replace("px", "")-mainpage; // -21 удалить латинские символы 
 //   с= pos + с;
 // console.log(c);       
 // c=(w-c)/2+5;
 //    console.log(c);
     $('.navbar-form.navbar-right:last-child').css({'left': pos + c});
     $('.zbz-input-clearable').css({'visibility': 'visible'});
     $('span.zbz').css('visibility','visible');
     if($('input.who').val() !== ""){$('span.zbz').css('visibility','hidden');  }
 
 //  $('.navbar-form.navbar-right:last-child').offset({top:30, left:pos});
}
// текущая ширина экрана   
function getClientWidth(){
 return document.compatMode=='CSS1Compat' &&
!window.opera?document.documentElement.clientWidth:document.body.clientWidth;
}
//текущая высотаэкрана  
function getClientHeight(){
 return document.compatMode=='CSS1Compat' &&
!window.opera?document.documentElement.clientHeight:document.body.clientHeight;
}


$( document ).ready(function() {
  
 getPositionSearch();
  getClientWidth();
  
  $( ".user-toggle" ).click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
    $( ".profile" ).toggle(); //  скрываем, или отображаем все элементы <div>
  });
  $('[data-toggle="tooltip"]').tooltip(); 
  console.log($('input.who').val(''));
  $('input.who').val('');
});
//  console.log ("w"+getClientWidth());// текущая ширина экрана 
//  console.log ("w"+window.outerWidth );// текущая ширина экрана 
//  console.log ("h"+window.outerHeight );// текущая ширина экрана 
//  console.log ("h"+getClientHeight());// текущая ширина экрана 

getPositionSearch();nvfn();

//  var delta =0;
bottomUl = 0;
// var nthchild =1;
$(function () {
 // $('#navsub  li.menu2 ul').hide();
 // $('#navsub  li.menu ul').hide();
 $('#navsub  li.menu').not('.disabled').hover(function () {
     var w = getClientWidth();// текущая ширина экрана 
     
     if (w>991){
         // delta2 = 0; // счетчик прокрутки колеса sub_menu2
        var colLeftMenu = $(this).parent().children().length; 
        var col = $(this).index()+1; // номер по порядку выбранного элемента списка!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        var UlSubMenu = $(this ).children('ul').children();
        var child1 =UlSubMenu.length;
         bottomUl = (colLeftMenu-col)*40;
        if (child1>col){bottomUl=bottomUl-(child1-col)*40;}       
     //    console.log("количество левое меню - "+colLeftMenu);
     //    console.log("номер по порядку выбранного элемента списка - "+col);      
     //    console.log("количество дочерних элементов - "+child1);   
     //    console.log("bottomUl : "+bottomUl);   
        $(this).find('ul.sub_menu').show();
        
     //    var d = getMouseWeel();
     //    console.log(d);
     // console.log(dy);

        UlSubMenu.parent().css("bottom", bottomUl+"px"); 
        $(this).find('ul.sub_menu > li:nth-child(1)').addClass('triangle');           
        var triangle = (child1-1)*40+11;
        if (child1>col){triangle = (col-1)*40+11;}
        $('head').append('<style id="triangle" data-top="'+triangle+'">.triangle::before{top:'+triangle+'px !important;}.triangle::after{top:'+triangle+'px !important;}a.list-group-item.active::after{border:none !important;border-right:none !important}</style>');              
     }
     },
     
     function () {
         // console.log("------------");
         $(this).find('ul.sub_menu').hide();   
         $(this).find('ul.sub_menu > li:nth-child(1)').removeClass('triangle');            
         $('#triangle').remove();      
     }
 );//hover

 $('#navsub  li.menu2').not('.disabled').hover(
     function () {
        var colLeftMenu = $(this).parent().children().length; 
        var col = $(this).index()+1; // номер по порядку выбранного элемента списка!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        var UlSubMenu = $(this ).children('ul').children();
        var child1 =UlSubMenu.length;
        var bottomUl2 = (colLeftMenu-col)*40+11;
        if (child1==col){bottomUl2=bottomUl2-(child1-col)*40+20;}
        if (child1<col){bottomUl2=30+(colLeftMenu-col)*40;}   
        if (child1>col){bottomUl2=bottomUl2-(child1-col)*40+20;}       
     //    console.log("количество левое меню2 - "+colLeftMenu);
     //    console.log("номер по порядку выбранного элемента списка2 - "+col);      
     //    console.log("количество дочерних элементов2 - "+child1);  
         
         $(this).find('ul.sub_menu2').show();

     //     var d = getMouseWeel();
     //    console.log(d);
     //   console.log(dy);

         UlSubMenu.parent().css("bottom", bottomUl2+"px"); 
        $(this).find('ul.sub_menu2 > li:nth-child(1)').addClass('triangle2');           
        var triangle2 = (child1-1)*40+11;
       
        if (child1>col){triangle2 = (col-1)*40+11;}
        $('head').append('<style id="triangle2" data-top="'+triangle2+'">.triangle2::before{top:'+triangle2+'px !important;}.triangle2::after{top:'+triangle2+'px !important;}</style>');  
        
     },
     function () {
         // console.log($(this));
         delta2 = 0; 
         $(this).find('ul.sub_menu2').hide();
         $(this).find('ul.sub_menu2 > li:nth-child(1)').removeClass('triangle2');            
         $('#triangle2').remove();  
     }
 );
});

// прокрутка колеса мыши sub
var delta = 0;
var sub_menu2hover = false;
var bottomMIN1 = 0;

$('.sub_menu').bind('mousewheel DOMMouseScroll MozMousePixelScroll wheel onmousewheel', function(e){

// var dy = e.originalEvent.deltaY || e.originalEvent.wheelDelta;
 if (!sub_menu2hover){

     var dy = e.originalEvent.deltaY || e.originalEvent.wheelDelta;    
     // var UlSubMenu = $(this ).children();
     // var child1 =UlSubMenu.length;
      var bottomUl1 = parseInt($(this ).css('bottom'));
      var triangle0 =$('#triangle').data('top');
     //  console.log('triangle0 ' + triangle0);
     // var bottomUl1 = bottomUl;

     // var triangle =$('#triangle222').data('top');
 // 
 //  console.log('triangle222 ' + $('#triangle2').html());
 // console.log('child122 ' + child1);
 // console.log('current ' + $(this).index()+1);
 // $(this).index()+1;
 // console.log('bottomALL ' + $(this ).last().css('bottom'));
    
     if(dy > 0) { 

        
         if (bottomUl1 < 0 ) { 
             delta =  1  + delta ;
             // console.log('sub_menu2 up2');
             // console.log(delta2); 
             // console.log('bottomMIN1 '+bottomMIN1);
             // console.log('bottomUl start '+bottomUl);
             bottomUl1= bottomUl1 + 40;
             
             // console.log('bottomUl ' + bottomUl); 
             // console.log('bottomUP ' + $(this ).last().css('bottom'));
             // console.log('bottomUl ' + bottomUl1); 
             $(this ).css("bottom", bottomUl1+"px"); 
              triangle0 = triangle0 + 40;
              $('#triangle').remove();
              $('head').append('<style id="triangle" data-top="'+triangle0+'">.triangle::before{top:'+triangle0+'px !important;}.triangle::after{top:'+triangle0+'px !important;}a.list-group-item.active::after{border:none !important;border-right:none !important}</style>');              
             //  console.log('<style id="triangle">.triangle::before{top:'+triangle0+'px !important;}.triangle::after{top:'+triangle0+'px !important;}a.list-group-item.active::after{border:none !important;border-right:none !important}</style>');              

             // console.log('triangle '+triangle);                    
             // console.log("<style id=triangle2 data-top="+triangle+">.triangle2::before{top:"+triangle+"px !important;}.triangle2::after{top:"+triangle+"px !important;}</style>");      
         }
         e.preventDefault();      
      }
else{ 
     if (delta > 0 ) { 
         // console.log('bottomUl start '+bottomUl);
         //     console.log('bottomUl1 ' + bottomUl1); 
         if (bottomUl1 > bottomUl ) { 
             delta =  delta - 1;
             // console.log('sub_menu2 down2');
             // console.log(delta2);
             
             bottomUl1 = bottomUl1 - 40;
             // triangle = triangle - 40;
             // console.log('bottomDOWN ' + $(this ).last().css('bottom'));
             // console.log('bottomUl1 (-40) ' + bottomUl1); 
             $(this ).css("bottom", bottomUl1+"px"); 
             triangle0 = triangle0 - 40;
             $('#triangle').remove();
             $('head').append('<style id="triangle" data-top="'+triangle0+'">.triangle::before{top:'+triangle0+'px !important;}.triangle::after{top:'+triangle0+'px !important;}a.list-group-item.active::after{border:none !important;border-right:none !important}</style>');              
             // console.log('<style id="triangle">.triangle::before{top:'+triangle0+'px !important;}.triangle::after{top:'+triangle0+'px !important;}a.list-group-item.active::after{border:none !important;border-right:none !important}</style>');              

             //  $('#triangle').remove();
             //  $('head').append('<style id="triangle" data-top="'+triangle+'">.triangle2::before{top:'+triangle+'px !important;}.triangle2::after{top:'+triangle+'px !important;}</style>'); 
             // console.log('triangle '+triangle);             
             // console.log("<style id=triangle2 data-top="+triangle+">.triangle2::before{top:"+triangle+"px !important;}.triangle2::after{top:"+triangle+"px !important;}</style>"); 
         }
      }//delta

 e.preventDefault();  
 
     
}
 }

});

// прокрутка колеса мыши sub2 
 var delta2 = 0; 
  var bottomMIN = 0; 
 // var bottomMAX = -929;  
 $('.sub_menu2').bind('mousewheel DOMMouseScroll MozMousePixelScroll wheel onmousewheel', function(e){   
 var dy = e.originalEvent.deltaY || e.originalEvent.wheelDelta;    
 // var UlSubMenu = $(this ).children();
 // var child1 =UlSubMenu.length;
 var bottomUl = parseInt($(this ).css('bottom'));
  var triangle2 =$('#triangle2').data('top');
 // console.log('triangle2 ' + triangle2);
 //  console.log('triangle2 ' + $('#triangle2').html());
 // console.log('child1 ' + child1);
 // console.log('bottom ' + $(this ).css('bottom'));
 if(dy > 0) { 

        
             if (bottomUl < bottomMIN ) { 
                 delta2 =  1  + delta2 ;
                 // console.log('sub_menu2 up2');
                 // console.log(delta2); 
                 // console.log(bottomMIN);
                 bottomUl= bottomUl + 40;
                 triangle2 = triangle2 + 40;
                 // console.log('bottomUl ' + bottomUl); 
                 $(this ).css("bottom", bottomUl+"px"); 
                 $('#triangle2').remove();
                 $('head').append('<style id="triangle2" data-top="'+triangle2+'">.triangle2::before{top:'+triangle2+'px !important;}.triangle2::after{top:'+triangle2+'px !important;}</style>');       
             }
             e.preventDefault();      
          }
 else{ 
     
     
      
         if (delta2 > 0 ) { 
             delta2 =  delta2 - 1 ;
             // console.log('sub_menu2 down2');
             // console.log(delta2);
             bottomUl = bottomUl - 40;
             triangle2 = triangle2 - 40;
             // console.log('bottomUl ' + bottomUl); 
             $(this ).css("bottom", bottomUl+"px"); 
             $('#triangle2').remove();
             $('head').append('<style id="triangle2" data-top="'+triangle2+'">.triangle2::before{top:'+triangle2+'px !important;}.triangle2::after{top:'+triangle2+'px !important;}</style>');   
          }
     e.preventDefault();  
     
         
 }

 });


 $( ".sub_menu2" ).hover(
     function() {
     //   $( this ).addClass( "hover" );
     // console.log('addClass( "hover" )');
     sub_menu2hover = true;
     }, function() {
     //   $( this ).removeClass( "hover" );
     // console.log('removeClass( "hover" )');
     sub_menu2hover = false;
     }
   );



//=====================================================







// index.html
var menu_selector = ".top-menu"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню. 
var nv;
// function nvfn(){ nv =parseInt($("div.navbar").css('height').replace("px", "")) + 20;}
function nvfn(){ nv =parseInt($("div.navbar").css('height').replace("px", "")) + 0;}
function onScroll(){
    nvfn();
    // console.log("nv");
    // console.log(nv);
    // $(".search_result").hide();
	var scroll_top = $(document).scrollTop();
	$(menu_selector + " a").not("ul.dropdown-menu li a").each(function(){
        var hash = $(this).attr("href");
        // alert(hash);
        var target = $(hash);
        // console.log(typeof target.position());
        if (typeof target.position() !== 'undefined') {
            // Теперь мы знаем, что foo определено.                

                if (target.position().top-nv <= scroll_top && target.position().top  + target.outerHeight() > scroll_top) {
                    $(menu_selector + " li.active").removeClass("active");
                    // alert(this);
                    $(this).parent().addClass("active");
                } else {
                    $(this).parent().removeClass("active");
                }
        }
	});
}

    $(document).on("scroll", onScroll);
    
	// $("a[href^=#]").not("a[href=#carousel],a.thumbb,a[data-toggle='tab']").click(function(e){
    //     // alert();
    //     e.preventDefault();
        
    //     $(this).not( "#navsub a").addClass("active");
	// 	// $(document).off("scroll");
	// 	// $(menu_selector + " a.active").removeClass("active");
	// 	nvfn();
	// 	var hash = $(this).attr("href");
    //     var target = $(hash);
    //     // console.log(target.offset().top);
	// 	$("html, body").animate({
	// 	    scrollTop: target.offset().top - nv
	// 	}, 500, function(){
	// 		window.location.hash = hash;
	// 		$(document).on("scroll", onScroll);
    //     });
    //     $("html, body").animate({
	// 	    scrollTop: target.offset().top - nv
	// 	}, 500, function(){
	// 		window.location.hash = hash;
	// 		$(document).on("scroll", onScroll);
	// 	});
	// });

///Живой поиск
    // var db_search;
    // $(function() {
    // if (!$("#iframe_1").length) { db_search = $("table p");}
    // else {
    //         $("iframe#iframe_1").load(function(){db_search = $(this).contents().find("table p");});
    //         }
    // $(".who").bind("change keyup input click", function() {
    //     $(".search_result").empty();    
    //     if (this.value.length >= 2) {       
    //     var search_str = new RegExp(this.value, "i");      
    //     db_search.each(function() {
    //     var str = $(this).text(); // получаем текст с каждого элемента
    //         if (str.match(search_str) !== null) {
    //         // если совпадает строка с подстрокой    
    //         var result = $(this).text().replace(/^\s*(.*)\s*$/, "$1");
    //         //   result = result.replace(/-\d+/g, ""); //удалить
    //         result = result.replace(/[b]/g, "").replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
    //         //   result = result.replace(/[a]/g, "");
    //         //   result = result.replace(/[c-z]/g, ""); //удалить латинские символы
    //         //   result = result.replace(/[-]+/g, ""); //удалить
    //         result = result.replace(/~(.*)/ig,""); //удалить

    //         var aimg="./dist/images/no-foto.png";
    //         var aref = $(this).data("href");
    //         if (typeof $(this).data("img") !== "undefined") {aimg = $(this).data("img");    
    //         }
    //         else
    //         { aimg = "./dist/images/no-foto.png";        
    //         }   
    //         $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  >' + result + "</a></li>"  );         
    //         }
    //     });
    //     }
    //     else if(this.value.length ==1){$('span.zbz').css('visibility','hidden');}    
    //     else {
    //     $(".search_result").fadeOut();
    //     $('span.zbz').css('visibility','visible');
    //     }
    //     if ($(".search_result li").length < 1) {    
    //     $(".search_result").fadeOut();
    //     } else {
    //     $(".search_result").show();
    //     }
    // });
    // $(".search_result").hover(function() {
    //     $(".who").blur(); //Убираем фокус с input
    // });
    // //При выборе результата поиска, прячем список и заносим выбранный результат в input
    // $(".search_result").on("click", "li", function() {
            
        
    //         window.location = $(this).find("a").attr("href");
        
    //         $(".search_result").fadeOut();
    //     });
    // });
///Живой поиск 


// //Живой поиск
// var db_search;
// $(function() {
//   if (!$("#iframe_1").length) { db_search = $("table p");}
//    else {
//          $("iframe#iframe_1").load(function(){db_search = $(this).contents().find("table p");});
//         }
//   $(".who").bind("change keyup input click", function() {
//     $(".search_result").empty();    
//     if (this.value.length >= 2) {       
//       var search_str = new RegExp(this.value, "i");      
//       db_search.each(function() {
//       var str = $(this).text(); // получаем текст с каждого элемента
//         if (str.match(search_str) !== null) {
//           // если совпадает строка с подстрокой    
//           var result = $(this).text().replace(/^\s*(.*)\s*$/, "$1");
//         //   result = result.replace(/-\d+/g, ""); //удалить
//           result = result.replace(/[b]/g, "").replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
//         //   result = result.replace(/[a]/g, "");
//         //   result = result.replace(/[c-z]/g, ""); //удалить латинские символы
//         //   result = result.replace(/[-]+/g, ""); //удалить
//           result = result.replace(/~(.*)/ig,""); //удалить

//           var aimg="./dist/images/no-foto.png";
//           var aref = $(this).data("href");
//            if (typeof $(this).data("img") !== "undefined") {aimg = $(this).data("img");    
//            }
//            else
//            { aimg = "./dist/images/no-foto.png";        
//            }   
//            $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  >' + result + "</a></li>"  );         
//         }
//       });
//     }
//      else if(this.value.length ==1){$('span.zbz').css('visibility','hidden');}    
//     else {
//       $(".search_result").fadeOut();
//       $('span.zbz').css('visibility','visible');
//     }
//     if ($(".search_result li").length < 1) {    
//       $(".search_result").fadeOut();
//     } else {
//       $(".search_result").show();
//     }
//   });
//   $(".search_result").hover(function() {
//     $(".who").blur(); //Убираем фокус с input
//   });
//   //При выборе результата поиска, прячем список и заносим выбранный результат в input
//   $(".search_result").on("click", "li", function() {
        
    
//         window.location = $(this).find("a").attr("href");
    
//         $(".search_result").fadeOut();
//      });
// });





// кнопки при наведении на изображение
// $(function () {   
//     $('.cont').hover(
//         function () {
//             $(this).find(".overlay .btn").remove();
//              // получить кнопку, которая его открыло
//             var button = $(this).find("img"); 
//             // извлечь информацию из атрибута data-content 
//             var im = button.attr('src');
//             //  im = button.attr('src');
                   
                
//             var dwg = button.data('dwg');
//             var xls = button.data('xls');
//             var pdf = button.data('pdf');
//             var alt = button.attr('alt');
//             //  console.log(pdf);
//             // var pos = xls.lastIndexOf("/") + 1;
//             // console.log(pos);
//             //    var loge = xls.slice(xls.lastIndexOf("/") + 1);
//             //    console.log(loge);
//             // alert( log);
            
//             $(this).find('.overlay').append(
//                 // '<a href="'+im+'"  type="button" class="btn btn-info im-download"download="'+im+'"  id="im-download1"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> PNG</a>'
//                 '<a href="'+im+'"  type="button" class="btn btn-info im-download btn-xs" download="'+alt+im.slice(im.lastIndexOf(".") )+'" title= "Скачать" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> PNG</a>'
//             );
//             if (dwg !== "non" && typeof(dwg) != "undefined" && dwg !== "")
//             {
//                  $(this).find('.overlay').append(
//                     //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
//                      '<a href="'+"./dist/files/dwg/"+dwg.slice(dwg.lastIndexOf("/") + 1)+'"  type="button" class="btn btn-info im-download btn-xs" download="'+alt+dwg.slice(dwg.lastIndexOf(".") )+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
//                     ); 
//             }
//             if (xls !== "non" && typeof(xls) != "undefined" && xls !== "")
//             {
//                  $(this).find('.overlay').append(
//                     //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
//                      '<a href="'+"./dist/files/xls/"+xls.slice(xls.lastIndexOf("/") + 1)+'"  type="button" class="btn btn-info im-download btn-xs" download="'+alt+xls.slice(xls.lastIndexOf(".") )+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> XLS</a>'
//                     ); 
//             }
//             if (pdf !== "non" && typeof(pdf) != "undefined" && pdf !== "")
//             {
//                  $(this).find('.overlay').append(
//                     //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
//                      '<a href="'+"./dist/files/pdf/"+pdf.slice(pdf.lastIndexOf("/") + 1)+'"  target="_blank" type="button" class="btn btn-info im-download btn-xs" title= "Открыть PDF в новой вкладке" ><i class="glyphicon glyphicon-open" aria-hidden="true"></i> PDF</a>'
//                     ); 
//             }

//             $(this).find('.overlay').append( 
//                 // '<button  onclick="print('+im.slice(im.lastIndexOf("/") + 1)+')">Печать картинки</button>'
//                 "<a href='javascript:PrintImg(\""+im+"\",\""+alt+"\"); void 0;' type='button' class='btn btn-info im-download  btn-xs' title= 'Печать' ><i class='glyphicon glyphicon-print 'aria-hidden='true'></i></a>" 
//                 /* '<button class="btn btn-info im-download" onclick="PrintImg('+im.slice(im.lastIndexOf("/") + 1)+');" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i>Печать</button>' */
//              ); 
          

//             $(this ).find(".overlay .btn").fadeIn(600);
//         },
//         function () {
//             $(this).find(".overlay .btn").fadeOut(600);
           
            
//         }
//     );
  

// });



// Печать 
function PrintImg(src,alt){
    alt  = alt.replace(/\//g, '_'); //удалить слеш
    alt  = alt.replace(/\./g, ','); //удалить точку
    // var win = window.open('','','left=0,top=0,right=0,bottom=0,width=800,height=640,toolbar=0,scrollbars=0,status=0');
    var win = window.open("about:blank","_new");
        win.document.open();
		win.document.write(
            '<html>\n<head>\n<title>'+alt+'</title>\n</head>\n'+
            '<body>\n'+
            '<img src="'+src+'"  style="width: 100%;">'+
            '</body>\n</html>\n'
        ); 
		win.print();
		win.close();
  }


//   $(".im-download").mousemove(function(e) {
//     var hovertext = $(this).attr("data-tooltip");
//     $("#hovertitle").text(hovertext).show();
//     $("#hovertitle").css('top', e.clientY+12+$(window).scrollTop()).css('left', e.clientX+12);
//     }).mouseout(function() {$("#hovertitle").hide();});


// function CallPrint(strid) {
//      var prtContent = document.getElementById(strid);
//      var prtCSS = '<link rel="stylesheet" href="/templates/css/template.css" type="text/css" />';
//       var WinPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
//        WinPrint.document.write('<div id="print" class="contentpane">'); WinPrint.document.write(prtCSS);
//         WinPrint.document.write(prtContent.innerHTML); WinPrint.document.write('</div>'); WinPrint.document.close();
//          WinPrint.focus(); WinPrint.print(); WinPrint.close(); prtContent.innerHTML=strOldOne;
// }

// function makepage(src) {
//     // We break the closing script tag in half to prevent
//     // the HTML parser from seeing it as a part of
//     // the *main* page.
//     var win = window.open();
//     win.document.write(
//     "<html>\n" +
//       "<head>\n" +
//       "<title>Temporary Printing Window</title>\n" +
//       "<script>\n" +
//       "function step1() {\n" +
//       "  setTimeout('step2()', 10);\n" +
//       "}\n" +
//       "function step2() {\n" +
//       "  window.print();\n" +
//       "  window.close();\n" +
//       "}\n" +
//       "</scr" + "ipt>\n" +
//       "</head>\n" +
//       "<body onLoad='step1()'>\n" +
//       "<img src='" + src + "'/>\n" +
//       "</body>\n" +
//       "</html>\n"
//     );
//       win.print();
// 		win.close();
//   }



//   function atoprint(src) {
//     var atext = '<img src="' + src + '">';
//     var captext = window.document.title;
//     var alink = window.document.location;
//     var prwin = open('');
//     //prwin.document.open();
//     prwin.document.writeln(htmls.text3);
//     prwin.document.writeln('<h1>'+captext+'<\/h1>');
//     prwin.document.writeln('<div style="position: absolute; height: 600px; top: 150px; width: 700px;">'+atext+'<\/div>');
//     prwin.document.writeln('<hr><div style="font-size:8pt;margin-top:20px;">© site.ru<\/div>');
//     prwin.document.writeln('<div style="font-size:8pt;">Страница материала: '+alink+'<\/div>');
//     prwin.document.writeln('<\/div><\/body><\/html>');
//     prwin.print();
//     prwin.close();
// }

//   <!DOCTYPE html>
// <meta charset="utf-8" />
// <button onclick="printImage()">Печать</button>
// <div id="image"><img src="http://ikeep.ws/uploads/posts/2011-08/1313657478_1235508295_vo_iguasu_br_3.jpg" /></div>
// <script>
// function printImage() {
//     printHTML(document.getElementById('image').innerHTML);
// }

// function printHTML(html) {
//     var frame = document.createElement('iframe');
// 	frame.style.cssText = 'border:none;position:fixed;left:100%;';
// 	frame.onload = function() {
// 		var cssText = 'body{display:none} @media print{body{display:block}}';
// 		var style = this.contentDocument.createElement('style');
// 		if (style.readyState == 'loading') {
// 			style.onreadystatechange = function() {
// 				alert(this.readyState);
// 				if (this.readyState = 'complete') {
// 					this.sheet.cssText = cssText;
// 				}
// 			}
// 		} else {
// 			style.textContent = cssText;
// 		}
// 		this.contentDocument.getElementsByTagName('head')[0].appendChild(style);
// 		this.contentDocument.body.innerHTML = html;
// 		this.contentWindow.print();
// 		setTimeout(function(){
// 			frame.parentNode.removeChild(frame);
// 		}, 0);
// 	}
// 	document.body.appendChild(frame);
// }
// </script>


// свернуть поиск
jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $("#search"); // тут указываем ID элемента
        // если клик был не по нашему блоку
		if (!div.is(e.target)&& div.has(e.target).length === 0) { // и не по его дочерним элементам 
		    
            // div.hide(); // скрываем его
        
                $(".navbar-link").show();
                $(".navbar-toggle-search").hide();
         
                $(".search_result").hide();
            
		}
	});
});




// кнопка очистки поиска


(function ($) {
    var input_class = 'zbz-input-clearable',
        input_class_x = input_class + '__x',
        input_class_x_over = input_class + '__x-over',
        input_selector = '.' + input_class,
        input_selector_x = '.' + input_class_x,
        input_selector_x_over = '.' + input_class_x_over,
        event_main = input_class + '-init',
        event_names = [event_main, 'focus drop paste keydown keypress input change'].join(' '),
        btn_width = 13,
        btn_height = 13,
        btn_margin = 7;

    function tog(v) {
        return v ? 'addClass' : 'removeClass';
    }

    $(document).on(event_names, input_selector, function () {
        $(this)[tog(this.value)](input_class_x);
        
    });

    $(document).on('mousemove', input_selector_x, function (e) {
        var input = $(this),
            input_width = this.offsetWidth,
            input_height = this.offsetHeight,
            input_border_bottom = parseFloat(input.css('borderBottomWidth')),
            input_border_right = parseFloat(input.css('borderRightWidth')),
            input_border_left = parseFloat(input.css('borderLeftWidth')),
            input_border_top = parseFloat(input.css('borderTopWidth')),
            input_border_hr = input_border_left + input_border_right,
            input_border_vr = input_border_top + input_border_bottom,
            client_rect = this.getBoundingClientRect(),
            input_cursor_pos_x = e.clientX - client_rect.left,
            input_cursor_pos_y = e.clientY - client_rect.top,
            is_over_cross = true;

        is_over_cross = is_over_cross && (input_cursor_pos_x >= input_width - input_border_hr - btn_margin - btn_width);
        is_over_cross = is_over_cross && (input_cursor_pos_x <= input_width - input_border_hr - btn_margin);
        is_over_cross = is_over_cross && (input_cursor_pos_y >= (input_height - input_border_vr - btn_height) / 2);
        is_over_cross = is_over_cross && (input_cursor_pos_y <= (input_height - input_border_vr - btn_height) / 2 + btn_height);

        $(this)[tog(is_over_cross)](input_class_x_over);
    });

    $(document).on('click', input_selector_x_over, function () {
        $(this).removeClass([input_class_x, input_class_x_over].join(' ')).val('').trigger('input');
        $('span.zbz').css('visibility','visible');
    });

    $(function () {
        $(input_selector).trigger(event_main);
        
    });

})(jQuery);

$(function(){
	$('#recall').submit(function(e){
		e.preventDefault();
		var data = $(this).serialize();
		$.ajax({
			url: 'users/mail.php',
			type: 'POST',
			data: data,
			beforeSend: function(){
				$('#submit').next().text('Отправляю...');
			},
			success: function(res){
				$('#recall').find('input').val('');
				$('#submit').next().html(res);
			},
			error: function(){
				alert('Ошибка!');
			}
		});
	});
});


$( ".navbar-toggle" ).click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
    //  скрываем, или отображаем все элементы <div>
     $( ".navbar-form").toggle(); 
  });

  $( ".left-menu" ).click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
    //  скрываем, или отображаем все элементы <div>
     $("#navsub.bs-sidebar").toggleClass('click-lef-tmenu' , 'click-lef-tmenu-in'); 
  });
//  #navsub.bs-sidebar .toggleClass('click-leftmenu');

// $( document ).ready(function() {
//     getPositionSearch();
   

//      getClientWidth();



//  });
    
        //  var modalId = $('#image-gallery');

        $(document)
            .ready(function () {


                getPositionSearch();
                getClientWidth();

                loadGallery(true, 'a.thumbb');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }



     
    
     //@param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     // @param setClickAttr  Sets the attribute for the click handler.
     


                function loadGallery(setIDs, setClickAttr) {
                    // alert();
                    var current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function () {
                            
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                        var $sel = selector;
                        current_image = $sel.data('image-id');
                        $('#image-gallery-title')
                            .text($sel.data('title'));
                        $('#image-gallery-image')
                            .attr('src', $sel.data('image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function () {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function () {
                            
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function (e) {
                switch (e.which) {
                    case 37: // left
                        
                        // if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        if ($('#show-previous-image').is(":visible")) {
                        //   alert('left');  
                            $('#show-previous-image').click();
                        }
                        break;

                    case 39: // right
                        
                        // if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        if ($('#show-next-image').is(":visible")) {
                            // alert('right');
                            $('#show-next-image').click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });
            // $(function(){ 
            //     $("#myTab a").click(function(e){
            //         // alert();
            //         e.preventDefault();
            //         $(this).tab('show');
            //     });
            // });

            // $('#myTab a').click(function(e){
            //     e.preventDefault();
            //     $('#tabAll').addClass('active');  
            //     $('.tab-pane').each(function(i,t){
            //       $('#myTabs li').removeClass('active'); 
            //       $(this).addClass('active');  
            //     });
            //   });


            +function ($) {
                'use strict';
              
                // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
                // ============================================================
              
                function transitionEnd() {
                  var el = document.createElement('bootstrap')
              
                  var transEndEventNames = {
                    WebkitTransition : 'webkitTransitionEnd',
                    MozTransition    : 'transitionend',
                    OTransition      : 'oTransitionEnd otransitionend',
                    transition       : 'transitionend'
                  }
              
                  for (var name in transEndEventNames) {
                    if (el.style[name] !== undefined) {
                      return { end: transEndEventNames[name] }
                    }
                  }
              
                  return false // explicit for ie8 (  ._.)
                }
              
                // http://blog.alexmaccaw.com/css-transitions
                $.fn.emulateTransitionEnd = function (duration) {
                  var called = false
                  var $el = this
                  $(this).one('bsTransitionEnd', function () { called = true })
                  var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
                  setTimeout(callback, duration)
                  return this
                }
              
                $(function () {
                  $.support.transition = transitionEnd()
              
                  if (!$.support.transition) return
              
                  $.event.special.bsTransitionEnd = {
                    bindType: $.support.transition.end,
                    delegateType: $.support.transition.end,
                    handle: function (e) {
                      if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
                    }
                  }
                })
              
              }(jQuery);
              /* ========================================================================
               * Bootstrap: tab.js v3.3.7
               * http://getbootstrap.com/javascript/#tabs
               * ========================================================================
               * Copyright 2011-2016 Twitter, Inc.
               * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
               * ======================================================================== */
              
              
              +function ($) {
                'use strict';
              
                // TAB CLASS DEFINITION
                // ====================
              
                var Tab = function (element) {
                  // jscs:disable requireDollarBeforejQueryAssignment
                  this.element = $(element)
                  // jscs:enable requireDollarBeforejQueryAssignment
                }
              
                Tab.VERSION = '3.3.7'
              
                Tab.TRANSITION_DURATION = 150
              
                Tab.prototype.show = function () {
                  var $this    = this.element
                  var $ul      = $this.closest('ul:not(.dropdown-menu)')
                  var selector = $this.data('target')
              
                  if (!selector) {
                    selector = $this.attr('href')
                    selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
                  }
              
                  if ($this.parent('li').hasClass('active')) return
              
                  var $previous = $ul.find('.active:last a')
                  var hideEvent = $.Event('hide.bs.tab', {
                    relatedTarget: $this[0]
                  })
                  var showEvent = $.Event('show.bs.tab', {
                    relatedTarget: $previous[0]
                  })
              
                  $previous.trigger(hideEvent)
                  $this.trigger(showEvent)
              
                  if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return
              
                  var $target = $(selector)
              
                  this.activate($this.closest('li'), $ul)
                  this.activate($target, $target.parent(), function () {
                    $previous.trigger({
                      type: 'hidden.bs.tab',
                      relatedTarget: $this[0]
                    })
                    $this.trigger({
                      type: 'shown.bs.tab',
                      relatedTarget: $previous[0]
                    })
                  })
                }
              
                Tab.prototype.activate = function (element, container, callback) {
                  var $active    = container.find('> .active');
                  var transition = callback
                    && $.support.transition
                    && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length);
              
                  function next() {
                    $active
                      .removeClass('active')
                      .find('> .dropdown-menu > .active')
                        .removeClass('active')
                      .end()
                      .find('[data-toggle="tab"]')
                        .attr('aria-expanded', false);
              
                    element
                      .addClass('active')
                      .find('[data-toggle="tab"]')
                        .attr('aria-expanded', true);
              
                    if (transition) {
                      element[0].offsetWidth // reflow for transition
                      element.addClass('in');
                    } else {
                      element.removeClass('fade');
                    }
              
                    if (element.parent('.dropdown-menu').length) {
                      element
                        .closest('li.dropdown')
                          .addClass('active')
                        .end()
                        .find('[data-toggle="tab"]')
                          .attr('aria-expanded', true)
                    }
              
                    callback && callback()
                  }
              
                  $active.length && transition ?  
                  $active
                  .one('bsTransitionEnd', next)
                  .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
                  next()
                   $active.removeClass('in')
                }
              
              
                // TAB PLUGIN DEFINITION
                // =====================
              
                function Plugin(option) {
                  return this.each(function () {
                    var $this = $(this)
                    var data  = $this.data('bs.tab')
              
                    if (!data) $this.data('bs.tab', (data = new Tab(this)))
                    if (typeof option == 'string') data[option]()
                  })
                }
              
                var old = $.fn.tab
              
                $.fn.tab             = Plugin
                $.fn.tab.Constructor = Tab
              
              
                // TAB NO CONFLICT
                // ===============
              
                $.fn.tab.noConflict = function () {
                  $.fn.tab = old
                  return this
                }
              
              
                // TAB DATA-API
                // ============
              
                var clickHandler = function (e) {
                  e.preventDefault()
                  Plugin.call($(this), 'show')
                }
              
                $(document)
                  .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
                  .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)
              
              }(jQuery);

              $( '#other').click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
                //  скрываем, или отображаем все элементы <div>
            //    alert();
                $('.dropdown-menu').not($(this).parent().find('.dropdown-menu')).hide(); 
                 $(this).parent().find('.dropdown-menu').toggle(); 
                
                  // добавить класс hover
                  if (!($(this).parent().find('a').hasClass("active"))){$(this).parent().toggleClass('click-hover');}
                
                 var nv =parseInt($("#navmain").css('height').replace("px", "")) + 0;
                
              });



              $('.carousel').carousel({
                // interval: 2000
                interval: false
              })
