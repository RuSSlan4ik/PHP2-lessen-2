<?php
abstract class Article
{
  public $title;
  public $text;
  public $date;
  public $author;
  public $id;

  public function __construct($title = '', $text = '', $author = '', $date = false)
  {
    $this->createArticle($title, $text, $author, $date);
  }
  public function createArticle($title, $text, $author, $date)
  {
    $this->title = $title;
    $this->text = $text;
    $this->date = $date;
    $this->author = $author;
  }
  abstract public function setTableName();
}