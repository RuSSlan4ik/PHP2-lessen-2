<?php
class DataB
{


  public function __construct()
  {
    $config = include __DIR__.'/../config/db.php';
    mysql_connect($config[host], $config[user], $config[password])or die(mysql_error());
    mysql_select_db($config[dbname])or die(mysql_error());
  }


  public  function dbFindAllByQuery($sql)
  {
    $res = mysql_query($sql);
    $ret = [];
    while (false !== ($row = mysql_fetch_object($res))) {
      $ret[] = $row;
    }
    return $ret;
  }
  public  function dbFindOneTableByQuery($sql)
  {
    $this->dbFindAllByQuery($sql)[0];
  }
}