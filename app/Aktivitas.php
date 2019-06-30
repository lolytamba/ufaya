<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    //
    protected $table = 'aktivitas';
    protected $primaryKey = 'Id_Aktivitas';
    public $timestamp = true;
    protected $fillable = [
        'Id_Aktivitas',
        'Nama',
        'Total',
    ];

    public function detail_aktivitas()
    {
        return $this->hasMany('App\DetailAktivitas','Id_Detail_Aktivitas');
    }
}
