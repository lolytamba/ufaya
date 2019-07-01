<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Pemesanan;

class PemesananTransformers extends TransformerAbstract
{
    /**
     * Transform Branch.
     *
     * @param Branch $branch
     */
    public function transform(Pemesanan $pemesanan)
    {
        return [
            'Id_Pemesanan'      => $pemesanan->Id_Overhead,
            'Id_Konsumen'       => $pemesanan->Id_Konsumen,
            'Nama_Produk'       => $pemesanan->Nama_Produk,
            'Tanggal'           => $pemesanan->Tanggal,
            'Tanggal_Selesai'   => $pemesanan->Tanggal_Selesai,
            'Lama_Kerja'        => $pemesanan->Lama_Kerja,
            'Jumlah'            => $pemesanan->Jumlah,
            'Total'             => $pemesanan->Total,
        ];
    }
}