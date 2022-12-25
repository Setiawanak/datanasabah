<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataApiController extends Controller
{
    public function index() {
        $data = Data::all();
        return response()->json(['message'=> 'success','data'=>$data]);
    }

     public function show($id) {
        $data1 = Data::find($id);
        return response()->json(['message'=> 'success','data'=>$data1]);
    }

    public function store(Request $request) {
        $data1 = Data::create($request->all());
        return response()->json(['message'=> 'Data has been inserted successfuly','data'=>$data1]);
    }

    public function update(Request $request,$id) {
        $data1 = Data::find($id);
        $data1->update($request->all());
        return response()->json(['message'=> 'Data has been updated successfuly','data'=>$data1]);
    }

    public function destroy($id) {
        $data1 = Data::find($id);
        $data1->delete();
        return response()->json(['message'=> 'Data has been deleted successfuly','data'=>null]);
    }
}
