<?php

namespace App\Http\Controllers;

use App\DetailTKTL;
use Illuminate\Http\Request;
use App\Transformers\DetailTKTLTransformers;

class DetailTKTLController extends RestController
{
    protected $transformer=DetailBahanTKTLTransformers::Class;

    public function index()
    {
        $detail_tktl=DetailTKTL::get();
        $response=$this->generateCollection($detail_tktl);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $detail_tktl = DetailTKL::create([
            'Id_User' => $request->Id_User,
            'Id_Pemesanan' => $request->Id_Pemesanan,
            'Total' => $request->Total
        ]);

        return response()->json([
            'status' => (bool) $detail_tkl,
            'data' => $detail_tkl,
            'message' => $detail_tkl ? 'Success' : 'Error Detail TKTL'
        ]);
    }

    public function update(Request $request, $id)
    {   
        $detail_tktl = DetailTKTL::find($id);

        if(!is_null($request->Id_User)){
            $detail_tktl->Id_User = $request->Id_User;
        }
        if(!is_null($request->Id_Pemesanan)){
            $detail_tktl->Id_Pemesanan = $request->Id_Pemesanan;
        }
        
        $success = $detail_tktl->save();
        if(!$success){
            return response()->json('Error Update',500);
        }else   
            return response()->json('Success',200);
    }

    public function showbyID($id)
    {
        $detail_tktl = DetailTKTL::find($id);
        return response()->json($detail_tkTl,200);
    }

    public function destroy($id)
    {
        $detail_tktl = DetailTKTL::find($id);
        $status = $detail_tktl->delete();
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Deleted' : 'Error Delete'
        ]);
    }
}
