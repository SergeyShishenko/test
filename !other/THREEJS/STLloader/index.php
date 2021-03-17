<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/uploading.css">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="js/lib/three.js"></script>
    <!-- <script src="js/lib/STLLoader.js"></script> -->
    <script src="js/lib/STLLoaderChange.js"></script>
    <script src="js/lib/OrbitControls.js"></script>
    <title>STL loader</title>
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
            <input type="file" id="inputSTL" class="box__file" accept=".stl">
            <label for="inputSTL"><strong>Выберите файл</strong><span class="box__dragndrop"> или перетащите
                    его сюда</span>.</label>
        </div>
        <!-- точность -->
        <!-- <input type="range" min="1" max="5" id="size"   oninput="accuracy()"    value="3"></p> -->
        <input type="range" min="1" max="3" id="accuracy"   class="slider"    value="1">
        <div class="box__dragndrop">

        Точность: <span id="demo"></span>
        </div>
        <!-- https://html5css.ru/edithtm/index.php -->
    </div>
    <!-- <br> -->
    <!-- <br> -->
    <div class="row">
        <div id="greyProgress" class="">
            <div id="greenBar"></div>
        </div>
        <!-- <br> -->
        <div id="information1"></div>
        <div id="information"></div>
        <div id="chunk-information"></div>
        <div id="response-information">Загрузите файл STL</div>
        <div id="info3"></div>
        <form name="Sum">
            <!-- Front, Back, Top, Bottom, Left, Right, General -->
            <ul style=" padding-left: 0px;width: 200px;">

                <li class="container">
                    <!-- <input type="button" class="btn-dir" id="dir_ft" value="Спереди" style="background-color: DodgerBlue;"> -->
                    <div class="menu-box" title="Спереди" id="dir_ft">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
                            <!-- x(вправо), y(вниз)-->
                            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
                                <!-- back -->
                                <polygon points="30,0 100,0 100,70 30,70" fill="none" />
                                <!-- front -->
                                <polygon class="hover" points="0,30 70,30 70,100 0,100 " fill="blue" />
                                <!-- top -->
                                <polygon points="0,30 30,0 100,0 70,30 " fill="none" />
                                <!-- bottom-->
                                <polygon points="0,100 30,70 100,70 70,100 " fill="none" />
                                <!-- right-->
                                <polygon points="70,30 100,0 100,70 70,100 " fill="none" />
                                <!-- left-->
                                <polygon points="0,30 30,0 30,70 0,100 " fill="none" />
                            </g>
                        </svg>
                    </div>
                    <input type="checkbox" id="Front" value="0" checked>
                    <!-- Спереди: -->
                    <span class="checkmark Front">0</span>
                </li>

                <li class="container">
                    <!-- <input type="button" class="btn-dir" id="dir_bk" value="Сзади" style="background-color: Gold;"> -->
                    <div class="menu-box" title="Сзади" id="dir_bk">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
                            <!-- x(вправо), y(вниз)-->
                            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
                                <!-- back -->
                                <polygon class="hover" points="30,0 100,0 100,70 30,70" fill="yellow" />
                                <!-- front -->
                                <polygon points="0,30 70,30 70,100 0,100 " fill="none" />
                                <!-- top -->
                                <polygon points="0,30 30,0 100,0 70,30 " fill="none" />
                                <!-- bottom-->
                                <polygon points="0,100 30,70 100,70 70,100 " fill="none" />
                                <!-- right-->
                                <polygon points="70,30 100,0 100,70 70,100 " fill="none" />
                                <!-- left-->
                                <polygon points="0,30 30,0 30,70 0,100 " fill="none" />
                            </g>
                        </svg>
                    </div>
                    <input type="checkbox" id="Back" value="0" checked>
                    <!-- Сзади: -->
                    <span class="checkmark Back">0</span>
                </li>

                <li class="container">
                    <!-- <input type="button" class="btn-dir" id="dir_tp" value="Сверху" style="background-color: Lawngreen;"> -->
                    <div class="menu-box" title="Сверху" id="dir_tp">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
                            <!-- x(вправо), y(вниз)-->
                            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
                                <!-- back -->
                                <polygon points="30,0 100,0 100,70 30,70" fill="none" />
                                <!-- front -->
                                <polygon points="0,30 70,30 70,100 0,100 " fill="none" />
                                <!-- top -->
                                <polygon class="hover" points="0,30 30,0 100,0 70,30 " fill="green" />
                                <!-- bottom-->
                                <polygon points="0,100 30,70 100,70 70,100 " fill="none" />
                                <!-- right-->
                                <polygon points="70,30 100,0 100,70 70,100 " fill="none" />
                                <!-- left-->
                                <polygon points="0,30 30,0 30,70 0,100 " fill="none" />
                            </g>
                        </svg>
                    </div>
                    <input type="checkbox" id="Top" value="0" checked>
                    <!-- Сверху: -->
                    <span class="checkmark Top">0</span>
                </li>

                <li class="container">
                    <div class="menu-box" title="Снизу" id="dir_bm">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
                            <!-- x(вправо), y(вниз)-->
                            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
                                <!-- back -->
                                <polygon points="30,0 100,0 100,70 30,70" fill="none" />
                                <!-- front -->
                                <polygon points="0,30 70,30 70,100 0,100 " fill="none" />
                                <!-- top -->
                                <polygon points="0,30 30,0 100,0 70,30 " fill="none" />
                                <!-- bottom-->
                                <polygon class="hover" points="0,100 30,70 100,70 70,100 " fill="magenta" />
                                <!-- right-->
                                <polygon points="70,30 100,0 100,70 70,100 " fill="none" />
                                <!-- left-->
                                <polygon points="0,30 30,0 30,70 0,100 " fill="none" />
                            </g>
                        </svg>
                    </div> <input type="checkbox" id="Bottom" value="0" checked>
                    <!-- <b>Снизу:</b> -->
                    <span class="checkmark Bottom">0</span>
                </li>

                <li class="container">
                    <!-- <input type="button" class="btn-dir" id="dir_lt" value="Слева" style="background-color: cyan;"> -->
                    <div class="menu-box" title="Слева" id="dir_lt">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
                            <!-- x(вправо), y(вниз)-->
                            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
                                <!-- back -->
                                <polygon points="30,0 100,0 100,70 30,70" fill="none" />
                                <!-- front -->
                                <polygon points="0,30 70,30 70,100 0,100 " fill="none" />
                                <!-- top -->
                                <polygon points="0,30 30,0 100,0 70,30 " fill="none" />
                                <!-- bottom-->
                                <polygon points="0,100 30,70 100,70 70,100 " fill="none" />
                                <!-- right-->
                                <polygon points="70,30 100,0 100,70 70,100 " fill="none" />
                                <!-- left-->
                                <polygon class="hover" points="0,30 30,0 30,70 0,100 " fill="cyan" />
                            </g>
                        </svg>
                    </div>
                    <input type="checkbox" id="Left" value="0" checked>
                    <!-- Слева: -->
                    <span class="checkmark Left">0</span>
                </li>

                <li class="container">
                    <!-- <input type="button" class="btn-dir" id="dir_rt" value="Справа" style="background-color: Tomato	;"> -->
                    <div class="menu-box" title="Справа" id="dir_rt">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
                            <!-- x(вправо), y(вниз)-->
                            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
                                <!-- back -->
                                <polygon   points="30,0 100,0 100,70 30,70" fill="none" />
                                <!-- front -->
                                <polygon  points="0,30 70,30 70,100 0,100 " fill="none" />
                                <!-- top -->
                                <polygon  points="0,30 30,0 100,0 70,30 " fill="none" />
                                <!-- bottom-->
                                <polygon  points="0,100 30,70 100,70 70,100 " fill="none" />
                                <!-- right-->
                                <polygon class="hover" points="70,30 100,0 100,70 70,100 " fill="red" />
                                <!-- left-->
                                <polygon  points="0,30 30,0 30,70 0,100 " fill="none" />
                            </g>
                        </svg>
                    </div>
                    <input type="checkbox" id="Right" value="0" checked>
                    <!-- Справа: -->
                    <span class="checkmark Right">0</span>
                </li>
                <li class="container">
                    <!-- <input type="button" class="btn-dir" id="dir_g" value="Общий вид"> -->
                    <div class="menu-box" title="Общий вид" id="dir_g">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101"
                            style="cursor:pointer;">

                            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">

                                <!-- <polygon class="hover"  points="30,0 100,0 100,70 30,70"
                                fill="none"  /> -->
                                <!-- front -->
                                <polygon class="hover" points="0,30 70,30 70,100 0,100 "
                                fill="#939191" />
                                <!-- top -->
                                <polygon class="hover"  points="0,30 30,0 100,0 70,30 "
                                fill="#c8c5c5"  />

                                <!-- <polygon class="hover" points="0,100 30,70 100,70 70,100 "
                                fill="none"  /> -->
                                <!-- right-->
                                <polygon class="hover" points="70,30 100,0 100,70 70,100 "
                                fill="#b8b5b5"  />

                                <!-- <polygon class="hover" points="0,30 30,0 30,70 0,100 "
                                fill="none"  /> -->
                            </g>
                        </svg>
                    </div>
                    <input type="checkbox" id="General" value="0" checked>
                    <!-- Общий вид: -->
                    <span class="checkmark General">0</span>
                </li>
                <output id="rezultat">Сумма площадей всех граней: 0</output>
            </ul>
        </form>
    </div><!-- row-->
    <!-- <input type="file" id="STL" class="box__file" accept=".stl" > -->


    <div id="inset">

    </div>

    <script src="js/uploading.js"></script>
    <script src="js/script-boxBound.js"></script>
</body>

</html>