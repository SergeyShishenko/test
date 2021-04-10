<?php
// подключаем файлы ядра
define('PATH__CORE', dirname(dirname(dirname(dirname(__FILE__)))) . '/DATA/TABLES/'); 
require_once PATH__CORE .'configDB.php';
include PATH__CORE .'class_SofiaUsers.php';
require_once PATH__CORE .'core/model.php';
require_once PATH__CORE .'core/view.php';
require_once PATH__CORE .'core/controller.php';
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

$dbconn=dbconnect();
$hash=mysqli_real_escape_string($dbconn, $_COOKIE['hash']);
// $login= $_COOKIE['login'];
// $escape_string_login=mysqli_real_escape_string($dbconn, $_COOKIE['login']);
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
	<!-- <script>document.location.href="<?php echo dirname(dirname(dirname(__FILE__)))."/shablony-dokumentov-titulnyy-kd.php";?>"</script> -->
	<script>document.location.href="/www/shablony-dokumentov-titulnyy-kd.php"</script>
<?php
	   exit();
}

// echo"</pre>";
//  exit();
// require_once 'core/route.php';
require_once PATH__CORE .'core/route.php';
define('__ROOTR__', dirname(dirname(__FILE__)));
// echo  __ROOTR__."<br>";
Route::start(); // запускаем маршрутизатор
