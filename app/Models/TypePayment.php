<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Booking;


class TypePayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];

    public function booking(): HasMany
    {
        return $this->HasMany(Booking::class);
    }
}
