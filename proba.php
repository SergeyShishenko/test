<?php 
// proba.php
echo bin2hex(random_bytes(32));
        $firstName="Вася";
        $lastName="Пупкин";
         ?>
        <!-- <script src="<?php //echo $dir; ?>/js/main.js"></script> -->
        <script id="scrt">
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
            let user = new User("<?php echo $firstName;?>","<?php echo $lastName;?>");      
            let guest = User.createGuest();
            let description = document.getElementById("scrt");

        </script>
        <script>            
            description.remove();
            console.log(typeof(user));
            user.TEST(); // PASSED!        
            console.log(user.fullName); // Иван Петров        
            console.log(guest.fullName);
            console.log(guest.firstName);
            console.log(Object.getOwnPropertyNames(User.prototype));
        </script>
