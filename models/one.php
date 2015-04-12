<?php
require __DIR__ . '/db.php';
function addNews($author_name, $title, $text_news, $dat)
{
  dbConnect();
  $dat = date("Y-m-d");
  $author_name = mysql_real_escape_string($author_name);
  $title = mysql_real_escape_string($title);
  $text_news = mysql_real_escape_string($text_news);
  $query = "INSERT INTO news (author_name, title, text_news, data) VALUES ('$author_name', '$title', '$text_news', '$dat')";
  return mysql_query($query);
}