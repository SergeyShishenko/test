</head>

<body>
    <?php
    $cart = false; // корзина
    include 'inc/inc-header.php';
    ?>
    <!-- .modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-top: -2px !important;">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body full-screen">
                    <!-- <p id="content"></p> -->

                    <div id="im" data-dismiss="modal">

                        <!-- <img src="./dist/images/mdf-nakladka-051-dsh.png" alt=""class="img-thumbnail " > -->
                    </div>
                </div>
                <!-- <div class="modal-footer">-->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>-->
                <!-- <a href="img.jpg" type="button" class="btn btn-primary"download="img.jpg">Save</a> -->
                <!-- </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- .modalUnload -->
    <div class="modal fade" id="modalUnload" tabindex="-1" role="dialog" aria-labelledby="modalUnloadLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="margin-top: -2px;" data-dismiss="modal">×</button>
                    <h4 class="modal-title" id="modalUnloadLabel">modalUnload</h4>
                </div>
                <div class="modal-body  full-screen" style="font-size: medium; padding: 10px;">


                    <input id="sortpicture" type="file" name="sortpic" multiple>
                    <!-- <button id="upload">Upload</button> -->

                    <div id="unl">
                    </div>

                    <a class="content_toggle" href="#">Справка</a>
                    <div class="content_block" style="display: none;">
                        <p>&#9888; Для замены текущего изображения требуется выбрать и загрузить файл png, jpeg, jpg.</p>
                        <p>&#9888; Для замены файла excel требуется выбрать и загрузить документ xls или xlsx.</p>
                        <p>&#9888; Файл excel нужен для работы приложений сайта по генерации титульных листов.</p>
                        <p>&#9888; Если есть надпись  "Текущий файл excel: недоступен", то его загрузка не требуется.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <a href="#openModal">Открыть модальное окно</a> -->
                    <!-- class="close" data-dismiss="modal" -->
                    <!-- <a href="#" class="btn btn-danger" id="DelSubmit">Удалить</a> -->
                    <a href="#" class="btn btn-primary " id="upload">Upload</a>
                    <a href="#" class="btn btn-default" id="modalUnloadClose" data-dismiss="modal">Закрыть</a>
                    <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="ChangeSubmit">Сохранить изменения</a> -->
                    <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="AddSubmit">Добавить</a> -->


                </div>
            </div>
        </div>
    </div>
    <!-- /.modalUnload -->

    <?php
    ($role === "admin" || $role === "moderator") ?
        $overlayRight =
        '<div class="overlayRight">    
    <button          
      class="btn btn-info" 
      title="Загрузить новые данные" 
      data-toggle="modal"  
      data-target="#modalUnload"
      data-info="Загрузка новых файлов"
      >           
      <i class="glyphicon glyphicon-open" aria-hidden="true"></i>
      Загрузка файлов
    </button>
    </div>'
        : "";

    include 'inc/inc-personal-profile.php';
    include 'inc/inc-header-send-modal.php';
    include 'inc/inc-func.php';
