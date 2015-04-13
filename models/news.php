<?php
require_once __DIR__ . '/../classes/Data.inc';
require_once __DIR__ . '/../classes/Article.inc';
require_once __DIR__ . '/../classes/News.inc';

$anews = new News();
$tablename = $anews->setTableName();
$sql = $anews->getAllData($tablename);

$db = new DataB('title', 'text', 'author','date');
$log->connect('localhost', 'root', '', 'Lesson');
$news = $db->getData($sql);