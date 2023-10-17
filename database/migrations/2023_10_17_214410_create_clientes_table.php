<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('codigo', 50);
            $table->string('nombre', 80);
            $table->string('correo', 50);
            $table->foreignId('id_ciudad')->unsigned() ;
            $table->string('telefono',20);
            $table->tinyInteger('activo');

            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
