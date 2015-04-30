<?php
require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$ctrlClassName = 'app\\controllers\\' . ucfirst($ctrl);

$action = !empty($_GET['action']) ? $_GET['action'] : 'all';
$actionName = 'action' . ucfirst($action);

try {
    $controller = new $ctrlClassName;
    $controller->$actionName();
    } catch (E404Exception $e) {
    $e->action404();
    }