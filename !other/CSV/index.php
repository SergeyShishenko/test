<?php
header ("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--[if lt IE 9]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]-->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href='uploadify.css' rel='stylesheet'>
    <link href="style.css" rel="stylesheet">
    <link href="drop.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- <a href="#openModal">Открыть модальное окно</a> -->
<br>
<a href="#" data-toggle="modal" data-target="#myModal" >Открыть модальное окно</a>

 <!-- modal2 -->
 <div id="openModal" class="modalDialog">

    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Модальное окно</h2>
        
    </div>

</div>
<!-- /modal2 -->

 <!-- .modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                     <form id="frm">
                        <!-- <p>Here settings can be configured...</p> -->
                        <input type="hidden" id="tbl" value="">
                        <input type="hidden" id="field" value="">
                        <input type="hidden" id="fieldid" value="">
                        <input type="hidden" id="id" value="">
                        <input type="hidden" id="action" value="">                        
                        <div class="form-group ">                        
                            <ul class="list-tbl">        
                            </ul>
                            <div id="loading1" class="center">Загрузка...<div class="center"></div></div> 
                            <div class="row">               
                    <div id="drop-files" ondragover="return false">
                        <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo; сюда</p>
                        <form >
                            <input type="file" id="uploadbtn" multiple style="display: none;" >
                        </form>
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
                            <h1>Загруженные данные</h1>
                        </div>
                    </div>
                
                </div>               
                        </div>                          
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <a href="#openModal">Открыть модальное окно</a> -->
                    <!-- class="close" data-dismiss="modal" -->
                    <!-- <a href="#" class="btn btn-danger"   id="DelSubmit">Удалить</a> -->
                    <a href="#" class="btn btn-default" data-dismiss="modal">Закрыть</a>
                    <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="ChangeSubmit">Сохранить изменения</a> -->
                    <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="AddSubmit">Добавить</a> -->

                </div>
            </div>
        </div>
    </div>
 <!-- /.modal -->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="bootstrap.js"></script>
<script src="drop.js"></script>   
</body>
</html>