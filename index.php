<?php
require __DIR__ . '/models/NewsArticle.php';
$news = new NewsArticle();
//var_dump($news->findAll());
include __DIR__ . '/views/index.php';