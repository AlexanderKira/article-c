<?php

//модели
require_once 'models/Database.php';
require_once 'models/NewsModels.php';
//контроллеры
require_once 'controllers/HomeController.php';
require_once 'controllers/NewsController.php';
//маршруты
require_once 'app/router.php';

$router = new Route();
$router->run();


?>