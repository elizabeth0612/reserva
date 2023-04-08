<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTypeDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'imagen',
        'type_payment_id',
    ];
}
