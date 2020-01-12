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
// console.log(a);
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

// console.log(BrowserDetect.browser+"/"+BrowserDetect.version); 
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
// console.log("Вы используете браузер " + xa);
// console.log("Вы используете браузер2 " + navigator.getUserMedia);
// console.log("Вы используете браузер3 " + navigator.webkitGetUserMedia);
// console.log("Вы используете браузер4 " + navigator.mozGetUserMedia);
// console.log("Вы используете браузер5 " + navigator.msGetUserMedia);

              
// console.log("Версия " + navigator.appVersion);
function getWH()
{  
    var w = window.innerWidth || window.outerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    
    var h = window.innerHeight  || outerHeight  || document.documentElement.clientHeight  || document.body.clientHeight;

//     console.log ("w"+window.outerWidth );// текущая ширина экрана 
//  console.log ("h"+window.outerHeight );// текущая ширина экрана 

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




// при открытии модального окна
$('#myModal').on('show.bs.modal', function (event) {

    // получить кнопку, которая его открыло
    var button = $(event.relatedTarget); 
    // извлечь информацию из атрибута data-content
    // var content = button.data('content'); 
    var content = button.attr('alt'); 
    // var im = button.data('im'); 
    var im = button.attr('src');
    // вывести эту информацию в элемент, имеющий id="content"
    $("body").css("overflow-y", "scroll");
    // html {   overflow-y: scroll;   }
    // $(this).css("margin-right", "-20px");
    $(this).find('#myModalLabel').text(content); 
   
    $(this).find('#im').html('<img src="'+im+'" alt=" " class="center-block img-rounded img-thumbnail">'); 
    // $(this).find('#im').html('<img src="'+im+'" alt=" "class="img-fluid center-block img-rounded img-thumbnail">'); 
    // $(this).find('#im-download').html('<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <a href="'+im+'" type="button" class="btn btn-primary"download="'+im+'" >Сохранить картинку</a>'); 
    // <a href="img.jpg" type="button" class="btn btn-primary"download="img.jpg" id="im-download">Сохранить картинку</a>
  });






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
    
	$("a[href^=#]").not("a[href=#carousel],a.thumbb").click(function(e){
        // alert();
        e.preventDefault();
        
        $(this).not( "#navsub a").addClass("active");
		// $(document).off("scroll");
		// $(menu_selector + " a.active").removeClass("active");
		nvfn();
        var hash = $(this).attr("href");
        console.log('hash '+hash.length);
        if (hash.length>1){
            var target = $(hash);
            
            $("html, body").animate({
                scrollTop: target.offset().top - nv
            }, 500, function(){
                window.location.hash = hash;
                $(document).on("scroll", onScroll);
            });
            $("html, body").animate({
                scrollTop: target.offset().top - nv
            }, 500, function(){
                window.location.hash = hash;
                $(document).on("scroll", onScroll);
            });
        }

	});

//Живой поиск
// var db_search;
// var $gallery=true;
// $(function() {    

// var locationhref = window.location.href.split("/"); //Разбиваем строку (Split работает аналогично PHP explode)
//                 //  var EXP = clickedEXP[1]; //и получаем тип
// console.log(locationhref.pop());

// if (locationhref.pop()!=='detali-gallery-profili.php'){
//     // $gallery=false;

//   if (!$("#iframe_1").length) { db_search = $("table p");}
//    else {
//          $("iframe#iframe_1").load(function(){db_search = $(this).contents().find("table p");});
//         }

// $(".who").bind("change keyup input click", function() {
//     console.log($gallery);
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
//       console.log('fadeOut4');
//       $('span.zbz').css('visibility','visible');
//     }
//     if ($(".search_result li").length < 1) {    
//       $(".search_result").fadeOut();
//       console.log('fadeOut3');
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

// } 
//  else{

//     $(".who").bind("change keyup input click", function() {
//         console.log($gallery);
//         $(".search_result").empty();    
//         if (this.value.length >= 2) {       
//           var search_str = new RegExp(this.value, "i");      
//           db_search.each(function() {
//           var str = $(this).data('title'); // получаем текст с каждого элемента
//         //   var str = $(this).text(); // получаем текст с каждого элемента
//         //   console.log(str);
//             if (str.match(search_str) !== null) {
//               // если совпадает строка с подстрокой    
//               var result = str.replace(/^\s*(.*)\s*$/, "$1");
//             //   result = result.replace(/-\d+/g, ""); //удалить
//               result = result.replace(/[b]/g, "").replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
//             //   result = result.replace(/[a]/g, "");
//             //   result = result.replace(/[c-z]/g, ""); //удалить латинские символы
//             //   result = result.replace(/[-]+/g, ""); //удалить
//               result = result.replace(/~(.*)/ig,""); //удалить
    
//               var aimg="./dist/images/no-foto.png";
//               var aref = $(this).data("href");
//                if (typeof $(this).data("img") !== "undefined") {aimg = $(this).data("img");    
//                }
//                else
//                { aimg = "./dist/images/no-foto.png";        
//                }   
//             //    $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  >' + result + "</a></li>"  );         
//                $(".search_result").append('<li><a href="">'+ result + '</a></li>'  );         
//             }
//           });
//         }
//          else if(this.value.length ==1){$('span.zbz').css('visibility','hidden');}    
//         else {
//           $(".search_result").fadeOut();
//           console.log('fadeOut2');
//           $('span.zbz').css('visibility','visible');
//         }
//         if ($(".search_result li").length < 1) {    
//           $(".search_result").fadeOut();
//           console.log('fadeOut');
//         } else {
//           $(".search_result").show();
//         }
//       });
    
//       $(".search_result").hover(function() {
//         $(".who").blur(); //Убираем фокус с input
//       });
    
//       //При выборе результата поиска, прячем список и заносим выбранный результат в input
//     //   $(".search_result").on("click", "li", function() {
            
        
//     //         window.location = $(this).find("a").attr("href");
        
//     //         $(".search_result").fadeOut();
//     //      });
    
    
    
// } 
        
  
// });





// кнопки при наведении на изображение
$(function () {   
    $('.cont').hover(
        function () {
            $(this).find(".overlay .btn").remove();
             // получить кнопку, которая его открыло
            var button = $(this).find("img"); 
            // извлечь информацию из атрибута data-content 
            var im = button.attr('src');
            // console.log(im);
            //  im = button.attr('src');
                   
                
            var dwg = button.data('dwg');
            // console.log(dwg);
            var xls = button.data('xls');
            var doc = button.data('doc');
            var pdf = button.data('pdf');
            var alt = button.attr('alt');
            var ypdf = button.data('ypdf');
            var ydoc = button.data('ydoc');
            var yxls = button.data('yxls');
            var prnt = button.data('prnt');
            var spng = button.data('spng');
            var sample = button.data('sample');
            


            //  console.log(pdf);
            // var pos = xls.lastIndexOf("/") + 1;
            // console.log(pos);
            //    var loge = xls.slice(xls.lastIndexOf("/") + 1);
            //    console.log(loge);
            // alert( log);
            if (sample !== "non" && typeof(sample) !== "undefined" && sample !== "" && sample !== null)
            {
                //  var clickedEXP = sample.split(":"); //Разбиваем строку (Split работает аналогично PHP explode)
                //  var EXP = clickedEXP[1]; //и получаем тип
                //  console.log(EXP);
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+sample+'"  type="button" class="btn btn-info im-download" download="'+alt+sample.slice(sample.lastIndexOf(".") )+'" title= "Скачать образец"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> ОБРАЗЕЦ</a>'
                    ); 
            }



            if (spng !== "noPNG" && typeof(im) !== "undefined" )
            {
            $(this).find('.overlay').append(
                // '<a href="'+im+'"  type="button" class="btn btn-info im-download"download="'+im+'"  id="im-download1"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> PNG</a>'
                '<a href="'+im+'"  type="button" class="btn btn-info im-download" download="'+alt+im.slice(im.lastIndexOf(".") )+'" title= "Скачать" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> PNG</a>'
            );
            }


            if (dwg !== "non" && typeof(dwg) !== "undefined" && dwg !== "" && dwg !== null)
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+"./dist/files/dwg/"+dwg.slice(dwg.lastIndexOf("/") + 1)+'"  type="button" class="btn btn-info im-download" download="'+alt+dwg.slice(dwg.lastIndexOf(".") )+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                    ); 
            }
            if (xls !== "non" && typeof(xls) != "undefined" && xls !== "" && xls !== null)
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+"./dist/files/xls/"+xls.slice(xls.lastIndexOf("/") + 1)+'"  type="button" class="btn btn-info im-download" download="'+alt+xls.slice(xls.lastIndexOf(".") )+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> XLS</a>'
                    ); 
            }
            if (doc !== "non" && typeof(doc) != "undefined" && doc !== "" && doc !== null)
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+"./dist/files/doc/"+doc.slice(doc.lastIndexOf("/") + 1)+'"  type="button" class="btn btn-info im-download" download="'+alt+doc.slice(doc.lastIndexOf(".") )+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> XLS</a>'
                    ); 
            }
            if (yxls !== "non" && typeof(yxls) != "undefined" && yxls !== "" && yxls !== null)
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+"./dist/files/yri/"+yxls.slice(yxls.lastIndexOf("/") + 1)+'"  type="button" class="btn btn-info im-download" download="'+alt+yxls.slice(yxls.lastIndexOf(".") )+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> XLS</a>'
                    ); 
            }
            if (ydoc !== "non" && typeof(ydoc) != "undefined" && ydoc !== "" && ydoc !== null)
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+"./dist/files/yri/"+ydoc.slice(ydoc.lastIndexOf("/") + 1)+'"  type="button" class="btn btn-info im-download" download="'+alt+ydoc.slice(ydoc.lastIndexOf(".") )+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DOC</a>'
                    ); 
            }
            if (pdf !== "non" && typeof(pdf) != "undefined" && pdf !== "" && pdf !== null)
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+"./dist/files/pdf/"+pdf.slice(pdf.lastIndexOf("/") + 1)+'"  target="_blank" type="button" class="btn btn-info im-download" title= "Открыть PDF в новой вкладке" ><i class="glyphicon glyphicon-open" aria-hidden="true"></i> PDF</a>'
                    ); 
            }
            if (ypdf !== "non" && typeof(ypdf) != "undefined" && ypdf !== "" && ypdf !== null)
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+"./dist/files/yri/"+ypdf.slice(ypdf.lastIndexOf("/") + 1)+'"  target="_blank" type="button" class="btn btn-info im-download" title= "Открыть PDF в новой вкладке" ><i class="glyphicon glyphicon-open" aria-hidden="true"></i> PDF</a>'
                    ); 
            }


            if (prnt !== "noPrint" )
            {

            $(this).find('.overlay').append( 
                // '<button  onclick="print('+im.slice(im.lastIndexOf("/") + 1)+')">Печать картинки</button>'
                "<a href='javascript:PrintImg(\""+im+"\",\""+alt+"\"); void 0;' type='button' class='btn btn-info im-download '  ><i class='glyphicon glyphicon-print 'aria-hidden='true'></i> Печать</a>" 
                /* '<button class="btn btn-info im-download" onclick="PrintImg('+im.slice(im.lastIndexOf("/") + 1)+');" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i>Печать</button>' */
             ); 
            }
          

            $(this ).find(".overlay .btn").fadeIn(600);
        },
        function () {
            $(this).find(".overlay .btn").fadeOut(600);
           
            
        }
    );
  

});



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
			url: './RECALL/mail.php',
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

$( '#other').click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
    //  скрываем, или отображаем все элементы <div>
//    alert();
    $('.dropdown-menu').not($(this).parent().find('.dropdown-menu')).hide(); 
     $(this).parent().find('.dropdown-menu').toggle(); 
    
      // добавить класс hover
      if (!($(this).parent().find('a').hasClass("active"))){$(this).parent().toggleClass('click-hover');}
    
     var nv =parseInt($("#navmain").css('height').replace("px", "")) + 0;
    
  });

 

  
  