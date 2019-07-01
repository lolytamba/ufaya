<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;

class UserTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(User $user)
    {
        return [
            'Id_User'           => $user->Id_User,
            'Id_Role'           => $user->Id_Role,
            'Nama'              => $user->Nama,
            'User_Name'         => $user->User_Name,
            'Password'          => $user->Password,
            'Salary'            => $user->Salary,
            'No_Telp'           => $user->No_Telp,
            'remember_token'    => $user->remember_token,
        ];
    }
}