<?php

use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ClientController;
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

Route::get('fournisseur/create', [FournisseurController::class, 'create'])->name('Ajout_Fournissuer');
Route::post('fournisseur', [FournisseurController::class, 'store']);

Route::get('client/create', [ClientController::class, 'create'])->name('Ajout_Client');
Route::post('client', [ClientController::class, 'store']);
//code
