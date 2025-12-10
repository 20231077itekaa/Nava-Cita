<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'judul',
        'caption'
    ];

    /**
     * Accessor untuk mendapatkan full URL gambar
     */
    public function getFilePathAttribute()
    {
        // Jika path kosong, return null
        if (!$this->path) {
            return null;
        }
        
        // Gunakan Storage::url() untuk mendapatkan URL public
        return Storage::url($this->path);
    }

    /**
     * Cek apakah file foto benar-benar ada di storage
     */
    public function fileExists()
    {
        if (!$this->path) {
            return false;
        }
        
        return Storage::disk('public')->exists($this->path);
    }
}