@extends('base')

@section('title', 'Modifier Fournisseur')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulaires/AjoutFournisseur.css') }}">
@endsection

@section('content')

    <div class="container">

        <h2>Modifier de Fournisseur</h2>
        <form id="addSupplierForm"  action="{{route('fournisseur.update', $fournisseur)}}" method='post'>
            @csrf
            @method('put')
            <span class="error">
                @error('name')
                {{$message}}
                @enderror
            </span><br>
            <label for="supplierName">Name :</label>
            <input type="text" id="supplierName" name="name" value="{{$fournisseur->name}}">
            <span class="error">
                @error('email')
                    {{$message}}
                @enderror
            </span><br>
            <label for="supplierEmail">E-mail :</label>
            <input type="email" id="supplierEmail" name="email" value="{{$fournisseur->email}}">

            <span class="error">
                @error('adresse')
                {{$message}}
                @enderror
            </span><br>
            <label for="supplierAddress">Adresse :</label>
            <input type="text" id="supplierAddress" name="adresse" value="{{$fournisseur->adresse}}">

            <input type="submit" value="Ajouter Fournisseur">
        </form>
    </div>

@endsection
