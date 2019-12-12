<?php

namespace App\Http\Controllers;
use App\Http\Requests\NguoiChoiRequest;
use Illuminate\Http\Request;
use App\NguoiChoi;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function store(NguoiChoiRequest $request)
    {
        $nguoichoi = new NguoiChoi; //khoi tao 1 nguoi choi moi
        $nguoichoi->ten_dang_nhap = $request->input('ten_dang_nhap');
        $nguoichoi->mat_khau = $request->input('mat_khau');
        $nguoichoi->email = $request->input('email');
        if( !$request->hasFile('hinh_dai_dien')) //neu co image thi luu lai ko thi thoi
            $nguoichoi->hinh_dai_dien = '';
        else
        {
            $avatar = $request->hinh_dai_dien;
            $nguoichoi->hinh_dai_dien = $avatar->getClientOriginalName(); //lay ten hinh
            $avatar->storeAs('assets/images/users',$avatar->getClientOriginalName()); //luu lại ở thư mục assets/images/users/
        }
        $nguoichoi->credit = '0';
        $nguoichoi->diem_cao_nhat = '0';
        $nguoichoi->save();
        alert()->success('', 'Thêm thành công !!');
        return redirect()->route('nguoichoi');
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
        $nguoichoi->delete(); //xóa
        alert()->success('', 'Xóa thành công!!');
        return redirect()->route('nguoichoi');
    }
    public function forceDelete($id)
    {
        $nguoichoi = NguoiChoi::onlyTrashed()->get()->find($id);
        $nguoichoi->forceDelete(); //xóa luôn
        alert()->success('', 'Xóa thành công!!');
        return redirect()->route('nguoichoi.thungrac');
    }
     public function restore($id)
    {
        $nguoichoi = NguoiChoi::onlyTrashed()->get()->find($id); //khôi phục lại
        $nguoichoi->restore();
        alert()->success('', 'Phục hồi thành công!!');
        return redirect()->route('nguoichoi.thungrac')->with('success','Khôi phục thành công!!');
    }
    public function onlyTrashed()
    {
        $dsNguoiChoi = NguoiChoi::onlyTrashed()->get(); //lấy danh sách các người chơi bị xóa
        return view('nguoi-choi-trashed',compact('dsNguoiChoi'));   
    }
}
