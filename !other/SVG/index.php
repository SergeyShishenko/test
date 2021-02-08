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
    </style>

</head>
<body>
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
</body>
</html>