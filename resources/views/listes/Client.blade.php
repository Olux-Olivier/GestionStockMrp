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
            <a href="/client/{{$client->id}}/edit">Modifier</a>
            <form action="{{route('client.destroy',$client)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Supprimer</button>
            </form>
            <br>
        @endforeach
    </div>
@endsection
