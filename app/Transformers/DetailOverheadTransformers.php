<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\DetailOverhead;

class DetailOverheadTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(DetailOverhead $detail_overhead)
    {
        return [
            'Id_Detail_Overhead'    => $detail_overhead->Id_Detail_Overhead,
            'Id_Overhead'           => $detail_overhead->Id_Overhead,
            'Nama_Detail_Overhead'  => $detail_overhead->Nama_Detail_Overhead,
            'Harga_Detail_Overhead' => $detail_overhead->Harga_Detail_Overhead,
            'Jumlah'                => $detail_overhead->Jumlah,
            'Total'                 => $detail_overhead->Total,
        ];
    }
}