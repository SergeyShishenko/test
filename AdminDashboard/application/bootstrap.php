<?php
// подключаем файлы ядра
define('PATH__CORE', dirname(dirname(dirname(dirname(__FILE__)))) . '/DATA/TABLES/'); 
require_once PATH__CORE .'configDB.php';
include PATH__CORE .'class_SofiaUsers.php';
include PATH__CORE .'class_QuerySofia.php';
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

if (class_QuerySofia::getQS()->getRole() !== DBfield::AROLE){
?>
	<?php echo dirname(dirname(dirname(__FILE__)))."/shablony-dokumentov-titulnyy-kd.php";?>
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
