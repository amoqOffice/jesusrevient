<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateActiviteTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_tag', function (Blueprint $table) {
            $table->integer('activite_id')->unsigned()->nullable();
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
