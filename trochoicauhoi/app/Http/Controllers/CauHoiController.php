<?php

namespace App\Http\Controllers;

use App\CauHoi;
use App\Http\Requests\CauHoiRequest;
class CauHoiController extends Controller
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
        $dsCauHoi = CauHoi::all();
        return view('ds-cau-hoi',compact('dsCauHoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CauHoiRequest $request)
    {
        $cauhoi = new CauHoi;
        $cauhoi->linh_vuc_id = $request->input('linh_vuc_id');
        $cauhoi->noi_dung = $request->input('noi_dung');
        $cauhoi->phuong_an_a = $request->input('phuong_an_a');
        $cauhoi->phuong_an_b = $request->input('phuong_an_b');
        $cauhoi->phuong_an_c = $request->input('phuong_an_c');
        $cauhoi->phuong_an_d = $request->input('phuong_an_d');
        $cauhoi->dap_an = $request->input('dap_an');
        $cauhoi->save();
        return redirect()->route('cauhoi')->with('success','Thêm thành công!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsCauHoi = CauHoi::all();
        $dsCauHoi2 = CauHoi::find($id);
        return view('ds-cau-hoi',compact('dsCauHoi','dsCauHoi2'));
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
    public function update(CauHoiRequest $request, $id)
    {
        $cauhoi = CauHoi::find($id);
        $cauhoi->linh_vuc_id = $request->input('linh_vuc_id');
        $cauhoi->noi_dung = $request->input('noi_dung');
        $cauhoi->phuong_an_a = $request->input('phuong_an_a');
        $cauhoi->phuong_an_b = $request->input('phuong_an_b');
        $cauhoi->phuong_an_c = $request->input('phuong_an_c');
        $cauhoi->phuong_an_d = $request->input('phuong_an_d');
        $cauhoi->dap_an = $request->input('dap_an');
        $cauhoi->save();
        return redirect()->route('cauhoi')->with('success','Cập nhật thành công!!');    }

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
        $cauhoi = CauHoi::find($id);
        $cauhoi->delete();
        return redirect()->route('cauhoi')->with('success','Xóa thành công!!');
    }
     public function forceDelete($id)
    {
        $cauhoi = CauHoi::onlyTrashed()->get()->find($id);
        $cauhoi->forceDelete();
        return redirect()->route('cauhoi.thungrac')->with('success','Xóa thành công!!');
    }
     public function restore($id)
    {
        $cauhoi = CauHoi::onlyTrashed()->get()->find($id);
        $cauhoi->restore();
        return redirect()->route('cauhoi.thungrac')->with('success','Khôi phục thành công!!');
    }
    public function onlyTrashed()
    {
        $dsCauHoi = CauHoi::onlyTrashed()->get();
        return view('cau-hoi-trashed',compact('dsCauHoi'));   
    }

}
