<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index(){
        $offices = Office::all();
        return response()->json(['data' => $offices]);
    }

    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'user_id'=>'required',
            'alamat'=>'required',
            'provinsi'=>'required',
            'kota'=>'required',
            'jml_lantai'=>'required',
            'urlimage'=>'required'
        ]);
        $office = Office::create($request->all());

        return response()->json(['msg'=>'Data office berhasil dibuat', 'data' => $office]);
    }

    public function show($id){
        $office=Office::findOrFail($id);
        
        return response()->json(['data' => $office]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama'=>'required',
            'user_id'=>'required',
            'alamat'=>'required',
            'provinsi'=>'required',
            'kota'=>'required',
            'jml_lantai'=>'required',
            'urlimage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        $request->urlimage = $fileName;
        $office=Office::findOrFail($id);
        $office->update($request->all());

        return response()->json(['data' => $office]);
    }

    public function destroy($id){
        $office=Office::findOrfail($id)->delete();

        return response()->json(['msg'=>'Data office berhasil dihapus!']);
    }
}
