<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->char('genero',20);
            $table->date('fecha_nacimiento');
            $table->unsignedInteger('dni');
            $table->string('localidad');
            $table->string('barrio');
            $table->string('calle');
            $table->string('numero');
            $table->string('mail');
            $table->string('telefono');
            $table->string('celular');
            $table->string('origen');
            $table->string('observaciones')->nullable();
            $table->timestamp('creado', 0)->nullable();
            $table->timestamp('ultima_modificacion', 0)->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
