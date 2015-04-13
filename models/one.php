<?php
require __DIR__ . '/db.php';

function addNews($author, $title, $text, $date)
{
  dbConnect();
  $date = date("Y-m-d");
  $author = mysql_real_escape_string($author);
  $title = mysql_real_escape_string($title);
  $text = mysql_real_escape_string($text);
  $query = "INSERT INTO news (author, title, text, date) VALUES ('$author', '$title', '$text', '$date')";
  return mysql_query($query);
}

include '/dataform.php';