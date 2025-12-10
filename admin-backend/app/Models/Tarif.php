<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    // Kolom fillable disesuaikan dengan migrasi baru
    protected $fillable = [
        'item_name', 
        'price_weekday', 
        'price_weekend',
    ];
}