<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
class Booking extends Model
{
    protected $with = ['user'];
    use HasFactory;
    protected $fillable = [
        'precio',
        'huespedes',
        'cantidad_dias',
        'fecha_entrada',
        'fecha_salida',
        'fecha_registro',
        'pago_costo',
        'estado',
        'user_id',
        'coupon_id',
        'propertie_id',
        'type_payment_id'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

}
