<?php
/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// $len= count($routes);
		
		$key = array_search('AdminDashboard', $routes);
		// получаем имя контроллера
		// if ( !empty($routes[1]) )
		// {	
		// 	$controller_name = $routes[1];
		// }
		// получаем имя контроллера
		// echo $key;
		if ( !empty($routes[$key+1]) )
		{	
			$controller_name = $routes[$key+1];
		}
		
		// // получаем имя экшена
		// if ( !empty($routes[2]) )
		// {
		// 	$action_name = $routes[2];
		// }
		// получаем имя экшена
		if ( !empty($routes[$key+2]) )
		{
			$action_name = basename($routes[$key+2],".php");
		}

		// добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		// define('__ROOTR__', dirname(dirname(__FILE__))); 
		// echo  __ROOTR__."<br>";
		// echo "Model: $model_name <br>";
		// echo "Controller: $controller_name <br>";
		// echo "Action: $action_name <br>";
		// exit();
		

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = __ROOTR__."/application/models/".$model_file;
		if(file_exists($model_path))
		{
			include __ROOTR__."/application/models/".$model_file;
		}else{
			// echo "Файл не найден ". $model_path; exit();
			self::ErrorPage404();

		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = __ROOTR__."/application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include $controller_path;
			// echo "Найден " . $controller_path."<br>";
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			self::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		// echo "имя класса " . get_class($controller). "<br>";
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// echo "метод ". $action . " не найден!";
			$controller->action_index();
			// здесь также разумнее было бы кинуть исключение
			// self::ErrorPage404();
		}
	
	}

	static function ErrorPage404(){
		
		// echo dirname(dirname(__FILE__)).'/views/404_view.php';
		// echo "ErrorPage404()";
        // $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        // $host = dirname(dirname(__FILE__)).'/views/404_view.php';
        // $host = dirname(dirname(__FILE__)).'/';
        // header('HTTP/1.1 404 Not Found');
		// header("Status: 404 Not Found");
		// header('Location:'.$host."404");
		$model_name = 'Model_404';
		$controller_name = 'Controller_404';
		// $action_name = 'action_'.$action_name;
		// создаем контроллер
		require_once __ROOTR__."/application/controllers/controller_404.php";

		$controller = new Controller_404();
		$action = 'action_index';
		// echo "имя класса " . get_class($controller). "<br>";
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			// echo "метод ". $action . " найден!";
			$controller->$action();
			exit();
		}
		else
		{
			
			echo "метод ". $action . " не найден!";
			exit();
			// здесь также разумнее было бы кинуть исключение
			// self::ErrorPage404();
		}
		
    }
    
}
