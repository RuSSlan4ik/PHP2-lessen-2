<?php
class DataB
{
  public $dbhost;
  public $dbname;
  public $dbuser;
  public $dbpassword;

  public function __construct($dbhost, $dbname, $dbuser, $dbpassword)
  {
    $this->connect($dbhost, $dbname, $dbuser, $dbpassword);
  }
  protected  function connect($dbhost, $dbname, $dbuser, $dbpassword)
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

  protected  function dbFindAllByQuery($sql)
  {
    $res = mysql_query($sql);
    $ret = [];
    while (false !== ($row = mysql_fetch_array($res))) {
      $ret[] = $row;
    }
    return $ret;
  }
  protected  function dbFindOneByQuery($sql)
  {
    $this->dbFindAllByQuery($sql)[0];
  }
}