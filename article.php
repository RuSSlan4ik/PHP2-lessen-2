<?php
require __DIR__ . '/models/NewsArticle.php';
$article = new NewsArticle($_GET['id']);
include __DIR__ . '/views/article.php';