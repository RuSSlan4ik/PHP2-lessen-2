<?php

class E404Exception extends Exception {

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../views/exception/');
  }
  public function action404()
  {
    $this->view->render('404');
  }
} 