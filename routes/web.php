<?php

use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('fournisseur', FournisseurController::class)->names([
    'index' => 'fournisseur.index',
    'create' => 'fournisseur.create',
    'edit' => 'fournisseur.edit',

]);

Route::resource('client',ClientController::class)->names([
    'index' => 'client.index',
    'create' => 'client.create',
    'edit' => 'client.edit',

]);

Route::resource('commande',CommandeController::class)->names([
    'index' => 'commande.index',
    'create' => 'commande.create',
    'edit' => 'commande.edit',
]);
//code
