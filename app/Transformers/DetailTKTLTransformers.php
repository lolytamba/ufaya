<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\DetailTKTL;

class DetailTKTLTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(DetailTKTL $detail_tktl)
    {
        return [
            'Id_Detail_TKTL'    => $detail_tktl->Id_Detail_TKTL,
            'Id_User'           => $detail_tktl->Id_User,
            'Id_Pemesanan'      => $detail_tktl->Id_Pemesanan,
            'Total'             => $detail_tktl->Total,
        ];
    }
}