<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Tentukan primary key
    public $timestamps = false;
    protected $primaryKey = 'id_transaksi';

    // Tentukan nama tabel jika berbeda dengan nama model dalam bentuk jamak
    protected $table = 'transaksi';

    // Tentukan fields yang boleh diisi (mass assignable)
    protected $fillable = [
        'id_customer',
        'pesanan',
        'total',
        'waktu_transaksi',

    ];

    // Definisikan relasi ke model Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
