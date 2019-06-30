<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overhead extends Model
{
    //
    protected $table = 'overhead';
    protected $primaryKey = 'Id_Overhead';
    public $timestamp = true;
    protected $fillable = [
        'Id_Pemesanan',
        'Total',
    ];

    public function detail_overhead()
    {
        return $this->hasMany('App\DetailOverhead','Id_Detail_Overhead');
    }
}
