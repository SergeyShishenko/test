// dist\js\password-check.js
document.addEventListener('DOMContentLoaded', function () {
    // alert("DOMContentLoaded");
    var pass1 = document.querySelector('#password'),
        pass2 = document.querySelector('#password-check')
        pass2.setCustomValidity('Пароль некорректный')
        pass1.setCustomValidity('Пароль должен быть не меньше 6-х символов и не больше 40')
        // var b = document.querySelector("#email-check")
    pass1.addEventListener('input', function () {
        this.value != pass2.value ? pass2.setCustomValidity('Пароль некорректный') : pass2.setCustomValidity('')
        if (this.value ==""){pass2.setCustomValidity('Пароль некорректный') }
        
    5 < this.value.length && this.value.length < 41 ? this.setCustomValidity('') : this.setCustomValidity('Пароль должен быть не меньше 6-х символов и не больше 40') 
        
        // console.log('pass2 '+pass2.value)
        // console.log(3 < this.value.length && this.value.length < 40)
    })
    pass2.addEventListener('input', function (e) {
        this.value != pass1.value ? this.setCustomValidity('Пароль некорректный') : this.setCustomValidity('')
        
        
    })
    // b.addEventListener('input', function () {
    //     if (this.value ==""){this.setCustomValidity('Введите корректный адрес электронной почты!') }
        
        
    // })
})

function emailedit(){
  // $('#emailedit').prop('readonly', true); 
let b = document.querySelector("#email-check");
 
b.readOnly = false;
b.value=""; 
// b.attributes.required = "required";
b.setAttribute("required",true);;
// b.setCustomValidity('Введите корректный адрес электронной почты!');
let div = document.createElement('div');
div.innerHTML = '<button type="submit" class="btn btn-success " id="subemail"  onclick="emailaccess();"><b>Подтвердить</b></button><div id="activate" class="activationmail">&nbsp;</div>  ' 
let divP = document.createElement('div');
divP.className = "form-group";
divP.id = "activationmail";
divP.append(div); 
document.querySelector("#emailaccess").append(divP); 
// let label = document.querySelector("#emailedit");
// label.remove();
// label.style.display = "none";
$("#emailedit").hide();
// tooltip fade left in
let tooltip = document.getElementsByClassName( "tooltip fade left in");
for( let i = 0; i < tooltip.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
    tooltip[i].remove(); 
  }

}

function changepass(){
    // alert(getCookie("login"));
    var request = new XMLHttpRequest();   
    // var body = 'login=' +  getCookie ( "login" ) +
    // '&chpass=' + document.getElementById('password').value;
    var body = 'chpass=' + document.getElementById('password').value;
    // console.log(body);
    request.open('POST','users/changepass.php',true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.addEventListener('readystatechange', function() {
      if ((request.readyState==4) && (request.status==200)) {
        var w = document.getElementById('addpass');
        w.innerHTML = request.responseText;
      }
    });
   request.send(body);
  }

  function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }


  function emailaccess(){  
    $("#activationmail").show();
    $("#activate").show();
    // let login = getCookie ( "login" ); 
    let Email = document.getElementById('email-check').value; 
    // let body = 'login=' +  login + '&Email=' + Email;
    let body = 'Email=' + Email;
    // console.log("ajax "+body);
      jQuery.ajax({
        type: "POST", // HTTP метод  POST или GET
        url: "users/sendactivationmail.php", //url-адрес, по которому будет отправлен запрос
        dataType:"text", // Тип данных
        data:body, //post переменные
        success:function(response){
        // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
        // console.log(response);
        $('#activate').text(response);   
        // запуск проверки активации 
        checkemailaccess(Email); 
        },
        error:function (xhr, ajaxOptions, thrownError){
            //выводим ошибку
            console.log(thrownError);
        }
    });

  }
 

  function checkemailaccess(login,Email) {    
  
    let timerId = setInterval(function() {
          // let access= false;
          let body = 'Email=' + Email;

          // проверка базы
          // users\checkemailaccess.php
          jQuery.ajax({
                type: "POST", // HTTP метод  POST или GET
                url: "users/checkemailaccess.php", //url-адрес, по которому будет отправлен запрос
                dataType:"text", // Тип данных
                data:body, //post переменные
                success:function(response){
                // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                // console.log(response);

                // $('#activate').text(response); 
                if (response==1) {
                  clearInterval(timerId);
                $("#activationmail").hide();
                $("#activate").hide();
                $("#question").hide();
                $("#emailedit").show();
                document.getElementById("email-check").readOnly = true;
                }else if(response==2){
                  clearInterval(timerId);
                }
            
                },
                error:function (xhr, ajaxOptions, thrownError){
                    //выводим ошибку
                    console.log(thrownError);
                }
            });

          
        }, 5000);
  }

  let login = getCookie ( "login" ); 
  let Email = document.getElementById('email-check').value; 
  // console.log(Email);
  if (Email!="" && typeof Email !== 'undefined'){
    checkemailaccess(login,Email);
  }
  
  
  



