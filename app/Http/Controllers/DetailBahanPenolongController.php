<?php

namespace App\Http\Controllers;

use App\DetailBahanPenolong;
use Illuminate\Http\Request;
use App\Transformers\DetailBahanPenolongTransformers;

class DetailBahanPenolongController extends RestController
{
    protected $transformer=DetailBahanPenolongTransformers::Class;

    public function index()
    {
        $detail_bahan_penolong=DetailAktivitas::get();
        $response=$this->generateCollection($detail_bahan_penolong);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $bahan_penolong = BahanPenolong::find($request->Id_Bahan_Penolong);
        $detail_bahan_penolong = DetailBahanPenolong::create([
            'Id_Bahan_Penolong' => $request->Id_Bahan_Penolong,
            'Id_Detail_Aktivitas' => $request->Id_Detail_Aktivitas,
            'Jumlah' => $request->Jumlah,
            'Total' => $request->Jumlah * $bahan_penolong->Harga
        ]);

        $response = $this->generateItem($detail_bahan_penolong);
        return $this->sendResponse($response);
    }

    public function update(Request $request, $id)
    {   
        $detail_bahan_penolong = DetailBahanPenolong::find($id);
        $old_BP = BahanPenolong::find($detail_bahan_penolong->Id_Bahan_Penolong);
        $old_qty = $detail_bahan_penolong->Jumlah;
        $old_price = $old_BP->Harga;
        $old = $old_qty*$old_price;

        if(!is_null($request->Id_Bahan_Penolong)){
            $detail_bahan_penolong->Id_Bahan_Penolong = $request->Id_Bahan_Penolong;
        }
        if(!is_null($request->Jumlah)){
            $detail_bahan_penolong->Jumlah = $request->Jumlah;
        }
        if(!is_null($request->Id_Detail_Aktivitas)){
            $detail_bahan_penolong->Id_Detail_Aktivitas = $request->Id_Detail_Aktivitas;
        }
        $new_BP = BahanPenolong::find($request->Id_Bahan_Penolong);
        $new_price = $new_BP->Harga;
        
        $detail_bahan_penolong->Total -= $old;
        $detail_bahan_penolong->Total += $new_price*$request->Jumlah;

        $success = $detail_bahan_penolong->save();
        if(!$success){
            return response()->json('Error Update',500);
        }else   
            return response()->json('Success',200);
    }

    public function showbyID($id)
    {
        $detail_bahan_penolong = DetailBahanPenolong::find($id);
        return response()->json($detail_bahan_penolong,200);
    }

    public function destroy($id)
    {
        $detail_bahan_penolong = DetailBahanPenolong::find($id);
        $status = $detail_bahan_penolong->delete();
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Deleted' : 'Error Delete'
        ]);
    }
}
