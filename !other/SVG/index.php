<?php
// https://developer.mozilla.org/ru/docs/Web/SVG/Tutorial/Paths
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVG</title>
    <link rel="shortcut icon" href="svg.ico" type="image/x-icon">
    <style>
    .hover:hover {
        stroke: aqua;
    }

    .container {
        width: 25%;
        height: 0;
        padding-top: 25%;
        position: relative;
        overflow: hidden;
    }

    .menu-box, .menu-box>svg {
        width: 30px;
        height: 30px;

    }
    .menu-box{
        margin:5px;
        cursor:pointer;
    }

    .adaptive {
        position: absolute;
        top: 0;
        left: 0;
    }
    </style>

</head>

<body>

    <div class="menu-box" title="Спереди" id="dir_ft" >
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
            <!-- x(вправо), y(вниз)-->
            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
                <!-- back -->
                <polygon points="30,0 100,0 100,70 30,70"  fill="none"/>
                <!-- front -->
                <polygon  class="hover" points="0,30 70,30 70,100 0,100 " fill="blue" />
                <!-- top -->
                <polygon   points="0,30 30,0 100,0 70,30 " fill="none" />
                <!-- bottom-->
                <polygon  points="0,100 30,70 100,70 70,100 " fill="none" />
                <!-- right-->
                <polygon  points="70,30 100,0 100,70 70,100 " fill="none" />
                <!-- left-->
                <polygon   points="0,30 30,0 30,70 0,100 "fill="none" />
            </g>
        </svg>
    </div>
    <div class="menu-box" title="Сзади" id="dir_bk" >
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101" >
            <!-- x(вправо), y(вниз)-->
            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
               <!-- back -->
                <polygon class="hover" points="30,0 100,0 100,70 30,70"  fill="yellow"/>
                 <!-- front -->
                <polygon points="0,30 70,30 70,100 0,100 " fill="none" />
                <!-- top -->
                <polygon  points="0,30 30,0 100,0 70,30 " fill="none" />
                <!-- bottom-->
                <polygon  points="0,100 30,70 100,70 70,100 " fill="none" />
                <!-- right-->
                <polygon points="70,30 100,0 100,70 70,100 " fill="none" />
                <!-- left-->
                <polygon  points="0,30 30,0 30,70 0,100 "fill="none" />
            </g>
        </svg>
    </div>
    <div class="menu-box" title="Сверху" id="dir_tp">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101" >
            <!-- x(вправо), y(вниз)-->
            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
               <!-- back -->
                <polygon points="30,0 100,0 100,70 30,70"  fill="none"/>
                 <!-- front -->
                <polygon  points="0,30 70,30 70,100 0,100 " fill="none" />
                <!-- top -->
                <polygon class="hover" points="0,30 30,0 100,0 70,30 " fill="green" />
                <!-- bottom-->
                <polygon   points="0,100 30,70 100,70 70,100 " fill="none" />
                <!-- right-->
                <polygon  points="70,30 100,0 100,70 70,100 " fill="none" />
                <!-- left-->
                <polygon  points="0,30 30,0 30,70 0,100 "fill="none" />
            </g>
        </svg>
    </div>
    <div class="menu-box" title="Снизу" id="dir_bm">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
            <!-- x(вправо), y(вниз)-->
            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
               <!-- back -->
                <polygon  points="30,0 100,0 100,70 30,70"  fill="none"/>
                 <!-- front -->
                <polygon  points="0,30 70,30 70,100 0,100 " fill="none" />
                <!-- top -->
                <polygon  points="0,30 30,0 100,0 70,30 " fill="none" />
                <!-- bottom-->
                <polygon class="hover" points="0,100 30,70 100,70 70,100 " fill="magenta" />
                <!-- right-->
                <polygon  points="70,30 100,0 100,70 70,100 " fill="none" />
                <!-- left-->
                <polygon  points="0,30 30,0 30,70 0,100 "fill="none" />
            </g>
        </svg>
    </div>
    <div class="menu-box" title="Справа">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101" >
            <!-- x(вправо), y(вниз)-->
            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
               <!-- back -->
                <polygon class="hover" id="dir_bk" points="30,0 100,0 100,70 30,70"  fill="none"/>
                 <!-- front -->
                <polygon id="dir_ft"  points="0,30 70,30 70,100 0,100 " fill="none" />
                <!-- top -->
                <polygon  id="dir_tp" points="0,30 30,0 100,0 70,30 " fill="none" />
                <!-- bottom-->
                <polygon  id="dir_bm" points="0,100 30,70 100,70 70,100 " fill="none" />
                <!-- right-->
                <polygon  id="dir_rt" points="70,30 100,0 100,70 70,100 " fill="red" />
                <!-- left-->
                <polygon  id="dir_lt" points="0,30 30,0 30,70 0,100 "fill="none" />
            </g>
        </svg>
    </div>
    <div class="menu-box" title="Слева" id="dir_lt">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101">
            <!-- x(вправо), y(вниз)-->
            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
               <!-- back -->
                <polygon points="30,0 100,0 100,70 30,70"  fill="none"/>
                 <!-- front -->
                <polygon points="0,30 70,30 70,100 0,100 " fill="none" />
                <!-- top -->
                <polygon  points="0,30 30,0 100,0 70,30 " fill="none" />
                <!-- bottom-->
                <polygon  points="0,100 30,70 100,70 70,100 " fill="none" />
                <!-- right-->
                <polygon  points="70,30 100,0 100,70 70,100 " fill="none" />
                <!-- left-->
                <polygon class="hover" points="0,30 30,0 30,70 0,100 "fill="cyan" />
            </g>
        </svg>
    </div>
    <!-- <div class="menu-box" title="Спереди">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 101 101" style="cursor:pointer;">
          
            <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
               
                <polygon class="hover" id="dir_ft" points="30,0 100,0 100,70 30,70" style="fill: blue;" />
               
                <polygon class="hover" id="dir_bk" points="0,30 70,30 70,100 0,100 " style="fill: yellow;" />
               
                <polygon class="hover" id="dir_tp" points="0,30 30,0 100,0 70,30 " style="fill: green;" />
               
                <polygon class="hover" id="dir_bm" points="0,100 30,70 100,70 70,100 " style="fill: magenta;" />
               
                <polygon class="hover" id="dir_rt" points="70,30 100,0 100,70 70,100 " style="fill: red;" />
              
                <polygon class="hover" id="dir_lt" points="0,30 30,0 30,70 0,100 " style="fill: cyan;" />
            </g>
        </svg>
    </div> -->
    <!-- 1 -->
    <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg">
        <rect x="0" y="0" width="400" height="400" fill="none" stroke="black" stroke-width="5px" stroke-opacity="0.5" />

        <path d="M10 10" />

        <!-- Точки -->
        <circle cx="200" cy="200" r="5" fill="red" />
        <!-- <g fill-opacity="0.6" stroke="black" stroke-width="0.5px" >
            <circle cx="200px" cy="200px" r="104px" fill="red"   transform="translate(  0,-52)" />
            <circle cx="200px" cy="200px" r="104px" fill="blue"  transform="translate( 60, 52)" />
            <circle cx="200px" cy="200px" r="104px" fill="green" transform="translate(-60, 52)" />
        </g> -->
        <g fill-opacity="0.6" stroke="black" stroke-width="0.5px">
            <circle class="hover" cx="200px" cy="200px" r="104px" fill="red" transform="translate(  0,-52)" />
            <circle class="hover" cx="200px" cy="200px" r="104px" fill="blue" transform="translate( 60, 52)" />
            <circle class="hover" cx="200px" cy="200px" r="104px" fill="green" transform="translate(-60, 52)" />
        </g>

    </svg>

    <br>
    <!-- 2 -->
    <!-- https://svg-art.ru/?p=5 -->

    <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" preserveAspectRatio="none"
        style="border: 2px dashed blue;">

        <!--colored circles in corners of  the canvas  -->
        <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)" stroke="rgba(6,90,6, 0.75)" stroke-width="2" />
        <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)" stroke="rgba(26,31,167, 0.75)" stroke-width="2" />
        <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)" stroke="rgba(212,30,75, 0.75)" stroke-width="2" />
        <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)" stroke="rgba(169,146,0, 0.75)" stroke-width="2" />

        <!--the red rectangle outside viewing area  svg   -->
        <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)" stroke="rgba(244,47,39, 0.75)"
            stroke-width="2" />
    </svg>
    <!-- Смещение начала координат viewBox по одной оси -->
    <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg" viewBox="70 0 400 400" preserveAspectRatio="none"
        style="border: 2px dashed blue;">

        <!--colored circles in corners of  the canvas  -->
        <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)" stroke="rgba(6,90,6, 0.75)" stroke-width="2" />
        <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)" stroke="rgba(26,31,167, 0.75)" stroke-width="2" />
        <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)" stroke="rgba(212,30,75, 0.75)" stroke-width="2" />
        <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)" stroke="rgba(169,146,0, 0.75)" stroke-width="2" />

        <!--the red rectangle outside viewing area  svg   -->
        <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)" stroke="rgba(244,47,39, 0.75)"
            stroke-width="2" />
    </svg>
    <!-- Смещение начала координат viewBox по двум осям -->
    <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg" viewBox="70 70 400 400" preserveAspectRatio="none"
        style="border: 2px dashed blue;">

        <!--colored circles in corners of  the canvas  -->
        <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)" stroke="rgba(6,90,6, 0.75)" stroke-width="2" />
        <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)" stroke="rgba(26,31,167, 0.75)" stroke-width="2" />
        <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)" stroke="rgba(212,30,75, 0.75)" stroke-width="2" />
        <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)" stroke="rgba(169,146,0, 0.75)" stroke-width="2" />

        <!--the red rectangle outside viewing area  svg   -->
        <!-- <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"  stroke="rgba(244,47,39, 0.75)" stroke-width="2"/> -->
        <rect class="hover" x="390" y="165" width="35" height="5" fill="rgba(20,255,24, 0.5)" stroke="green"
            stroke-width="2" stroke-dasharray="5" />
    </svg>
    <BR>
    <!-- Увеличение масштаба М2:1 -->
    <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="none"
        style="border: 2px dashed blue;">

        <!--colored circles in corners of  the canvas  -->
        <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)" stroke="rgba(6,90,6, 0.75)" stroke-width="2" />
        <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)" stroke="rgba(26,31,167, 0.75)" stroke-width="2" />
        <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)" stroke="rgba(212,30,75, 0.75)" stroke-width="2" />
        <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)" stroke="rgba(169,146,0, 0.75)" stroke-width="2" />

        <!--the red rectangle outside viewing area  svg   -->
        <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)" stroke="rgba(244,47,39, 0.75)"
            stroke-width="2" />
    </svg>
    <!-- Уменьшение масштаба М1:2 -->
    <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" preserveAspectRatio="none"
        style="border: 2px dashed blue;">

        <!--colored circles in corners of  the canvas  -->
        <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)" stroke="rgba(6,90,6, 0.75)" stroke-width="2" />
        <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)" stroke="rgba(26,31,167, 0.75)" stroke-width="2" />
        <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)" stroke="rgba(212,30,75, 0.75)" stroke-width="2" />
        <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)" stroke="rgba(169,146,0, 0.75)" stroke-width="2" />

        <!--the red rectangle outside viewing area  svg   -->

        <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)" stroke="rgba(244,47,39, 0.75)"
            stroke-width="2" />
    </svg>


    <!-- http://css.yoksel.ru/svg-fill-and-stroke/ -->
    <svg width="300" height="160">
        <path d="M 20 20 h 260" stroke="purple" stroke-width="1" stroke-dasharray="1" />
        <path d="M 20 40 h 260" stroke="mediumspringgreen" stroke-width="15" stroke-dasharray="1 3" />
        <path d="M 20 60 h 260" stroke="orangered" stroke-width="1" stroke-dasharray="5%" />
        <path d="M 20 80 h 260" stroke="green" stroke-width="1" stroke-dasharray="1 5" />
        <path d="M 20 100 h 260" stroke="steelblue" stroke-width="1" stroke-dasharray="2 7 6" />
        <path d="M 20 120 h 260" stroke="orange" stroke-width="5" stroke-dasharray="5" />
        <path d="M 20 140 h 260" stroke="mediumseagreen" stroke-width="1" stroke-dasharray="12% 5%" />
    </svg>

    <div class="container">
        <svg class="adaptive" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 401 401">

            <!-- SVG content -->
            <!--colored circles in corners of  the canvas  -->
            <circle class="hover" cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)" stroke="rgba(6,90,6, 0.75)"
                stroke-width="2" />
            <circle class="hover" cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)" stroke="rgba(26,31,167, 0.75)"
                stroke-width="2" />
            <circle class="hover" cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)" stroke="rgba(212,30,75, 0.75)"
                stroke-width="2" />
            <circle class="hover" cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)" stroke="rgba(169,146,0, 0.75)"
                stroke-width="2" />

            <!--the red rectangle outside viewing area  svg   -->
            <rect class="hover" x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"
                stroke="rgba(244,47,39, 0.75)" stroke-width="2" />
        </svg>
    </div>



</body>

</html>