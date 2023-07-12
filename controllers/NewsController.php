<?php

class NewsController{
	public function readAll(){
		$model = new NewsModels();
		$news = $model->readAll($_GET['id']);
		
		include 'app/views/read.php';
	}
	
	public function indexLife(){
		$model = new NewsModels();
		$allnews = $model->readlife();
		
		include 'app/views/life/index.php';
	}
	
	public function indexPolicy(){
		$model = new NewsModels();
		$allnews = $model->readpolicy();
		
		include 'app/views/policy/index.php';
	}
	
	public function indexSport(){
		$model = new NewsModels();
		$allnews = $model->readsport();
		
		include 'app/views/sport/index.php';
	}
}

?>