<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateActiviteEgliseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_eglise', function (Blueprint $table) {
            $table->integer('activite_id')->unsigned()->nullable();
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');
            $table->integer('eglise_id')->unsigned()->nullable();
            $table->foreign('eglise_id')->references('id')->on('eglises')->onDelete('cascade');
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
