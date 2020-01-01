<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CauHoi;
class CauHoiController extends Controller
{
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
            $dsCauHoi = CauHoi::where('linh_vuc_id',$lvID)->get();
            $result = ['success'=>true,'data'=>$dsCauHoi];
            return response()->json($result);
        }
        return response()->json(['success'=>false, 'message'=>'Token is required']);
    }
}
