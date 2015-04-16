<?php

abstract class AbstractController
{
  abstract protected function getTemplatePath();

  public function render($timplate, $data)
  {
    extract($data);
    require $this->getTemplatePath() . '/' . $timplate . '.php';
  }
} 