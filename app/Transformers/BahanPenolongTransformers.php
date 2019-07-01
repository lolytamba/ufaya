<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\BahanPenolong;

class BahanPenolongTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(BahanPenolong $bahan_penolong)
    {
        return [
            'Id_Bahan_Penolong' => $bahan_penolong->Id_Bahan_Penolong,
            'Nama'              => $bahan_penolong->Nama,
            'Harga'             => $bahan_penolong->Harga,
        ];
    }
}