<?php

class Product {
    private $connection;
    private $table = 'products';

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function getAllProducts($limit = 0) {
        if ($limit > 0) {
            $query = "SELECT * FROM " . $this->table . " LIMIT ?";
            $stmt = $this->connection->prepare($query);
            $stmt->bind_param("i", $limit);
            $stmt->execute();
            $result = $stmt->get_result();
        } else {
            $query = "SELECT * FROM " . $this->table;
            $result = $this->connection->query($query);
        }
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        
        return $products;
    }

    public function getProductById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function searchProducts($query) {
        $query = "%" . $query . "%";
        $stmt = $this->connection->prepare("SELECT * FROM " . $this->table . " WHERE name LIKE ? or description LIKE ?");
        $stmt->bind_param("ss", $query, $query);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        
        return $products;
    }
}

?>