<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    //
    protected $table = 'konsumen';
    protected $primaryKey = 'Id_Konsumen';
    public $timestamp = true;
    protected $fillable = [
        'Nama',
        'No_HP',
        'Alamat',
        'Jenis_Kelamin'
    ];
}
