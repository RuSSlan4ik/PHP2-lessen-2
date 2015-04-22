<?php
require __DIR__ . '/../classes/Model.php';

class NewsArticle
  extends Model
{
  protected static $table = 'news';
  public $id;
  public $author_name;
  public $title;
  public $text_news;
  public $date;
}