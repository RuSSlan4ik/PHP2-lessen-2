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
    <?php echo $item->title; ?>
  </h3><p><?php echo $item->date; ?>  Автор новости:<?php echo $item->author; ?></p>

  <div><?php echo $item->text; ?></div>
</article>
<br/>
<div><a href="../../">Назад</a></div>
</body>
</html>