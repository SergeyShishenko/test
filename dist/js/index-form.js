$(window, document, undefined).ready(function() {
  // alert($( "input[name~='login']" ).val());
  // alert($( "input[name~='passw']" ).val());

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });

  

});

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