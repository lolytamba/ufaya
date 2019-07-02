<?php

namespace App\Http\Controllers;

use App\DetailAktivitas;
use App\DetailBahanPenolong;
use App\Aktivitas;
use Illuminate\Http\Request;
use App\Transformers\DetailAktivitasTransformers;

class DetailAktivitasController extends RestController
{
    protected $transformer=DetailAktivitasTransformers::Class;

    public function index()
    {
        $detail_aktivitas=DetailAktivitas::get();
        $response=$this->generateCollection($detail_aktivitas);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $detail_aktivitas = DetailAktivitas::create([
            'Id_Bahan_Baku' => $request->Id_Bahan_Baku,
            'Id_Pemesanan' => $request->Id_Pemesanan,
            'Jumlah' => $request->Jumlah,
            'Total' => $request->Total
        ]);

        return response()->json([
            'status' => (bool) $detail_aktivitas,
            'data' => $detail_aktivitas,
            'message' => $detail_aktivitas ? 'Success' : 'Error Detail Aktivitas'
        ]);
    }

    public function update(Request $request, $id)
    {   
        $detail_aktivitas = DetailBahanBaku::find($id);

        if(!is_null($request->Id_Overhead)){
            $detail_aktivitas->Id_Overhead = $request->Id_Overhead;
        }
        if(!is_null($request->Id_Aktivitas)){
            $detail_aktivitas->Id_Aktivitas = $request->Id_Aktivitas;
        }

        $success = $detail_aktivitas->save();
        if(!$success){
            return response()->json('Error Update',500);
        }else   
            return response()->json('Success',200);
    }

    public function showbyID($id)
    {
        $detail_aktivitas = DetailAktivitas::find($id);
        return response()->json($detail_aktivitas,200);
    }

    public function destroy($id)
    {
        $detail_aktivitas = DetailAktivitas::find($id);
        $status = $detail_aktivitas->delete();
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Deleted' : 'Error Delete'
        ]);
    }

    public function hitungTotal()
    {
        $detail_aktivitas = DetailAktivitas::where('Total','0')->first();
        $aktivitas = Aktivitas::find($detail_aktivitas->Id_Aktivitas);
        $detail_bps = DetailBahanPenolong::where('Id_Detail_Aktivitas',$detail_aktivitas->Id_Detail_Aktivitas)->get();
        $total = $aktivitas->Harga;
        foreach($detail_bps as $detail_bp)
        {
            $total += $detail_bp->Total;
        }
        $detail_aktivitas->Total = $total;
        $detail_aktivitas->save();
        
        $response=$this->generateItem($detail_aktivitas);
        return $this->sendResponse($response,201);
    }
}
