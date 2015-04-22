<?php
require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../models/NewsArticle.php';
require __DIR__ . '/../classes/View.php';

class AdminController
  extends AbstractController
{
  protected $view;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../views/form/');
  }

  public function actionForm()
  {
    $this->view->render('form');
  }
  public function actionAdd()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $newsModel = new NewsArticle();
      $this->view->items = $newsModel->addNews($_POST['author_name'], $_POST['text_news'], $_POST['title'], $_POST['date']);
    }
    $this->view->render('form');
  }

}