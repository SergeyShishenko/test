<?php
require('header-index.php');
$loader = require_once '../Classes/Autoloader.php';
// require_once '../Classes/Autoloader.php';

$loader->addNamspacePath('Test', dirname(__DIR__) . '/Classes/Test/');
// echo dirname(__DIR__) . '/Classes/Test/';
use Test\Test;
$my = new Test("Привет из класса!");

//добавить группу `grupp` 4 ШТАНГИ МЕБЕЛЬНЫЕ  group_4  (footer.php)

?>


<p>_<?php echo $my->getOutput(); ?>_</p>

<?php
    //подключаем конфигурационный файл
    define('__ROOT__', dirname(dirname(__FILE__))); 
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
    require_once(dirname(__ROOT__).'/DATA/TABLES/configDB.php'); 
    // echo dirname(__ROOT__).'/DATA/TABLES/configDB.php';
    $dbconn=dbconnect();
    ?>
<footer class="row">


    <div class="input-group">
        <span class="input-group-addon cls">X</span>
        <input type="text" value="Светильник штанга для гардероба, под светодиодную ленту 2500 мм" name="add_Furn"
            class="form-control text add" placeholder="Наименование фурнитуры" id="Furn" title="Наименование фурнитуры">
    </div>

    <div class="input-group">
        <span class="input-group-addon cls">X</span>
        <input type="text" value="833.72.790" name="add_Art" class="text add form-control" size="150"
            placeholder="Артикул" id="Art" title="Артикул">
    </div>

    <div class="input-group">
        <span class="input-group-addon cls">X</span>
        <input type="text" value="" name="add_Alias1" class="text add form-control" size="150"
            placeholder="Псевдоним Артикула" id="Alias1" title="Псевдоним Артикула">
    </div>
    <div class="input-group">
        <span class="input-group-addon cls">X</span>
        <input type="text" value="" name="add_Alias2" class="text add form-control" size="150"
            placeholder="Псевдоним Артикула" id="Alias2" title="Псевдоним Артикула">
    </div>
    <div class="input-group">
        <span class="input-group-addon cls">X</span>
        <input type="text" value="" name="add_Alias3" class="text add form-control" size="150"
            placeholder="Псевдоним Артикула" id="Alias3" title="Псевдоним Артикула">
    </div>

    <div class="input-group">
        <span class="input-group-addon cls by-default">X</span>
        <input type="text" value="./dist/filesdb/images/test.png" name="add_NameFile" class="text add form-control"
            size="150" placeholder="Имя файла изображения" id="NameFile" title="Имя файла изображения">
    </div>

    <select id="grupp_id" name="add_grupp_id" class="text add form-control"
        title="Номер группы (1-МЕХАНИЗМЫ ВЫДВИЖЕНИЯ ДЛЯ ЯЩИКОВ,2-ПЕТЛИ для ФАСАДОВ, 3-КРЕПЕЖ И МЕТИЗЫ, 4-ШТАНГИ МЕБЕЛЬНЫЕ) ">
        <option value="1">МЕХАНИЗМЫ ВЫДВИЖЕНИЯ ДЛЯ ЯЩИКОВ</option>
        <option value="2">ПЕТЛИ для ФАСАДОВ</option>
        <option value="3">КРЕПЕЖ И МЕТИЗЫ</option>
        <option value="4" selected>ШТАНГИ МЕБЕЛЬНЫЕ</option>
        <option value="5">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ФАСАДОВ</option>
        <option value="6">МЕХАНИЗМЫ ПОДЪЕМНЫЕ для ФАСАДОВ</option>
        <option value="7">ОПОРЫ</option>
        <option value="8">ЗАЩЕЛКИ МЕБЕЛЬНЫЕ</option>
        <option value="9">ПОЛКОДЕРЖАТЕЛИ</option>
        <option value="10">ПАНТОГРАФЫ</option>
        <option value="11">РУЧКИ</option>
        <option value="12">МЕХАНИЗМЫ для РАЗДВИЖНЫХ СТОЛОВ</option>
        <option value="13">ВЫПРЯМИТЕЛИ для ФАСАДОВ</option>
        <option value="14">МЕХАНИЗМЫ для ОБУВНИЦ</option>
        <option value="15">ЗАЩЕЛКИ УНИВЕРСАЛЬНЫЕ</option>
        <option value="16">КОМПЛЕКТЫ ФУРНИТУРЫ ДЛЯ МОНТАЖА</option>
        <option value="17">ПЕТЛИ для ПОЛОТЕН ДВЕРНЫХ</option>
        <option value="18">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ПОЛОТЕН ДВЕРНЫХ</option>
        <option value="19">ЗАМКИ для ПОЛОТЕН ДВЕРНЫХ</option>
        <option value="20">ПОРОГИ АВТОМАТИЧЕСКИЕ для ПОЛОТЕН ДВЕРНЫХ</option>
        <option value="21">РИГЕЛИ (ШПИНГАЛЕТЫ) для ПОЛОТЕН ДВЕРНЫХ</option>
        <option value="22">ДОВОДЧИКИ для ПОЛОТЕН ДВЕРНЫХ</option>
        <option value="23">УПОРЫ НАПОЛЬНЫЕ и НАСТЕННЫЕ</option>
    </select>


    <select id="path_img_obj" name="add_path_img_obj" class="text add form-control"
        title="тип(директория: shtangi, svet, metizy) фурнитуры в папках thumbs,pagevpi,carousel">
        <option value="shtangi">Штанги</option>
        <option value="svet">Свет</option>
        <option value="metizy">Метизы</option>
        <option value="other" selected>Разное</option>
    </select>

    <input type="text" list="listBild" id="Bild" class="text add form-control" placeholder="Производитель">
    <datalist id="listBild" name="add_Bild" title="Производитель">
        <option value="HAFELE">HAFELE</option>
        <option value="МДМ-КОМПЛЕКТ">МДМ-КОМПЛЕКТ</option>
        <option value="МАКМАРТ">МАКМАРТ</option>
        <option value="BLUM">BLUM</option>
    </datalist>

    <input type="text" list="listColour" id="Colour" class="text add form-control" placeholder="Цвет">
    <datalist id="listColour" name="add_Colour" title="Цвет">
        <option value="алюминий">алюминий</option>
        <option value="сталь">сталь</option>
        <option value="Оцинкованный">Оцинкованный</option>
        <option value="Никелиров.">Никелиров.</option>
        <option value="металл">металл</option>
        <option value="Платиново-серый (RAL 7036)">Платиново-серый (RAL 7036)</option>
    </datalist>

    <input type="text" list="listUnit" id="Unit" class="text add form-control" placeholder="Ед.измерения">
    <datalist id="listUnit" name="add_Unit" title="Ед.измерения">
        <option value="шт.">шт.</option>
        <option value="комплектов">комплектов</option>
        <option value="м">м</option>
    </datalist>


    <div class="input-group">
        <span class="input-group-addon cls">X</span>
        <input type="text" value name="add_href_articul" class="text add form-control" size="150"
            placeholder="Cсылка на страницу фурнитуры" id="HrefArticul" title="Cсылка на страницу фурнитуры">

    </div>
    <!-- <div class="text-right"> -->
    <div>
        <button type="submit" class="button btn-success" id="parse">PARSE SITE <span
                class="glyphicon glyphicon-list-alt"></span></button>
    </div>
    <br>






    <button type="submit" class="button animated tada btn-primary" id="AddFurnSubmit">Добавить новую фурнитуру <span
            class="glyphicon glyphicon-plus-sign"></span></button>
    </div>
    <!-- <div id='outputting'></div> -->
    <div class="col-md-12 col-sm-12 col-xs-12 " id='outputID'>(data-objfurnid)ID -</div>
    <hr>
    <hr>
    <div class="col-md-12 col-sm-12 col-xs-12 " style="float:right;">
        <p class="col-md-12 col-sm-12 col-xs-12 powered-by ">&copy; <a href="#">Сергей Шишенко</a>
            <?php echo date('Y') ?></p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
$(document).ready(function() {

    // изменение цвета выбранных  input
    $(".add").change(function() {
        $(this).css("background-color", "LawnGreen ");
    });
    // очищение input

    $(".cls:not(.by-default)").click(function() {
        $(this).parent().find('input').val('').css("background-color", "White ");
    });
    $(".by-default").click(function() {
        $(this).parent().find('input').val('./dist/filesdb/images/test.png').css("background-color",
            "White ");
    });

    // Добавляем новую фурнитуру по шаблону, когда произошел клик по кнопке
    $("#AddFurnSubmit").click(function(e) {
        // alert('AddFurnSubmit');

        e.preventDefault();
        //simple validation
        if ($("#Furn").val() === "") {
            alert("Введите Наименование фурнитуры!");
            return false;
        }
        if ($("#Art").val() === "") {
            alert("Введите Артикул!");
            return false;
        }
        if ($("#NameFile").val() === "") {
            alert("Введите Имя файла изображения!");
            return false;
        }
        if ($("#grupp_id").val() === "") {
            alert("Введите номер группы!");
            return false;
        }
        if ($("#path_img_obj").val() === "") {
            alert("Введите тип(директория) фурнитуры в папках thumbs,pagevpi,carousel!");
            return false;
        }
        if ($("#Bild").val() === "") {
            alert("Введите Производитель!");
            return false;
        }
        if ($("#Colour").val() === "") {
            alert("Введите Цвет!");
            return false;
        }
        if ($("#Unit").val() === "") {
            alert("Введите Ед.измерения!");
            return false;
        }
        if ($("#HrefArticul").val() === "") {
            alert("Введите ссылку на страницу фурнитуры!");
            return false;
        }
        // return false;
        //post variables
        // var myData = "content_Furn="+ $("#Furn").val(); 
        var myData = "content_Furn=" + $("#Furn").val() + "&" +
            "content_Art=" + $("#Art").val() + "&" +
            "content_Alias1=" + $("#Alias1").val() + "&" +
            "content_Alias2=" + $("#Alias2").val() + "&" +
            "content_Alias3=" + $("#Alias3").val() + "&" +
            "content_NameFile=" + $("#NameFile").val() + "&" +
            "content_grupp_id=" + $("#grupp_id").val() + "&" +
            "content_path_img_obj=" + $("#path_img_obj").val() + "&" +
            "content_Bild=" + $("#Bild").val() + "&" +
            "content_Colour=" + $("#Colour").val() + "&" +
            "content_Unit=" + $("#Unit").val() + "&" +
            "content_HrefArticul=" + $("#HrefArticul").val();

        jQuery.ajax({
            type: "POST", // HTTP метод  POST или GET
            url: "response.php", //url-адрес, по которому будет отправлен запрос
            dataType: "text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
            data: myData, //данные, которые будут отправлены на сервер (post переменные)
            success: function(response) {
                $("#outputID").text(response);

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError); //выводим ошибку
            }
        });
    });

    $("#parse").click(function(e) {
        if ($("#HrefArticul").val() === "") {
            alert("Введите ссылку на страницу фурнитуры!");
            return false;
        }

        if (!isValidURL($("#HrefArticul").val())) {
            alert("Не верная ссылка!");
            return false;
        }
        e.preventDefault();
        console.clear();


        $(".add").each(function(index) {
            $(this).css("background-color", "White ");
        });
        // var Href = $("#HrefArticul").val().replace('\'', '');
        var Href = $("#HrefArticul").val();
        Href = Href.replace(/\\/g, '')
        var Data = "content_HrefArticul=" + Href;

        jQuery.ajax({
            type: "POST", // HTTP метод  POST или GET
            url: "pack_parse.php", //url-адрес, по которому будет отправлен запрос
            dataType: "text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
            data: Data, //данные, которые будут отправлены на сервер (post переменные)
            success: function(response) {

                var arr = JSON.parse(response);
                // var key='Furn';
                // var variable=arr[key];
                // console.log('arr[key] '+arr[key]);
                insertRes(arr, 'Furn');
                insertRes(arr, 'Art');
                insertRes(arr, 'Bild');
                insertRes(arr, 'Colour');
                insertRes(arr, 'Unit');
                insertRes(arr, 'NameFile');
                $("#outputID").text(arr['err']);



                $.each(arr, function(key, value) {
                    console.log(key + " -> " + value);
                });

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError); //выводим ошибку
            }
        });
    });

    $("body").on('click', '#checkbox', function() {
        if ($(this).is(':checked')) {
            $('.yri').show(100);
            $('.noyri').hide(100);
        } else {
            $('.yri').hide(100);
            $('.noyri').show(100);
        }
    });

    // валидация URL
    function isValidURL(url) {
        var RegExp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;

        if (RegExp.test(url)) {
            // console.log(url); 
            return true;
        } else {
            return false;
        }
    }

    function insertRes(arr, key) {
        if (typeof(arr[key]) != "undefined" && arr[key] !== null) {
            $("#" + key).val(arr[key]).css("background-color", "LawnGreen ");
        }
    }

}); //ready
</script>

</body>

</html>