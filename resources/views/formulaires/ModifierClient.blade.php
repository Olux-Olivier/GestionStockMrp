@extends('base')

@section('title', 'Modifier Client')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulaires/AjoutFournisseur.css') }}">
@endsection

@section('content')

    <div class="container">

        <h2>Modifier un client</h2>
        <form id="addCustomerForm"  action="{{route('client.update', $client)}}" method='post'>
            @csrf
            @method('put')
            <span class="error">
                @error('name')
                {{$message}}
                @enderror
            </span><br>
            <label for="customerName">Name :</label>
            <input type="text" id="customerName" name="name" value="{{$client->name}}">
            <span class="error">
                @error('email')
                    {{$message}}
                @enderror
            </span><br>
            <label for="customerEmail">E-mail :</label>
            <input type="email" id="customerEmail" name="email" value="{{$client->email}}">

            <span class="error">
                @error('adresse')
                {{$message}}
                @enderror
            </span><br>
            <label for="customerAddress">Adresse :</label>
            <input type="text" id="customerAddress" name="adresse" value="{{$client->adresse}}">

            <input type="submit" value="Confirmer">
        </form>
    </div>

@endsection
