<?php
namespace app\controllers;
class News
      extends AbstractController
{
    protected $view;

    public function __construct()
    {
        $this->view = new \View(__DIR__ . '/../views/news/');
    }

    public function actionAll()
    {
        $this->view->items = \app\models\News::findAll();
        $this->view->render('all');
    }

    public function actionOne()
    {
        $this->view->items = \app\models\News::findOne($_GET['id']);
        $this->view->render('one');
    }
}