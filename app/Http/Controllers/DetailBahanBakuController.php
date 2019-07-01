<?php

namespace App\Http\Controllers;

use App\DetailBahanBaku;
use Illuminate\Http\Request;
use App\Transformers\DetailBahanBakuTransformers;

class DetailBahanBakuController extends RestController
{
    protected $transformer=DetailBahanBakuTransformers::Class;

    public function index()
    {
        $detail_bahan_baku=DetailBahanBaku::get();
        $response=$this->generateCollection($detail_bahan_baku);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $detail_bahan_baku = DetailBahanBaku::create([
            'Id_Bahan_Baku' => $request->Id_Bahan_Baku,
            'Id_Pemesanan' => $request->Id_Pemesanan,
            'Jumlah' => $request->Jumlah,
            'Total' => $request->Total
        ]);

        return response()->json([
            'status' => (bool) $detail_bahan_baku,
            'data' => $detail_bahan_baku,
            'message' => $detail_bahan_baku ? 'Success' : 'Error Detail Bahan Baku'
        ]);
    }

    public function update(Request $request, $id)
    {   
        $detail_bahan_baku = DetailBahanBaku::find($id);

        if(!is_null($request->Id_Bahan_Baku)){
            $cabang->Id_Bahan_Baku = $request->Id_Bahan_Baku;
        }
        if(!is_null($request->Id_Pemesanan)){
            $cabang->Id_Pemesanan = $request->Id_Pemesanan;
        }
        if(!is_null($request->Jumlah)){
            $cabang->Jumlah = $request->Jumlah;
        }

        $success = $detail_bahan_baku->save();
        if(!$success){
            return response()->json('Error Update',500);
        }else   
            return response()->json('Success',200);
    }

    public function showbyID($id)
    {
        $detail_bahan_baku = DetailBahanBaku::find($id);
        return response()->json($detail_bahan_baku,200);
    }

    public function destroy($id)
    {
        $detail_bahan_baku = DetailBahanBaku::find($id);
        $status = $detail_bahan_baku->delete();
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Deleted' : 'Error Delete'
        ]);
    }
}
