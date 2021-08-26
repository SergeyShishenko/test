<?php
session_start();
// подключаем файлы ядра
// define('PATH__CORE', dirname(dirname(dirname(dirname(__FILE__)))) . '/DATA/TABLES/'); 
define('PATH__CORE',  $_SERVER['DOCUMENT_ROOT'] . '/DATA/TABLES/'); 
require_once PATH__CORE .'configDB.php';
include PATH__CORE .'class_SofiaUsers.php';
include PATH__CORE .'class_QuerySofia.php';
require_once PATH__CORE .'core/model.php';
require_once PATH__CORE .'core/view.php';
require_once PATH__CORE .'core/controller.php';
define('BASE__NAME',basename(dirname(__DIR__, 1)));
// $_SESSION['BASE__NAME'] = BASE__NAME;
/**
 * Изменить в файле .htaccess !!!!!!!!!!!!!!!!!!!!! AdminDashboard

 * F:\OpenServer_5.3.8\domains\localhost\www\AdminDashboard\.htaccess
 * ErrorDocument 403 http://localhost/www/AdminDashboard/err/error403.php 

 */


// echo $_SESSION['BASE__NAME'];
// exit();
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
	<?php //echo dirname(dirname(dirname(__FILE__)))."/shablony-dokumentov-titulnyy-kd.php";?>
	<?php //echo SiteRoot::getRoot()."/shablony-dokumentov-titulnyy-kd.php";?>
	<script>document.location.href ="<?php echo SiteRoot::getRoot() ?>/index.php"</script>
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
// Route::start(); // запускаем маршрутизатор
