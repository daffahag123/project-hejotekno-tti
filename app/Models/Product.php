<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; 
    protected $primaryKey = 'id_product'; 
    protected $fillable = [
        'slug', 'nama_product', 'deskripsi_nama', 'deskripsi', 'kelebihan', 'harga', 'stock', 'gambar'
    ];

    public $timestamps = false; // Tidak menggunakan kolom timestamps
}
