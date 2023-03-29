<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentReservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'type_payment_id',
        'numero_celular',
        'document_type_id',
        'numero_documento',
        'numero_tarjeta',
        'card_type_id',
        'pago_costo'
    ];
}
