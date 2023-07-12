<?php

//модели
require_once 'models/database.php';
require_once 'models/NewsModels.php';
//контроллеры
require_once 'controllers/HomeController.php';
require_once 'controllers/NewsController.php';
//маршруты
require_once 'app/route.php';


$route = new Route();
$route->run();

?>