<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'propertie_id',
        'precio',
        'cantidad_dias',
        'fecha_entrada',
        'fecha_salida',
        'fecha_registro',
        'coupon_id',
        'estado'
    ];
}
