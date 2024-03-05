<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajout de Fournisseur</title>
<link rel="stylesheet" href="{{ asset('css/formulaires/AjoutFournisseur.css') }}">
</head>
<body>

<div class="container">
  <h2>Ajout de Fournisseur</h2>
  <form id="addSupplierForm">
    <label for="supplierName">Nom du Fournisseur:</label>
    <input type="text" id="supplierName" name="supplierName" required>

    <label for="supplierEmail">Adresse E-mail:</label>
    <input type="email" id="supplierEmail" name="supplierEmail" required>

    <label for="supplierAddress">Adresse Physique:</label>
    <input type="text" id="supplierAddress" name="supplierAddress" required>

    <input type="submit" value="Ajouter Fournisseur">
  </form>
</div>


</body>
</html>
