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
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('adresse');
            $table->timestamps();

        });
        Schema::table('matpremieres', function (Blueprint $table){
            $table->foreignIdFor(\App\Models\Fournisseur::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseurs');
        Schema::create('matpremieres', function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\Fournisseur::class);
        });
    }
};
