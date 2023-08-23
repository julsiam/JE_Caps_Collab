<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'birthdate',
        'gender',
        'address',
        'phone_number',
        'occupation',
        'work_address',
        'monthly_rent',
        'rent_started',
        'due_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function property()
    {
        return $this->hasOne(Property::class);
    }
}
