<?php

class E403Exception extends Exception
{
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../views/exception/');
    }

    public function action403()
    {
        $this->view->render('403');
    }
} 