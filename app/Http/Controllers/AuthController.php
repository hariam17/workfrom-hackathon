<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'msg' => 'Register berhasil',
                'access_token' => $token,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => 'Register gagal'
            ]);
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json(['msg' => 'Email atau password salah']);
            }

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'msg' => 'Login berhasil',
                'access_token' => $token,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => 'Login gagal'
            ]);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->tokens()->delete();

            return response()->json([
                'msg' => 'Anda berhasil logout'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => 'Logout gagal'
            ]);
        }
    }
}
