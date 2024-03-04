<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'desgination',
        'prix',
        'quantite_stock',
        'seuil_alerte'
    ];
    public function commande_client()
    {
        return $this->belongsToMany(Commande_client::class);
    }
}
