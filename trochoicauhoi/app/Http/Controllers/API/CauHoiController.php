<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CauHoi;
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
        if(auth('api')->check())
        {
            $dsCauHoi = CauHoi::find($id);
            $result = ['success'=>true,'data'=>$dsCauHoi];
            return response()->json($result);
        }
        
        return response()->json(['success'=>false, 'message'=>'Token is required']);
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
        
    }

    public function layDSCauHoi()
    {
        if(auth('api')->check())
        {
            $dsCauHoi = CauHoi::all();
            $result = ['success'=>true,'data'=>$dsCauHoi];
            return response()->json($result);
        }
        return response()->json(['success'=>false, 'message'=>'Token is required']);
    }

    public function layDSCauHoiTheoLV(Request $id)
    {
        if(auth('api')->check())
        {
            $lvID = $id->id;
            $dsCauHoi = CauHoi::where('linh_vuc_id',$lvID)->get()->random(6);
            $result = ['success'=>true,'data'=>$dsCauHoi];
            return response()->json($result);
        }
        return response()->json(['success'=>false, 'message'=>'Token is required']);
    }
}
