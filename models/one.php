<?php
require_once __DIR__ . '/../classes/Data.inc';
require_once __DIR__ . '/../classes/Article.inc';
require_once __DIR__ . '/../classes/News.inc';

$anews = new News();
$tablename = $anews->setTableName();
$id = $_GET['id'];
$sql = $anews->getOneRecord($tablename,$id);

$db = new DataB('localhost', 'root', '', 'Lesson');
$news = $db->getData($sql);