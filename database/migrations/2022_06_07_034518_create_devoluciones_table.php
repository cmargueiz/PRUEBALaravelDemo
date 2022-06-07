<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->increments('idDevolucion');
            $table->integer('idPrestamo');
            $table->date('fechaDevolucion');
            $table->float('Monto');
            $table->float('Recargo');
            $table->integer('noEjemplares');
            $table->index(['idDevolucion', 'idPrestamo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devoluciones');
    }
}
