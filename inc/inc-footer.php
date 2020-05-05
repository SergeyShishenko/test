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
<?php 
    if($shablonyClass=='class="active"'){
?>
<!-- Генерация комплектов документов-->
    <div class="modal fade" id="GENModal" tabindex="-1" role="dialog" aria-labelledby="GENModalLabel" aria-hidden="true" style="margin-right: -30px;">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="margin-top: -2px !important;">×</button>
                        <h4 class="modal-title" id="GENModalLabel">Генерация титульных листов и ведомости ВПИ</h4>
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
                                <?php if($role =="admin"){ ?>
                                <div id="out_CNC"></div>
                                <input type="button" value="Печать CNC" onclick="PrintElem('#out_CNC')" />
                                <input type="button" value="Очистить" onclick="Reset('#out_CNC')" />
                                
                                <?php } ?>
                                <!-- <input type="button" value="Пустой бланк ВПИ" onclick="blankVPI()" /> -->

                                <a class='button-gen' id='blankVPI' href='javascript:void(0)' type='button' onclick="blankVPI()" style="float: left;">
                                    <span class='submit-gen' >Пустой бланк ВПИ</span>				
                                    <span class='loading-gen'><i class='fa fa-spinner fa-pulse '></i></span>				
                                    <!-- <span class='check-gen' title='ВПИ'><i>Скачать</i></span> -->
                                </a>
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
    <!-- /GENModal -->   
    <div id="addingDB">        
    </div>    
    <menu class="menu-cm" id="contextmenu">       
    </menu>
<!-- /Генерация комплектов документов -->
<?php 
    }
?>
 
 <?php 
    if($galleryShow){
?>
 <!-- image-gallery-->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="image-gallery">
            <div class=" modal-dialog modal-dialog-gallery  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <?php if($role =="admin"){ ?>
                        <button    id ="pr-move" class="btn btn-info im-download"  title="Переместить в СЕ"><i class="glyphicon glyphicon-move" aria-hidden="true"></i> Переместить в СЕ</button>
                        <?php } ?>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
     
                    <a href="./dist/files/dwg/pr-400-hh.dwg" type="button"  id ="pr-download" class="btn btn-info im-download" download="Профиль.dwg" title="Скачать" ><i class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></i> DWG</a>
               


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
 <?php 
    }
?>
<!-- /.modal -->
 <? if (!isset($notFrame)) {echo '<iframe src="index.php" width="100%" height="600" id="iframe_1"  style="display: none"  ></iframe>'; } ?>

    <!-- <iframe src="index.php" width="100%" height="600" id="iframe_1"  style="display: none"  ></iframe> -->


    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.js"></script> 
    <script src="./dist/js/application.js"></script> 
   <script src="./dist/js/script.js?v='<?php echo $scriptVersion; ?>'"></script>

   <script src="./dist/js/closest.js"></script>
	<script src="./dist/js/blazy.min.js"></script>
    <!-- Генерация -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  -->
    <!-- <script src="./dist/js/shortcut.js"></script> -->
    <!-- <?php echo $role; ?> -->
    <script src="./dist/js/drop.js?v='<?php echo $dropVersion; ?>'"></script>  
    <script src="./dist/js/selectcell.js?<?php echo $selectcell; ?>"></script>
    <script src="./dist/js/сontextMenu.js?<?php echo $сontextMenu; ?>"></script>
    <script src="./dist/js/vpiDB-search.js"></script>
    <?php if($role !="guest"){ ?>
        <script src="./dist/js/password-check.js?<?php echo $passworCheck; ?>"></script>
    <?php } ?>
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
<?php 
if($galleryShow){
//   echo "
// <script>alert( document.location.href";
// // echo $item_profile_directory_Class;
// echo ");</script>
// ";  
echo 
'<script src="./dist/js/gallery.js"></script>
<script src="./dist/js/live-search-gallery.js"></script>';
}
else{
    echo 
'<script src="./dist/js/live-search.js"></script>';

}

if ($shablonyClass=='class="active"'){

    echo '
   
    <script src="./dist/js/checkselect.js"></script>'; 
}

?>
<script>
$("#pr-move").click(function() {
    var m1 = $(this).parent().parent().find("#image-gallery-image").attr("src").slice(1);;
    var m2 = $(this).parent().parent().find("#pr-download").attr("href").slice(1);;
    // let m3 = $(this).parent().parent().find("#image-gallery-image").attr("src");
    // let m1new = m1.replace("GALLERY", "GALLERY/SBOROCHNYE-EDINICY");
    // let m2new = m2.replace("GALLERY", "GALLERY/SBOROCHNYE-EDINICY");
    // SBOROCHNYE-EDINICY
    // alert( m1 +"\n" + m2 + "\n\n" +"Перенести?")
    if(confirm( m1 +"\n" + m2 + "\n\n" +"Перенести?")){

      var data = "img="+ m1 +'&dwg=' + m2;
		$.ajax({
			url: 'users/moveFileToSE.php',
			type: 'POST',
			data: data,
			// beforeSend: function(){
			// 	$('#submit').next().text('Отправляю...');
			// },
			success: function(res){
				// $('#recall').find('input').val('');
                // $('#submit').next().html(res);
                // alert ("Файлы перенесены");
                alert (res);
			},
			error: function(){
				alert('Ошибка!');
			}
		});  

    }

    
    
});
</script>



    </body>
</html>
