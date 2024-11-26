<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;
    protected $table = 'perumahan';
     protected $fillable = [
        'perumahan',
        'lokasi',
        'luas',
        'unit',
        'kota',
        'satuan',
        'harga',
        'brosur',
        'pricelist',
        'img',
        'status',
        'keunggulan',
        'tipe',
        'fasilitas',
        'maps',
        'deskripsi',
        // 'posisi',
        // 'no_kavling',
        'video'
    ];

    // Model Perumahan.php
    public function images()
    {
        return $this->hasMany(PerumahanImage::class);
    }

    public function penawaran()
    {
        return $this->hasMany(Penawaran::class, 'perumahan_id');
    }


}
