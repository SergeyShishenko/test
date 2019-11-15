function selscroll($id){
    var $sel =$('[data-image-id="' + $id + '"]');
    var scroll_Top = $sel.offset().top-100;
                console.log(scroll_Top);

                // скроллим страницу на значение равное позиции элемента
                // $('html, body').animate({ scrollTop: scrollTop }, 600);
                $('html').animate({ scrollTop: scroll_Top }, 600);
                // $(document).scrollTop(scroll_Top);
                $sel.focus().trigger( "click" );
                $sel.css("border", "3px solid Blue");//border: 1px solid #dddddd; было
                   
               
              
                return false;
}
//Живой поиск
db_search=$('a.thumbnail');


$(function() {    
  $(".who").bind("change keyup input click", function() {
   
    $(".search_result").empty();    
    if (this.value.length >= 2) {       
      var search_str = new RegExp(this.value, "i");      
      db_search.each(function() {
      var str = $(this).data('title'); // получаем title с каждого элемента
      var id = $(this).data('image-id'); // получаем id с каждого элемента
    //   var str = $(this).text(); // получаем текст с каждого элемента
    //   console.log(str);
        if (str.match(search_str) !== null) {
          // если совпадает строка с подстрокой    
          var result = str.replace(/^\s*(.*)\s*$/, "$1");
        //   result = result.replace(/-\d+/g, ""); //удалить
          result = result.replace(/[b]/g, "").replace(str.match(search_str),"<b>" + str.match(search_str) + "</b>" );
        //   result = result.replace(/[a]/g, "");
        //   result = result.replace(/[c-z]/g, ""); //удалить латинские символы
        //   result = result.replace(/[-]+/g, ""); //удалить
          result = result.replace(/~(.*)/ig,""); //удалить

          var aimg="./dist/images/no-foto.png";
          aimg = $(this).find("img").attr("src");
        //   var aref = $(this).find("img").attr("src");
           
        //   console.log('aref '+aref);
        //    if (typeof $(this).data("img") !== "undefined") {aimg = $(this).data("img");    
        //    }
        //    else
        //    { aimg = "./dist/images/no-foto.png";        
        //    }   
        //    $(".search_result").append('<li><a href="#" onclick="selscroll("' + id + '"); return false"><img src="' + aimg +'"  >' + result + "</a></li>"  );         
           $(".search_result").append('<li><a href="#" onclick="selscroll(' + id + '); return false"><img src="' + aimg +'" >' + result + "</a></li>"  );         
              
        //    $(".search_result").append('<li><a href="">'+ result + '</a></li>'  );         
        }
      });
    }
     else if(this.value.length ==1){$('span.zbz').css('visibility','hidden');}    
    else {
      $(".search_result").fadeOut();
      console.log('fadeOut2');
      $('span.zbz').css('visibility','visible');
    }
    if ($(".search_result li").length < 1) {    
      $(".search_result").fadeOut();
      console.log('fadeOut');
    } else {
      $(".search_result").show();
    }
  });

  $(".search_result").hover(function() {
    $(".who").blur(); //Убираем фокус с input
  });

  //При выборе результата поиска, прячем список и заносим выбранный результат в input
//   $(".search_result").on("click", "li", function() {
        
    
//         window.location = $(this).find("a").attr("href");
    
//         $(".search_result").fadeOut();
//      });

});
