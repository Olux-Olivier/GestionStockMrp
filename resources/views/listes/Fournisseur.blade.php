@extends('base')

@section('title', 'listes de fournisseurs')

@section('styles')
@endsection

@section('content')
    <h2>Listes de fournisseurs</h2>

    @if(session('success'))
        {{session('success')}}
    @endif
    <a href="/fournisseur/create">Nouveau fournisseur</a>
    <div>
        @foreach($fournisseurs as $fournisseur)
            {{$fournisseur->name}}
            {{$fournisseur->email}}
            {{$fournisseur->adresse}}
            <a href="/fournisseur/{{$fournisseur->id}}/edit">Modifier</a>
            <form action="{{route('fournisseur.destroy',$fournisseur)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Supprimer</button>
            </form>
            <br>
        @endforeach
    </div>
@endsection
