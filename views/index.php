<!DOCTYPE HTML>
<html>
<head lang="en">
  <meta charset="UTF-8" />
  <title></title>
</head>
<body>
<h1>Новости</h1>
<div><a href="../form.php"><button>Добавить новость</button></a></div>
<?php foreach ($news as $article) : ?>
  <article>
    <h3>
      <a href="../article.php?id=<?php echo $article['id']; ?>">
        <?php echo $article['title']; ?>
      </a>
    </h3>
    <div><?php echo $article['text_news']; ?></div>
  </article>
<?php endforeach; ?>
</body>
</html>