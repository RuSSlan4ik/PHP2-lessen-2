<?php
require __DIR__ . '/../classes/Model.php';

class NewsArticle
  extends Model
{
    protected static $table = 'news';

    public $author;
    public $title;
    public $text;
    public $date;

}