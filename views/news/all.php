<!DOCTYPE HTML>
<html>
<head lang="en">
  <meta charset="UTF-8" />
  <title></title>
</head>
<body>
<h1>Новости</h1>
<div><a href="../form.php"><button>Добавить новость</button></a></div>
<?php foreach ($items as $item) : ?>
  <article>
    <h3>
      <a href="article.php?id=<?php echo $item->id; ?>">
        <?php echo $item->title; ?>
      </a>
    </h3>
    <div><?php echo $item->text; ?></div>
  </article>
<?php endforeach; ?>
</body>
</html>