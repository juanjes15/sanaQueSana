<?php
require_once '../../controllers/descansoController.php';

$controller = new descansoController();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];
    $controller->$action($id);
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
    $controller->$action();
} else {
    $controller->index();
}
