<?php
require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../models/NewsArticle.php';

class AdminController
  extends AbstractController
{

  protected function getTemplatePath()
  {
    return __DIR__ . '/../views/form/';
  }

  public function actionform()
  {
    $newsModel = new NewsArticle();
    $items = $newsModel->addNews($_GET['id']);
    $this->render('form', ['items' => $items]);

  }

}