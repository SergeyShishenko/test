// $(".zbz-input-clearable").click(function () {
    // $(".navbar-link").hide();
    // $(this).css('width', '50%');
    // $(".navbar-toggle-search").show();
  
    // $(".search_result").css('margin-right', '-230px');
    // margin-right: -240px;
    //#bs-example-navbar-collapse-1 > form > button    margin-bottom: 70px;
// });

// $(".search_result").hide();

// $(".navbar-toggle-search").click(function () {
//     // $(".navbar-link").show();
//     $(".navbar-toggle-search").hide();
  
//     $(".search_result").hide();
// });
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
  
//   $( document ).ready(function() {
//     $(function getPositionSearch(){
//  var w = getClientWidth();// текущая ширина экрана                
// //  var c= $('div.container').css('width');
//  var c= $('#main-page').css('width');
 
//   c = c.replace("px", "")-30; //удалить латинские символы        
//  c=(w-c)/2+5;
 
// //   $('.navbar-form.navbar-right:last-child').css({'right': c});
// });
//      getClientWidth();
//  });
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
        //  $('.navbar-form.navbar-right:last-child').offset({top:30, left:pos});
     });
     getClientWidth();
 });

$(function () {
    $('#navsub  li.menu2 ul').hide();
    $('#navsub  li.menu ul').hide();
    $('#navsub  li.menu').hover(
        function () {
           // $(this).find('ul.sub_menu').delay(200).show(200);
            $(this).find('ul.sub_menu').show();            
        },
        function () {
            $(this).find('ul.sub_menu').hide();           
        }
    );
    $('#navsub  li.menu2').hover(
        function () {
            //$(this).find('ul.sub_menu2').delay(200).show(200);
            $(this).find('ul.sub_menu2').show();
        },
        function () {
            console.log($(this));
            $(this).find('ul.sub_menu2').hide();
        }
    );
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
function nvfn(){ nv =parseInt($("div.navbar").css('height').replace("px", "")) + 20;}
function onScroll(){
    nvfn();
    // nv = nv;
    console.log(nv);
	var scroll_top = $(document).scrollTop();
	$(menu_selector + " a").each(function(){
        var hash = $(this).attr("href");
        // alert(hash);
		var target = $(hash);
		if (target.position().top-nv <= scroll_top && target.position().top  + target.outerHeight() > scroll_top) {
            $(menu_selector + " li.active").removeClass("active");
            // alert(this);
			$(this).parent().addClass("active");
		} else {
			$(this).parent().removeClass("active");
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
          result = result.replace(/-\d+/g, ""); //удалить
          result = result.replace(/[b]/g, "").replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
          result = result.replace(/[a]/g, "");
          result = result.replace(/[c-z]/g, ""); //удалить латинские символы
          result = result.replace(/[-]+/g, ""); //удалить
          var aimg="./dist/images/no-175x0.jpg";
          var aref = $(this).data("href");
           if (typeof $(this).data("img") !== "undefined") {aimg = $(this).data("img");    
           }
           else
           { aimg = "./dist/images/no-175x0.jpg";        
           }   
           $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  height="80">' + result + "</a></li>"  );         
        }
      });
    }
     else if(this.value.length ==1){$('span.glyphicon').css('visibility','hidden');}    
    else {
      $(".search_result").fadeOut();
      $('span.glyphicon').css('visibility','visible');
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
  $(".search_result").on("click", "li", function() {  $(".search_result").fadeOut(); });
});



// кнопки при наведении на изображение
//$('#navsub  li.menu2 ul').hide();
 //   $('#navsub  li.menu ul').hide();

$(function () {
    // $('#navsub  li.menu2 ul').hide();
    // $('#navsub  li.menu ul').hide();
    $('.cont').hover(
        function () {
            $(this).find(".overlay .btn").remove();
             // получить кнопку, которая его открыло
            var button = $(this).find("img"); 
            // извлечь информацию из атрибута data-content
            // var content = button.data('content'); 
            // var content = button.attr('alt'); 
            // alert(content)
            // var im = button.data('im'); 
            var im = button.attr('src');
            var dwg = button.data('dwg');
         
            
            $(this).find('.overlay').append('<a href="'+im+'"  type="button" class="btn btn-info im-download"download="'+im+'"  id="im-download1"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> PNG</a>');
            if (dwg !== "non")
            {
                 $(this).find('.overlay').append('<a href="'+dwg+'"  type="button" class="btn btn-info im-download"download="'+dwg+'" id="im-download2"><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>'); 
            }
          

            $(this ).find(".overlay .btn").fadeIn(600);
        },
        function () {
            $(this).find(".overlay .btn").fadeOut(600);
            

            // $(".btn").find(".btn");
            
        }
    );
  

});



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
        $('span.glyphicon').css('visibility','visible');
    });

    $(function () {
        $(input_selector).trigger(event_main);
        
    });

})(jQuery);




