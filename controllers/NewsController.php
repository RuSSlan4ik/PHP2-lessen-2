<?php

class NewsController
      extends AbstractController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../views/news/');
    }

    public function actionAll()
    {
        $this->view->items = NewsArticle::findAll();
        $this->view->render('all');
    }

    public function actionOne()
    {
        $this->view->items = NewsArticle::findOne($_GET['id']);
        $this->view->render('one');
    }
}