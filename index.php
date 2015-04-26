<?php

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

require __DIR__ . '/controllers/' . $ctrlClassName . '.php';

$action = !empty($_GET['action']) ? $_GET['action'] : 'all';
$actionName = 'action' . ucfirst($action);

try {
  $controllers = new $ctrlClassName;
  $controllers->$actionName();
} catch (E404Exception $e) {
  $e->action404();
}