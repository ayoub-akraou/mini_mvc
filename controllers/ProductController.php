<?php
require_once 'models/Product.php';

class ProductController
{
   private $productModel;

   public function __construct()
   {
      $this->productModel = new Product();
   }

   public function listProducts()
   {
      $products = $this->productModel->getAllProducts();
      require_once 'views/products/list.php';
   }

   public function addProduct()
   {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $name = $_POST['name'];
         $price = $_POST['price'];
         $description = $_POST['description'];
         $this->productModel->addProduct($name, $price, $description);
         header('Location: index.php?action=list');
      } else {
         require_once 'views/products/add.php';
      }
   }

   public function deleteProduct($id)
   {
      $this->productModel->deleteProduct($id);
      header('Location: index.php?action=list');
   }
}
