// 'use strict';

// class CoffeeMachine {

//     #waterAmount = 0;
//     //  waterAmount;

//      constructor(waterAmount) {
//         this.#waterAmount = waterAmount;
//       }
//     get waterAmount2() {
//       return this.#waterAmount;
//     }
  
//     set waterAmount2(value) {
//       if (value < 0) throw new Error("Отрицательный уровень воды");
//       this.#waterAmount = value;
//     }
//   }
  
//   let machine = new CoffeeMachine(100);
  
//   machine.waterAmount2 = 100;
//   console.log(machine.waterAmount2);
//   // console(machine.#waterAmount); // Error

// console.log(Object.getOwnPropertyNames(CoffeeMachine.prototype));

'use strict';

class User {  
    
    #firstName;
    #lastName;
    constructor(firstName, lastName) {
      this.#firstName = firstName;
      this.#lastName = lastName;
    }
  
    // геттер
    get fullName() {
      return `${this.#firstName} ${this.#lastName}`;
    }
  
    // сеттер
    // set fullName(newValue) {
    //   [this.firstName, this.lastName] = newValue.split(' ');
    // }
  
    // вычисляемое название метода
    ["test".toUpperCase()]() {
        console.log("PASSED!");
    }

    static createGuest() {
        return new User("Гость", "Сайта");
      }
  
  };

//   let user = new User("Вася", "Пупков");
//   console.log( user.fullName ); // Вася Пупков
// user.fullName = "Иван Петров";
// console.log( user.fullName ); // Иван Петров
// user.TEST(); // PASSED!
// let guest = User.createGuest() ;
// console.log( guest.fullName );
// console.log( guest.firstName );

// console.log(Object.getOwnPropertyNames(User.prototype));