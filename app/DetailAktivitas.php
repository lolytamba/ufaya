<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAktivitas extends Model
{
    //
    protected $table = 'detail_aktivitas';
    protected $primaryKey = 'Id_Detail_Aktivitas';
    public $timestamp = true;
    protected $fillable = [
        'Id_Detail_Aktivitas',
        'Id_Aktivitas',
        'Id_Overhead',
        'Total',
    ];

    public function aktivitas()
    {
        return $this->belongsTo('App\Aktivitas','Id_Aktivitas');
    }

    public function overhead()
    {
        return $this->belongsTo('App\Overhead','Id_Overhead');
    }
}
