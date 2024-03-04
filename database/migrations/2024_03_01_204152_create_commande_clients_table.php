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
        Schema::create('commande_clients', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->integer('quantite');
            $table->float('prix_unitaire');
            $table->date('date_commande');
            
            $table->timestamps();
        });
        Schema::create('commande_client_produit', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Commande::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Produit::class)->constrained()->cascadeOnDelete();
            $table->primary(['commande_id', 'produit_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_clients');
        Schema::dropIfExists('commande_client_produit');
    }
};
