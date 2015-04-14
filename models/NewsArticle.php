<?php
require __DIR__ . '/../classes/Article.php';

class NewsArticle extends Article
{

  protected function getTable() {
    return 'news';
  }
}