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
        Schema::create('pago_reserva', function (Blueprint $table) {
            $table->id();
            $table->string('numero_celular');
            $table->string('numero_documento');
            $table->string('numero_tarjeta');
            $table->double('pago_costo');
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_payment_id')->constrained()->onDelete('cascade');
            $table->foreignId('document_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('card_type_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('pago_reserva');
    }
};
