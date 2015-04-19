<?php
require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../models/NewsArticle.php';
require __DIR__ . '/../classes/View.php';

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
    $newsModel = new NewsArticle();
    $this->view->items = $newsModel->findAll();
    $this->view->render('all');
  }

  public function actionOne()

  {
    $newModel = new NewsArticle();
    $this->view->items = $newModel->findOne($_GET['id']);
    $this->view->render('one');
  }
} 