<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\District;



class Propertie extends Model
{
    protected $with = ['district'];
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
        'district_id',
        'estado'
    ];

    public function district(): BelongsTo
    {

        return $this->belongsTo(District::class);
    }
}
