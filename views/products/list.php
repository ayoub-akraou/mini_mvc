<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Liste des Produits</title>
</head>

<body>
   <h1>Liste des Produits</h1>
   <a href="index.php?action=add">Ajouter un Produit</a>
   <ul>
      <?php foreach ($products as $product): ?>
         <li>
            <strong><?= htmlspecialchars($product['name']) ?></strong> -
            <?= htmlspecialchars($product['price']) ?> €<br>
            <?= htmlspecialchars($product['description']) ?><br>
            <a href="index.php?action=delete&id=<?= $product['id'] ?>">Supprimer</a>
         </li>
      <?php endforeach; ?>
   </ul>
</body>

</html>