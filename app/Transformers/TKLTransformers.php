<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\TKL;

class TKLTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(TKL $tkl)
    {
        return [
            'Id_TKL'    => $tkl->Id_Role,
            'Nama_TKL'  => $tkl->Roles,
            'No_Telp'   => $tkl->No_Telp,
            'Alamat_TKL'=> $tkl->Alamat_TKL,
            'Salary'    => $tkl->Salary,
        ];
    }
}