<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau des commandes</title>
  <style>
    /* Styles CSS personnalisés */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 80%;
      margin: 0 auto;
      margin-top:100px;
    }
    .profile-info {
      position: absolute;
      top: 10px;
      right: 10px;
      text-align: right;
    }
    .profile-info img {
      border-radius: 50%;
      width: 50px;
      height: 50px;
    }
    .profile-info p {
      margin-bottom: 5px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 50px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    th:first-child, td:first-child {
      border-left: none;
    }
    th:last-child, td:last-child {
      border-right: none;
    }
    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .btn {
      padding: 5px 10px;
      font-size: 14px;
      cursor: pointer;
    }
    .btn-primary {
      background-color: #007bff;
      color: #fff;
      border: none;
    }
    .btn-danger {
      background-color: #dc3545;
      color: #fff;
      border: none;
    }
  </style>
</head>
<body>
  <!-- Informations de la personne connectée -->
  <div class="profile-info">
    <img src="https://via.placeholder.com/50" alt="Photo de profil">
    <p>Nom de la personne connectée</p>
    <p>Fonction de la personne connectée</p>
  </div>

  <!-- Bloc avec le tableau des commandes -->
  <div class="container">
    <h2>Tableau des commandes</h2>
    <table>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Désignation</th>
          <th scope="col">Quantité</th>
          <th scope="col">Prix unitaire</th>
          <th scope="col">Date de commande</th>
          <th scope="col">Délai livraison</th>
          <th scope="col">Date livraison</th>
          <th scope="col">État</th>
          <th scope="col">Respect livraison</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Exemple de données de commande -->
        <tr>
          <td>1</td>
          <td>Produit A</td>
          <td>10</td>
          <td>50 €</td>
          <td>2024-03-10</td>
          <td>5 jours</td>
          <td>2024-03-15</td>
          <td>En cours</td>
          <td>0</td>
          <td>
            <!-- Boutons Modifier et Supprimer -->
            <button class="btn btn-primary">Modifier</button>
            <button class="btn btn-danger">Supprimer</button>
          </td>
        </tr>
        <!-- Ajoutez d'autres lignes de commande ici si nécessaire -->
      </tbody>
    </table>
  </div>
</body>
</html>
