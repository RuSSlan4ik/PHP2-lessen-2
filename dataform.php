<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  addNews($_POST['author'], $_POST['title'], $_POST['text'], $_POST['date']);
}