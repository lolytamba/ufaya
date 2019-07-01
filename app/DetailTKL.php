<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTKL extends Model
{
    //
    protected $table = 'detail_tkl';
    protected $primaryKey = 'Id_Detail_TKL';
    public $timestamp = true;
    protected $fillable = [
        'Id_Detail_TKL',
        'Id_TKL',
        'Id_Pemesanan',
        'Total',
    ];

    public function tkl()
    {
        return $this->belongsTo('App\TKL','Id_TKL');
    }

    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan','Id_Pemesanan');
    }
}
