<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NguoiChoi;
use App\LuotChoi;
use Illuminate\Support\Facades\Hash;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
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
    // public function DangNhap(Request $request)
    // {
    //     $thongtin = $request->only(['ten_dang_nhap','mat_khau']);
    //     $nguoichoi = NguoiChoi::where('ten_dang_nhap',$thongtin['ten_dang_nhap'])->first();
    //     if( $nguoichoi == null )
    //     {
    //        $result = ['success'=>false];
    //        return response()->json($result);
    //     }
    //     if( !Hash::check($thongtin['mat_khau'], $nguoichoi->mat_khau ))
    //     {
    //         $result = ['success'=>false];
    //         return response()->json($result);
    //     }
    //     $result = ['success'=>true];
    //     return response()->json($result);
    // }
}
