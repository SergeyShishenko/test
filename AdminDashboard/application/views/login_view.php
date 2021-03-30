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
	<input type="submit" value="Зарегистрировать" name="btn"
	style="width: 150px; height: 30px;"></th>
</table>
</form>
</p>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php

if (isset($data)){
	foreach($data[0]  as $val){	echo'<span style="color:blue">'.$val.'</span><br>';}
	foreach($data[1]  as $val){	echo'<span  style="color:blue">'.$val.'</span><br>';}
}  ?>

