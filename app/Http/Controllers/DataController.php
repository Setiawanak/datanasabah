<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
   public function index() {
    $data = Data::all();
    return view('data.index',compact(['data']) );
    }

    public function create() {
    return view('data.create');
    }

    public function store(Request $request) {
        Data::create($request->all());
        return redirect('/data');
    }

    public function edit($id) {
        $Data = Data::find($id);
        return view('data.edit',compact(['Data']));
    }

    public function update(Request $request,$id) {
        $Data = Data::find($id);
        $Data->update($request->all());
        return redirect('/data');
    }

    public function destroy($id) {
        $Data = Data::find($id);
        $Data->delete();
        return redirect('/data');
    }
}
