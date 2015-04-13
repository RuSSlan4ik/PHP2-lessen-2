<?php
require_once __DIR__ . '/../classes/Data.inc';
require_once __DIR__ . '/../classes/Article.inc';
require_once __DIR__ . '/../classes/News.inc';


$anews = new News();
$tablename = $anews->setTableName();
$sql = $anews->getAllData('news');

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = 'no';
$dbname = 'Lesson';
$tablename = 'news';
$db = new DataB('localhost', 'root', '', 'Lesson');