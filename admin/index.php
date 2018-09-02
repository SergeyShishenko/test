<?php require('header.php'); ?>
<!-- <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div> -->


<!-- ПРОБА -->
<article id="responds">

    

    
    <?php
    // //подключаем конфигурационный файл
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

    // $dbconn=dbconnect();

    // //MySQL запрос
    // $Result = mysqli_query($dbconn,"SELECT id,content FROM add_delete_record");

    // // получаем все записи из таблицы add_delete_record
    // while($row = mysqli_fetch_array($Result))
    // {
    // echo '<div id="item_'.$row["id"].'">';
    // echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-'.$row["id"].'">';
    // echo '<img src="img/icon_del.gif" border="0" />';
    // echo '</a></div>';
    // echo $row["content"].'</div>';
    // }

    // //Закрывает соединение с сервером MySQL
    // mysqli_close($dbconn);
    ?>

</article>

<script>
       $('ul.nav-tabs li').hover(function () {
        // $('a', this).fadeToggle(1000);
        // $(this).find('.gallery-controls').remove();
        $(this).append('<div class=" tab-controls">' + '<p><a href="#" class="gallery-edit btn" ><i class="glyphicon glyphicon-edit"></i></a></p>' +  '</div>');
        $(this).find('.tab-controls').stop().animate({'margin-top': '-15'}, 400);
    }, function () {
        // $('a', this).fadeToggle(1000);
        $(this).find('.tab-controls').stop().animate({'margin-top': '0'}, 200, function () {  $(this).remove();   });
    });
</script>

<script>
   $(document).ready(function() {
    // Добавляем новую запись, когда произошел клик по кнопке
        $("#FormSubmit").click(function (e) {

            e.preventDefault();

            if($("#contentText").val()==="") //simple validation
            {
                alert("Введите наименование!");
                return false;
            }

            var myData = "content_txt="+ $("#contentText").val(); //post variables

            jQuery.ajax({
                type: "POST", // HTTP метод  POST или GET
                url: "response.php", //url-адрес, по которому будет отправлен запрос
                dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
                data:myData, //данные, которые будут отправлены на сервер (post переменные)
                success:function(response){
                $("#responds").append(response);
                $("#contentText").val(''); //очищаем текстовое поле после успешной вставки
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(thrownError); //выводим ошибку
                }
            });
        });

        //Удаляем запись при клике по крестику
        // $("body").on("click", "#responds .del_button", function(e) {
        //     e.preventDefault();
        //     var clickedID = this.id.split("-"); //Разбиваем строку (Split работает аналогично PHP explode)
        //     var DbNumberID = clickedID[1]; //и получаем номер из массива
        //     var myData = 'recordToDelete='+ DbNumberID; //выстраиваем  данные для POST

        //     jQuery.ajax({
        //         type: "POST", // HTTP метод  POST или GET
        //         url: "response.php", //url-адрес, по которому будет отправлен запрос
        //         dataType:"text", // Тип данных
        //         data:myData, //post переменные
        //         success:function(response){
        //         // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
        //         $('#item_'+DbNumberID).fadeOut("slow");
        //         },
        //         error:function (xhr, ajaxOptions, thrownError){
        //             //выводим ошибку
        //             alert(thrownError);
        //         }
        //     });
        // });


      $("body").on( "click","#responds .btn-minimize",function (e) {
        e.preventDefault();
        var $target = $(this).parent().parent().next('.box-content');
        if ($target.is(':visible')) $('i', $(this)).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        else                       $('i', $(this)).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $target.slideToggle();
    });
               

// $("#foo").on("hover",function(e) {
//   if(e.type == "mouseenter") {
//     console.log("over");
//   }
//   else if (e.type == "mouseleave") {
//     console.log("out");
//   }
// });



//              $("body").on( "hover","ul.thumbnails.gallery li.thumbnail",function (e) {
//          alert();
//                 if(e.type == "mouseenter") {
//     console.log("over");
//   }
//   else if (e.type == "mouseleave") {
//     console.log("out");
//   }
// });

$("body").on( "mouseenter","ul.thumbnails.gallery li.thumbnail",function () {
    console.log("over");
    $('img', this).fadeToggle(1000);
    $(this).find('.gallery-controls').remove();
    $(this).append('<div class="well gallery-controls">' +
        '<p><a href="#" class="gallery-edit btn" title="РЕДАКТИРОВАТЬ"><i class="glyphicon glyphicon-edit" ></i></a> <a href="#" class="gallery-add btn" title="ДОБАВИТЬ ЭЛЕМЕНТ"><i class="glyphicon glyphicon-plus-sign"></i></a></p>' +
        '</div>');
    $(this).find('.gallery-controls').stop().animate({'margin-top': '-1'}, 400);
});
$("body").on( "mouseleave","ul.thumbnails.gallery li.thumbnail",function () {
    console.log("out");
    $('img', this).fadeToggle(1000);
    $(this).find('.gallery-controls').stop().animate({'margin-top': '-30'}, 200, function () {
        $(this).remove();
    });
});
                
          //gallery edit
    $("body").on( "click","ul.thumbnails.gallery li.thumbnail a.gallery-edit" , function (e) {
    e.preventDefault();
    //get image id
    // alert("click");
    alert('редактировать ' + $(this).parents('.thumbnail').attr('id'));
    }); 

    // gallery-add
    $("body").on( "click","ul.thumbnails.gallery li.thumbnail a.gallery-add" , function (e) {
    e.preventDefault();
    //get image id
    // alert("click");
    alert('добавить к ' + $(this).parents('.thumbnail').attr('id'));
    }); 

     $("body").on( "click","#responds .btn-setting",function (e) {
        e.preventDefault();
        $('#myModal').modal('show');
    });
     
       //gallery img click
       $("body").on( "click","ul.thumbnails.gallery li.thumbnail img" , function (e) {
    e.preventDefault();
    //get image id
    // alert("click");
    alert('Картинка ' + $(this).parents('.thumbnail').attr('id'));
    }); 

    });//ready
</script>

<?php require('footer.php'); ?>
