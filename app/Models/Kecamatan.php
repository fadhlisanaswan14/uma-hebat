<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kota_id'];

    /**
     * Relasi Many-to-One dengan Kota
     */
    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    /**
     * Relasi One-to-Many dengan Kelurahan
     */
    public function kelurahans()
    {
        return $this->hasMany(Kelurahan::class);
    }
}