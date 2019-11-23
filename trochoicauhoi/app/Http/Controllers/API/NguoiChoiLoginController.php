<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use JWTAuth;
use JWTAuthException;
use Hash;

class NguoiChoiLoginController extends Controller
{
    
    public function login(Request $request){
        $credentials = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password'      => $request->mat_khau
        ];
        $token = null;
        try {
           if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['message'=>'Sai tên đăng nhập hoặc mật khẩu'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json([
            'token' => $token,
            'type'  => 'bearer'
        ]);
    }

    
    public function getUser(){
        return auth('api')->user();
    }
}
