<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsNguoiChoi = NguoiChoi::all();
        return view('ds-nguoi-choi',compact('dsNguoiChoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoichoi = new NguoiChoi;
        $nguoichoi->ten_dang_nhap = $request->input('ten_dang_nhap');
        $nguoichoi->mat_khau = $request->input('mat_khau');
        $nguoichoi->email = $request->input('email');
        if( $nguoichoi->hinh_dai_dien == null)
            $nguoichoi->hinh_dai_dien = '';
        else
            $nguoichoi->hinh_dai_dien = $request->input('hinh_dai_dien');
        $nguoichoi->credit = '0';
        $nguoichoi->diem_cao_nhat = '0';
        $nguoichoi->save();
        return redirect()->route('nguoichoi')->with('success','Thêm thành công!!');
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
     public function Delete($id)
    {
        $nguoichoi = NguoiChoi::find($id);
        $nguoichoi->delete();
        return redirect()->route('nguoichoi')->with('success','Xóa thành công!!');
    }
    public function forceDelete($id)
    {
        $nguoichoi = NguoiChoi::onlyTrashed()->get()->find($id);
        $nguoichoi->forceDelete();
        return redirect()->route('nguoichoi.thungrac')->with('success','Xóa thành công!!');
    }
     public function restore($id)
    {
        $nguoichoi = NguoiChoi::onlyTrashed()->get()->find($id);
        $nguoichoi->restore();
        return redirect()->route('nguoichoi.thungrac')->with('success','Khôi phục thành công!!');
    }
    public function onlyTrashed()
    {
        $dsNguoiChoi = NguoiChoi::onlyTrashed()->get();
        return view('nguoi-choi-trashed',compact('dsNguoiChoi'));   
    }
}
