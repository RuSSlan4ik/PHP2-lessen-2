<?php
class DataB
{
  const DATABASE_HOST = 'localhost';
  const DATABASE_USER = 'root';
  const DATABASE_PSW = '';

  protected $conn;
  public $news;
  public $sqlquery;


  public function __construct($host, $user, $pass, $base)
  {
    $this->conn = mysql_connect($host, $user, $pass) or die(mysql_error());
    $this->conn = mysql_select_db($base, $this->conn);

  }
// функция работы с запросами к БД (добавление, изменение, удаление)
  public function changeData($sqlquery)
  {
    $this->sqlquery = $sqlquery;
    $res = mysql_query($sqlquery);

    return $res;
  }
// функция чтения данных в массив
  public function getData($sqlquery)
  {
    $this->sqlquery = $sqlquery;
    $this->conn = mysql_query($sqlquery);

    while (false !== ($row = mysql_fetch_array($this->conn))) {
      $arr[] = $row;
    }
    return $arr;
  }
}