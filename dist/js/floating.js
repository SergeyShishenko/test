$(function(){
$('table td').on('click', function () {
    // извлечь информацию из атрибута data-content
    // alert(this.innerHTML);
    // var ref = $(this).find('p').data('href'); 
    var ref = $(this).find(':first-child').data('href'); 
    if(typeof ref != "undefined" && ref != null)
    
    {  
        // alert(ref);
        window.location=ref;
   
    }
else  
    {
    //    alert("Ссылка не прикреплена");
    }
    
    });
    // index.html
// var menu_selector = ".top-menu"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню. 
var menu_selectorI = "#navmain"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню. 
function onScrollI(){
	var scroll_top = $(document).scrollTop();
	$(menu_selectorI + " a").not("ul.dropdown-menu li a").each(function(){
        var hash = $(this).attr("href");
        
        // alert(hash);
        var target = $(hash);
        
		if (target.position().top-80 <= scroll_top && target.position().top  + target.outerHeight() > scroll_top) {
            $(menu_selectorI + " li.active").removeClass("active");           
			$(this).parent().addClass("active");
		} else {
			$(this).parent().removeClass("active");
		}
	});
}

});


// jQuery('#navmain > li > a > b.caret').hover(function() {
//     //  alert(jQuery(this).parent());
    
//     jQuery(this).parent().parent().find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
   
//     }, function() {
  
//     jQuery(this).parent().parent().find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
  
//     });

    $( '#navmain > li > span.caret').click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
        //  скрываем, или отображаем все элементы <div>
        // alert();
        
        $('.dropdown-menu').not($(this).parent().find('.dropdown-menu')).hide(); 
         $(this).parent().find('.dropdown-menu').toggle(); 
         var nv =parseInt($("#navmain").css('height').replace("px", "")) + 0;
         console.log(nv);
        //   $(this).parent().click(function (event) { event.preventDefault();  });
        //  $(this).click(function (event) {event.preventDefault(); });
         
      });







    


// // $("input[placeholder=Поиск]").click(function () {
//     $("#search > div > input").click(function () {
//         $(".navbar-link").hide();
//         $(".navbar-toggle-search").show();
//         // $(".form-control").css('width', '45vw');
//         // $(this).css('width', '800px');
//         // $(".form-control").css('width', '1145px');
//         $(".navbar-form.navbar-right:last-child ").css('margin-top', '8px');
//         // $(".navbar-brand").css('width', '60%');
//         // $(".navbar-brand").css('background-position', '10%','50%;');
//         // $(".search_result").show();
//         //#bs-example-navbar-collapse-1 > form > button    margin-bottom: 70px;
//         // alert();
//     });
    
//     $(".search_result").hide();
    
//     $(".navbar-toggle-search").click(function () {
//         $(".navbar-link").show();
//         $(".navbar-toggle-search").hide();
//         // $(".navbar-form.navbar-right:last-child ").css('margin-top', '-42px');
//         // $(".form-control").css('width', '165px');
//         // $("#search").css('width', '209px');
//         // $(".form-control").css('width', '165px');
//         // $(".navbar-brand").css('width', '100%');
//         // $(".navbar-brand").css('background-position', '27%','50%;');
//         $(".search_result").hide();
//     });
    
//Живой поиск
 
$(function() {
 var  db_search = $("table p");
 
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
        result = result.replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
        //   result = result.replace(/[b]/g, "").replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
        //   result = result.replace(/[a]/g, "");
        //   result = result.replace(/[c-z]/g, ""); //удалить латинские символы
        //   result = result.replace(/[-]+/g, ""); //удалить
        // text = text.replace(/<script[^>]*>(?:(?!<\/script>)[^])*<\/script>/g, "")
        //   result = result.replace(/<span>(.*)<\/span>/ig,""); //удалить
          result = result.replace(/~(.*)/ig,""); //удалить
        //   result=result[1]
        //   result = result.replace(/<script[^>]*>(?:(?!<\/script>)[^])*<\/script>/ig,""); //удалить
          
          var aref = $(this).data("href");          
          var flo = $(this).parent().attr('id');
          // flo = flo.replace(/.*\#/, '');// id элемента
          if (flo == 'undefined'){flo='';}else{flo='#'+ flo;}

          var aimg = $(this).data("img");
          if (typeof aimg == "undefined") { aimg = "./dist/images/mdf-nakladka-053-dsh.png"; }     
          $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  height="80">' + result + '</a><a class="flo" href="' + flo + '" title = "Найти на карте сайта">&#10059;</a></li>');
        //   $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  height="80">' + result + '</a></li>');
        //   $( "#search  ul  li" ).after( '<a class="flo" href="#' + flo + '">&#9875;</a>' );
        }
      });
    } else {
      $(".search_result").fadeOut();
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


 
// плавный скролл якорь
    $(".search_result").on("click", "a.flo", function(){ 
        var el = $(this);
        var dest = el.attr('href'); // получаем направление
        // alert(dest);
        if(dest !== undefined && dest !== '') { // проверяем существование
            $('html').animate({ 
                scrollTop: $(dest).offset().top - 55// прокручиваем страницу к требуемому элементу
            }, 500 // скорость прокрутки
            );
        }
        $(".search_result").hide();
        dest=dest.replace(/[#]/g, "");
        // alert(dest);
        document.getElementById(dest).animate([
            // {color: "black"},
            // {color: "red"}
            {fontWeight: "500"},
            {fontWeight: "700"}
          ], {
            duration: 6000,
            iteration: 2,
           delay: 200
          });
          
        return false;
    });
// $(".search_result a.flo").click(function(e){
//     e.preventDefault();
//  alert();
//     // $(menu_selector + " li.active").removeClass("active");
//     // $(this).addClass("active");
//     $(document).off("scroll");
//     var hash = $(this).attr("href");
//     var target = $(hash);
//     $("html, body").animate({
//         scrollTop: target.offset().top - 50           
//     }, 500, function(){
//         window.location.hash = hash;
//         // $(document).on("scroll", onScroll);
//     });
//     $("html, body").animate({
//         scrollTop: target.offset().top - 50
//     }, 1, function(){
//         window.location.hash = hash;
//         // $(document).on("scroll", onScroll);
//     });
    
    
// });


// $(function(){
    $('[data-href*=".php"]').not(":contains(???)").each(function(){
        // выведем содержимое текущего элемента в консоль
        // console.log($(this).parent().text());
        $(this).parent().css( "color", "Blue" );
      });
    
//   });




$(function(){
    var topPos = $('#floating1').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer1').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating1').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating1').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating1').removeClass('fixed-div');}
    else {$('#floating1').removeClass('fixed-div');}
    });
  });

  $(function(){
    var topPos = $('#floating2').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer2').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating2').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating2').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating2').removeClass('fixed-div');}
    else {$('#floating2').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating3').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer3').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating3').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating3').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating3').removeClass('fixed-div');}
    else {$('#floating3').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating4').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer4').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating4').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating4').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating4').removeClass('fixed-div');}
    else {$('#floating4').removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var topPos = $('#floating5').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer5').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating5').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating5').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating5').removeClass('fixed-div');}
    else {$('#floating5').removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var topPos = $('#floating6').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer6').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating6').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating6').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating6').removeClass('fixed-div');}
    else {$('#floating6').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating7').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer7').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating7').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating7').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating7').removeClass('fixed-div');}
    else {$('#floating7').removeClass('fixed-div');}
    });
  });

//////////////////

          $(function(){
    var topPos = $('#floating8').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer8').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating8').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating8').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating8').removeClass('fixed-div');}
    else {$('#floating8').removeClass('fixed-div');}
    });
  });

  $(function(){
    var topPos = $('#floating9').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer9').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating9').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating9').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating9').removeClass('fixed-div');}
    else {$('#floating9').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating10').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer10').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating10').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating10').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating10').removeClass('fixed-div');}
    else {$('#floating10').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating11').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer11').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating11').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating11').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating11').removeClass('fixed-div');}
    else {$('#floating11').removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var topPos = $('#floating12').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer12').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating12').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating12').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating12').removeClass('fixed-div');}
    else {$('#floating12').removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var topPos = $('#floating13').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer13').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating13').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating13').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating13').removeClass('fixed-div');}
    else {$('#floating13').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating14').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer14').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating14').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating14').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating14').removeClass('fixed-div');}
    else {$('#floating14').removeClass('fixed-div');}
    });
  });

//////////////////

          $(function(){
    var topPos = $('#floating15').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer15').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating15').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating15').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating15').removeClass('fixed-div');}
    else {$('#floating15').removeClass('fixed-div');}
    });
  });

  $(function(){
    var topPos = $('#floating16').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer16').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating16').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating16').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating16').removeClass('fixed-div');}
    else {$('#floating16').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating17').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer17').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating17').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating17').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating17').removeClass('fixed-div');}
    else {$('#floating17').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating18').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer18').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating18').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating18').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating18').removeClass('fixed-div');}
    else {$('#floating18').removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var topPos = $('#floating19').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer19').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating19').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating19').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating19').removeClass('fixed-div');}
    else {$('#floating19').removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var topPos = $('#floating20').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer20').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating20').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating20').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating20').removeClass('fixed-div');}
    else {$('#floating20').removeClass('fixed-div');}
    });
  });
  $(function(){
    var topPos = $('#floating21').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer21').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating21').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating21').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating21').removeClass('fixed-div');}
    else {$('#floating21').removeClass('fixed-div');}
    });
  });

  $(function(){
    var topPos = $('#floating22').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer22').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating22').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating22').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating22').removeClass('fixed-div');}
    else {$('#floating22').removeClass('fixed-div');}
    });
  });


$(function(){ // лестницы
    var topPos = $('#floating523').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer523').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating523').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating523').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating523').removeClass('fixed-div');}
    else {$('#floating523').removeClass('fixed-div');}
    });
  });
  
  $(function(){ // стандартные узлы
    var topPos = $('#floating23').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer23').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating23').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating23').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating23').removeClass('fixed-div');}
    else {$('#floating23').removeClass('fixed-div');}
    });
  });
  $(function(){ // стандартные узлы
    var num = 623;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){ // стандартные узлы
    var num = 624;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){ // стандартные узлы
    var num = 625;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){ // стандартные узлы
    var num = 626;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){ // стандартные узлы
    var num = 627;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){ // стандартные узлы
    var num = 628;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){ // стандартные узлы
    var num = 629;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){ // стандартные узлы
    var num = 630;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){ // стандартные узлы
    var num = 631;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){ // стандартные узлы
    var num = 632;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });


  $(function(){ // стандартные узлы последний
    var topPos = $('#floating6106').offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $('#footer6106').offset().top-55;  // текущая позиция нижнего блока
        height = $('#floating6106').outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$('#floating6106').addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$('#floating6106').removeClass('fixed-div');}
    else {$('#floating6106').removeClass('fixed-div');}
    });
  });

  ///////
  $(function(){ // листы титульные
    var num = 24;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 25;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 26;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 27;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

//////

$(function(){
    var num = 28;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 29;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 30;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 31;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  //////

$(function(){
    var num = 32;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 33;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 34;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 35;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

    //////

$(function(){
    var num = 36;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 37;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 38;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 39;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 40;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

      //////

$(function(){
    var num = 41;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 42;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 43;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 44;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 45;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + 7;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

       //////

$(function(){
    var num = 46;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 47;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 48;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 49;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 50;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 51;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 52;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 53;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 54;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 55;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
        var num = 1078;  
        var floating ='#floating' + num;
        var footer     ='#footer'  + num;
        var topPos = $(floating).offset().top-55;// текущая позиция блока-f
        
        $(window).scroll(function() { 
        var top = $(document).scrollTop(), // число прокрутки
            pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
            height = $(floating).outerHeight(); // высота блока-f
        if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
        else if (top > pip - height) {$(floating).removeClass('fixed-div');}
        else {$(floating).removeClass('fixed-div');}
        });
      });
    //   $(function(){
    //     var num = 1088;  
    //     var floating ='#floating' + num;
    //     var footer     ='#footer'  + num;
    //     var topPos = $(floating).offset().top-55;// текущая позиция блока-f
        
    //     $(window).scroll(function() { 
    //     var top = $(document).scrollTop(), // число прокрутки
    //         pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
    //         height = $(floating).outerHeight(); // высота блока-f
    //     if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    //     else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    //     else {$(floating).removeClass('fixed-div');}
    //     });
    //   });
//   $(function(){
//     var num = 56;  
//     var floating ='#floating' + num;
//     var footer     ='#footer'  + num;
//     var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
//     $(window).scroll(function() { 
//     var top = $(document).scrollTop(), // число прокрутки
//         pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
//         height = $(floating).outerHeight(); // высота блока-f
//     if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
//     else if (top > pip - height) {$(floating).removeClass('fixed-div');}
//     else {$(floating).removeClass('fixed-div');}
//     });
//   });
//   $(function(){
//     var num = 57;  
//     var floating ='#floating' + num;
//     var footer     ='#footer'  + num;
//     var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
//     $(window).scroll(function() { 
//     var top = $(document).scrollTop(), // число прокрутки
//         pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
//         height = $(floating).outerHeight(); // высота блока-f
//     if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
//     else if (top > pip - height) {$(floating).removeClass('fixed-div');}
//     else {$(floating).removeClass('fixed-div');}
//     });
//   });
  $(function(){
    var num = 58;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

         //////

$(function(){
    var num = 59;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 60;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 61;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 62;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num; 
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 63;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 64;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 65;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 66;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 67;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 68;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  ///
  $(function(){
    var num = 69;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 70;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  ///
  $(function(){
    var num = 71;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 72;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 73;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 74;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 75;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 76;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 77;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 78;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 79;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var num = 80;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  ////
  $(function(){
    var num = 81;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 82;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var num = 83;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 84;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var num = 85;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 86;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  ////
  $(function(){
    var num = 87;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 88;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var num = 89;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 90;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  
  $(function(){
    var num = 91;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 92;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
///
$(function(){
    var num = 93;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 94;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  ///
$(function(){
    var num = 95;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 96;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
    ///
$(function(){
    var num = 97;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 98;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
      ///
$(function(){
    var num = 99;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 100;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
        ///
$(function(){
    var num = 101;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 102;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
          ///
$(function(){
    var num = 103;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 104;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
            ///
$(function(){
    var num = 105;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 106;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
              ///
$(function(){
    var num = 107;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 108;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
                ///
$(function(){
    var num = 109;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 110;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
                  ///
$(function(){
    var num = 111;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 112;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
                    ///
$(function(){
    var num = 113;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 114;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 115;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 116;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
                      ///

 
  ///
  $(function(){
    var num = 124;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 125;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 126;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 127;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });

  $(function(){
    var num = 1281;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 1282;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 1283;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 1284;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 1285;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
//   $(function(){
//     var num = 1286;  
//     var floating ='#floating' + num;
//     var footer     ='#footer'  + num;
//     var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
//     $(window).scroll(function() { 
//     var top = $(document).scrollTop(), // число прокрутки
//         pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
//         height = $(floating).outerHeight(); // высота блока-f
//     if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
//     else if (top > pip - height) {$(floating).removeClass('fixed-div');}
//     else {$(floating).removeClass('fixed-div');}
//     });
//   });




  ///
  $(function(){
    var num = 128;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 129;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 130;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
   ///
   $(function(){
    var num = 131;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 132;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 133;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 134;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 135;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 136;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 137;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 138;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
   ///
   $(function(){
    var num = 139;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 140;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 141;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 142;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 143;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 144;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 145;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 146;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 147;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 148;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 149;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 150;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 151;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  ///
  $(function(){
    var num = 152;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  $(function(){
    var num = 153;  
    var floating ='#floating' + num;
    var footer     ='#footer'  + num;
    var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
    $(window).scroll(function() { 
    var top = $(document).scrollTop(), // число прокрутки
        pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
        height = $(floating).outerHeight(); // высота блока-f
    if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
    else if (top > pip - height) {$(floating).removeClass('fixed-div');}
    else {$(floating).removeClass('fixed-div');}
    });
  });
  ///
//   $(function(){
//     var num = 154;  
//     var floating ='#floating' + num;
//     var footer     ='#footer'  + num;
//     var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
//     $(window).scroll(function() { 
//     var top = $(document).scrollTop(), // число прокрутки
//         pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
//         height = $(floating).outerHeight(); // высота блока-f
//     if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
//     else if (top > pip - height) {$(floating).removeClass('fixed-div');}
//     else {$(floating).removeClass('fixed-div');}
//     });
//   });
//   $(function(){
//     var num = 155;  
//     var floating ='#floating' + num;
//     var footer     ='#footer'  + num;
//     var topPos = $(floating).offset().top-55;// текущая позиция блока-f
    
//     $(window).scroll(function() { 
//     var top = $(document).scrollTop(), // число прокрутки
//         pip = $(footer).offset().top-55;  // текущая позиция нижнего блока
//         height = $(floating).outerHeight(); // высота блока-f
//     if (top > topPos && top < pip - height) {$(floating).addClass('fixed-div').removeAttr("style");}// скролл больше позиции блока-f и меньше позиции нижнего минус высота блока-f
//     else if (top > pip - height) {$(floating).removeClass('fixed-div');}
//     else {$(floating).removeClass('fixed-div');}
//     });
//   });