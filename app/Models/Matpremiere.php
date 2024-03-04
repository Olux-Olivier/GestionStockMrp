<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matpremiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation',
        'quantite_stock'
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
