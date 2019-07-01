<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\BahanBaku;

class AktivitasTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(BahanBaku $bahan_baku)
    {
        return [
            'Id_Bahan_Baku' => $bahan_baku->Id_Bahan_Baku,
            'Nama'          => $bahan_baku->Nama,
            'Harga'         => $bahan_baku->Harga,
        ];
    }
}