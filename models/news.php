<?php
require __DIR__ . '/db.php';

require_once __DIR__ . '/../classes/Data.inc';
require_once __DIR__ . '/../classes/Article.inc';
require_once __DIR__ . '/../classes/News.inc';

$anews = new News($title, $text, $author, $date);
$tablename = $anews->setTableName();
$sql = $anews->addRecord($tablename);
$namedb = 'NewsDb';
$db = new DataB(DataB::DATABASE_HOST, DataB::DATABASE_USER, DataB::DATABASE_PSW, $namedb);
$news = $db->changeData($sql);