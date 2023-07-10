<?php

class NewsController{

    public function readAll(){
        $model = new NewsModels();
        $news = $model->readAll($_GET['id']);

        include 'app/views/read.php';
    }

    public function indexLifeNews(){
        $model = new NewsModels();
        $allnews = $model->readlife();

        include 'app/views/life/index.php';
    }

    public function indexPolicyNews(){
        $model = new NewsModels();
        $allnews = $model->readpolicy();

        include 'app/views/policy/index.php';
    }

    public function indexSportNews(){
        $model = new NewsModels();
        $allnews = $model->readsport();

        include 'app/views/sport/index.php';
    }

   

}

?>