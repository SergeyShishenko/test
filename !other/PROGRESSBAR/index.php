<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Индикатор загрузки</title>
    <style>
        #greyProgress {
        /* width: 100%; */
        width: 30%;
        background-color: #ddd;
        }

        #greenBar {
        width: 10%;
        height: 30px;
        background-color: #4CAF50;
        text-align: center;
        line-height: 30px;
        color: white;
        }
    </style>
</head>
<body>
<div id="greyProgress">
  <!-- <div id="greenBar">10%</div> -->
  <div id="greenBar">0%</div>
</div>
<br>
<button onclick="move()">Пуск</button>
<button onclick="For100()">Пуск 2</button>
<script>
function move() {
  var elem = document.getElementById("greenBar");   
  var width = 10;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
function For100() {

  // let j = 1;

  for(i=0;i<100;i++){
    // let timerId = setInterval(() => Pssbar(i), 2000);
        alert(i);
          Pssbar(i);
    
  }
}

function Pssbar(pr) {
  var elem = document.getElementById("greenBar");   
  elem.style.width = pr + '%'; 
  elem.innerHTML = pr * 1  + '%';
  // var width = 0;
  // var id = setInterval(frame, 10);
  // function frame() {
  //   if (width >= 100) {
  //     clearInterval(id);
  //   } else {
  //     width++; 
  //     elem.style.width = width + '%'; 
  //     elem.innerHTML = width * 1  + '%';
  //   }
  // }
}
</script>
</body>
</html>