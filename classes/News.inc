<?php
require_once __DIR__ . '/Data.inc';
require_once __DIR__ . '/Article.inc';

class News extends Article
{

  public function addRecord($tablename)//,$title,$text,$author,$date)
  {
    return $sql = "INSERT INTO '" . $tablename . "'('title', 'text', 'author','date') VALUES ('" .
      $this->title . "','" . $this->text . "','" . $this->author . "','" . $this->date . "')";
  }

  public function getAllData($tablename)
  {
    return $sql = "SELECT * FROM '" . $tablename . "' ORDER BY 'date' DESC";
    $ret = dbFindAllByQuery($sql);
  }

  public function getOneRecord($tablename, $id)
  {
    return $sql = "SELECT * FROM '" . $tablename . "' WHERE 'id'=" . $id;
    $ret = dbFindOneByQuery($sql);
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