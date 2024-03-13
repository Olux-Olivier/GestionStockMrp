@extends('base')

@section('title', 'Ajout de Fournisseur')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulaires/AjoutFournisseur.css') }}">
@endsection

@section('content')

    <div class="container">

        <h2>Ajout de Fournisseur</h2>
        <form id="addSupplierForm"  method="post" action="/fournisseur">
            @csrf
            <span class="error">
                @error('name')
                {{$message}}
                @enderror
            </span><br>
            <label for="supplierName">Name :</label>
            <input type="text" id="supplierName" name="name" value="{{old('name')}}">
            <span class="error">
                @error('email')
                    {{$message}}
                @enderror
            </span><br>
            <label for="supplierEmail">E-mail :</label>
            <input type="email" id="supplierEmail" name="email" value="{{old('email')}}">

            <span class="error">
                @error('adresse')
                {{$message}}
                @enderror
            </span><br>
            <label for="supplierAddress">Adresse :</label>
            <input type="text" id="supplierAddress" name="adresse" value="{{old('adresse')}}">

            <input type="submit" value="Ajouter Fournisseur">
        </form>
    </div>

@endsection
