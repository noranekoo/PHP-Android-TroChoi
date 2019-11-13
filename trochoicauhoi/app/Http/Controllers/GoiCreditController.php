<?php

namespace App\Http\Controllers;

use App\Http\Requests\GoiCreditRequest;
use App\GoiCredit;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class GoiCreditController extends Controller
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
        $dsGoiCredit = GoiCredit::all();
        return view('ds-goi-credit',compact('dsGoiCredit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoiCreditRequest $request)
    {
        $goicredit = new GoiCredit;
        $goicredit->ten_goi_credit = $request->input('ten_goi_credit');
        $goicredit->credit = $request->input('credit');
        $goicredit->so_tien = $request->input('so_tien');
        $goicredit->save();
        alert()->success('','Thêm thành công !!');
        return redirect()->route('goicredit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsGoiCredit2 = GoiCredit::find($id);
        $dsGoiCredit = GoiCredit::all();
        return view('ds-goi-credit',compact('dsGoiCredit','dsGoiCredit2'));
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
        $goicredit = goicredit::find($id);
        $goicredit->ten_goi_credit = $request->input('ten_goi_credit');
        $goicredit->credit = $request->input('credit');
        $goicredit->so_tien = $request->input('so_tien');
        $goicredit->save();
        alert()->success('','Cập nhật thành công !!');
        return redirect()->route('goicredit');
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
        $goicredit = GoiCredit::find($id);
        $goicredit->delete();
        alert()->success('','Xóa thành công !!');
        return redirect()->route('goicredit');
    }
    public function forceDelete($id)
    {
        $goicredit = GoiCredit::onlyTrashed()->get()->find($id);
        $goicredit->forceDelete();
        alert()->success('','Xóa thành công !!');
        return redirect()->route('goicredit.thungrac');
    }
     public function restore($id)
    {
        $goicredit = GoiCredit::onlyTrashed()->get()->find($id);
        $goicredit->restore();
        alert()->success('','Phục hồi thành công !!');
        return redirect()->route('goicredit.thungrac');
    }
    public function onlyTrashed()
    {
        $dsGoiCredit= GoiCredit::onlyTrashed()->get();
        return view('goi-credit-trashed',compact('dsGoiCredit'));   
    }
}
