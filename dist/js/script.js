

window.onresize = function(){ getPositionSearch();nvfn(); };

function getPositionSearch(){
        var w = getClientWidth();// текущая ширина экрана                
        // var c= $('div.container').css('width');
        var pos = $( '#main-page' ).position().left;
        var c= $('#main-page').css('width');
        console.log(pos);
        console.log(c);
         c = c.replace("px", "")-21; //удалить латинские символы 
        //   с= pos + с;
        // console.log(c);       
        // c=(w-c)/2+5;
        //    console.log(c);
         $('.navbar-form.navbar-right:last-child').css({'left': pos + c});
         $('.zbz-input-clearable').css({'visibility': 'visible'});
         $('span.zbz').css('visibility','visible');
        
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
    $(function getPositionSearch(){
        var w = getClientWidth();// текущая ширина экрана                
        // var c= $('div.container').css('width');
        var pos = $( '#main-page' ).position().left;
        var c= $('#main-page').css('width');
        c = c.replace("px", "")-21; //удалить латинские символы 
        // console.log(pos);
        console.log(c); 
         $('.navbar-form.navbar-right:last-child').css({'left': pos + c});
         $('.zbz-input-clearable').css({'visibility': 'visible'});
         $('span.zbz').css('visibility','visible');
        //  $('.navbar-form.navbar-right:last-child').offset({top:30, left:pos});
     });
     getClientWidth();
 });
//  var delta =0;
$(function () {
    // $('#navsub  li.menu2 ul').hide();
    // $('#navsub  li.menu ul').hide();
    $('#navsub  li.menu').hover(
        function () {
            // delta2 = 0; // счетчик прокрутки колеса sub_menu2
           var colLeftMenu = $(this).parent().children().length; 
           var col = $(this).index()+1; // номер по порядку выбранного элемента списка!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
           var UlSubMenu = $(this ).children('ul').children();
           var child1 =UlSubMenu.length;
           var bottomUl = (colLeftMenu-col)*40;
           if (child1>col){bottomUl=bottomUl-(child1-col)*40;}       
           console.log("количество левое меню - "+colLeftMenu);
           console.log("номер по порядку выбранного элемента списка - "+col);      
           console.log("количество дочерних элементов - "+child1);   
           $(this).find('ul.sub_menu').show();
           
        //    var d = getMouseWeel();
        //    console.log(d);
        // console.log(dy);

           UlSubMenu.parent().css("bottom", bottomUl+"px"); 
           $(this).find('ul.sub_menu > li:nth-child(1)').addClass('triangle');           
           var triangle = (child1-1)*40+11;
           if (child1>col){triangle = (col-1)*40+11;}
           $('head').append('<style id="triangle">.triangle::before{top:'+triangle+'px !important;}.triangle::after{top:'+triangle+'px !important;}a.list-group-item.active::after{border:none !important;border-right:none !important}</style>');              
        },
        function () {
            $(this).find('ul.sub_menu').hide();   
            $(this).find('ul.sub_menu > li:nth-child(1)').removeClass('triangle');            
            $('#triangle').remove();      
        }
    );

    $('#navsub  li.menu2').hover(
        function () {
           var colLeftMenu = $(this).parent().children().length; 
           var col = $(this).index()+1; // номер по порядку выбранного элемента списка!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
           var UlSubMenu = $(this ).children('ul').children();
           var child1 =UlSubMenu.length;
           var bottomUl = (colLeftMenu-col)*40+11;
           if (child1==col){bottomUl=bottomUl-(child1-col)*40+20;}
           if (child1<col){bottomUl=30+(colLeftMenu-col)*40;}   
           if (child1>col){bottomUl=bottomUl-(child1-col)*40+20;}       
           console.log("количество левое меню2 - "+colLeftMenu);
           console.log("номер по порядку выбранного элемента списка2 - "+col);      
           console.log("количество дочерних элементов2 - "+child1);  
            
            $(this).find('ul.sub_menu2').show();

        //     var d = getMouseWeel();
        //    console.log(d);
        //   console.log(dy);

            UlSubMenu.parent().css("bottom", bottomUl+"px"); 
           $(this).find('ul.sub_menu2 > li:nth-child(1)').addClass('triangle2');           
           var triangle = (child1-1)*40+11;
          
           if (child1>col){triangle = (col-1)*40+11;}
           $('head').append('<style id="triangle2" data-top="'+triangle+'">.triangle2::before{top:'+triangle+'px !important;}.triangle2::after{top:'+triangle+'px !important;}</style>');  
           
        },
        function () {
            console.log($(this));
            delta2 = 0; 
            $(this).find('ul.sub_menu2').hide();
            $(this).find('ul.sub_menu2 > li:nth-child(1)').removeClass('triangle2');            
            $('#triangle2').remove();  
        }
    );
});

// прокрутка колеса мыши sub
// var delta = 0;

// $('.sub_menu').bind('mousewheel DOMMouseScroll MozMousePixelScroll wheel onmousewheel', function(e){

// var dy = e.originalEvent.deltaY || e.originalEvent.wheelDelta;

// if(dy > 0) {
   
//      delta =  1  + delta ;
//     console.log('up1');
//     console.log(delta); 
//     e.preventDefault();  
// }
// else{    
//      delta =  delta - 1;
//     console.log('down1');
//     console.log(delta);
//     e.preventDefault();    
// }

// });

   // прокрутка колеса мыши sub2 
    var delta2 = 0; 
     var bottomMIN = -129; 
    // var bottomMAX = -929;  
    $('.sub_menu2').bind('mousewheel DOMMouseScroll MozMousePixelScroll wheel onmousewheel', function(e){   
    var dy = e.originalEvent.deltaY || e.originalEvent.wheelDelta;    
    var UlSubMenu = $(this ).children();
    var child1 =UlSubMenu.length;
    var bottomUl = parseInt($(this ).css('bottom'));
     var triangle =$('#triangle2').data('top');
    console.log('triangle ' + triangle);
    //  console.log('triangle2 ' + $('#triangle2').html());
    console.log('child1 ' + child1);
    console.log('bottom ' + $(this ).css('bottom'));
    if(dy > 0) { 

           
                if (bottomUl < bottomMIN ) { 
                    delta2 =  1  + delta2 ;
                    console.log('up2');
                    console.log(delta2); 
                    console.log(bottomMIN);
                    bottomUl= bottomUl + 40;
                    triangle = triangle + 40;
                    console.log('bottomUl ' + bottomUl); 
                    $(this ).css("bottom", bottomUl+"px"); 
                    $('#triangle2').remove();
                    $('head').append('<style id="triangle2" data-top="'+triangle+'">.triangle2::before{top:'+triangle+'px !important;}.triangle2::after{top:'+triangle+'px !important;}</style>');       
                }
                e.preventDefault();      
             }
    else{ 
        
        
         
            if (delta2 > 0 ) { 
                delta2 =  delta2 - 1 ;
                console.log('down2');
                console.log(delta2);
                bottomUl = bottomUl - 40;
                triangle = triangle - 40;
                console.log('bottomUl ' + bottomUl); 
                $(this ).css("bottom", bottomUl+"px"); 
                $('#triangle2').remove();
                $('head').append('<style id="triangle2" data-top="'+triangle+'">.triangle2::before{top:'+triangle+'px !important;}.triangle2::after{top:'+triangle+'px !important;}</style>');   
             }
        e.preventDefault();  
        
            
    }

    });








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
    $(this).css("margin-right", "-20px");
    $(this).find('#myModalLabel').text(content); 
   
    $(this).find('#im').html('<img src="'+im+'" alt=" "class="img-fluid center-block img-rounded img-thumbnail">'); 
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
    
	$("a[href^=#]").click(function(e){
        // alert();
        e.preventDefault();
        
        $(this).not( "#navsub a").addClass("active");
		// $(document).off("scroll");
		// $(menu_selector + " a.active").removeClass("active");
		nvfn();
		var hash = $(this).attr("href");
        var target = $(hash);
        // console.log(target.offset().top);
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
	});

//Живой поиск
var db_search;
$(function() {
  if (!$("#iframe_1").length) { db_search = $("table p");}
   else {
         $("iframe#iframe_1").load(function(){db_search = $(this).contents().find("table p");});
        }
  $(".who").bind("change keyup input click", function() {
    $(".search_result").empty();    
    if (this.value.length >= 2) {       
      var search_str = new RegExp(this.value, "i");      
      db_search.each(function() {
      var str = $(this).text(); // получаем текст с каждого элемента
        if (str.match(search_str) !== null) {
          // если совпадает строка с подстрокой    
          var result = $(this).text().replace(/^\s*(.*)\s*$/, "$1");
        //   result = result.replace(/-\d+/g, ""); //удалить
          result = result.replace(/[b]/g, "").replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
        //   result = result.replace(/[a]/g, "");
        //   result = result.replace(/[c-z]/g, ""); //удалить латинские символы
        //   result = result.replace(/[-]+/g, ""); //удалить
          result = result.replace(/~(.*)/ig,""); //удалить

          var aimg="./dist/images/no-foto.png";
          var aref = $(this).data("href");
           if (typeof $(this).data("img") !== "undefined") {aimg = $(this).data("img");    
           }
           else
           { aimg = "./dist/images/no-foto.png";        
           }   
           $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  height="80">' + result + "</a></li>"  );         
        }
      });
    }
     else if(this.value.length ==1){$('span.zbz').css('visibility','hidden');}    
    else {
      $(".search_result").fadeOut();
      $('span.zbz').css('visibility','visible');
    }
    if ($(".search_result li").length < 1) {    
      $(".search_result").fadeOut();
    } else {
      $(".search_result").show();
    }
  });
  $(".search_result").hover(function() {
    $(".who").blur(); //Убираем фокус с input
  });
  //При выборе результата поиска, прячем список и заносим выбранный результат в input
  $(".search_result").on("click", "li", function() {
        
    
        window.location = $(this).find("a").attr("href");
    
        $(".search_result").fadeOut();
     });
});





// кнопки при наведении на изображение
$(function () {   
    $('.cont').hover(
        function () {
            $(this).find(".overlay .btn").remove();
             // получить кнопку, которая его открыло
            var button = $(this).find("img"); 
            // извлечь информацию из атрибута data-content 
            var im = button.attr('src');
            //  im = button.attr('src');
                   
                
            var dwg = button.data('dwg');
            var xls = button.data('xls');
            var pdf = button.data('pdf');
            var alt = button.attr('alt');
            //  console.log(pdf);
            // var pos = xls.lastIndexOf("/") + 1;
            // console.log(pos);
            //    var loge = xls.slice(xls.lastIndexOf("/") + 1);
            //    console.log(loge);
            // alert( log);
            
            $(this).find('.overlay').append(
                // '<a href="'+im+'"  type="button" class="btn btn-info im-download"download="'+im+'"  id="im-download1"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> PNG</a>'
                '<a href="'+im+'"  type="button" class="btn btn-info im-download" download="'+alt+'" title= "Скачать" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> PNG</a>'
            );
            if (dwg !== "non" && typeof(dwg) != "undefined" && dwg !== "")
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+dwg+'"  type="button" class="btn btn-info im-download" download="'+alt+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                    ); 
            }
            if (xls !== "non" && typeof(xls) != "undefined" && xls !== "")
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+xls+'"  type="button" class="btn btn-info im-download" download="'+alt+'" title= "Скачать"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> XLS</a>'
                    ); 
            }
            if (pdf !== "non" && typeof(pdf) != "undefined" && pdf !== "")
            {
                 $(this).find('.overlay').append(
                    //  '<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'
                     '<a href="'+pdf+'" target="_blank" type="button" class="btn btn-info im-download" title= "Открыть PDF в новой вкладке" ><i class="glyphicon glyphicon-open" aria-hidden="true"></i> PDF</a>'
                    ); 
            }

            $(this).find('.overlay').append( 
                // '<button  onclick="print('+im.slice(im.lastIndexOf("/") + 1)+')">Печать картинки</button>'
                "<a href='javascript:PrintImg(\""+im+"\",\""+alt+"\"); void 0;' type='button' class='btn btn-info im-download '  ><i class='glyphicon glyphicon-print 'aria-hidden='true'></i> Печать</a>" 
                /* '<button class="btn btn-info im-download" onclick="PrintImg('+im.slice(im.lastIndexOf("/") + 1)+');" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i>Печать</button>' */
             ); 
          

            $(this ).find(".overlay .btn").fadeIn(600);
        },
        function () {
            $(this).find(".overlay .btn").fadeOut(600);
           
            
        }
    );
  

});



// Печать 
function PrintImg(src,alt){
    
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


