<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = 'Id_User';
    public $timestamp = true;
    protected $fillable = [
        'Id_Role',
        'Nama', 
        'User_Name', 
        'Password',
        'No_Telp',
        'Salary'
    ];

    public function role()
    {
        return $this->belongsTo('App\Role','Id_Role');
    }
}
