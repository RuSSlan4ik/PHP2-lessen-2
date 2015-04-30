<?php
namespace app\models;
class News

    extends \Model
{
    protected static $table = 'news';

    public $author;
    public $title;
    public $text;
    public $date;

}