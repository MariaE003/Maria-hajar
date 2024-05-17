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
        Schema::disableForeignKeyConstraints();
        Schema::create('demande_stages', function (Blueprint $table) {
            
            $table->id('iddemande');

            $table->string('name');
            $table->string('phone');
            $table->string('adress');
            $table->date('dateNias');
            $table->string('etablissement');
            
            $table->date('dateD');
            $table->date('dateF');
            // $table->bigInteger('idStg');

            
            // $table->foreign('idStg')
            // ->references('id')  
            // ->on('User')
            // ->onDelete('restrict')
            // ->onUpdate('restrict');

            // $table->foreignId('idStg')
            // ->constrained()
            // ->onDelete('cascade')
            // ->onUpdate('cascade');

            $table->unsignedBigInteger('idStg');
            $table->foreign('idStg')
                    ->references('id')  
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
            $table->string('status')->default('en attente'); // Ajouter le champ status avec une valeur par défaut


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_stages');
    }
};
