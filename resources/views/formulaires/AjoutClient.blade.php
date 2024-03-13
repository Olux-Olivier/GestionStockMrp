@extends('base')

@section('title', 'Ajout du client')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulaires/AjoutFournisseur.css') }}">
@endsection

@section('content')
    <div class="container">

        <h2>Ajout du client</h2>
        <form id="addCustomerForm" method="post" action="/client">
            @csrf
            <span class="error">
                @error('name')
                {{$message}}
                @enderror
            </span><br>
            <label for="customerName">Nom :</label>
            <input type="text" id="customerName" name="name" value="{{old('name')}}">

            <span class="error">
                @error('email')
                {{$message}}
                @enderror
            </span><br>
            <label for="supplierEmail">E-mail:</label>
            <input type="email" id="customerEmail" name="email" value="{{old('email')}}">

            <span class="error">
                @error('adresse')
                {{$message}}
                @enderror
            </span><br>
            <label for="supplierAddress">Adresse :</label>
            <input type="text" id="customerAddress" name="adresse" value="{{old('adresse')}}">

            <input type="submit" value="Ajouter Client">
        </form>
    </div>
@endsection
