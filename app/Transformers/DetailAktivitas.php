<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\DetailAktivitas;

class DetailAktivitasTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(DetailAktivitas $detail_aktivitas)
    {
        return [
            'Id_Detail_Aktivitas'   => $detail_aktivitas->Id_Detail_Aktivitas,
            'Id_Overhead'           => $detail_aktivitas->Id_Overead,
            'Id_Aktivitas'          => $detail_aktivitas->Id_Aktivitas,
            'Total'                 => $detail_aktivitas->Total,
        ];
    }
}