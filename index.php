<?php
require_once 'controllers/ProductController.php';

$controller = new ProductController();

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

if ($action === 'list') {
   $controller->listProducts();
} elseif ($action === 'add') {
   $controller->addProduct();
} elseif ($action === 'delete' && $id) {
   $controller->deleteProduct($id);
} else {
   echo "Action non reconnue.";
}
