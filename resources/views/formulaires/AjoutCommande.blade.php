@extends('base')

@section('title', 'Ajout de la commmande')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulaires/AjoutFournisseur.css') }}">
@endsection

@section('content')
    <div class="container">

        <h2>Ajout Commande</h2>
        <form id="addCommandeForm" method="post" action="/commande">
            @csrf
            <!-- <span class="error">
                @error('name')
                {{$message}}
                @enderror
            </span><br> -->
            
            <input type="text" id="designation" name="designation" placeholder="designation" value="{{old('designation')}}">

            <!-- <span class="error">
                @error('email')
                {{$message}}
                @enderror
            </span><br> -->
            
            <input type="number" id="quantite" name="quantite" placeholder="quantite" value="{{old('quantite')}}">

            <!-- <span class="error">
                @error('adresse')
                {{$message}}
                @enderror
            </span><br> -->

            <!-- prix unitaire -->
            <input type="number" id="prix_unitaire" name="prix_unitaire" placeholder="prix unitaire" value="{{old('prix_unitaire')}}">

            <!-- delai livraison -->
            <input type="number" id="delai_livraison" name="delai_livraison" placeholder="delai livraison en jour" value="{{old('delai_livraison')}}">
            
            <!-- email fournisseur -->
           
            <select name="email_fournisseur" id="">
                <option value="">kamoto@gmail.com</option>
            </select>
            
            <!-- etat par defaut commande -->
            <input type="text" id="etat_commande" name="etat_commande" placeholder="etat commande" value="{{old('etat_commande')}}">
            <input type="submit" value="Passer Commande">
        </form>
    </div>
@endsection
