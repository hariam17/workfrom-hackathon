<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return response()->json(['data' => $rooms]);
    }

    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'harga'=>'required',
            'fungsi'=>'required',
            'isReady'=>'required',
            'urlimage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        $request->urlimage = $fileName;
        $room = Room::create($request->all());

        return response()->json(['msg'=>'Data room berhasil dibuat', 'data' => $room]);
    }

    public function show($id){
        $room=Room::findOrFail($id);
        
        return response()->json(['data' => $room]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama'=>'required',
            'harga'=>'required',
            'fungsi'=>'required',
            'isReady'=>'required',
            'urlimage'=>'required'
        ]);
        $room=Room::findOrFail($id);
        $room->update($request->all());

        return response()->json(['data' => $room]);
    }

    public function destroy($id){
        $room=Room::findorFail($id)->delete();

        return response()->json(['msg' => 'Data room berhasil dihapus!']);
    }
}
