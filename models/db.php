<?php
require_once __DIR__ . '/../classes/Data.inc';
require_once __DIR__ . '/../classes/Article.inc';
require_once __DIR__ . '/../classes/News.inc';

$anews = new News();
$tablename = $anews->setTableName();
$sql = $anews->getAllData($tablename);
$namedb = 'NewsDb';
$db = new DataB(DataB::DATABASE_HOST, DataB::DATABASE_USER, DataB::DATABASE_PSW, $namedb);
$news = $db->getData($sql);