<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\DetailBahanPenolong;

class DetailBahanPenolongTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(DetailBahanPenolong $detail_bahan_penolong)
    {
        return [
            'Id_Detail_BP'          => $detail_bahan_penolong->Id_Detail_BP,
            'Id_Bahan_Penolong'     => $detail_bahan_penolong->Id_Bahan_Penolong,
            'Id_Detail_Aktivitas'   => $detail_bahan_penolong->Id_Detail_Aktivitas,
            'Jumlah'                => $detail_bahan_penolong->Jumlah,
            'Total'                 => $detail_bahan_penolong->Total,
        ];
    }
}