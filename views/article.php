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
    <?php echo $article['title']; ?>
  </h3><p><?php echo $article['date']; ?>  Автор новости:<?php echo $article['author']; ?></p>

  <div><?php echo $article['text']; ?></div>
</article>
<br/>
<div><a href="../">Назад</a></div>
</body>
</html>