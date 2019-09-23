            </div>
        </div>
    </article>    
    <footer class="bs-footer" role="contentinfo">
        <div class="container">
            <p class="text-center">Сайт был создан проектным подразделением компании "София-Декор" <a href="http://www.sofia-decor.ru">(http://www.sofia-decor.ru)</a> под руководством Черкашина Д.В.</p>
            <p class="text-center">© 2018–<?php echo date("Y");?> Разработчик: Шишенко С.В. </p>
           
        </div>
    </footer> 
<!-- .modal -->
<!-- Генерация -->
<div class="modal fade" id="GENModal" tabindex="-1" role="dialog" aria-labelledby="GENModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title" id="GENModalLabel">Генерация титульных листов</h4>
                </div>
                <div class="modal-body">                  
                    <a href="#up" id="down" class="go_to btn btn-default badge" title="ВНИЗ" style="margin-left: 15px;">
                    <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                    </a>                
                
                    <!-- <form id="frm">                         -->
                        <input type="hidden" id="tbl" value="">
                        <input type="hidden" id="field" value="">
                        <input type="hidden" id="fieldid" value="">
                        <input type="hidden" id="id" value="">
                        <input type="hidden" id="action" value="">                       
                        <div class="form-group ">                        
                            <ul class="list-tbl">        
                            </ul>
                            <div id="loading1" class="center">Загрузка...<div class="center"></div>
                        </div> 
                        <div class="row">               
                            <div id="drop-files" ondragover="return false">
                                <!-- <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo; или &laquo;Приложение КБ.xlsx&raquo; сюда</p> -->
                                <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo;  сюда</p>
                                <!-- <form > -->
                                <input type="file" id="uploadbtn" multiple  >
                                <!-- </form> -->
                            </div>
                            <div id="out_CNC"></div>
                            <input type="button" value="Печать CNC" onclick="PrintElem('#out_CNC')" />
                            <input type="button" value="Очистить" onclick="Reset('#out_CNC')" />


                            <? include 'vpi/inc-list-csv.php'; ?>
                            
                            <!-- /table-saved-files -->

                            <!-- Область предпросмотра -->
                            <div id="uploaded-holder"> 
                                <div id="dropped-files">
                                    <!-- Кнопки загрузить и удалить, а также количество файлов -->
                                    <div id="upload-button" class="note">
                                        <div class="center note">
                                            <span>0 Файлов</span>
                                            <a href="javascript:void(0)" class="upload note">Загрузить</a>
                                            <a href="javascript:void(0)" class="delete note">Удалить</a>
                                            <!-- <a href="javascript:void(0)" class="count note">Посчитать</a> -->
                                            <!-- Прогресс бар загрузки -->
                                            <div id="loading">
                                                <div id="loading-bar">
                                                    <div class="loading-color"></div>
                                                </div>
                                                <div id="loading-content"></div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <!-- Список загруженных файлов -->
                            <div id="file-name-holder">                      
                                <div id="uploaded-files">
                                    <!-- <h1>Загруженные данные:</h1> -->
                                </div>
                            </div>
            
                        </div>  
                    <!-- </form>                -->
                </div> 
            </div>
            <div class="modal-footer">
                <!-- <a href="#openModal">Открыть модальное окно</a> -->
                <!-- class="close" data-dismiss="modal" -->
                <a href="#down" id="up" class="go_to btn btn-default badge" title="ВВЕРХ" style="margin-left: 15px;">
                <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
                </a>
                <!-- <a href="#" class="btn btn-success"   id="CreateSubmit">Создать</a> -->
                <a href="#" class="btn btn-danger"   id="DelSubmit">Очистить</a>
                <a href="#" class="btn btn-default elm" data-dismiss="modal">Закрыть</a>
                <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="ChangeSubmit">Сохранить изменения</a> -->
                <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="AddSubmit">Добавить</a> -->

            </div>
        </div>
    </div>
</div>
 <!-- /.modal -->

 <!-- image-gallery -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="image-gallery">
            <div class=" modal-dialog modal-dialog-gallery  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">

                    <a href="./dist/files/dwg/pr-400-hh.dwg" type="button"  id ="pr-download" class="btn btn-info im-download" download="Пр_№400/ХХ.dwg" title="Скачать" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>


                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                            <i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" class="btn btn-secondary float-right" id="show-next-image">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
 <!--/image-gallery  -->

    <iframe src="index.php" width="100%" height="600" id="iframe_1"  style="display: none"  ></iframe>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.js"></script> 
    <script src="./dist/js/application.js"></script> 
   <script src="./dist/js/script.js?v='<?php echo $scriptVersion; ?>'"></script>

   <script src="./dist/js/closest.js"></script>
	<script src="./dist/js/blazy.min.js"></script>
    <!-- Генерация -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  -->
    <script src="./dist/js/shortcut.js"></script>
    <script src="./dist/js/drop.js?v='<?php echo $dropVersion; ?>'"></script>  
    <script src="./dist/js/selectcell.js"></script>

	<script>
    window.bLazy = new Blazy({
        //container: \'.container\',
        //validateDelay: 500,
		success: function(element){
			// console.log("Element loaded: ", element.nodeName);
		}
    });
    
    </script>
    <script>
        // Перезагрузить текущую страницу, без использования кэша     
        //$(document).ready(function(){ window.location.reload(true);}
    </script>
    <script>
            if (!name) {name = new Date ().getTime (); location.reload (true)}
        </script> 
<!-- gallery -->
<script>
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
    </script>
    </body>
</html>
