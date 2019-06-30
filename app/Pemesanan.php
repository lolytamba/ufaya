<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    //
    protected $table = 'pemesanan';
    protected $primaryKey = 'Id_Pemesanan';
    public $timestamp = true;
    protected $fillable = [
        'Id_Konsumen',
        'Nama_Produk',
        'Tanggal',
        'Tanggal_Selesai',
        'Lama_Kerja',
        'Jumlah',
        'Total',
    ];

    public function konsumens()
    {
        return $this->belongsTo('App\Konsumen','Id_Konsumen');
    }
}
