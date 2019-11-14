    var modalId = $('#image-gallery');

        $(document)
            .ready(function () {

                loadGallery(true, 'a.thumbnail');

                //Эта функция отключает кнопки при необходимости
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

                //  @param setIDs        Устанавливает идентификаторы при загрузке DOM. Если используется счетчик PHP, установите значение false.
                //  @param setClickAttr  Задает атрибут для обработчика щелчков.


                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
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
                        // console.log(selector.html());
                        let $sel = selector;

                        current_image = $sel.data('image-id');
                        let $file = $sel.find('img').attr('alt').split("_")[0];
                         $file = $file+".dwg";
                        
                        $('#pr-download').attr('href',$sel.data('directory')+'/DWG/'+$file);
                        $('#pr-download').attr('download',$sel.data('title')+".dwg");
                            
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
                        // alert(window.location.href);

                        // db_search=$('a.thumbnail');
                        // db_search=$('a.thumbnail').data('title');
                        
                        // alert(db_search);

 //Живой поиск                      
// var db_search;


        
db_search=$('a.thumbnail');


 
  $(".who").bind("change keyup input click", function() {
    $(".search_result").empty();    
    if (this.value.length >= 2) {       
      var search_str = new RegExp(this.value, "i");      
      db_search.each(function() {
      var str = $(this).data('title'); // получаем текст с каждого элемента
    //   var str = $(this).text(); // получаем текст с каждого элемента
      console.log(str);
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
           $(".search_result").append('<li><a href="' + aref + '"><img src="' + aimg +'"  >' + result + "</a></li>"  );         
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

                
                // 

            //    запуск найденного элементу
                //  $('[data-image-id="' + "353" + '"]').trigger( "click" );
  
            //    $('.navbar-fixed-top').click(selscroll(380));
              selscroll('351');
            // $("body").animate({"scrollTop":0},"slow");
                
});//ready

        // build key actions
        $(document)
            .keydown(function (e) {
                switch (e.which) {
                    case 37: // left
                        // alert('left '+ modalId.data('bs.modal'));
                        // if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        if (modalId.data('bs.modal') && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image').click();
                        }
                        break;

                    case 39: // right
                        // alert('right');
                        // if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        if (modalId.data('bs.modal') && $('#show-next-image').is(":visible")) {
                            $('#show-next-image').click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });


           

            function toTranslit( text ) {
                return text.replace( /([а-яё])|([\s_-])|([^a-z\d])/gi,
                    function( all, ch, space, words, i ) {
                        if ( space || words ) {
                            return space ? '-' : '';
                        }
                        var code = ch.charCodeAt(0),
                            next = text.charAt( i + 1 ),
                            index = code == 1025 || code == 1105 ? 0 :
                                code > 1071 ? code - 1071 : code - 1039,
                            t = ['yo','a','b','v','g','d','e','zh',
                                'z','i','y','k','l','m','n','o','p',
                                'r','s','t','u','f','h','c','ch','sh',
                                'shch','','y','','e','yu','ya'
                            ],
                            next = next && next.toUpperCase() === next ? 1 : 0;
                        return ch.toUpperCase() === ch ? next ? t[ index ].toUpperCase() :
                            t[ index ].substr(0,1).toUpperCase() +
                                t[ index ].substring(1) : t[ index ];
                    }
                );
            }
 