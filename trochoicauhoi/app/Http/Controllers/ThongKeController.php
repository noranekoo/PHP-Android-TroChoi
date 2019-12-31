<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichSuMuaCredit;
use Carbon\Carbon;
use App\NguoiChoi;
class ThongKeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $date = Carbon::now()->toDateString();
       $presentMonth = Carbon::now()->month;
        if ( ($presentMonth - 1)< 0)
            $lastMonth =  12;
        else  
            $lastMonth = $presentMonth -1;
       $thanghientai = \DB::table('lich_su_mua_credit')->whereMonth('created_at',$presentMonth)->sum('so_tien');
       $thangtruoc = \DB::table('lich_su_mua_credit')->whereMonth('created_at',$lastMonth)->sum('so_tien');
       $top20credit = NguoiChoi::orderBy('credit','desc')->paginate(20);

       $usermoi = \DB::table('nguoi_choi')->whereDate('created_at',$date)->count();
       $goicreditbanra = \DB::table('lich_su_mua_credit')->whereDate('created_at',$date)->count();
       $thunhaptrongngay = \DB::table('nguoi_choi')->whereDate('created_at',$date)->count();
        return view('dashboard',compact('thanghientai','thangtruoc','top20credit','usermoi','goicreditbanra','thunhaptrongngay'));
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
}
