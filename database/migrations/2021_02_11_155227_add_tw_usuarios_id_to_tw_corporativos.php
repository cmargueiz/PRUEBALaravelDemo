<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwUsuariosIdToTwCorporativos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tw_corporativos', function (Blueprint $table) {
            $table->integer('tw_usuarios_id')->unsigned();
            $table->foreign('tw_usuarios_id')->references('id')->on('tw_usuarios');
            
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
            $table->dropForeign('tw_usuarios_id');
            $table->dropColumn('tw_usuarios_id');
        });
    }
}
