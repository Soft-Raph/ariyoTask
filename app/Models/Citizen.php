<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'address',
        'ward_id',

    ];


    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
