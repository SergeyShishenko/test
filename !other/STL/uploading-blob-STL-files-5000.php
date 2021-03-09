<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="stl.png" type="image/x-icon">
    <link rel="stylesheet" href="css/uploading.css">
    <title>Загрузка файла STL</title>
</head>

<body>
    <!-- https://css-tricks.com/examples/DragAndDropFileUploading//? источник -->
    <div id="drop-area" class=" box has-advanced-upload">
        <div class="box__input ">
            <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43">
                <path
                    d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z">
                </path>
            </svg>
            <input type="file" id="inputSTL" class="box__file">
            <label for="inputSTL"><strong>Выберите файл</strong><span class="box__dragndrop"> или перетащите
                    его сюда</span>.</label>
        </div>

    </div>
    <!-- <br> -->
    <!-- <br> -->
    <div class="row">
        <div id="greyProgress" class="">
            <div id="greenBar"></div>
        </div>
        <!-- <br> -->
        <div id="information1" style="width: 40%"></div>
        <div id="information" style="width: 40%"></div>
        <div id="chunk-information" style="width: 40%"></div>
        <div id="response-information" style="width: 40%">Загрузите файл STL</div>
        <div id="info3" style="width: 40%"></div>
        <form name="Sum">
            <!-- Front, Back, Top, Bottom, Left, Right, General -->
            <ul style="  padding-left: 0px;">

                <li class="container">
                    <input type="checkbox" id="Front" value="0" checked>
                    Спереди:
                    <span class="checkmark Front">0</span>
                </li>

                <li class="container">
                    <input type="checkbox" id="Back" value="0" checked>
                    Сзади:
                    <span class="checkmark Back">0</span>
                </li>

                <li class="container">
                    <input type="checkbox" id="Top" value="0" checked>
                    Сверху:
                    <span class="checkmark Top">0</span>
                </li>

                <li class="container">
                    <input type="checkbox" id="Bottom" value="0" checked>
                    <b>Снизу:</b>
                    <span class="checkmark Bottom">0</span>
                </li>

                <li class="container">
                    <input type="checkbox" id="Left" value="0" checked>
                    Слева:
                    <span class="checkmark Left">0</span>
                </li>

                <li class="container">
                    <input type="checkbox" id="Right" value="0" checked>
                    Справа:
                    <span class="checkmark Right">0</span>
                </li>
                <li class="container">
                    <input type="checkbox" id="General" value="0" checked>
                    Общий вид:
                    <span class="checkmark General">0</span>
                </li>
                <output id="rezultat">Сумма площадей всех граней: 0</output>
            </ul>
        </form>
    </div>
    <script src="js/uploading.js"></script>
</body>

</html>
<!--https://dev.to/api_video/uploading-large-files-with-javascript-o4i-->