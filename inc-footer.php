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
                <!-- <a  href="#DelSubmit"><i class="fa-cart-plus" aria-hidden="true"></i>Вниз</a> -->
                <a href="#up" id="down" class="go_to btn btn-default badge" title="ВНИЗ" style="margin-left: 15px;">
                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                </a>
                <!-- <button type="button"  class="go_to" style="margin-left: 10px;"><i class="fa arrow-alt-circle-down" aria-hidden="true"></i> </button> -->
               
                        <form id="frm">
                            <!-- <p>Here settings can be configured...</p> -->
                            <input type="hidden" id="tbl" value="">
                            <input type="hidden" id="field" value="">
                            <input type="hidden" id="fieldid" value="">
                            <input type="hidden" id="id" value="">
                            <input type="hidden" id="action" value=""> 
                            <!-- <input type="hidden" id="file" value="">                        -->
                            <div class="form-group ">                        
                                <ul class="list-tbl">        
                                </ul>
                                <div id="loading1" class="center">Загрузка...<div class="center"></div></div> 
                                <div class="row">               
                            <div id="drop-files" ondragover="return false">
                            <!-- <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo; или &laquo;Приложение КБ.xlsx&raquo; сюда</p> -->
                            <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo;  сюда</p>
                        <!-- <form > -->
                            <input type="file" id="uploadbtn" multiple  >
                        <!-- </form> -->
                    </div>
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
                        </div>                          
                    </form>
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
    </body>
</html>
