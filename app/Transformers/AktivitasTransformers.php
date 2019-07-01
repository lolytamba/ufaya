<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Aktivitas;

class AktivitasTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(Aktivitas $aktivitas)
    {
        return [
            'Id_Aktivitas'  => $aktivitas->Id_Aktivitas,
            'Nama'          => $aktivitas->Nama,
            'Total'         => $aktivitas->Total,
        ];
    }
}