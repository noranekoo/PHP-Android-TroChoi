<?php

namespace App\Http\Controllers;

use App\CauHoi;
use App\Http\Requests\CauHoiRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        alert()->success('', 'Thêm câu hỏi thành công !!');
        return redirect()->route('cauhoi');
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
    public function update(Request $request, $id)
    {

        $cauhoi = CauHoi::find($id);
        $cauhoi->noi_dung = $request->input('noi_dung');
        $cauhoi->phuong_an_a = $request->input('phuong_an_a');
        $cauhoi->phuong_an_b = $request->input('phuong_an_b');
        $cauhoi->phuong_an_c = $request->input('phuong_an_c');
        $cauhoi->phuong_an_d = $request->input('phuong_an_d');
        $cauhoi->dap_an = $request->input('dap_an');
        $cauhoi->save();
        alert()->success('', 'Cập nhật câu hỏi thành công !!');
        return redirect()->route('cauhoi'); 
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
        $cauhoi = CauHoi::find($id);
        $cauhoi->delete();
        alert()->success('', 'Xóa thành công !!');
        return redirect()->route('cauhoi')->with('success','Xóa thành công!!');
    }
     public function forceDelete($id)
    {
        $cauhoi = CauHoi::onlyTrashed()->get()->find($id);
        $cauhoi->forceDelete();
        alert()->success('', 'Xóa thành công !!');
        return redirect()->route('cauhoi.thungrac');
    }
     public function restore($id)
    {
        $cauhoi = CauHoi::onlyTrashed()->get()->find($id);
        $cauhoi->restore();
        alert()->success('', 'Phục hồi thành công !!');
        return redirect()->route('cauhoi.thungrac');
    }
    public function onlyTrashed()
    {
        $dsCauHoi = CauHoi::onlyTrashed()->get();
        return view('cau-hoi-trashed',compact('dsCauHoi'));   
    }

}
