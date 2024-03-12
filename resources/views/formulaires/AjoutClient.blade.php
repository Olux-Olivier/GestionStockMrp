<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout du client</title>
    <link rel="stylesheet" href="{{ asset('css/formulaires/AjoutFournisseur.css') }}">
</head>
<body>
    
    <div class="container">
        <h2>Ajout du client</h2>
        <form id="addCustomerForm" method="post" action="/client">
            @csrf
            <label for="customerName">Name :</label>
            <input type="text" id="customerName" name="name">

            <label for="supplierEmail">E-mail:</label>
            <input type="email" id="customerEmail" name="email">

            <label for="supplierAddress">Adresse :</label>
            <input type="text" id="customerAddress" name="adresse">

            <input type="submit" value="Ajouter Client">
        </form>
    </div>
</body>
</html>