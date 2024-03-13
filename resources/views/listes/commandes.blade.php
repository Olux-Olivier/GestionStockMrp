@extends('base')

@section('title', 'listes commandes')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/commande/commande.css') }}">
@endsection
@section('content')
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
          <th scope="col">Délai livraison</th>
          <th scope="col">Date de commande</th>
          <th scope="col">Date livraison</th>
          <th scope="col">État</th>
          <th scope="col">Respect livraison</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Exemple de données de commande -->
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
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
@endsection
