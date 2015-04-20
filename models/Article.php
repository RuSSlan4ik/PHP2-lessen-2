<?php
require __DIR__ . '/../classes/Db.php';

abstract class Article
{

  protected $db;



  abstract protected function getTable();

  public function __construct()
  {
    $this->db = new Db();
  }

  public function findAll()
  {
    return $this->db->findAll('SELECT * FROM ' . $this->getTable());
  }

  public function findOne($id)
  {
    return $this->db->findOne('SELECT * FROM ' . $this->getTable() . ' WHERE id=' . $id);
  }

  public function addNews($author_name, $title, $text_news, $date)
  {
    $date = date("Y-m-d");
    $query = 'INSERT INTO ' . $this->getTable() .  " (author_name, title, text_news, date) VALUES  ($author_name, $text_news, $title, $date)";
    return mysql_query($query);
  }
}