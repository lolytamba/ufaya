<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Overhead;

class OverheadTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(Overhead $overhead)
    {
        return [
            'Id_Overhead'       => $overhead->Id_Overhead,
            'Id_Pemesanan'      => $overhead->Id_Pemesanan,
            'Total'             => $overhead->Total,
        ];
    }
}