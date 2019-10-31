<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
class LinhVucController extends Controller
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
        $dsLinhvuc = LinhVuc::all();
        return view('ds-linh-vuc',compact('dsLinhvuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linhvuc = new LinhVuc;
        $linhvuc->ten_linh_vuc = $request->input('ten_linh_vuc');
        $linhvuc->save();
        return redirect()->route('linhvuc')->with('success','Thêm thành công!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsLinhvuc = LinhVuc::all();
        $dsLinhvuc2 = LinhVuc::find($id);
        $user = Auth::user();
       
        return view('ds-linh-vuc',compact('dsLinhvuc','dsLinhvuc2','name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $linhvuc = LinhVuc::find($id);
        $linhvuc->ten_linh_vuc = $request->input('ten_linh_vuc');
        $linhvuc->save();
        return redirect()->route('linhvuc')->with('success','Cập nhật thành công!!');
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
        $linhvuc = LinhVuc::find($id);
        $linhvuc->delete();
        return redirect()->route('linhvuc')->with('success','Xóa thành công!!');
    }
    public function forceDelete($id)
    {
        $linhvuc = LinhVuc::onlyTrashed()->get()->find($id);
        $linhvuc->forceDelete();
        return redirect()->route('linhvuc.thungrac')->with('success','Xóa thành công!!');
    }
     public function restore($id)
    {
        $linhvuc = LinhVuc::onlyTrashed()->get()->find($id);
        $linhvuc->restore();
        return redirect()->route('linhvuc.thungrac')->with('success','Khôi phục thành công!!');
    }
    public function onlyTrashed()
    {
        $dsLinhvuc = LinhVuc::onlyTrashed()->get();
        return view('linh-vuc-trashed',compact('dsLinhvuc'));   
    }
}
