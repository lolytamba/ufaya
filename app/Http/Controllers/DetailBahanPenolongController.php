<?php

namespace App\Http\Controllers;

use App\DetailBahanPenolong;
use App\DetailAktivitas;
use App\BahanPenolong;
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
        $detail_aktivitas = DetailAktivitas::find($request->Id_Detail_Aktivitas);
        $bahan_penolong = BahanPenolong::find($request->Id_Bahan_Penolong);
        $detail_bahan_penolong = DetailBahanPenolong::create([
            'Id_Bahan_Penolong' => $request->Id_Bahan_Penolong,
            'Id_Detail_Aktivitas' => $request->Id_Detail_Aktivitas,
            'Jumlah' => $request->Jumlah,
            'Total' => $request->Jumlah * $bahan_penolong->Harga
        ]);

        $detail_aktivitas->Total += $detail_bahan_penolong->Total;
        $overhead->Total += $detail_bahan_penolong->Total;
        $detail_aktivitas->save();

        $response = $this->generateItem($detail_bahan_penolong);
        return $this->sendResponse($response);
    }

    public function update(Request $request, $id)
    {   
        $detail_bahan_penolong = DetailBahanPenolong::find($id);

        if(!is_null($request->Id_Bahan_Penolong)){
            $detail_bahan_penolong->Id_Bahan_Penolong = $request->Id_Bahan_Penolong;
        }
        if(!is_null($request->Id_Detail_Aktivitas)){
            $detail_bahan_penolong->Id_Detail_Aktivitas = $request->Id_Detail_Aktivitas;
        }

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
