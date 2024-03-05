<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        
    ];

    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class);
    }
}
