<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Requests\CommandeRequest;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commandes = Commande::all();
        return view('listes.commandes', ['commandes' => $commandes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('formulaires.AjoutCommande');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommandeRequest $request)
    {
        //
        Commande::create($request->validated());
        return to_route('commande.index')->with('succes', "Commande enregistrée avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
