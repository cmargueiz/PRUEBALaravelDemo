<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->increments('idReservaciones');
            $table->integer('idMenbresia');
            $table->date('fechaReservacion');
            $table->date('fechaLimite');
            $table->integer('idLibro');
            $table->integer('NoEjemplares');
            $table->string('Prestado');
            $table->index(['idReservaciones', 'idMenbresia', 'idLibro']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
}
