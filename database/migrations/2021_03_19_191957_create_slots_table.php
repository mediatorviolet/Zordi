<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->unsignedInteger('utilisateur_id');
            $table->unsignedInteger('ordinateur_id');
            $table->unsignedInteger('horaire_id');
            $table->date('date');
            $table->foreign('utilisateur_id')
                ->references('id')
                ->on('utilisateurs')
                ->onDelete('cascade');
            $table->foreign('ordinateur_id')
                ->references('id')
                ->on('ordinateurs')
                ->onDelete('cascade');
            $table->foreign('horaire_id')
                ->references('id')
                ->on('horaires');
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
        Schema::dropIfExists('slots');
    }
}
