<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chatting;

class ChattingController extends Controller
{
    public function show($fromUser, $toUser){
        $chatting = Chatting::where('from_user_id', $fromUser)->orWhere('to_user_id', $toUser)->get();

        return response()->json(['data' => $chatting]);
    }

    public function store(Request $request){
        $request->validate([
            'from_user_id'=>'required',
            'to_user_id'=>'required',
            'text_chat'=>'required',
        ]);
        $chatting = Chatting::create($request->all());

        return response()->json(['data' => $chatting]);
    }
}
