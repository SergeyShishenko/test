<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- <div>
  <span class="tristate tristate-checkbox">
    <input type="radio" id="item1-state-off" name="item1" value="-1" checked>
    <input type="radio" id="item1-state-null" name="item1" value="0">
    <input type="radio" id="item1-state-on" name="item1" value="1">
    <i></i>
    <label for="item1-state-null">Выключено</label>
    <label for="item1-state-on">Не задано</label>
    <label for="item1-state-off">Включено</label>
  </span>
</div> -->
<div style="margin-top: 10px;margin-left: 40px;">
  <span class="tristate tristate-switcher">
    <input type="radio" id="item2-state-off" name="item2" value="-1" >
    <input type="radio" id="item2-state-null" name="item2" value="0" checked>
    <input type="radio" id="item2-state-on" name="item2" value="1">
    <i></i>
    <div>
        <label id="label1" for="item2-state-null">Урочно</label>
        <label id="label2" for="item2-state-on"></label>
        <label id="label3" for="item2-state-off">Внеурочно</label>
    </div>
  </span>
</div>
<!-- <div style="margin-top: 15px;">
  <span class="tristate tristate-rotate">
    <input type="radio" id="item3-state-off" name="item3" value="-1" checked>
    <input type="radio" id="item3-state-null" name="item3" value="0">
    <input type="radio" id="item3-state-on" name="item3" value="1">
    <i></i>
    <label for="item3-state-null">1</label>
    <label for="item3-state-on">2</label>
    <label for="item3-state-off">3</label>
  </span>
</div> -->
</body>
</html>