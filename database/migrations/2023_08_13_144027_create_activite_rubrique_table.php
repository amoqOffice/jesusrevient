<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateActiviteRubriqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_rubrique', function (Blueprint $table) {
            $table->integer('activite_id')->unsigned()->nullable();
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');
            $table->integer('rubrique_id')->unsigned()->nullable();
            $table->foreign('rubrique_id')->references('id')->on('rubriques')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        # code...
    }
}
