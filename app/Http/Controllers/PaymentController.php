<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index(){
       $payments = Payment::all();
       return response()->json(['data' => $payments]);
    }

    public function store(Request $request){
        $request->validate([
            'user_id'=>'required|exists:users,id',
            'office_id'=>'required|exists:offices,id',
            'room_id'=>'required|exists:rooms,id',
        ]);
        $payment = Payment::create($request->all());

        return response()->json(['msg'=>'Data Payment berhasil dibuat', 'data' => $payment]);
    }

    public function show($id){
        $payment = Payment::findOrFail($id);

        return response()->json(['data' => $payment]);
    }
}
