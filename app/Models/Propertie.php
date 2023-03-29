<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagenes',
        'precio_noche',
        'informacion',
        'reglas_propiedad',
        'seguridad_propiedad',
        'politicas_cancelacion',
        'province_id',
        'district_id',
        'estado'
    ];
}
