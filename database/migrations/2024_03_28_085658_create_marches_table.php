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
        Schema::create('marches', function (Blueprint $table) {
            $table->id('idMarche');
            $table->timestamps();
            $table->string('nomMarche');
            $table->text('description');
            $table->integer('capacite');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('image');
            $table->unsignedBigInteger('emplacement_id')->nullable();
            $table->unsignedBigInteger('ville_id')->nullable();
            $table->foreign('emplacement_id')->references('idEmplacement')->on('emplacements')->onDelete('cascade');
            $table->foreign('ville_id')->references('idVille')->on('villes')->onDelete('cascade')->nullable();

        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marches');
    }
};
