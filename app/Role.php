<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    const ppc        = 1;
    const produksi   = 2;
    const finance    = 3;

    protected $table = 'roles';
    protected $primaryKey = 'Id_Role'; 
    public $timestamp = true;
    protected $fillable = [
        'Role'
    ];

    public function user()
    {
        return $this->hasMany('App\User','Id_Role');
    }
}
