// http://lifeexample.ru/jquery-javascript-primeryi/javascript-klassyi.html
// !other\JS OBJECTS\script.js

// Литеральная нотация – это специальный формат задания объекта в JavaScript.
var apple = {
    color:"green",
    cost: 3,  
    getColor: function(){
    return apple.color;
   }
  }
//   output

let parent = document.querySelector('#output');
parent.append('Литеральная нотация '+apple.getColor());
// parent.append('1');

  console.log('Литеральная нотация '+apple.getColor());
