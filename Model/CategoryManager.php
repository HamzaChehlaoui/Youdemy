<?php
namespace Categorymanager;
    use PDO;

class CategoryManager {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllCategories() {
        $query = "SELECT * FROM categories ORDER BY name";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCategory($name, $description = '') {
        $query = "INSERT INTO categories (name, description) VALUES (:name, :description)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ':name' => $name,
            ':description' => $description
        ]);
    }

    public function updateCategory($id, $name, $description = '') {
        $query = "UPDATE categories SET name = :name, description = :description WHERE id_categories = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ':id' => $id,
            ':name' => $name,
            ':description' => $description
        ]);
    }

    public function deleteCategory($id) {
        $query = "DELETE FROM categories WHERE id_categories = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([':id' => $id]);
    }
}