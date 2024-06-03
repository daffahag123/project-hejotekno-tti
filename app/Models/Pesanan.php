<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // Disable automatic timestamps
    public $timestamps = false;

    // Specify the table if necessary
    protected $table = 'pesanan';
    
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_customer',
        'id_product',
        'jumlah_item_dipesan',
        'jumlah_harga',
        'tanggal_pesananan_dibuat',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
