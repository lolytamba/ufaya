<?php

namespace App\Http\Controllers;

use App\DetailOverhead;
use Illuminate\Http\Request;
use App\Transformers\DetailOverheadTransformers;

class DetailOverheadController extends RestController
{
    protected $transformer=DetailOverheadTransformers::Class;

    public function index()
    {
        $detail_overhead=DetailOverhead::get();
        $response=$this->generateCollection($detail_overhead);
        return $this->sendResponse($response,201);
    }

    public function store(Request $request)
    {
        $detail_overhead = DetailOverhead::create([
            'Id_Overhead' => $request->Id_Overhead,
            'Nama_Detail_Overhead' => $request->Nama_Detail_Overhead,
            'Harga_Detail_Overhead' => $request->Harga_Detail_Overhead,
            'Jumlah' => $request->Jumlah,
            'Total' => $request->Harga_Detail_Overhead * $request->Jumlah
        ]);

        $overhead->Total += $detail_overhead->Total;
        $overhead->save();
        $response = $this->generateItem($detail_overhead);
        return $this->sendResponse($response);
    }

    public function update(Request $request, $id)
    {   
        $detail_overhead = DetailOverhead::find($id);

        if(!is_null($request->Id_Overhead)){
            $detail_overhead->Id_Overhead = $request->Id_Overhead;
        }
        if(!is_null($request->Nama_Detail_Overhead)){
            $detail_overhead->Nama_Detail_Overhead = $request->Nama_Detail_Overhead;
        }
        if(!is_null($request->Harga_Detail_Overhead)){
            $detail_overhead->Harga_Detail_Overhead = $request->Harga_Detail_Overhead;
        }if(!is_null($request->Jumlah)){
            $detail_overhead->Jumlah = $request->Jumlah;
        }
        $success = $detail_overhead->save();
        if(!$success){
            return response()->json('Error Update',500);
        }else   
            return response()->json('Success',200);
    }

    public function showbyID($id)
    {
        $detail_overhead = DetailTKL::find($id);
        return response()->json($detail_overhead,200);
    }

    public function destroy($id)
    {
        $detail_overhead = DetailOverhead::find($id);
        $status = $detail_overhead->delete();
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Deleted' : 'Error Delete'
        ]);
    }
}
