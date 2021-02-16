<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwCorporativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_corporativos', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement()->length(11);
            $table->string('S_NombreCorto',45);
            $table->string('S_NombreCompleto',75);
            $table->string('S_LogoURL',255)->nullable();
            $table->string('S_DBName',45);
            $table->string('S_DBUsuario',45);
            $table->string('S_DBPassword',150);
            $table->string('S_SystemUrl',255);
            $table->tinyInteger('S_Activo',false,false)->length(1);
            $table->timestamp('D_FechaIncorporacion',0);
            $table->timestamp('created_at',0)->nullable(false);
            $table->timestamp('updated_at',0)->nullable();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_corporativos');
    }
}
