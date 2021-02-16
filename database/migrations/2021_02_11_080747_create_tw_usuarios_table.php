<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_usuarios', function (Blueprint $table) {
            $table->unsignedInteger('id',11)->autoIncrement();
            $table->string('username',45);
            $table->string('email',45);
            $table->string('S_Nombre',45)->nullable();
            $table->string('S_Apellidos',45)->nullable();
            $table->string('S_FotoPerfilUrl',255)->nullable();
            $table->tinyInteger('S_Activo')->length(1);
            $table->string('password',100);
            $table->string('verification_token',191);
            $table->string('verified',191);
            $table->timestamp('created_at',0)->nullable(false);
            $table->timestamp('updated_at',0)->nullable();
            $table->softDeletes('deleted_at', 0);
            $table->unsignedInteger('tw_rol_id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_usuarios');
    }
}
