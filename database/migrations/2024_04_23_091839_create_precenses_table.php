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
        Schema::create('precenses', function (Blueprint $table) {
            
            $table->id();

            $table->date('dateAct');
            $table->time('heureArr');
            $table->time('heureDep');

            $table->string('status')->default('null'); // Ajouter le champ status avec une valeur par défaut

            $table->unsignedBigInteger('idUser');

            


            $table->foreign('idUser')
                    ->references('id')  
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precenses');
    }
};
