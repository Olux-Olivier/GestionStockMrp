<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->integer('quantite');
            $table->integer('prix_unitaire');
            $table->integer('delai_livraison');
            $table->date('date_livraison')->nullable();
            $table->string('etat_commande');
            $table->boolean('respect_livraison')->nullable();
            $table->string('email_fournisseur');


            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
