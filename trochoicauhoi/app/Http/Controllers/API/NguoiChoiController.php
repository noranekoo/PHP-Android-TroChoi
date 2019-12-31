<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NguoiChoi;
use App\LuotChoi;
use Illuminate\Support\Facades\Hash;

class NguoiChoiController extends Controller
{
   
    public function layBangXepHang(Request $request)
    {
        $page = $request->query('page',1);
        $limit = $request->query('limit',25);

        if(auth('api')->check())
        {
            $listNguoiChoi = NguoiChoi::orderBy('diem_cao_nhat','desc')->skip(($page-1)*$limit)->take($limit)->get();
            return response()->json(
                [
                    'total'=>NguoiChoi::count(),
                    'data'=>$listNguoiChoi
                ]);
        }
        return response()->json(['success'=>false, 'message'=>'Token is required']);
        
    }
    public function layNguoiChoi($id)
    {
        if(auth('api')->check())
        {
            $nguoiChoi = NguoiChoi::find($id);
            $result = ['success'=>true,'data'=>$nguoiChoi];
            return response()->json($result);
        }
        return response()->json(['success'=>false, 'message'=>'Token is required']);
    }
    public function top10()
    {
        if(auth('api')->check())
        {
            $top10 = NguoiChoi::orderBy('diem_cao_nhat','desc')->get();
        
            $result = ['success'=>true,'data'=>$top10];
            return response()->json($result);
        }
        return response()->json(['success' => false, 'message' => 'Token is required']);
        
    }

    public function lichSuChoi($id)
    {
        if(auth('api')->check())
        {
            $lichSuChoi = LuotChoi::where('nguoi_choi_id',$id)->get();
            $result = ['total'=>$lichSuChoi->count(), 'data'=>$lichSuChoi];
            return response()->json($result);
        }
        return response()->json(['success' => false, 'message' => 'Token is required']);
    }

    public function dangKy(Request $request)
    {
        $nguoiChoi = new NguoiChoi();
        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->mat_khau = Hash::make($request->mat_khau);
        $nguoiChoi->email = $request->email;
        $nguoiChoi->hinh_dai_dien = '';
        $nguoiChoi->diem_cao_nhat = 0;
        $nguoiChoi->credit = 0;
        if(NguoiChoi::where('ten_dang_nhap','=',$nguoiChoi->ten_dang_nhap)->count() == 0)
        {
            $nguoiChoi->save();
            return response()->json(['success'=>true, 'message'=>'Sign up success']);
        }
        return response()->json(['success'=>false, 'message'=>'ten_dang_nhap is exist']);
    }

    public function taiAnhLen($imgCode, $name)
    {
        $image = $imgCode;
        $fileName = $name;
        $image = str_replace(' ', '+', $image);
        $imageName = $fileName.'.'.'png';
        \File::put(public_path(). '\assets\images\users/' . $imageName, base64_decode($image));
        return $imageName;
    }

    public function capNhatThongTin(Request $request)
    {
        if(auth('api')->check())
        {
            $user = NguoiChoi::find($request->id);
            $user->email = $request->email;
            $user->mat_khau = $request->mat_khau;
            $user->hinh_dai_dien = taiAnhLen($request->image,$request->ten_dang_nhap);
            $user->save();
            return response()->json(['success'=>true]);
        }
        return response()->json(['success' => false, 'message' => 'Token is required']);
    }

    
}
