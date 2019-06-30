<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOverhead extends Model
{
    //
    protected $table = 'detail_overhead';
    protected $primaryKey = 'Id_Detail_Overhead';
    public $timestamp = true;
    protected $fillable = [
        'Id_Detail_Overhead',
        'Id_Overhead',
        'Nama_Detail_Overhead',
        'Harga_Detail_Overhead',
        'Jumlah',
        'Total',
    ];

    public function overhead()
    {
        return $this->belongsTo('App\Overhead','Id_Overhead');
    }
}
