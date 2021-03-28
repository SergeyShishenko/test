<?php
// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/
// echo dirname(dirname(dirname(dirname(__FILE__)))); 
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/DATA/TABLES/configDB.php';
$dbconn=dbconnect();
$hash=$_COOKIE["hash"];
$login= $_COOKIE['login'];
$escape_string_login=mysqli_real_escape_string($dbconn, $login);
if (is_null($hash)){ $hash="-"; }
$result = mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_hash` LIKE '%".$hash."%'");
    if (mysqli_num_rows($result) > 0) {//есть запись   
		$data = mysqli_fetch_assoc($result);
		$role=$data['user_role']; 
    }
mysqli_free_result($result);
    
// echo "role ".$role;
// exit();
if ($role !== "admin"){
?>
	<script>document.location.href="../shablony-dokumentov-titulnyy-kd.php"</script>
<?php
	   exit();
}

// echo"</pre>";
//  exit();
require_once 'core/route.php';
define('__ROOTR__', dirname(dirname(__FILE__)));
// echo  __ROOTR__."<br>";
Route::start(); // запускаем маршрутизатор
