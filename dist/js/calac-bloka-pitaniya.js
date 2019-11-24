function Start(){

    // var calc = document.getElementById("calc"); //ищем нашу форму по ее идентификатору id="calc"

    // var n_type = calc.getElementById("n_type").value;

    // var n_len = calc.getElementById("n_len").value;

    // var n_v = calc.getElementById("n_v").value;
    var n_type = $("select[name=n_type]").val();
    // console.log('n_type '+n_type);
    var n_len = $("input[name=n_len]").val();
    // console.log('n_len '+n_len);
    var n_v = $("select[name=n_v]").val();
    // console.log('n_v '+n_v);
    var result = n_type * n_len * 1.2;
    
    $("#result").text('Вам необходим блок питания с постоянным напряжением ' + n_v + 
    'V (DC), мощностью не менее ' + Math.floor(result) + ' Вт');
         
    // document.getElementById('result').innerHTML = 'Вам необходим блок питания с постоянным напряжением ' + n_v + 
	// 					  'V (DC), мощностью не менее ' + Math.floor(result) + ' Вт';
     
}













































