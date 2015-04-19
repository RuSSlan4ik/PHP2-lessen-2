<!DOCTYPE HTML>
<html>
<head lang="en">
  <meta charset="UTF-8" />
  <title></title>
</head>
<body>
<h1>Новости</h1>
<div><a href="?ctrl=admin&action=all""><button>Добавить новость</button></a></div>
<?php foreach ($items as $item) : ?>
  <article>
    <h3>
      <a href="?id=<?php echo $item->id; ?>&ctrl=news&action=one">
        <?php echo $item->title; ?>
      </a>
    </h3>
    <div><?php echo $item->text; ?></div>
  </article>
<?php endforeach; ?>
</body>
</html>