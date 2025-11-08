<?php
require_once "app/models/UserModel.php";

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function index() {
        $users = $this->model->getAllUsers();
        include "app/views/list.php";
    }

    public function detail($id) {
        $user = $this->model->getUserById($id);
        include "app/views/detail.php";
    }

    public function add($name, $email) {
        $this->model->addUser($name, $email);
        header("Location: index.php");
    }

    public function edit($id, $name, $email) {
        $this->model->updateUser($id, $name, $email);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->deleteUser($id);
        header("Location: index.php");
    }
}
?>
