<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwEmpresasCorporativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_empresas_corporativos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('S_RazonSocial',150);
            $table->string('S_RFC',13);
            $table->string('S_Pais',75)->nullable();
            $table->string('S_estado',75)->nullable();
            $table->string('S_Municipio',75)->nullable();
            $table->string('S_ColoniaLocalidad',75)->nullable();
            $table->string('S_Domicilio',100)->nullable();
            $table->string('S_CodigoPostal',5)->nullable();
            $table->string('S_UsoCFDI',45)->nullable();
            $table->string('S_UrlRFC',255)->nullable();
            $table->string('S_UrlActaConstitutiva',255)->nullable();
            $table->tinyInteger('S_Activo')->length(1);
            $table->string('S_Comentarios',255)->nullable();
            $table->timestamp('created_at',0);
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
        Schema::dropIfExists('tw_empresas_corporativos');
    }
}
