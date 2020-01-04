<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhApp;
use App\CauHinhDiemCauHoi;
use App\CauHinhTroGiup;
use App\Http\Requests\CauHinhAppRequest;
use App\Http\Requests\CauHinhDiemCauHoiRequest;
use App\Http\Requests\CauHinhTroGiupRequest;

class CauHinhController extends Controller
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
    public function CauHinhApp()
    {
        $dsCauHinhApp = CauHinhApp::find("1");
        return view('cau-hinh-app',compact('dsCauHinhApp'));
    }

    public function CauHinhDiemCauHoi()
    {
        $dsCauHinh = CauHinhDiemCauHoi::all();
        return view('cau-hinh-diem-cau-hoi',compact('dsCauHinh'));
    }

    public function CauHinhTroGiup() 
    {
        $dsCauHinh = CauHinhTroGiup::all();
        return view('cau-hinh-tro-giup',compact('dsCauHinh'));
    }
    public function showCauHinhTroGiup($id)
    {
        $dsCauHinh = CauHinhTroGiup::all();
        $CauHinh = CauHinhTroGiup::find($id);
        return view('cau-hinh-tro-giup',compact('dsCauHinh','CauHinh'));
    }
    public function showCauHinhDiemCauHoi($id)
    {
        $dsCauHinh = CauHinhDiemCauHoi::all();
        $CauHinh = CauHinhDiemCauHoi::find($id);
        return view('cau-hinh-diem-cau-hoi',compact('dsCauHinh','CauHinh'));
    }

    public function editCauHinhApp(CauHinhAppRequest $request)
    {
        $CauHinhApp = CauHinhApp::find("1");
        $CauHinhApp->co_hoi_sai = $request->input('co_hoi_sai');
        $CauHinhApp->thoi_gian_tra_loi = $request->input('thoi_gian_tra_loi');
        $CauHinhApp->save();
        alert()->success('','Cập nhật thành công !!'); 
        return redirect()->route('cauhinh.app');
    }

    public function editCauHinhDiemCauHoi(CauHinhDiemCauHoiRequest $request,$id)
    {
        $CauHinhDiem = CauHinhDiemCauHoi::find($id);
        $CauHinhDiem->thu_tu = $request->input('thu_tu');
        $CauHinhDiem->diem = $request->input('diem');
        $CauHinhDiem->save();
        alert()->success('','Cập nhật thành công !!'); 
        return redirect()->route('cauhinh.diem');
    }

    public function editCauHinhTroGiup(CauHinhTroGiupRequest $request,$id)
    {
        $CauHinhTroGiup = CauHinhTroGiup::find($id);
        $CauHinhTroGiup->loai_tro_giup = $request->input('loai_tro_giup');
        $CauHinhTroGiup->thu_tu = $request->input('thu_tu');
        $CauHinhTroGiup->credit = $request->input('credit');
        $CauHinhTroGiup->save();
        alert()->success('','Cập nhật thành công !!'); 
        return redirect()->route('cauhinh.trogiup');
    }

    public function deleteCauHinhDiemCauHoi($id)
    {
        if( $sl = CauHinhDiemCauHoi::all()->count() == 1 )
        {
            alert()->error('Xóa thất bại','Nếu xóa cấu hình này sẽ gây ra lỗi ở App ');
            return redirect()->route('cauhinh.diem');            
        }
        $CauHinhDiem = CauHinhDiemCauHoi::find($id); 
        $CauHinhDiem->delete();
         alert()->success('','Xóa thành công !!'); 
        return redirect()->route('cauhinh.diem');
    }

    public function deleteCauHinhTroGiup($id)
    {
        
        if( $sl = CauHinhTroGiup::all()->count() == 1 )
        {
            alert()->error('Xóa thất bại','Nếu xóa cấu hình này sẽ gây ra lỗi ở App ');
            return redirect()->route('cauhinh.trogiup');            
        }
        $CauHinhTroGiup = CauHinhTroGiup::find($id); 
        $CauHinhTroGiup->delete();
         alert()->success('','Xóa thành công !!'); 
        return redirect()->route('cauhinh.trogiup');
    }

    public function storeCauHinhDiemCauHoi(CauHinhDiemCauHoiRequest $request)
    {
        $CauHinhDiem = new CauHinhDiemCauHoi;
        $CauHinhDiem->thu_tu = $request->input('thu_tu');
        $CauHinhDiem->diem = $request->input('diem');
        $CauHinhDiem->save();
        alert()->success('','Thêm thành công !!'); 
        return redirect()->route('cauhinh.diem');
    }
    public function storeCauHinhTroGiup(CauHinhTroGiupRequest $request)
    {
        $CauHinhTroGiup = new CauHinhTroGiup;
        $CauHinhTroGiup->loai_tro_giup = $request->input('loai_tro_giup');
        $CauHinhTroGiup->thu_tu = $request->input('thu_tu');
        $CauHinhTroGiup->credit = $request->input('credit');
        $CauHinhTroGiup->save();
        alert()->success('','Thêm thành công !!'); 
        return redirect()->route('cauhinh.trogiup');
    }

}
