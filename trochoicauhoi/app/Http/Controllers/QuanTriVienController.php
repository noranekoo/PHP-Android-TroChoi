<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers;
use App\Http\Requests\DangNhapRequest;
use Illuminate\Support\Facades\Auth;
use App\QuanTriVien;
use Illuminate\Http\Request;
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
    public function xuLyKhoaManHinh(Request $request)
    {
        $password = Auth::user()->mat_khau;
        if( Hash::check($request->mat_khau,$password ))
            return redirect()->route('dashboard');
        alert()->error('', 'Mật khẩu không chính xác !');
        return redirect()->route('lock-screen');
    }
    public function xuLyDangNhap(DangNhapRequest $request)
    {

        if(auth('web')->attempt(['ten_dang_nhap'=>$request->ten_dang_nhap,'password'=>$request->mat_khau]))
            return redirect()->route('dashboard');
            //return redirect()->route('dashboard');
        return redirect('dang-nhap')->with('fail','Đăng nhập thất bại, tên đăng nhập hoặc mật khẩu không chính xác !!');
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dangnhap');
    }
     public function xuLyUpLoad(Request $request)
    {
        $request->validate(['ten_input' =>'mimes:png,jpg']);
        if($request->hasFile('ten_input'))
        {
            $file = $request->ten_input;
            $file->storeAs('assets/images/users',$file->getClientOriginalName());
            return "<image url='assets/images/users/".$file->getClientOriginalName()."'' />";
        }
        return "upload thất bại";
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
