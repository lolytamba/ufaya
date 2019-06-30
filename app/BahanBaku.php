<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    //
    protected $table = 'bahan_baku';
    protected $primaryKey = 'Id_Bahan_Baku';
    public $timestamp = true;
    protected $fillable = [
        'Id_Bahan_Baku',
        'Nama',
        'Harga',
    ];

    public function detail_bahan_baku()
    {
        return $this->hasMany('App\DetailBahanBaku','Id_Detail_Bahan_Baku');
    }
}
