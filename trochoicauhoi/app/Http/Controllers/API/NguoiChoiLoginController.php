<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
//use JWTAuth;
use JWTAuthException;
use Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

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
            return response()->json(['success'=>false,'message'=>'Sai tên đăng nhập hoặc mật khẩu'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['Failed to create token'], 500);
        }
        $request->headers->set('Authorization','Bearer '.$token);
        return response()->json([
            'success'=>true,
            'token' => $token,
            'type'  => 'bearer'
        ]);
    }
    
    public function getUser(Request $request){
        return auth('api')->user();
    }
    
}
