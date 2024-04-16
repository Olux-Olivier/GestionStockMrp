<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::all();
        return view('listes.Client', ['clients' => $clients]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('formulaires.AjoutClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        //
        Client::create($request->validated());
        return to_route('client.index')->with('succes', "Client enregistrer avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('formulaires.ModifierClient',[
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client)
    {
        //
        
        $client->update($request->validated());
        
        return to_route('client.index')->with([
            'success' => 'modifier avec succes!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();
        return to_route('client.index')->with([
            'success' => 'Client supprimé avec succes'
        ]);
    }
}
