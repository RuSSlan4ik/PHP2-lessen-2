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
    $query = $this->db->addNews("INSERT INTO '" . $this->getTable() . "'(title, text_news, author_name, date) VALUES ('" .
      $this->title . "','" . $this->text_news . "','" . $this->author_name . "','" . $this->date . "')");
    return mysql_query($query);
  }
}