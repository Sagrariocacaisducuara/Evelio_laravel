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
        Schema::create('table_productos', function (Blueprint $table) {
            $table->id('id_productos');
            $table->integer('codigo',);
            $table->foreignId('id_categoria');
            $table->foreignId('id_marca');
            $table->string('descripcion');
            $table->enum('unidad_medida',['unidad','otros']);
            $table->tinyInteger('disponible');
            $table->decimal('porcentaje_iva');
            $table->decimal('precio_unitari');
            $table->smallInteger('stock');

            $table->foreign('id_categoria')->references('id_categoria')->on('table_categoria');
            $table->foreign('id_marca')->references('id_marca')->on('table_marcas_fabricantes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_productos');
    }
};
