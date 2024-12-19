<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Ajouter un Produit</title>
</head>

<body>
   <h1>Ajouter un Produit</h1>
   <form action="index.php?action=add" method="POST">
      <label for="name">Nom :</label>
      <input type="text" id="name" name="name" required><br>

      <label for="price">Prix :</label>
      <input type="number" step="0.01" id="price" name="price" required><br>

      <label for="description">Description :</label>
      <textarea id="description" name="description" required></textarea><br>

      <button type="submit">Ajouter</button>
   </form>
</body>

</html>