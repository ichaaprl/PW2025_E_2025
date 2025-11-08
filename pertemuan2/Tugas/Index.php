<?php
require_once "app/controllers/UserController.php";

$controller = new UserController();

$action = $_GET['action'] ?? '';
$id     = $_GET['id'] ?? null;

switch($action) {
    case 'detail':
        $controller->detail($id);
        break;
    case 'hapus':
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}
?>
