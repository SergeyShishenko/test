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
            url: "application/more/response.php", //url-адрес, по которому будет отправлен запрос
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
            url: "application/more/pack_parse.php", //url-адрес, по которому будет отправлен запрос
            dataType: "text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
            data: Data, //данные, которые будут отправлены на сервер (post переменные)
            success: function(response) {
                // console.log(response);
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