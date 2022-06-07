<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('idPrestamo');
            $table->integer('idMebresia');
            $table->integer('idLibro');
            $table->date('fechaSalida');
            $table->date('fechaDevolucion');
            $table->string('Devuelto');
            $table->integer('noEjemplares');
            $table->index(['idPrestamo', 'idMebresia', 'idLibro']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
