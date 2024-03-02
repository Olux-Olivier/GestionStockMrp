<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matpremiere extends Model
{
    use HasFactory;
    protected $fillable = [

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
