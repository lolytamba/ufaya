<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBahanPenolong extends Model
{
    //
    protected $table = 'detail_bp';
    protected $primaryKey = 'Id_Detail_BP';
    public $timestamp = true;
    protected $fillable = [
        'Id_Detail_BP',
        'Id_Bahan_Penolong',
        'Id_Detail_Aktivitas',
        'Jumlah',
        'Total',
    ];

    public function bahan_penolong()
    {
        return $this->belongsTo('App\BahanPenolong','Id_Bahan_Penolong');
    }

    public function detail_aktivitas()
    {
        return $this->belongsTo('App\DetailAktivitas','Id_Detail_Aktivitas');
    }
}
