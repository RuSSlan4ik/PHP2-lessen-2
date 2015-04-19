<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<h1>Новость</h1>
<article>
  <h3>
    <?php echo $items->title; ?>
  </h3><p><?php echo $items->date; ?>  Автор новости:<?php echo $items->author; ?></p>

  <div><?php echo $items->text; ?></div>
</article>
<br/>
<div><a href="/index.php">Назад</a></div>
</body>
</html>