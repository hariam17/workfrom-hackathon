<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return response()->json(['data' => $roles]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
        ]);

        $role = Role::create($request->all());

        return response()->json(['msg'=>'Data Role berhasil dibuat', 'data' => $role]);
    }
}
