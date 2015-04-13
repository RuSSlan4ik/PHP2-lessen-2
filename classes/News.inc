<?php
require_once __DIR__ . '/Data.inc';
require_once __DIR__ . '/Article.inc';

class News extends Article
{

  public function setTableName()
  {
    return $tablename;
  }

  public function addRecord($tablename)//,$title,$text,$author,$date)
  {
    return $sql = "INSERT INTO '" . $tablename . "'('title', 'text', 'author','date') VALUES ('" .
      $this->title . "','" . $this->text . "','" . $this->author . "','" . $this->date . "')";
  }

  public function getAllData()
  {
    return $sql = "SELECT * FROM '" . $tablename . "' ORDER BY 'date' DESC";
  }

  public function getOneRecord($tablename, $id)
  {
    return $sql = "SELECT * FROM '" . $tablename . "' WHERE 'id'=" . $id;
  }

  public function deleteRecord($tablename, $id)
  {
    return $sql = "DELETE * FROM '" . $tablename . "' WHERE 'id'=" . $id;
  }

  public function changeRecord($tablename, $id, $newtitle, $newtext, $newauthor)
  {
    $newdate = date('Y-m-d');
    return $sql = "UPDATE '" . $tablename . "' SET 'title' = '" . $newtitle . "','text' = '" . $newtext . "',
    'author' = '" . $newauthor . "','date'= '" . $newdate . "' WHERE 'id' = " . $id;
  }
}