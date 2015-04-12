<?php
function dbConnect()
{
  mysql_connect('localhost', 'root', '')or die("MySQL недоступен! ".mysql_error());
  mysql_select_db('Lessen')or die("Нет соединения с базой! ".mysql_error());
  mysql_query("SET NAMES utf8");
}
function dbFindAllByQuery($sql)
{
  dbConnect();
  $res = mysql_query($sql);
  $ret = [];
  while(($row = mysql_fetch_array($res)) !== false) {
    $ret[] = $row;
  }
  return $ret;
}
function dbFindOneByQuery($sql)
{
  return dbFindAllByQuery($sql)[0];
}