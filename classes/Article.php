<?php
require __DIR__ . '/DataB.php';

abstract class Article
{
  protected $db;

  abstract protected function getTable();

  public function __construct()
  {
    $this->db = new Db();
  }

  public function getAllData()
  {
    return $this->db->getAllData('SELECT * FROM' . $this->getTable());
  }

  public function getOneData($id)
  {
    return $this->db->getOneData('SELECT * FROM' . $this->getTable() . 'WHERE id=' . $id);
  }
}