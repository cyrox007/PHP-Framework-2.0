<?php 
    namespace Core;

    error_reporting(E_ALL);
    ini_set('display_error', 'on');

    require_once $_SERVER['DOCUMENT_ROOT'] . '/app/config/connection.php';

    spl_autoload_register(function($class) {
        $root = $_SERVER['DOCUMENT_ROOT'];
		$ds = DIRECTORY_SEPARATOR;
		
		$filename = $root . $ds . str_replace('\\', $ds, $class) . '.php';
		require($filename);
	});

    // Прочитываем массив из файла с роутами в переменную:
	$routes = require $_SERVER['DOCUMENT_ROOT'] . '/app/config/routes.php';

    $router = new Router();
	$track = ( new Router ) -> getTrack($routes, $_SERVER['REQUEST_URI']);

    // Вызов диспетчера:
	$page  = ( new Dispatcher ) -> getPage($track);

    echo (new View)->render($page);
?>