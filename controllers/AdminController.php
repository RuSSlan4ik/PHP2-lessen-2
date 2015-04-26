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

    if (!empty($_POST)&& $_POST['title'] != '' && $_POST['text'] != '') {
      $news = new NewsArticle();
      $news->title = $_POST['title'];
      $news->text = $_POST['text'];
      $news->author = $_POST['author'];
      $news->date = date("Y-m-d");
      $news->insert();
    }
    $this->view->render('form');
  }
}