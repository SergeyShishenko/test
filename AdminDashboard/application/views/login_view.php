<h1>Регистрация нового пользователя</h1>
<p>
    <form action="" method="post">
        <table class="login">
            <tr>
                <th colspan="2">Регистрация</th>
            </tr>
            <tr>
                <td>Логин</td>
                <td><input type="text" name="login" autocomplete="new-password"></td>
            </tr>
            <tr>
                <td>Пароль</td>
                <td><input type="password" name="password" autocomplete="new-password"></td>
            </tr>
            <th colspan="2" style="text-align: right">
                <input type="submit" value="Зарегистрировать" name="btn" style="width: 150px; height: 30px;"></th>
        </table>
    </form>
</p>
<form action="" method="post">
Сгенерированный пароль <input id="generatepass" name="generatepass" readonly type="text"
    value="<?php #echo generateCode(6); ?>"><br><br>

<input name="generatesubmit" type="submit" value="Сгенерировать пароль" ><br><br>
</form>	
<!-- <input name="generatesubmit" type="submit" value="Сгенерировать пароль" onClick="generateCode()"><br><br>
<input name="changepass" type="submit" value="Изменить пароль" onClick="changepass()"><br><br>
<input name="readlogin" type="submit" value="Данные Логина" onClick="readlogin()"><br><br> -->
<p id="changepass"></p>

<script>
// запрет повторной отправки формы
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

// function generateCode() {
//     var request = new XMLHttpRequest();
//     request.open('GET', 'generateCode.php', true);
//     request.addEventListener('readystatechange', function() {
//         if ((request.readyState == 4) && (request.status == 200)) {
//             var welcome = document.getElementById('generatepass');
//             var welcome2 = document.getElementById('password');
//             welcome.value = request.responseText;
//             welcome.readOnly = true;
//             welcome.disabled = true;
//             welcome2.value = request.responseText;
//         }
//     });
//     request.send();
// }
</script>
<?php

if (isset($data)){
	// echo "<pre>";
	// var_dump($data);
	// echo "</pre>";
	// echo count($data)."<br>";
	for($i=0;$i<count($data);$i++){
		foreach($data[$i]  as $val){	echo'<span style="color:blue">'.$val.'</span><br>';}
	}
	
	// foreach($data[1]  as $val){	echo'<span  style="color:blue">'.$val.'</span><br>';}
}  ?>