
<section class="row" id="addfurn">
<h2 class="panel-title">Добавление фурнитуры в базу данных</h2>
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
    <div class="image"><img id="parseim" src="../dist/filesdb/images/test.png"></div>
    <div class="sell">
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
    </div>
    <div class="sell">
    <select id="path_img_obj" name="add_path_img_obj" class="text add form-control"
        title="тип(директория: shtangi, svet, metizy) фурнитуры в папках thumbs,pagevpi,carousel">
        <option value="shtangi">Штанги</option>
        <option value="svet">Свет</option>
        <option value="metizy">Метизы</option>
        <option value="other" selected>Разное</option>
    </select>
    </div>
    <div class="sell">
    <input type="text" list="listBild" id="Bild" class="text add form-control" placeholder="Производитель">
    <datalist id="listBild" name="add_Bild" title="Производитель">
        <option value="HAFELE">HAFELE</option>
        <option value="МДМ-КОМПЛЕКТ">МДМ-КОМПЛЕКТ</option>
        <option value="МАКМАРТ">МАКМАРТ</option>
        <option value="BLUM">BLUM</option>
    </datalist>
    </div>
    <div class="sell">
    <input type="text" list="listColour" id="Colour" class="text add form-control" placeholder="Цвет">
    <datalist id="listColour" name="add_Colour" title="Цвет">
        <option value="алюминий">алюминий</option>
        <option value="сталь">сталь</option>
        <option value="Оцинкованный">Оцинкованный</option>
        <option value="Никелиров.">Никелиров.</option>
        <option value="металл">металл</option>
        <option value="Платиново-серый (RAL 7036)">Платиново-серый (RAL 7036)</option>
    </datalist>
    </div>
    <div class="sell">
    <input type="text" list="listUnit" id="Unit" class="text add form-control" placeholder="Ед.измерения">
    <datalist id="listUnit" name="add_Unit" title="Ед.измерения">
        <option value="шт.">шт.</option>
        <option value="комплектов">комплектов</option>
        <option value="м">м</option>
    </datalist>
    </div>

    
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
    <!-- </div> -->
    <!-- <div id='outputting'></div> -->
    <div class="col-md-12 col-sm-12 col-xs-12 " id='outputID'>(data-objfurnid)ID -</div>


</section>