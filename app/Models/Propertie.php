<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\District;
use App\Models\Booking;



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

    public function booking(): HasMany
    {
        return $this->HasMany(Booking::class);
    }

}
