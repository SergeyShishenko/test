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
        $len= count($routes);
		// получаем имя контроллера
		// if ( !empty($routes[1]) )
		// {	
		// 	$controller_name = $routes[1];
		// }
		// получаем имя контроллера
		if ( !empty($routes[$len-1]) )
		{	
			$controller_name = $routes[$len-1];
		}
		
		// // получаем имя экшена
		// if ( !empty($routes[2]) )
		// {
		// 	$action_name = $routes[2];
		// }
		// получаем имя экшена
		if ( !empty($routes[$len]) )
		{
			$action_name = basename($routes[$len-1],".php");
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
		

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = __ROOTR__."/application/models/".$model_file;
		if(file_exists($model_path))
		{
			include __ROOTR__."/application/models/".$model_file;
		}else{
			echo "Файл не найден ". $model_path; exit();
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
			Route::ErrorPage404();
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
			echo "метод ". $action . " не найден!";
			// здесь также разумнее было бы кинуть исключение
			// Route::ErrorPage404();
		}
	
	}

	static function ErrorPage404(){
		// echo dirname(dirname(__FILE__)).'/views/404_view.php';
		// echo "ErrorPage404()";
        // $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        $host = dirname(dirname(__FILE__)).'/views/404_view.php';
        // $host = dirname(dirname(__FILE__)).'/';
        // header('HTTP/1.1 404 Not Found');
		// header("Status: 404 Not Found");
		header('Location:'.$host);
    }
    
}
