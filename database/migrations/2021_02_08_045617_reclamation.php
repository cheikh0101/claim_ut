<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reclamation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matiere', 80);
            $table->string('semestre', 80);
            $table->string('evaluation', 80);
            $table->text('commentaire');
            $table->integer('user_id')->unsigned();
            /*
            Dans la table on déclare une clé étrangère (foreign) nommée user_id qui référence (references) la ligne id dans la table (on) etudiant. 
            En cas de suppression (onDelete) ou de modification (onUpdate) on a une restriction (restrict).
        */
            $table->foreign('user_id')
                ->references('id')
                ->on('etudiants')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamation');
    }
}
