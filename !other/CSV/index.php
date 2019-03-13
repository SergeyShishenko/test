<?php
header ("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="Ru-ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--[if lt IE 9]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]-->
    <!-- <link href="bootstrap.min.css" rel="stylesheet"> -->
    <link href="bootstrap.css" rel="stylesheet">
    <link href="font-awesome.css" rel="stylesheet">
    <link href='uploadify.css' rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="drop.css" rel="stylesheet">
    <link href="submit-process.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <title>Document</title>
    <style>
            /* table.zakaz {
        width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        } */

        /* .zakaz  td {
            padding: 5px;
            text-align: center;
            border: 1px solid #999;
        } */

        .pressedTime > td {
            background-color: #eaedf6  !important;
            /* color: #ffffff; */
        }

        .zakaz  td {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        td[id^='def_']:hover{
            -webkit-touch-callout: text;
            -webkit-user-select: text;
            -khtml-user-select: text;
            -moz-user-select: text;
            -ms-user-select: text;
            user-select: text;
            
        }
</style>
</head>
<body>
<!-- <a href="#openModal">Открыть модальное окно</a> -->
<br>
<a href="#" data-toggle="modal" data-target="#GENModal" >Открыть модальное окно</a>

 <!-- modal2 -->
 <div id="openModal" class="modalDialog">

    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Модальное окно</h2>
        
    </div>

</div>
<!-- /modal2 -->

 <!-- .modal -->
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
                            <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo; или &laquo;Приложение КБ.xlsx&raquo; сюда</p>
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
                    <a href="#" class="btn btn-success"   id="CreateSubmit">Создать</a>
                    <a href="#" class="btn btn-danger"   id="DelSubmit">Очистить</a>
                    <a href="#" class="btn btn-default elm" data-dismiss="modal">Закрыть</a>
                    <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="ChangeSubmit">Сохранить изменения</a> -->
                    <!-- <a href="#" class="btn btn-primary " data-dismiss="modal" id="AddSubmit">Добавить</a> -->

                </div>
            </div>
        </div>
    </div>
 <!-- /.modal -->

<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>  -->
<script src="../../dist/js/jquery.min.js"></script>
<script src="jquery-ui.js"></script> 
<script src="bootstrap.js"></script>

<script src="shortcut.js"></script>
<script src="drop.js"></script>  
<script src="selectcell.js"></script>   
<!-- <script src="submit-process.js"></script>      -->
</body>
</html>