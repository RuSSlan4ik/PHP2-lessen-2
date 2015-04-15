<?php
require __DIR__ . '/models/NewsArticle.php';
$news = new NewsArticle();
var_dump($news->findOne($id=2));
include __DIR__ . '/views/index.php';