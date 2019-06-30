<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanPenolong extends Model
{
    //
    protected $table = 'bahan_penolong';
    protected $primaryKey = 'Id_Bahan_Penolong';
    public $timestamp = true;
    protected $fillable = [
        'Id_Bahan_Penolong',
        'Nama',
        'Harga',
    ];

    public function detail_bp()
    {
        return $this->hasMany('App\DetailBahanPenolong','Id_Detail_BP');
    }
}
