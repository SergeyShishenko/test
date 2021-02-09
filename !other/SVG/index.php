<?php
// https://developer.mozilla.org/ru/docs/Web/SVG/Tutorial/Paths
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .hover:hover{
        stroke:aqua; 
    }
    .container {
        width: 25%;
        height: 0;
        padding-top: 25%;
        position: relative;
        overflow: hidden;
}

    .adaptive {
        position: absolute;
        top: 0;
        left: 0;
}
    </style>

</head>
<body>
<!-- 1 -->
        <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg">
        <rect x="0" y="0" width="400" height="400" 
            fill="none" stroke="black" stroke-width="5px" stroke-opacity="0.5"/>

        <path d="M10 10"/>

        <!-- Точки -->
        <circle cx="200" cy="200" r="5" fill="red"/>
        <!-- <g fill-opacity="0.6" stroke="black" stroke-width="0.5px" >
            <circle cx="200px" cy="200px" r="104px" fill="red"   transform="translate(  0,-52)" />
            <circle cx="200px" cy="200px" r="104px" fill="blue"  transform="translate( 60, 52)" />
            <circle cx="200px" cy="200px" r="104px" fill="green" transform="translate(-60, 52)" />
        </g> -->
        <g fill-opacity="0.6" stroke="black" stroke-width="0.5px"  >
            <circle class="hover" cx="200px" cy="200px" r="104px" fill="red"   transform="translate(  0,-52)" />
            <circle class="hover" cx="200px" cy="200px" r="104px" fill="blue"  transform="translate( 60, 52)" />
            <circle class="hover" cx="200px" cy="200px" r="104px" fill="green" transform="translate(-60, 52)" />
        </g>

        </svg>

<br>
<!-- 2 -->
<!-- https://svg-art.ru/?p=5 -->

        <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 400 400" preserveAspectRatio="none"            
            style="border: 2px dashed blue;">
            
            <!--colored circles in corners of  the canvas  -->
            <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)"  stroke="rgba(6,90,6, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)"  stroke="rgba(26,31,167, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)"  stroke="rgba(212,30,75, 0.75)" stroke-width="2"/>
            <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)"  stroke="rgba(169,146,0, 0.75)" stroke-width="2"/>
        
            <!--the red rectangle outside viewing area  svg   -->
            <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"  stroke="rgba(244,47,39, 0.75)" stroke-width="2"/>
        </svg>
        <!-- Смещение начала координат viewBox по одной оси -->
        <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg"
            viewBox="70 0 400 400" preserveAspectRatio="none"            
            style="border: 2px dashed blue;">
            
            <!--colored circles in corners of  the canvas  -->
            <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)"  stroke="rgba(6,90,6, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)"  stroke="rgba(26,31,167, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)"  stroke="rgba(212,30,75, 0.75)" stroke-width="2"/>
            <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)"  stroke="rgba(169,146,0, 0.75)" stroke-width="2"/>
        
            <!--the red rectangle outside viewing area  svg   -->
            <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"  stroke="rgba(244,47,39, 0.75)" stroke-width="2"/>
        </svg>
        <!-- Смещение начала координат viewBox по двум осям -->
        <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg"
            viewBox="70 70 400 400" preserveAspectRatio="none"            
            style="border: 2px dashed blue;">
            
            <!--colored circles in corners of  the canvas  -->
            <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)"  stroke="rgba(6,90,6, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)"  stroke="rgba(26,31,167, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)"  stroke="rgba(212,30,75, 0.75)" stroke-width="2"/>
            <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)"  stroke="rgba(169,146,0, 0.75)" stroke-width="2"/>
        
            <!--the red rectangle outside viewing area  svg   -->
            <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"  stroke="rgba(244,47,39, 0.75)" stroke-width="2"/>
        </svg>
        <BR>
        <!-- Увеличение масштаба М2:1 -->
        <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 200 200" preserveAspectRatio="none"            
            style="border: 2px dashed blue;">
            
            <!--colored circles in corners of  the canvas  -->
            <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)"  stroke="rgba(6,90,6, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)"  stroke="rgba(26,31,167, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)"  stroke="rgba(212,30,75, 0.75)" stroke-width="2"/>
            <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)"  stroke="rgba(169,146,0, 0.75)" stroke-width="2"/>
        
            <!--the red rectangle outside viewing area  svg   -->
            <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"  stroke="rgba(244,47,39, 0.75)" stroke-width="2"/>
        </svg>
        <!-- Уменьшение масштаба М1:2 -->
        <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 800 800" preserveAspectRatio="none"            
            style="border: 2px dashed blue;">
            
            <!--colored circles in corners of  the canvas  -->
            <circle cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)"  stroke="rgba(6,90,6, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)"  stroke="rgba(26,31,167, 0.75)" stroke-width="2"/>
            <circle cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)"  stroke="rgba(212,30,75, 0.75)" stroke-width="2"/>
            <circle cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)"  stroke="rgba(169,146,0, 0.75)" stroke-width="2"/>
        
            <!--the red rectangle outside viewing area  svg   -->
            <rect x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"  stroke="rgba(244,47,39, 0.75)" stroke-width="2"/>
        </svg>

        <div class="container" >
        <svg class="adaptive" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 401 401">
       
            <!-- SVG content -->
            <!--colored circles in corners of  the canvas  -->
            <circle class="hover" cx="55" cy="55" r="50" fill="rgba(20,255,24, 0.5)"  stroke="rgba(6,90,6, 0.75)" stroke-width="2"/>
            <circle class="hover" cx="350" cy="55" r="50" fill="rgba(57,65,212, 0.5)"  stroke="rgba(26,31,167, 0.75)" stroke-width="2"/>
            <circle class="hover" cx="350" cy="350" r="50" fill="rgba(212,30,75, 0.5)"  stroke="rgba(212,30,75, 0.75)" stroke-width="2"/>
            <circle class="hover" cx="55" cy="350" r="50" fill="rgba(255,221,0, 0.5)"  stroke="rgba(169,146,0, 0.75)" stroke-width="2"/>
        
            <!--the red rectangle outside viewing area  svg   -->
            <rect class="hover" x="390" y="165" width="100" height="100" fill="rgba(244,47,39, 0.6)"  stroke="rgba(244,47,39, 0.75)" stroke-width="2"/>
        </svg>
</div>


</body>
</html>