<?php
include __DIR__ . '/views/form.php';
require __DIR__ . '/models/one.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  addNews($_POST['author_name'], $_POST['title'], $_POST['text_news'], $_POST['data']);
}