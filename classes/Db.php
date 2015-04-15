<?php
class Db
{
  public function __construct()
  {
    $config = include __DIR__.'/../config/db.php';
    mysql_connect($config['host'], $config['user'], $config['password'])or die('MySQL недоступен!'.mysql_error());
    mysql_select_db($config['dbname'])or die('Нет соединения с базой!'.mysql_error());
  }

  public function findAll($sql)
  {
    $res = mysql_query($sql);
    if (false === $res){
      return false;
    }
    $ret = [];
    while ($row = mysql_fetch_object($res)) {
      $ret[] = $row;
    }
    return $ret;
  }
  public  function findOne($sql)
  {
    return $this->findAll($sql)[0];
  }
}