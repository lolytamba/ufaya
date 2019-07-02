<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use Illuminate\Http\Request;
use App\Transformers\PemesananTransformers;

class PemesananController extends RestController
{
    protected $transformer=PemesananTransformers::Class;

    public function index()
    {
        $pemesanan=Pemesanan::get();
        $response=$this->generateCollection($pemesanan);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $pemesanan = Pemesanan::create([
            'Id_Konsumen' => $request->Id_Konsumen,
            'Nama_Produk' => $request->Nama_Produk,
            'Tanggal' => $request->Tanggal,
            'Tanggal_Selesai' => $request->Tanggal_Selesai,
            'Lama_Kerja' => $request->Lama_Kerja,
            'Jumlah' => $request->Jumlah,
            'Total' => 0,
        ]);

        $overhead = Overhead::create([
            'Id_Pemesanan' => $pemesanan->Id_Pemesanan,
            'Total' => 0,
        ]);

        return response()->json([
            'status' => (bool) $pemesanan,
            'data' => $pemesanan,
            'data1' => $overhead,
            'message' => $pemesanan ? 'Success' : 'Error Pemesanan'
        ]);
    }

    public function update(Request $request, $id)
    {   
        $pemesanan = DetailOverhead::find($id);

        if(!is_null($request->Id_Konsumen)){
            $pemesanan->Id_Konsumen = $request->Id_Konsumen;
        }
        if(!is_null($request->Nama_Produk)){
            $pemesanan->Nama_Produk = $request->Nama_Produk;
        }
        if(!is_null($request->Tanggal)){
            $pemesanan->Tanggal = $request->Tanggal;
        }if(!is_null($request->Tanggal_Selesai)){
            $pemesanan->Tanggal_Selesai = $request->Tanggal_Selesai;
        }if(!is_null($request->Lama_Kerja)){
            $pemesanan->Lama_Kerja = $request->Lama_Kerja;
        }if(!is_null($request->Jumlah)){
            $pemesanan->Jumlah = $request->Jumlah;
        }
        $success = $pemesanan->save();
        if(!$success){
            return response()->json('Error Update',500);
        }else   
            return response()->json('Success',200);
    }

    public function showbyID($id)
    {
        $pemesanan = DetailTKL::find($id);
        return response()->json($pemesanan,200);
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        $status = $pemesanan->delete();
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Deleted' : 'Error Delete'
        ]);
    }
}
