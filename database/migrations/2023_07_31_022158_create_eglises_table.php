*<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEglisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eglises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('indication')->nullable();
            $table->string('ville');
            $table->text('map')->nullable();
            $table->string('pays');
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->string('seeder')->nullable();

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
        Schema::dropIfExists('eglises');
    }
}
