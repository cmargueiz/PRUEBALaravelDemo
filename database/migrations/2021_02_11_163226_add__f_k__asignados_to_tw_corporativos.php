<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFKAsignadosToTwCorporativos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tw_corporativos', function (Blueprint $table) {
            $table->integer('FK_Asignado_id')->unsigned();
            $table->foreign('FK_Asignado_id')->references('tw_rol_id')->on('tw_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tw_corporativos', function (Blueprint $table) {
            $table->dropForeign('FK_Asignado_id');
            $table->dropColumn('FK_Asignado_id');
        });
    }
}
