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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('desgination');
            $table->float('prix');
            $table->integer('quantite_stock');
            $table->string('seuil_alerte');
            $table->timestamps();
        });
        Schema::table('matpremieres', function (Blueprint $table){
            $table->foreignIdFor(\App\Models\Produit::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
        Schema::create('matpremieres', function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\Produit::class);
        });
    }
};
