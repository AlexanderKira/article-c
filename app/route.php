<?php

class Route{
	public function run(){
		$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	switch($page){
		case '':
		case 'home':
			$controller = new HomeController();
			$controller->index();
		break;
		case 'lifenews':
			$controller = new NewsController();
			if(isset($_GET['action'])){
				switch($_GET['action']){
					case 'read':
						$controller->readAll();
					break;
				}
			}else{
				$controller->indexLife();
			}
		break;
		case 'policynews':
			$controller = new NewsController();
			if(isset($_GET['action'])){
				switch($_GET['action']){
					case 'read':
						$controller->readAll();
					break;
				}
			}else{
				$controller->indexPolicy();
			}
		break;
		case 'sportnews':
			$controller = new NewsController();
			if(isset($_GET['action'])){
				switch($_GET['action']){
					case 'read':
						$controller->readAll();
					break;
				}
			}else{
				$controller->indexSport();
			}
		break;
		default:
			http_response_code(404);
			echo 'Page not faund!';
			break;
		}	
	}
	
}

?>