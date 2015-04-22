<?php

require __DIR__ . '/../classes/Db.php';

abstract class Model
{
  protected static $table;
  public static function getTable()
  {
    return static::$table;
  }
  public static function findAll()
  {
    $class = static::class;
    $sql = 'SELECT * FROM ' . static::getTable() . ' ORDER BY date=:date DESC';
    $db = new Db();
    return $db->findAll($class, $sql, [':date' => $date]);
  }
  public static function findOne($id)
  {
    $class = static::class;
    $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE id=:id';
    $db = new Db();
    return $db->findOne($class, $sql, [':id' => $id]);
  }


  public function addNews($author_name, $title, $text_news, $date)
  {
    $date = date("Y-m-d");
    $query = 'INSERT INTO ' . $this->getTable() .  " (author_name, title, text_news, date) VALUES  ($author_name, $text_news, $title, $date)";
    return mysql_query($query);
  }
}