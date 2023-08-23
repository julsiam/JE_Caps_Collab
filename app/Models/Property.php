<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'room_unit',
        'rental_fee',
        'status'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
