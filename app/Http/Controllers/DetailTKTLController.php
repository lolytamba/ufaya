<?php

namespace App\Http\Controllers;

use App\DetailTKTL;
use App\User;
use Illuminate\Http\Request;
use App\Transformers\DetailTKTLTransformers;

class DetailTKTLController extends RestController
{
    protected $transformer=DetailTKTLTransformers::Class;

    public function index()
    {
        $detail_tktl=DetailTKTL::get();
        $response=$this->generateCollection($detail_tktl);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $user = User::find($request->Id_User);
        $detail_tktl = DetailTKTL::create([
            'Id_User' => $request->Id_User,
            'Id_Pemesanan' => $request->Id_Pemesanan,
            'Total' => $user->Salary
        ]);

        $response = $this->generateItem($detail_tktl);
        return $this->sendResponse($response);
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
