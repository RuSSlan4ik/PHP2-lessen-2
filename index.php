<?php

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

require __DIR__ . '/controllers/' . $ctrlClassName . '.php';

$action = !empty($_GET['action']) ? $_GET['action'] : 'all';
$actionName = 'action' . ucfirst($action);

If (!empty ($_GET['id']) && ($_GET['action'] == 'one')) {

  $news = new $ctrlClassName();
  $news->$actionName();
}
elseIf ($_GET['action'] == 'form') {
    $admin = new $ctrlClassName();
    $admin->$actionName();

  }
else{
  $controllers = new $ctrlClassName;
  $controllers->$actionName();
}
