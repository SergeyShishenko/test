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
let p=document.createElement('p');
p.innerHTML="Литеральная нотация " +apple.getColor();
parent.append(p);
// parent.append('1');

  // parent.append("\n'+Литеральная нотация '+apple.getColor());


/**
* Модуль LifeexampleClass.
*/
var LifeexampleClass = (function () {

  var privateField1 = "значение приватного поля1";
  var privateField2 = "значение приватного поля2";

  // Функция доступная только внутри класса.
  function privateFunction() {
    let parent = document.querySelector('#output');
    parent.append("\nИз тела класса вызван приватный метод: [privateFunction] ");
    parent.append("\nПриватный метод обратился к приватному полю: [privateField1 = '" + privateField1 + "']");
    parent.append("\nПриватный метод обратился к публичному полю: [publicField1 = '" + this.publicField1 + "']");
    return true;
  }

  return {

    // Публичные поля класса.
    publicField1: "значение публичного поля1",
    publicField2: "значение публичного поля2",

    // Публичный метод класса.  
    init: function () {
      parent.append("\nВызван публичный метод класса: [init]");

      // Обращение к приватному полю, доступному как внутри класса так и из вне.
      parent.append("\nМетод [init] обратился к приватному полю [privateField2=" + privateField2 + ']');

      // Обращение к публичному полю, доступному как внутри класса так и из вне.
      parent.append("\nМетод [init] обратился к публичному полю [publicField2=" + this.publicField2 + ']');

      

      // Вызов приватной функции доступной только внутри класса.
      privateFunction();
    }

  }
})();

// обращение к приватному полю, доступному только внутри класса.
parent.append("\nСнаружи класса произошла попытка обратиться к приватному полю [privateField1] результат = " + LifeexampleClass.privateField1);


try {
  // обращение к приватному методу, доступному только внутри класса следующая строка вызовет ошибку
  LifeexampleClass.privateFunction()
  parent.append("\nУдалось обратиться к приватному методу класса! [Ошибка в архитектуре класса]");
} catch (err) {
  parent.append("\nПроизошла ошибка " + err + "! Обращение к приватному методу класса запрещено!");
}

// обращение к публичному полю, доступному как внутри класса так и из вне.
parent.append("\nСнаружи класса произошла попытка обратиться к публичному полю [publicField1] результат = " + LifeexampleClass.publicField1);


try {
  // обращение к публичному методу, доступному как внутри класса так и из вне.
  LifeexampleClass.init()
} catch (err) {
  parent.append("\nНе удалось обратиться к публичному методу класса! [Ошибка в архитектуре класса]");
}
///////Класс на JS заданный через function
// A car "javascript class"
function Car( model ) {

  this.model = model;
  this.color = "silver";
  this.year  = "2012";

  this.getInfo = function () {
    return this.model + " " + this.year;
  };

}

var myCar = new Car("ford");
myCar.year = "2010";
parent.append("\n"+myCar.getInfo() );
