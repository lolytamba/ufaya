<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\DetailTKL;

class DetailTKLTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(DetailTKL $detail_tkl)
    {
        return [
            'Id_Detail_TKL'     => $detail_tkl->Id_Detail_TKL,
            'Id_TKL'            => $detail_tkl->Id_TKL,
            'Id_Pemesanan'      => $detail_tkl->Id_Pemesanan,
            'Total'             => $detail_tkl->Total,
        ];
    }
}