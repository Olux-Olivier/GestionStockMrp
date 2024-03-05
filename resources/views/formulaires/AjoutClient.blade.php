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
        <form id="addCustomerForm" method="" action="">
            <label for="customerName">Nom du client:</label>
            <input type="text" id="customerName" name="customerName" required>

            <label for="supplierEmail">Adresse E-mail:</label>
            <input type="email" id="customerEmail" name="customerEmail" required>

            <label for="supplierAddress">Adresse Physique:</label>
            <input type="text" id="customerAddress" name="customerAddress" required>

            <input type="submit" value="Ajouter Client">
        </form>
    </div>
</body>
</html>