<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\DetailBahanBaku;

class DetailBahanBakuTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(DetailBahanBaku $detail_bahan_baku)
    {
        return [
            'Id_Detail_Bahan_Baku'  => $detail_bahan_baku->Id_Detail_Bahan_Baku,
            'Id_Bahan_Baku'         => $detail_bahan_baku->Id_Bahan_Baku,
            'Id_Pemesanan'          => $detail_bahan_baku->Id_Pemesanan,
            'Jumlah'                => $detail_bahan_baku->Jumlah,
            'Total'                 => $detail_bahan_baku->Total,
        ];
    }
}