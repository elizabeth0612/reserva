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
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('id_reserva');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_propiedad');
            $table->double('precio');
            $table->date('fecha_hora_entrada');
            $table->date('fecha_hora_salida');
            $table->integer('id_tipo_pago');
            $table->double('costo');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
