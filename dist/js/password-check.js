
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
divP.append(div); 
document.querySelector("#emailaccess").append(divP); 
let label = document.querySelector("#emailedit");
label.remove();
// tooltip fade left in
let tooltip = document.getElementsByClassName( "tooltip fade left in");
for( let i = 0; i < tooltip.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
    tooltip[i].remove(); 
  }

}

function changepass(){
    // alert(getCookie("login"));
    var request = new XMLHttpRequest();   
    var body = 'login=' +  getCookie ( "login" ) +
    '&chpass=' + document.getElementById('password').value;
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
    // let email = document.querySelector("#activate");
    // email.innerHTML = 'Вам отправлено письмо со ссылкой для подтверждения!';
    // alert(getCookie("login"));
    var request = new XMLHttpRequest();   
    var body = 'login=' +  getCookie ( "login" ) +
    '&Email=' + document.getElementById('email-check').value;
    // console.log(body);
    request.open('POST','users/sendactivationmail.php',true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.addEventListener('readystatechange', function() {
      if ((request.readyState==4) && (request.status==200)) {
        var w = document.getElementById('activate');
        w.innerHTML = request.responseText;
      }
    });
   request.send(body);
  }
  function sendNewPass(){
    // let email = document.querySelector("#activate");
    // email.innerHTML = 'Вам отправлено письмо со ссылкой для подтверждения!';
    // alert(getCookie("login"));
    var request = new XMLHttpRequest();   
    var body = 'login=' +  document.getElementById('loginnewpass').value;
    // alert(body);
     console.log(body);
    request.open('POST','users/sendNewPass.php',true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.addEventListener('readystatechange', function() {
      if ((request.readyState==4) && (request.status==200)) {
        var w = document.getElementById('say');
        w.innerHTML = request.responseText;
      }
    });
   request.send(body);
  }



