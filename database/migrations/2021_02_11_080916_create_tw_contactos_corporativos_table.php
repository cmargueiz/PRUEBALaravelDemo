<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwContactosCorporativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_contactos_corporativos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('S_Nombre',45);
            $table->string("S_Puesto",45);
            $table->string("S_Comentarios",45);
            $table->integer('N_TelefonoFijo')->length(12)->nullable(false);
            $table->integer('N_TelefonoMovil')->length(12)->nullable(false);
            $table->string("S_Email",45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_contactos_corporativos');
    }
}
