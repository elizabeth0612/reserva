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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->double('precio');
            $table->integer('huespedes');
            $table->integer('cantidad_dias');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->date('fecha_registro');
            $table->double('pago_costo');
            $table->boolean('estado');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('coupon_id')->constrained()->onDelete('cascade');
            $table->foreignId('propertie_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_payment_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
