<?php

namespace App\Http\Controllers;

use App\DetailTKL;
use Illuminate\Http\Request;
use App\Transformers\DetailTKLTransformers;

class DetailTKLController extends RestController
{
    protected $transformer=DetailBahanTKLTransformers::Class;

    public function index()
    {
        $detail_tkl=DetailTKL::get();
        $response=$this->generateCollection($detail_tkl);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $tkl = TKL::where('Id_TKL',$request->Id_TKL)->get();
        $detail_tkl = DetailTKL::create([
            'Id_TKL' => $request->Id_TKL,
            'Id_Pemesanan' => $request->Id_Pemesanan,
            'Total' => $tkl->Salary
        ]);

        $response = $this->generateItem($detail_tkl);
        return $this->sendResponse($response);
    }

    public function update(Request $request, $id)
    {   
        $detail_tkl = DetailTKL::find($id);

        if(!is_null($request->Id_TKL)){
            $detail_tkl->Id_TKL = $request->Id_TKL;
        }
        if(!is_null($request->Id_Pemesanan)){
            $detail_tkl->Id_Pemesanan = $request->Id_Pemesanan;
        }
        
        $success = $detail_tkl->save();
        if(!$success){
            return response()->json('Error Update',500);
        }else   
            return response()->json('Success',200);
    }

    public function showbyID($id)
    {
        $detail_tkl = DetailTKL::find($id);
        return response()->json($detail_tkl,200);
    }

    public function destroy($id)
    {
        $detail_tkl = DetailBahanBaku::find($id);
        $status = $detail_tkl->delete();
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Deleted' : 'Error Delete'
        ]);
    }
}
