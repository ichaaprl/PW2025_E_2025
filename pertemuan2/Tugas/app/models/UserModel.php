<?php
require_once "config/database.php";

class UserModel {
    private $conn;
    private $table = "users";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllUsers() {
        $query = "SELECT * FROM " . $this->table;
        return $this->conn->query($query);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($name, $email) {
        $query = "INSERT INTO " . $this->table . " (name, email) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$name, $email]);
    }

    public function updateUser($id, $name, $email) {
        $query = "UPDATE " . $this->table . " SET name=?, email=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$name, $email, $id]);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id=?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
?>
