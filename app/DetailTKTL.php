<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTKTL extends Model
{
    //
    protected $table = 'detail_tktl';
    protected $primaryKey = 'Id_Detail_TKTL';
    public $timestamp = true;
    protected $fillable = [
        'Id_User',
        'Id_Pemesanan',
        'Total',
    ];

    public function tkl()
    {
        return $this->belongsTo('App\User','Id_User');
    }

    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan','Id_Pemesanan');
    }
}
