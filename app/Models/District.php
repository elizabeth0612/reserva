<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'province_id'
    ];

    public function propertie():HasMany
    {
        return $this->hasMany(Propertie::class);
    }
}
