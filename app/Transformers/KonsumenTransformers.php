<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Konsumen;

class KonsumenTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(Konsumen $konsumen)
    {
        return [
            'Id_Konsumen'       => $konsumen->Id_Konsumen,
            'Nama'              => $konsumen->Nama,
            'No_HP'             => $konsumen->No_HP,
            'Alamat'            => $konsumen->Alamat,
            'Jenis_Kelamin'     => $konsumen->Jenis_Kelamin,
        ];
    }
}