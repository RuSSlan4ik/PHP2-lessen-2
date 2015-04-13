<?php
abstract class ArticleDb
{
  // VARIABLES
  public $id;
  public $title;
  public $text;
  public $author;
  public $date;


  // FUNCTIONS
  public function __construct($title = null, $text = null, $author = null, $date = null)
  {
    $this->title = $title;
    $this->text = $text;
    $this->author = $author;
    $this->date = $date;

  }

  abstract public function setTableName();

  public function addRecord($tablename)//,$title,$text,$author,$date)
  {
    return $sqlquery = "INSERT INTO '" . $tablename . "'('title', 'text', 'author','date') VALUES ('" .
      $this->title . "','" . $this->text . "','" . $this->author . "','" . $this->date . "')";
  }

  public function getAllData($tablename)
  {
    return $sqlquery = "SELECT * FROM '" . $tablename . "' ORDER BY 'date' DESC";
  }

  public function getOneRecord($tablename, $id)
  {
    return $sqlquery = "SELECT * FROM '" . $tablename . "' WHERE 'id'=" . $id;
  }

  public function deleteRecord($tablename, $id)
  {
    return $sqlquery = "DELETE * FROM '" . $tablename . "' WHERE 'id'=" . $id;
  }

  public function changeRecord($tablename, $id, $newtitle, $newtext, $newauthor)
  {
    $newdate = date('Y-m-d');
    return $sqlquery = "UPDATE '" . $tablename . "' SET 'title' = '" . $newtitle . "','text' = '" . $newtext . "',
                               'author' = '" . $newauthor . "','date'= '" . $newdate . "' WHERE 'id' = " . $id;
  }

}