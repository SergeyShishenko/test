    var modalId = $('#image-gallery');

        $(document)
            .ready(function () {

                loadGallery(true, 'a.thumbnail');

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
            });

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

            // $('#image-gallery').modal('show');

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
 