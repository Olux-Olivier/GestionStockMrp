<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande_client extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation',
        'quantite',
        'prix_unitaire',
        'date_commande'
    ];

    public function produit()
    {
        return $this->belongsToMany(Produit::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
} 
