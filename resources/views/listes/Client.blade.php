@extends('base')

@section('title', 'listes de clients')

@section('styles')
@endsection

@section('content')
    <h2>Listes de clients</h2>
    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/client/create">Nouveau client</a>
    <div>
        @foreach($clients as $client)
            {{$client->name}}
            {{$client->email}}
            {{$client->adresse}}
            <br>
        @endforeach
    </div>
@endsection
