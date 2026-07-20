<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'provinsi_id'];

    /**
     * Relasi Many-to-One dengan Provinsi
     */
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    /**
     * Relasi One-to-Many dengan Kecamatan
     */
    public function kecamatans()
    {
        return $this->hasMany(Kecamatan::class);
    }
}