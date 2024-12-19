<?php
require_once 'config/database.php';

class Product
{
   private $db;

   public function __construct()
   {
      $this->db = (new Database())->connect();
   }

   public function getAllProducts()
   {
      $stmt = $this->db->query("SELECT * FROM products");
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function addProduct($name, $price, $description)
   {
      $stmt = $this->db->prepare("INSERT INTO products (name, price, description) VALUES (:name, :price, :description)");
      $stmt->execute([
         ':name' => $name,
         ':price' => $price,
         ':description' => $description
      ]);
   }

   public function deleteProduct($id)
   {
      $stmt = $this->db->prepare("DELETE FROM products WHERE id = :id");
      $stmt->execute([':id' => $id]);
   }
}
