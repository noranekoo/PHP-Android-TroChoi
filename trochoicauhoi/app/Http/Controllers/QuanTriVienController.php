<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers;
use App\Http\Requests\DangNhapRequest;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\QuanTriVien;
class QuanTriVienController extends Controller
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
    public function dangNhap()
    {
        return view('dang-nhap');
    }
    public function xuLyDangNhap(DangNhapRequest $request)
    {
        //$thongtin = $request->only(['ten_dang_nhap','mat_khau']);
        // $qtv = QuanTriVien::where('ten_dang_nhap',$thongtin['ten_dang_nhap'])->first();
        // if( $qtv == null )
        // {
        //    //return view('dang-nhap')->with('error','Sai tên đăng nhập');
        //     // return view('layout');
        //     return redirect()->back()->with('success', ['your message,here']);
        // }
        // if( !Hash::check($thongtin['mat_khau'], $qtv->mat_khau ))
        // {
        //     //return view('dang-nhap')->with('error','Sai mật khẩu');
        // }
        // Auth::login($qtv);
        // // return "Đăng nhập thành công !!";
        // return view('dashboard');
        if(Auth::attempt(['ten_dang_nhap'=>$request->ten_dang_nhap,'password'=>$request->mat_khau]))
            return redirect()->route('dashboard');
            //return redirect()->route('dashboard');
        return redirect('dang-nhap');

    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dangnhap');
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
}
