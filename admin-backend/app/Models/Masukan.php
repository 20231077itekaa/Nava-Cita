<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masukan extends Model
{
    use HasFactory;

    protected $table = 'kritik_sarans';

    protected $fillable = [
        'nama',
        'kontak', 
        'jenis',
        'pesan'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}