<?php
class News extends ArticleDb
{
  public function setTableName()
  {
    return $tablename = 'news';
  }
}