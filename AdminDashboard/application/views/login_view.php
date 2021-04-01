<h1>Регистрация нового пользователя</h1>
<p>
    <form action="" method="post">
        <table class="login">
            <tr>
                <th colspan="2">Регистрация</th>
            </tr>
            <tr>
                <td>Логин</td>
                <td><input type="text" name="login" autocomplete="new-password" value="<?php echo $_POST['login'] ?>">
                </td>
            </tr>
            <tr>
                <td>Пароль</td>
                <td>
                    <div class="password">
                        <input type="password" id="password-input" name="password" autocomplete="new-password"
                            value="<?php echo  ($data['generateCode'][0]) ? $data['generateCode'][0] : $_POST['password'] ?>">
                        <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                    </div>
                </td>

            </tr>
            <th colspan="2" style="text-align: right">
                <input type="submit" value="Зарегистрировать" name="newregister" style="width: 150px; height: 30px;"></th>
        </table>
        <!-- </form> -->
</p>
<!-- <form action="" method="post"> -->

<input name="generatesubmit" type="submit" value="Сгенерировать пароль" > 
<input id="generatepass" style="width:60px;" name="generatepass" readonly type="text"   value="<?php echo $data['generateCode'][0] ?>" disabled>
<br><br>

<!-- <input name="generatesubmit" type="submit" value="Сгенерировать пароль"><br><br> -->
<input name="changepass" type="submit" value="Изменить пароль" ><br><br>
<input name="deluser" type="submit" value="Удалить учетную запись" onclick="return del(login.value)"><br><br>
</form>
<!-- <input name="generatesubmit" type="submit" value="Сгенерировать пароль" onClick="generateCode()"><br><br>

<input name="readlogin" type="submit" value="Данные Логина" onClick="readlogin()"><br><br> -->
<!-- <p id="changepass"></p> -->

<script>
// запрет повторной отправки формы
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
// let login = "Пользователь";
function show_hide_password(target) {
    var input = document.getElementById('password-input');
    if (input.getAttribute('type') == 'password') {
        target.classList.add('view');
        input.setAttribute('type', 'text');
    } else {
        target.classList.remove('view');
        input.setAttribute('type', 'password');
    }
    return false;
}
function del(login){
   
    if (login!==""){
        return  confirm('Удалить учетную запись '+login+' ?')  
    }else{
      return false  
    }
    
}
</script>
<?php

if (isset($data)){
	// echo "<pre>";
	// var_dump($data);
	// echo "</pre>";
	// echo isset($data['generateCode'][0])."<br>";
	// echo isset($data['changepass'][0])."<br>";
	foreach($data as $key){
		// echo'<span style="color:blue">'.key($data).'</span><br>';
	if (key($data)!=="generateCode"){
		foreach($key  as $val){
				echo'<span style="color:blue">'.$val.'</span><br>';
			}
	}
		
	}
	
	// foreach($data[1]  as $val){	echo'<span  style="color:blue">'.$val.'</span><br>';}
}  ?>