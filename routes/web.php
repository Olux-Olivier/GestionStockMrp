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

Route::get('Ajout_fournisseur', [FournisseurController::class, 'index'])->name('Ajout_Fournissuer');
Route::get('Ajout_client', [ClientController::class, 'index'])->name('Ajout_Client');
//code
