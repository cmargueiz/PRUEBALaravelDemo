<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresias', function (Blueprint $table) {
            $table->increments('idMembresia');
            $table->string('PN');
            $table->string('SN');
            $table->string('PA');
            $table->string('SA');
            $table->string('Colonia');
            $table->string('Manzana');
            $table->string('Casa');
            $table->string('Bloque');
            $table->date('FechaSol');
            $table->date('FechaExp');
            $table->string('InfoAdicional');
            $table->index('idMembresia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membresias');
    }
}
