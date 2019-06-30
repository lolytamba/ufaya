<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBahanBaku extends Model
{
    //
    protected $table = 'detail_bahan_baku';
    protected $primaryKey = 'Id_Detail_Bahan_Baku';
    public $timestamp = true;
    protected $fillable = [
        'Id_Bahan_Baku',
        'Id_Pemesanan',
        'Jumlah',
        'Total',
    ];

    public function bahan_baku()
    {
        return $this->belongsTo('App\BahanBaku','Id_Bahan_Baku');
    }
    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan','Id_Pemesanan');
    }
}
