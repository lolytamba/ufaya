<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TKL extends Model
{
    //
    protected $table = 'tkl';
    protected $primaryKey = 'Id_TKL';
    public $timestamp = true;
    protected $fillable = [
        'Nama_TKL',
        'No_Telp',
        'Alamat_TKL',
        'Salary'
    ];
}
