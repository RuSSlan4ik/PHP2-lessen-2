<?php
class DataB
{
  public $dbhost;
  public $dbuser;
  public $dbpassword;
  public $dbname;

  public function __construct($dbhost, $dbuser, $dbpassword, $dbname)
  {
    $this->connect($dbhost, $dbuser, $dbpassword, $dbname);
  }
  public  function connect($dbhost, $dbuser, $dbpassword, $dbname)
  {
    mysql_connect($dbhost, $dbuser, $dbpassword)or die(mysql_error());
    mysql_select_db($dbname)or die(mysql_error());
  }

  public function changeData($sql)
  {
    $this->sql = $sql;
    $res = mysql_query($sql);

    return $res;
  }

  public  function getData($sql)
  {
    $res = mysql_query($sql);
    $ret = [];
    while (false !== ($row = mysql_fetch_array($res))) {
      $ret[] = $row;
    }
    return $ret;
  }
  public  function dbFindOneByQuery($sql)
  {
    $this->getData($sql)[0];
  }
}