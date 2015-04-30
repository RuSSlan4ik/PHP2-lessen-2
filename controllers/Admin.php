<?php
namespace app\controllers;
class Admin
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
        if (!empty($_POST)&& $_POST['title'] != '' && $_POST['text'] != '')
        {
            $news = new \app\models\News();
            $news->title = $_POST['title'];
            $news->text = $_POST['text'];
            $news->author = $_POST['author'];
            $news->date = date("Y-m-d");
            $news->insert();
        }
        $this->view->render('form');
    }
}