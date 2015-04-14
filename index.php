<?php
require __DIR__ . '/models/NewsArticle.php';
$news = new NewsArticle();
$news = getAllData();
include __DIR__ . '/views/index.php';