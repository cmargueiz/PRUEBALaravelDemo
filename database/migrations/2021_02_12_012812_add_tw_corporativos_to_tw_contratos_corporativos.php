<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwCorporativosToTwContratosCorporativos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tw_contratos_corporativos', function (Blueprint $table) {
            $table->integer('tw_corporativos_id')->unsigned()->length(11);
            $table->foreign('tw_corporativos_id')->references('id')->on('tw_corporativos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tw_contratos_corporativos', function (Blueprint $table) {
            $table->dropForeign('tw_corporativos_id');
            $table->dropColumn('tw_corporativos_id');
        });
    }
}
