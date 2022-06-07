<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('idLibro');
            $table->string('Título');
            $table->integer('Edicion');
            $table->integer('ISBN');
            $table->integer('Ejemplares');
            $table->integer('EjemplaresDisp');
            $table->float('CostoPrestamoDis');
            $table->float('CostoReservacionDia');
            $table->integer('CostoPerdida');
            $table->index('idLibro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
