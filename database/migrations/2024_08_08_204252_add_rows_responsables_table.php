<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRowsResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('responsables', function (Blueprint $table) {
            $table->string('prenoms');
            $table->string('nom_bapteme');
            $table->string('naissance');
            $table->boolean('is_whatsapp');
            $table->boolean('is_telegram');
            $table->string('matricule');
            $table->string('code_qr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('responsables', function (Blueprint $table) {
            //
        });
    }
}
